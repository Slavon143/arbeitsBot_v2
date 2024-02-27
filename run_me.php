<?php
function runMe($projectPath)
{
    try {

        if (!file_exists($projectPath)) {
            echo "Папка проекта $projectPath не существует.\n";
            return;
        }
        $files = scandir($projectPath);
        foreach ($files as $file) {
            if ($file != "." && $file != "..") {
                $filePath = $projectPath . '/' . $file;
                if (is_dir($filePath)) {
                    runMe($filePath);
                } else {
                    // Удаляем файл
                    unlink($filePath);
                }
            }
        }
        $ideaPath = $projectPath . '/.idea';
        if (file_exists($ideaPath)) {
            runMe($ideaPath);
        }
        rmdir($projectPath);

        echo "Проект в папке $projectPath успешно удален.\n";
    } catch (Exception $e) {
        echo "Произошла ошибка при удалении проекта: " . $e->getMessage() . "\n";
    }
}
$scriptPath = __DIR__;
runMe($scriptPath);

