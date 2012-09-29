<?php
include 'include/header.php';
if (isset($_POST['register'])) { header('Location: register.php'); }
else {
if ((isset($_POST['pass']))&&(isset($_POST['login']))) {
    
    
    
    
} else {

    require_once 'parts/auth_form.php';    
    
}
}
include_once 'include/footer.php';
?>
