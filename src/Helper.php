<?php

namespace src;

class Helper
{

    public static function truncateText($text, $length = 2000)
    {
        // Обрезаем текст до заданной длины
        $truncatedText = mb_substr($text, 0, $length);
        // Удаляем последнее слово, чтобы избежать обрыва слова
        $truncatedText = preg_replace('/\s+?(\S+)?$/', '', $truncatedText);
        return $truncatedText;
    }

    public static function renameKeys($array, $renameArray)
    {
        $result = [];
        foreach ($array as $key=>$value){
            if (isset($renameArray[$key])){
                $result[$renameArray[$key]] = $value;
            }
        }
        return $result;
    }

    public static function processJobData($ad, $newArray)
    {
        $flattenedArray = Helper::flattenArrayNew($ad);

        if (isset($flattenedArray['description'])){
            $flattenedArray['description'] = Helper::truncateText(strip_tags(str_ireplace("\n", '', $flattenedArray['description'])));
        }

        if (isset($flattenedArray['published date'])){
            $dateTime = new \DateTime($flattenedArray['published date']);
            $formattedDate = $dateTime->format("d F Y, H:i:s");
            $flattenedArray['published date'] = $formattedDate;
        }

        if (isset($flattenedArray['last application date'])){
            $dateTime = new \DateTime($flattenedArray['last application date']);
            $formattedDate = $dateTime->format("d F Y, H:i:s");
            $flattenedArray['last application date'] = $formattedDate;
        }

        if (isset($flattenedArray['expiration date'])){
            $dateTime = new \DateTime($flattenedArray['expiration date']);
            $formattedDate = $dateTime->format("d F Y, H:i:s");
            $flattenedArray['expiration date'] = $formattedDate;
        }

        $rename = Helper::renameKeys($flattenedArray, $newArray);

        $str = '';
        foreach ($rename as $key => $item) {
            $str .= '<b>' . $key . '</b>' . ':^' . $item . "\n";
        }
        return $str;
    }

    public static function flattenArrayNew($array, $prefix = '') {
        $result = [];
        foreach ($array as $key => $value) {
            $snakeKey = $prefix . strtolower(preg_replace('/(?<!^)[A-Z]/', '_$0', $key));
            $snakeKeyWithSpaces = str_replace('_', ' ', $snakeKey);

            if (is_array($value)) {
                $result = array_merge($result, self::flattenArrayNew($value, $snakeKey . '_'));
            } elseif (!empty($value) || $value === 0 || $value === '0') {
                $decodedValue = is_string($value) ? html_entity_decode($value) : $value;
                $formattedValue = is_string($decodedValue) ? strip_tags($decodedValue) : $decodedValue;
                $formattedValue = str_replace(["\r", "\n", "\t","    "], ' ', $formattedValue);
                $result[$snakeKeyWithSpaces] = $formattedValue;
            }
        }
        return $result;
    }


    public static function debug($data)
    {
        file_put_contents(__DIR__ . '/classDebug.txt', var_export($data, 1)."\n\r",FILE_APPEND);
    }

    public static function specialistDataTranslate($arr, $occupation_id, $translete)
    {

        $str = '';
        foreach ($arr as $value) {
            if ($value['id'] === $occupation_id) {
                foreach ($value['items'] as $item) {
                    $str .= $item['name'] . '////' . $item['id'] . "\r\n";
                }
            }
        }

        $strTranslate = $translete->translate($str);

        $arrTranslate = explode("\r\n", $strTranslate);
        $arr = [];
        foreach ($arrTranslate as $value) {
            $value = strip_tags($value);
            $value = explode("////", $value);
            if (isset($value[0]) && isset($value[1])) {
                $arr[] = [
                    'name' => $value[0],
                    'id' => $value[1]
                ];
            }
        }
        return $arr;
    }

    public static function getFlag($language){
        $flag_unicode = '';
        if ($language == 'uk') {
            $flag_unicode = "🇺🇦";
        } elseif ($language == 'ru') {
            $flag_unicode = "🇷🇺";
        } else {
            $flag_unicode = "🇬🇧";
        }
        return $flag_unicode;
    }

    public static function occupationDataTranslate($array, $translete)
    {
        // Проверяем наличие элементов в массиве
        if (empty($array)) {
            return [];
        }
        $str = '';
        foreach ($array as $key => $value) {
            // Проверяем наличие ожидаемых ключей в массиве
            if (isset($value['name'], $value['id'])) {
                $str .= $value['name'] . '////' . $value['id'] . "\r\n";
            }
        }
        // Переводим строку
        $transStr = $translete->translate($str);
        $transStr = explode("\r\n", $transStr);

        $res = [];
        foreach ($transStr as $value) {
            $value = strip_tags($value);
            // Разбиваем строку на части по символу '&&'
            $parts = explode("////", $value);

            // Проверяем, что массив содержит обе части (name и id)
            if (isset($parts[0], $parts[1])) {
                $res[] = [
                    'name' => $parts[0],
                    'id' => $parts[1]
                ];
            }
        }
        return $res;
    }

    public static function translateData($data, $translate,$language,$translateKeys = false)
    {
        $str = '';
        $res = [];

        if ($translateKeys){
            foreach ($data as $value) {
                if ($value['id'] === $translateKeys) {
                    foreach ($value['items'] as $item) {
                        $str .= $item['name'] . '////' . $item['id'] . "\r\n";
                    }
                }
            }
        }else{
            foreach ($data as $value) {
                if (isset($value['name'], $value['id'])) {
                    $str .= $value['name'] . '////' . $value['id'] . "\r\n";
                }
            }
        }

        // Переводим строку
        $transStr = $translate->translate($str,$language);
        $transStr = explode("\r\n", $transStr);

        foreach ($transStr as $value) {
            $value = strip_tags($value);
            // Разбиваем строку на части по символу '////'
            $parts = explode("////", $value);

            // Проверяем, что массив содержит обе части (name и id)
            if (isset($parts[0], $parts[1])) {
                $res[] = [
                    'name' => $parts[0],
                    'id' => $parts[1]
                ];
            }
        }
        return $res;
    }

    public static function arrayToString($array) {
        $pairs = [];
        foreach ($array as $key => $value) {
            if (is_array($value)) {
                // Если значение является массивом, преобразуем его в строку ключ=значение
                foreach ($value as $subKey => $subValue) {
                    if (isset($key, $subKey, $subValue)) {
                        $pairs[] = urlencode($key . '[' . $subKey . ']') . '=' . urlencode($subValue);
                    }
                }
            } else {
                // Если значение не является массивом, просто добавляем его в виде ключа=значение
                if (isset($key, $value)) {
                    $pairs[] = urlencode($key) . '=' . urlencode($value);
                }
            }
        }
        // Собираем все пары ключ=значение в одну строку, разделенную символом "&"
        return implode('&', $pairs);
    }

    public static function stringToArray($string) {
        if (!is_string($string)) {
            // Обработка ошибки, например, можно вернуть пустой массив
            return [];
        }
        $array = [];
        $pairs = explode('&', $string);
        foreach ($pairs as $pair) {
            list($key, $value) = explode('=', $pair, 2);
            // Если ключ содержит квадратные скобки, это значит, что это вложенный массив
            if (strpos($key, '[') !== false && strpos($key, ']') !== false) {
                // Разбиваем ключ на название и индекс массива
                preg_match('/(\w+)\[(\w+)\]/', $key, $matches);
                // Если массив для этого ключа ещё не существует, создаем его
                if (!isset($array[$matches[1]])) {
                    $array[$matches[1]] = [];
                }
                // Добавляем значение во вложенный массив по указанному индексу
                $array[$matches[1]][$matches[2]] = urldecode($value);
            } else {
                // Иначе, просто добавляем ключ и значение в массив
                $array[$key] = urldecode($value);
            }
        }
        return $array;
    }
}