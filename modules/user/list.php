<?php include "views/header.php"; ?>

<h2>Daftar User</h2>
<table border="1">
    <tr>
        <th>ID</th><th>Nama</th><th>Email</th>
    </tr>

    <?php while($row = mysqli_fetch_assoc($query)) : ?>
        <tr>
            <td><?= $row['id']; ?></td>
            <td><?= $row['nama']; ?></td>
            <td><?= $row['email']; ?></td>
        </tr>
    <?php endwhile; ?>
</table>

<?php include "views/footer.php"; ?>