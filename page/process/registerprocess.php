<?php

if(isset($_POST['register'])){

include('../db.php');

$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$name = $_POST['name'];
$phonenum = $_POST['phonenum'];
$membership = $_POST['membership'];

$query = mysqli_query($con,
"INSERT INTO users(email, password, name, phonenum, membership) 
VALUES
('$email', '$password', '$name', '$phonenum', '$membership')")
or die(mysqli_error($con));  
ditangani oleh perintah “or die”
if($query){
echo
'<script>
alert("Register Success"); 
window.location = "../index.php"
</script>';
}else{
echo
'<script>
alert("Register Failed");
</script>';
}
}else{
echo
'<script>
window.history.back()
</script>';
}
?>
