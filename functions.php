<?php

function dd($data)
{
    echo '<pre>';
    print_r($data);
    echo '</pre>';
    die();
}

function redirect($url)
{
    header("Location: $url");
    die();
}

function dbConnect()
{
    try {
        return new PDO(
            'mysql:host=localhost;dbname=laravel',
            'root',
            '',
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING]
        );
    } catch (PDOException $e) {
        die('DB connecting fail ' . $e->getMessage());
    }
}

function selectAll($table)
{
    $pdo = dbConnect();
    $stmt = $pdo->prepare("select * from $table");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_OBJ);
}

function find($table, $id)
{
    $pdo = dbConnect();
    $stmt = $pdo->prepare("select * from $table where id=?");
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_OBJ);
}

function create($table, $data)
{
    $pdo = dbConnect();
    $stmt = $pdo->prepare(
        "insert into $table (name, email, password) values (?, ?, ?);"
    );
    return $stmt->execute($data);
}

function update($table, $data, $id)
{
    $pdo = dbConnect();
    $stmt = $pdo->prepare(
        "update $table set name=?, email=? where id=?"
    );
    return $stmt->execute($data);
}

function delete($table, $id)
{
    $pdo = dbConnect();
    $stmt = $pdo->prepare("delete from $table where id=?");
    return $stmt->execute([$id]);
}