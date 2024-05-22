<?php


function connection()
{
    return new PDO("mysql:host=localhost;dbname=appmvc", "root", "");
}


function allUsers()
{
    $sql = "SELECT * FROM users";
    $stmt = connection()->query($sql);
    $users = $stmt->fetchAll(PDO::FETCH_OBJ);
    return $users;
}

function storeUser()
{
    $data = [
        $_POST['fname'],
        $_POST['lname'],
        $_POST['city'],
        $_POST['age']
    ];
    $sql = "INSERT INTO users VALUES(null,?,?,?,?)";
    $stmt = connection()->prepare($sql);
    return $stmt->execute($data);
}

function editUser($id)
{
    return  connection()->query("select * from users where id = $id")->fetch(PDO::FETCH_OBJ);
}

function updateUser($id)
{
    $data = [
        $_POST['fname'],
        $_POST['lname'],
        $_POST['city'],
        $_POST['age'],
        $_POST['id']
    ];
    $sql = "update users set fname=?,lname=?,city=?,age=? where id = ?";
    $stmt = connection()->prepare($sql);
    return $stmt->execute($data);
}

function deleteUser($id)
{
    $sql = "delete from users where id = ?";
    $stmt = connection()->prepare($sql);
    return $stmt->execute([$id]);
}
