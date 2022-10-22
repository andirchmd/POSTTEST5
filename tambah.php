<?php
require "config.php";

if(isset($_POST['submit'])){
  $nama = $_POST['nama'];
  $email = $_POST['email'];
  $nohp = $_POST['nomor_hp'];
  $game = $_POST['nama_game'];
  $ket = $_POST['keterangan'];

  // files
  $file_game = $_FILES['file_game']['name'];
  $x = explode('.',$file_game);
  $ekstensi = strtolower(end($x));
  $file_baru = "$nama.$ekstensi";
  $tmp = $_FILES['file_game']['tmp_name'];
  
  if(move_uploaded_file($tmp, 'img/'.$file_baru)){
    $result = mysqli_query($db, "INSERT INTO file_member (nama_file) VALUES ('$file_baru')");
    $query = mysqli_query($db,"INSERT INTO member (nama,email,no_telp,game,ket_joki) VALUES('$nama', '$email', '$nohp', '$game', 'ket')");
    if($query && $result){
    echo "<script>
      alert('Berhasil');
      document.location.href = 'tampil.php';
    </script>";
    } 
    else {
    echo error_log ("tambah data error");
    }
  }
  else{
    echo "Gagal Upload File";
  }
  header("Location:tampil.php");

}
?> 