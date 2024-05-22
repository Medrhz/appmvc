<?php

include "./model/UserModel.php";
function homeAction()
{
    $users = allUsers();
    require "./view/listUsersView.php";
}

function createAction()
{
    require "./view/createView.php";
}

function storeAction()
{
    $isCreated =  storeUser();
    if ($isCreated) {
        header("location:index.php");
    } else {
        echo "error";
    }
}

function editAction()
{
    $user = editUser($_GET['id']);
    require "./view/editView.php";
}

function updateAction()
{
    $IsUpdate = updateUser($_POST['id']);
    if ($IsUpdate) {
        header("location:index.php");
    } else {
        echo "error";
    }
}

function destroyAction()
{

    $isDelete = deleteUser($_GET['id']);
    if ($isDelete) {
        header("location:index.php");
    } else {
        echo "error";
    }
}
