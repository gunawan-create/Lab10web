<?php

function user_list() {
    include "config/database.php";
    global $conn;

    $query = mysqli_query($conn, "SELECT * FROM users");

    include "views/user/list.php";
}