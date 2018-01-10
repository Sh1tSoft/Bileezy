<?php
    $pageTitle = "Opret Produkt";
    include '../includes/header.php';
?>

<style>
    .img-container {
        background: grey;
        width: 200px;
        height: 200px;
        display: inline-block;
    }
    .output {
        max-width: 100%;
        max-height: 200px;
        display: inline-block;
        margin: auto;
    }
</style>

<form action="/includes/uploadproduct.php" method="POST" enctype="multipart/form-data">
<input type="file" name="file1" accept="image/*">
<input type="file" name="file2" accept="image/*">
<button type="submit" name="submit">Submit</button>
</form>