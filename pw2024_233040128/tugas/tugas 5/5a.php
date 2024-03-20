<?php  

$mahasiswa = [
[
    'gambar' => '1 t.jpeg',
    'nrp' => '233040100',
    'nama' => 'marcelino f',
    'email' => 'fmarcell@gmail.com',
    'jurusan' => 'Teknik Informatika'
],
[
    'gambar' => '2 t.jpeg',
    'nrp' => '233040101',
    'nama' => 'marc klok',
    'email' => 'mklok@gmail.com',
    'jurusan' => 'Teknik Informatika'
],
[
    'gambar' => '3 t.jpeg',
    'nrp' => '233040102',
    'nama' => 'asnawi mangkualam',
    'email' => 'asnawi@gmail.com',
    'jurusan' => 'Teknik Informatika'
],
[
    'gambar' => '4 t.jpeg',
    'nrp' => '233040103',
    'nama' => 'justin hubner',
    'email' => 'hubner@gmail.com',
    'jurusan' => 'Teknik Informatika'
],
[
    'gambar' => '5 t.jpeg',
    'nrp' => '233040104',
    'nama' => 'yakob sayuri',
    'email' => 'sayuri@gmail.com',
    'jurusan' => 'Teknik Informatika'
],
[
    'gambar' => '6 t.jpeg',
    'nrp' => '233040105',
    'nama' => 'Nadeo',
    'email' => 'nadeo@gmail.com',
    'jurusan' => 'Teknik Informatika'
],
[
    'gambar' => '7 t.jpeg',
    'nrp' => '233040106',
    'nama' => 'pratama arhan',
    'email' => 'p_arhan@gmail.com',
    'jurusan' => 'Teknik Informatika'
],
[
    'gambar' => '8 t.jpeg',
    'nrp' => '233040107',
    'nama' => 'arkhan kaka',
    'email' => 'kaka@gmail.com',
    'jurusan' => 'Teknik Informatika'
],
[
    'gambar' => '9 t.jpeg',
    'nrp' => '233040108',
    'nama' => 'sandywalsh',
    'email' => 'sandy@gmail.com',
    'jurusan' => 'Teknik Informatika'
],
[
    'gambar' => 'mesiiiii.jpeg',
    'nrp' => '233040109',
    'nama' => 'lionel messiii',
    'email' => 'messi@gmail.com',
    'jurusan' => 'Teknik Informatika'
],

];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 5a</title>
</head>
<body>
<h2>Daftar Mahasiswa</h2>
    <?php foreach($mahasiswa as $m) { ?>
    <ul>
        <li>
            <img src="img/<?= $m['gambar']; ?>" width = 200px >
        </li>
        <li>NRP : <?= $m['nrp']; ?></li>
        <li>Nama : <?= $m['nama']; ?></li>
        <li>Email : <?= $m['email']; ?></li>
        <li>Jurusan : <?= $m['jurusan']; ?></li>
        </li>
    </ul>
    <?php } ?>
</body>
</html>