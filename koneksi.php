<?php
 $hostname   = "localhost";
 $username = "root";
 $pass     = "";
 $db       = "aplikasipendaftaran";
 $con     = new mysqli($hostname, $username, $pass, $db);

 if($con==false){

  die("koneksi gagal". $con->connect_error);
 }
  if (isset($_POST['submit'])) {
   $nama					 =$_POST['nama'];
   $nim				     =$_POST['nama'];
   $kelas				   =$_POST['kelas'];
   $jeniskelamin	 =$_POST['jeniskelamin'];
   $fakultas		   =$_POST['fakultas'];
   $hobi			     =$_POST['hobi'];
   $alamat				 =$_POST['alamat'];

 
 $sql="INSERT INTO aplikasipendaftaran(nama,nim,kelas,jeniskelamin,fakultas,hobi,alamat) VALUES ('$nama','$nim','$kelas','$jeniskelamin','$fakultas','$hobi','$alamat')";
   if(mysqli_query($con,$sql)){
    echo "Database sudah masuk";
   }else{
    echo "Database Gagal";;
   }
}
 ?>