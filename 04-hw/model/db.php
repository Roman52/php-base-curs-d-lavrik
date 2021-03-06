<?php
function dbInstance(): PDO {
    static $db;

    if ($db === null) {
        $db = new PDO('mysql:host=localhost;dbname=blog1', 'root', '', [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);

        $db->exec('SET NAMES UTF8');
    }

    return $db;
}

function dbQuery(string $sql, array $params = []): PDOStatement {
    $db = dbInstance();
    $query = $db->prepare($sql);
    $query->execute($params);
    //не понимаю как делать редирект на статью поле добавления, нагуглил что id последней добавленной статьи возвращает метод $pdo->lastInsertId(), но он возвращает 0. А если распечатать $db - то это пустой объект. - Ответ - нужно было это делать в функции addArticle. Нужно еще раз приконектиться к базе (получить instance базы) и заюзать метод lastIntertId()

    return $query;
}

function dbCheckError(PDOStatement $query):bool {
    $errInfo = $query->errorInfo();

    if ($errInfo[0] !== PDO::ERR_NONE) {
        echo $errInfo[2];
        exit();
    }

    return true;
}