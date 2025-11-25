<?php
// modules/auth/login.php
require_once __DIR__ . '/../../config/database.php';
if (session_status() === PHP_SESSION_NONE) session_start();

$err = '';

if (!empty($_SESSION['user'])) {
    header('Location: /index.php?page=dashboard');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    if ($username === '' || $password === '') {
        $err = 'Masukkan username dan password.';
    } else {
        $u = mysqli_real_escape_string($conn, $username);
        $res = mysqli_query($conn, "SELECT id, username, password, fullname FROM users WHERE username = '$u' LIMIT 1");
        if ($res && mysqli_num_rows($res) > 0) {
            $row = mysqli_fetch_assoc($res);
            if (password_verify($password, $row['password'])) {
                // login sukses
                $_SESSION['user'] = [
                    'id' => $row['id'],
                    'username' => $row['username'],
                    'fullname' => $row['fullname']
                ];
                header('Location: /index.php?page=dashboard');
                exit;
            } else {
                $err = 'Password salah.';
            }
        } else {
            $err = 'User tidak ditemukan.';
        }
    }
}
?>
<h2>Login</h2>

<?php if ($err): ?>
    <div class="err"><?php echo htmlspecialchars($err); ?></div>
<?php endif; ?>

<form method="post">
    <label>Username<br><input type="text" name="username" required></label><br>
    <label>Password<br><input type="password" name="password" required></label><br>
    <button type="submit">Login</button>
</form>
