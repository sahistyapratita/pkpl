<?php
$koneksi = mysqli_connect("localhost", "root", "", "biann_db");

$name = $_POST ['name'];
$nim = $_POST ['nim'];
$email = $_POST ['email'];
$date = $_POST ['date'];
$gender = $_POST ['gender'];
$hobi = $_POST ['hobi'];
$desc = $_POST ['desc'];
$submit = $_POST ['submit'];

$query = "INSERT INTO data VALUES('$name','$nim','$email','$date','$gender','$hobi','$desc','$submit' )";
if($query){
    header('location:form.html');
} else{
    echo 'gagal';
}
mysqli_query($koneksi, $query);
?>