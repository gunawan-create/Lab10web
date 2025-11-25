<?php
require "config/app.php";
require "config/database.php";
?>

<link rel="stylesheet" href="assets/css/style.css">

<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

switch($page){
    case 'home':
        include "views/home.php";
        break;

    case 'user/list':
        require "modules/user.php";
        user_list();
        break;
}
?>
