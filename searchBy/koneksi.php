
<?php
$server="localhost"; 
$username="root"; 
$password=""; 
$nama_db="search_by"; 

$koneksi=mysqli_connect($server,$username,$password) or die (mysqli_error($koneksi));
$db=mysqli_select_db($koneksi,$nama_db);
?>