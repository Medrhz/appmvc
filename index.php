<?php
require "./controller/UserController.php";


if (isset($_GET['action'])) {
    $action  = $_GET['action'];
    switch ($action) {
        case 'list':
            homeAction();
            break;
        case 'create':
            createAction();
            break;
        case 'edit':
            editAction();
            break;
        case 'delete':
            destroyAction();
            break;
        case 'store':
            storeAction();
            break;
        case 'update':
            updateAction();
            break;
    }
} else {
    homeAction();
}
