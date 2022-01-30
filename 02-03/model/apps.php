<?php
function getApps(): array {
    $lines = file('db/apps.txt');
    $apps = [];
    foreach ($lines as $line) {
        $apps[] = appStrToArr($line);
    }
    
    return $apps;
}

function appStrToArr (string $str): array {
    $str = rtrim($str);
    $parts = explode(';', $str);
    return ['dt' => $parts[0], 'name' => $parts[1], 'phone' => $parts[2]];
}

function addApp(string $name, string $phone): bool {
    $dt = date('Y-m-d H:i:s');
    $app = "$dt; $name; $phone\n";
    file_put_contents('db/apps.txt', $app, FILE_APPEND);

    return true;
}
