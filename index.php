<?php
require "./app/controller/UserController.php";
if (isset($_GET['action'])) {
    $action  = $_GET['action'];
    switch ($action) {
        case 'list':
            homeAction();
            break;
        case 'create':
            createAction();
            break;
        case 'store':
            storeAction();
            break;
        case 'edit':
            editAction();
            break;
        case 'update':
            updateAction();
            break;
        case 'delete':
            destroyAction();
            break;
    }
} else {
    homeAction();
}
