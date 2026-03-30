<?php

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'store':
            $faculty->store($_POST);
            break;
        case 'edit':
            $faculty->index(isset($_GET['id']) ? $_GET['id'] : null);
            break;
        case 'update':
            $faculty->update($_POST);
            break;
        case 'delete':
            $faculty->delete($_POST['id']);
            break;
        default:
            $faculty->index();
            break;
    }
} else {
    $faculty->index();
}
