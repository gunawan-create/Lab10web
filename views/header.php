<?php
// views/header.php
if (session_status() === PHP_SESSION_NONE) session_start();
?>
<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Mini Project</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="/assets/css/style.css">
    <script src="/assets/js/app.js" defer></script>
</head>
<body>
<div class="container">
    <header class="site-header">
        <h1>Mini Project - Demo</h1>
        <p class="sub">Sistem sederhana CRUD & Auth</p>
    </header>

    <nav class="main-nav">
        <?php if (!empty($_SESSION['user'])): ?>
            <a href="/index.php?page=dashboard">Dashboard</a>
            <a href="/index.php?page=user/list">User List</a>
            <a href="/index.php?page=user/add">Tambah User</a>
            <a href="/index.php?page=auth/logout" class="danger">Logout (<?php echo htmlspecialchars($_SESSION['user']['username']); ?>)</a>
        <?php else: ?>
            <a href="/index.php?page=auth/login">Login</a>
        <?php endif; ?>
    </nav>

    <main class="content">
