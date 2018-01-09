<!-- HEADER & BODY (start) -->
<?php require 'includes/header.php'; ?>

<?php
session_start();
if(!isset($_SESSION['email'])){
   header("Location:Login.php");
}
 ?>

<!-- FOOTER & BODY (end) -->
<?php require 'includes/footer.php'; ?>
