<?php 

$mahasiswa = [
    [
        "nama" => "Muh Firman",
        "nrp" => "22304009",
        "email" => "muhfirm@gmail.com",
        "semester" => "5",
        "gambar" => "foto1.jpg"
    ],
    [
        "nama" => "Hafiz Gustika P",
        "nrp" => "203040098",
        "email" => "hfzGp@gmail.com",
        "semester" => "8",
        "gambar" => "foto2.jpg"
    ],
    [
        "nama" => "Hilal Syahbana",
        "nrp" => "213040013",
        "email" => "hilalsybn@gmail.com",
        "semester" => "6",
        "gambar" => "foto3.jpg"
    ],
    [
        "nama" => "Muh Iqbal",
        "nrp" => "223040087",
        "email" => "mIqbalz@gmail.com",
        "semester" => "5",
        "gambar" => "foto4.jpg"
    ],
    [
        "nama" => "Fikri Habibul W",
        "nrp" => "233030066",
        "email" => "fikriHw@gmail.com",
        "semester" => "4",
        "gambar" => "foto5.jpg"
    ],
    [
        "nama" => "Kaila K",
        "nrp" => "223040043",
        "email" => "keiikeii@gmail.com",
        "semester" => "2",
        "gambar" => "foto6.jpg"
    ],
    [
        "nama" => "Wulandari S",
        "nrp" => "243050089",
        "email" => "laann34@gmail.com",
        "semester" => "2",
        "gambar" => "foto7.jpg"
    ],
    [
        "nama" => "Lindaa A",
        "nrp" => "223040098",
        "email" => "linda4@gmail.com",
        "semester" => "2",
        "gambar" => "foto8.jpg"
    ],
    [
        "nama" => "Titaa s",
        "nrp" => "243030021",
        "email" => "titas@gmail.com",
        "semester" => "2",
        "gambar" => "foto9.jpg"
    ],
    [
        "nama" => "Cey Vici S",
        "nrp" => "243040063",
        "email" => "ciciw@gmail.com",
        "semester" => "2",
        "gambar" => "foto10.jpg"
    ]
]

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<h1>Mahasiswa Teknik Informatika Unpas</h1>
<body>
  <?php foreach( $mahasiswa as $mahasiswa ) :?>
        
    <ul>
    <li>
        <img src="img/<?= $mahasiswa["gambar"]; ?>">
    </li>
        <li>Nama : <?= $mahasiswa["nama"]; ?></li>
        <li>NRP : <?= $mahasiswa["nrp"]; ?></li>
        <li>Email : <?= $mahasiswa["email"]; ?></li>
        <li>Semester : <?= $mahasiswa["semester"]; ?></li>
    
  </ul>

    <?php endforeach; ?>
    
</body>
</html>