<?php
require "config.php";
if(isset($_GET['id'])){
    $query = mysqli_query($db, "SELECT * FROM member WHERE id=$_GET[id]");
    $result = mysqli_fetch_array($query);
    $nama = $result['nama'];
    $email = $result['email'];
    $nohp = $result['no_telp'];
    $game = $result['game'];
    $ket = $result['ket_joki'];
}

if(isset($_POST['submit'])){
    $query = mysqli_query($db, "UPDATE member SET nama='$_POST[nama]', email ='$_POST[email]', no_telp ='$_POST[nomor_hp]', game ='$_POST[nama_game]' WHERE id='$_GET[id]'");
    if($query){
        header("Location: tampil.php");
    } else {
        echo "Update Gagal";
    }
}

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Joki</title>
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>
<div class="containerform black-back">  
  <form id="daftar" action="" method="post" enctype="multipart/form-data">
    <h3>Form Pendaftaran Joki</h3>
    <fieldset>
      <input placeholder="Nama" type="text" tabindex="1" name="nama" value='<?=$nama ?>' required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Email" type="email" tabindex="2" name="email" value='<?=$email ?>' required>
    </fieldset>
    <fieldset>
      <input placeholder="Nomor Telepon" type="tel" name="nomor_hp" value='<?=$nohp ?>' tabindex="3" required>
    </fieldset>
    <fieldset>
      <input placeholder="Masukkan Nama Game" type="text" name="nama_game" value='<?=$game ?>' tabindex="4" required>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="daftar-submit" data-submit="...Sending">Submit</button>
    </fieldset>
  </form>
</div>
<footer class="footer">&copy; Copyright 2022 Omori Project - by Andi</footer>
</body>

</html>