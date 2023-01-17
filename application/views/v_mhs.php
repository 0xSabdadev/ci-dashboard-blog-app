<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view('_partials/head.php'); ?>
</head>
<body>
    <?php $this->load->view('_partials/navbar.php'); ?>
    <table>
        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th>
        </tr>

        <?php foreach ($mahasiswa as $mhs): ?>
            <tr>
                <td><?php echo $mhs['nama'] ?></td>
                <td><?php echo $mhs['nim'] ?></td>
                <td><?php echo $mhs['jurusan'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <?php $this->load->view('_partials/footer.php'); ?>
</body>
</html>