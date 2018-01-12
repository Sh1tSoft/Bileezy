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
<h1 class="container">Opret Produkt</h1>

<section class="container">
    <form class="cms__form" action="/includes/createproduct.php" method="POST" enctype="multipart/form-data">
        <div class="form-group borders row">
            <label class="col-md-2" for="brand">Brand</label>
                <select class="col-md-4" name="brand">
                    <?php
                    $sql = "SELECT * FROM car_brands";
                    $result = $conn->query($sql);
                    while ($row = $result->fetch_assoc()) : ?>
                        <option value="<?= $row['brand'] ?>"><?= $row['brand'] ?></option>
                    <?php endwhile; ?>
                </select>
        </div>
        <div class="form-group borders row">
            <label class="col-md-2" for="model">Model</label>
                <select class="col-md-4" name="model">
                    <?php
                    $sql = "SELECT * FROM car_model_info";
                    $result = $conn->query($sql);
                    while ($row = $result->fetch_assoc()) : ?>
                        <option value="<?= $row['id'] ?>"><?= $row['model'] ?></option>
                    <?php endwhile; ?>
                </select>
        </div>
        <div class="form-group borders row">
            <label class="col-md-2" for="mileage">Kilometertal</label>
                <input type="number" name="mileage">
        </div>
        <div class="form-group borders row">
            <label class="col-md-2" for="price">Pris</label>
                <input type="number" name="price">
        </div>
        <div class="form-group borders row">
            <label class="col-md-2" for="description">Beskrivelse</label>
                <textarea name="description" id="" cols="50" rows="8"></textarea>
        </div>
        <div class="form-group borders row">
            <label class="col-md-2" for="condition">Tilstand</label>
                <select class="col-md-4" name="condition">
                    <?php
                    $sql = "SELECT * FROM car_condition";
                    $result = $conn->query($sql);
                    while ($row = $result->fetch_assoc()) : ?>
                        <option value="<?= $row['car_condition'] ?>"><?= $row['car_condition'] ?></option>
                    <?php endwhile; ?>
                </select>
        </div>
        <div class="form-group borders row">
            <label class="col-md-2" for="last_check">Sidste Tjek</label>
                <input type="date" name="last_check" max="<?=date('Y-m-d')?>">
        </div>
        <div class="form-group borders row">
            <label class="col-md-2" for="service">Serviceret?</label>
                <select class="col-md-4" name="service">
                    <option value="1">Ja</option>
                    <option value="0">Nej</option>
                </select>
        </div>
        </div>
        <div class="form-group borders row">
            <label class="col-md-2" for="color">Farve</label>
                <input type="text" name="color">
        </div>
        <div class="form-group borders row">
            <label class="col-md-2" for="registration_date">Registreringsdato</label>
                <input id="currentdate" type="date" name="registration_date" max="<?=date('Y-m-d')?>">
        </div>
        <div class="form-group borders row">
            <label class="col-md-2" for="registration_date">Billede</label>
            <input type="file" name="file" accept="image/*">
        </div>
        <button type="submit" name="create">Submit</button>
    </form>
</section>


<script>
    var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0!
var yyyy = today.getFullYear();
 if(dd<10){
        dd='0'+dd
    }
    if(mm<10){
        mm='0'+mm
    }

today = yyyy+'-'+mm+'-'+dd;
document.getElementById("currentdate").setAttribute("max", today);
</script>
