<?php
// Konfigurasi dasar aplikasi

// Base URL aplikasi (sesuaikan dengan folder kamu)
$base_url = "http://localhost/lab9_php_modular/";

// Nama aplikasi
$app_name = "Modular PHP App";

// Timezone
date_default_timezone_set("Asia/Jakarta");

// Fungsi helper untuk membuat URL
function url($path = "") {
    global $base_url;
    return $base_url . $path;
}