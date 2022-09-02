<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php
include("config.inc.php");

$firstname = $_POST['firstname'];
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$sex= $_POST['sex'];
$birthdate = $_POST['birthdate'];
$address = $_POST['address'];
$telephone_number = $_POST['telephone_number'];
$email = $_POST['email'];

$sqli = "INSERT INTO tbl_student (id, firstname, name, lastname, sex, birthdate, address, telephone_number, email) VALUES ('', '$firstname', '$name', '$lastname', '$sex', '$birthdate', '$address', '$telephone_number', '$email')";

if(mysqli_query($conn, $sqli)) {
    echo "<script>
    Swal.fire({
        type: 'success',
        icon: 'success',
        title: 'Your work have been saved',
        showConfirmButton: false,
        timer: 5000
      }).then(function() {
        window.location = 'frmRegister.php';
      });
      </script>";
}else{
    echo "เพิ่มข้อมูลไม่สำเร็จ";
}
$conn -> close();
?>