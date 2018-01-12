<?php
$pageTitle = "Opret model";
include '../includes/header.php';
include '../includes/dbh.inc.php';
?>
<head>
    <link rel="stylesheet" href="../assets/css/cms.css">
</head>

<!------------------------------------------------------ CREATE MODEL ------------------------------------------------------>
<h1 class="container"><a class="create__button" href="?create">Opret Model</a></h1>

<?php if (isset($_GET['create'])) : ?>
    <section class="container">


        <form class="cms__form" action="<?=$root?>/includes/createcarmodel.php" method="POST">
            <div class="form-group borders row">
                <label class="col-md-2" for="brand">Mærke</label>

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
                <label class="col-md-2" for="model_name">Model Navn</label>

                <input class="col-md-4" type="text" name="model_name">
            </div>

            <div class="form-group borders row">
                <label class="col-md-2" for="body_type">Karosseri Type</label>
                <select class="col-md-4" name="body_type">
                    <?php
                    $sql = "SELECT * FROM car_body_type";
                    $result = $conn->query($sql);
                    while ($row = $result->fetch_assoc()) : ?>
                        <option value="<?= $row['body_type'] ?>"><?= $row['body_type'] ?></option>
                    <?php endwhile; ?>
                </select>
            </div>
            <div class="row form-group borders">
                <label class="col-md-2" for="equipment_model">Udstyrs Model</label>
                <input class="col-md-4" type="text" name="equipment_model" placeholder="f.eks Titanium">
            </div>
            <div class="row form-group borders">
                <label class="col-md-2" for="engine_size">Motor Størrelse i Liter</label>
                <input class="col-md-4" type="text" name="engine_size" placeholder="f.eks 1,8">
            </div>
            <div class="row form-group borders">
                <label class="col-md-2" for="engine_type">Motor Type</label>
                <select class="col-md-4" name="engine_type">

                    <?php
                    $sql = "SELECT * FROM engine_type";
                    $result = $conn->query($sql);
                    while ($row = $result->fetch_assoc()) : ?>
                        <option value="<?= $row['engine_type'] ?>"><?= $row['engine_type'] ?></option>
                    <?php endwhile; ?>
                </select>
            </div>
            <div class="row form-group borders">
                <label class="col-md-2" for="horsepower">Hestekræfter</label>
                <input class="col-md-4" type="number" name="horsepower" placeholder="f.eks 170">
            </div>
            <div class="row form-group borders">
                <label class="col-md-2" for="torque">Moment N/m</label>
                <input class="col-md-4" type="number" name="torque" placeholder="f.eks 230">
            </div>
            <div class="row form-group borders">
                <label class="col-md-2" for="consumption">Forbrug (KM/L)</label>
                <input class="col-md-4" type="text" name="consumption" placeholder="f.eks 16,7">
            </div>
            <div class="row form-group borders">
                <label class="col-md-2" for="top_speed">Top Hastighed (KM/T)</label>
                <input class="col-md-4" type="text" name="top_speed" placeholder="f.eks 210">
            </div>
            <div class="row form-group borders">
                <label class="col-md-2" for="acceleration">Acceleration (0-100KM/T )</label>
                <input class="col-md-4" type="number" name="acceleration" placeholder="sekunder">
            </div>
            <div class="row form-group borders">
                <label class="col-md-2" for="transmission_type">Gearkasse</label>
                <select class="col-md-4" name="transmission_type">
                    <?php
                    $sql = "SELECT * FROM transmission_type";
                    $result = $conn->query($sql);
                    while ($row = $result->fetch_assoc()) :
                        ?>
                        <option value="<?= $row['transmission_type'] ?>"><?= $row['transmission_type'] ?></option>
                    <?php endwhile; ?>
                </select>
            </div>
            <div class="row form-group borders">
                <label class="col-md-2" for="gears">Gear</label>
                <input class="col-md-4" type="number" name="gears">
            </div>
            <div class="row form-group borders">
                <label class="col-md-2" for="new_price">Ny Pris</label>
                <input class="col-md-4" type="number" name="new_price">
            </div>
            <div class="row form-group borders">
            <label class="col-md-2" for="weight">Vægt</label>
            <input class="col-md-4" type="number" name="weight">
            </div>
            <div class="row form-group borders">
            <label class="col-md-2" for="doors">Døre</label>
            <select class="col-md-4" name="doors">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
            </div>
            <div class="row form-group borders">
            <label class="col-md-2" for="airbags">Airbags</label>
            <select class="col-md-4" name="airbags">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
            </div>
            <div class="row form-group borders">
            <label class="col-md-2" for="cylinders">Cylindere</label>
            <select class="col-md-4" name="cylinders">
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="8">8</option>
                <option value="10">10</option>
                <option value="12">12</option>
                <option value="16">16</option>
            </select>
            </div>
            <div class="row form-group borders">
            <label class="col-md-2" for="drivetrain">Trækhjul</label>
            <select class="col-md-4" name="drivetrain">
                <?php
                $sql = "SELECT * FROM drivetrain";
                $result = $conn->query($sql);
                while ($row = $result->fetch_assoc()) :
                    ?>
                    <option value="<?= $row['drivetrain'] ?>"><?= $row['drivetrain'] ?></option>
                <?php endwhile; ?>
            </select>
            </div>
            <div class="row form-group borders">
            <label class="col-md-2" for="load_capacity">Lastevne</label>
            <input class="col-md-4" type="text" name="load_capacity">
            </div>
            <div class="row form-group borders">
            <label class="col-md-2" for="seats">Sæder</label>
            <select class="col-md-4" name="seats">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
            </div>
            <div class="row form-group borders">
            <label class="col-md-2" for="fuel_type">Brændstof</label>
            <select class="col-md-4" name="fuel_type">
                <?php
                $sql = "SELECT * FROM fuel_type";
                $result = $conn->query($sql);
                while ($row = $result->fetch_assoc()) :
                    ?>
                    <option value="<?= $row['type'] ?>"><?= $row['type'] ?></option>
                <?php endwhile; ?>
            </select>
            </div>
            <div class="row form-group borders">
            <label class="col-md-2" for="tank_capacity">Tank Kapacitet</label>
            <input class="col-md-4" type="text" name="tank_capacity">
            </div>
            <div class="row form-group borders">
            <label class="col-md-2" for="year_start">Start År</label>
            <input class="col-md-4" type="text" name="year_start">
            </div>
            <div class="row form-group borders">
            <label class="col-md-2" for="year_end">Slut År</label>
            <input class="col-md-4" type="text" name="year_end">
            </div>
            <button type="submit" name="create">Submit</button>
        </form>
    </section>

    <!------------------------------------------------------ EDIT MODEL ------------------------------------------------------>


<?php elseif (isset($_GET['edit'])) :
    $id = $_GET['edit'];
    $sqlall = "SELECT * FROM car_model_info WHERE id = $id";
    $resultall = $conn->query($sqlall);
    ?>

    <?php if ($rowall = $resultall->fetch_assoc()) : ?>

    <form action="<?=$root?>/includes/updatecarmodel.php" method="POST">
        <label for="brand">Brand</label>
        <select name="brand" id="category">
            <?php
            $sql = "SELECT * FROM car_brands";
            $result = $conn->query($sql);
            ?>
            <option value="<?= $rowall['brand'] ?>"><?= $rowall['brand'] ?></option>
            <?php while ($row = $result->fetch_assoc()) : ?>
                <option value="<?= $row['brand'] ?>"><?= $row['brand'] ?></option>
            <?php endwhile; ?>
        </select>
        <label for="model_name">Model Name</label>
        <input type="text" value="<?= $rowall['model'] ?>" name="model_name">
        <label for="body_type">Body Type</label>
        <select name="body_type">
            <?php
            $sql = "SELECT * FROM car_body_type";
            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()) :
                ?>
                <option value="<?= $row['body_type'] ?>"><?= $row['body_type'] ?></option>
            <?php endwhile; ?>
        </select>
        <label for="equipment_model">Equipment Model</label>
        <input type="text" value="<?= $rowall['equipment_model'] ?>" name="equipment_model">
        <label for="engine_size">Engine Size (Liter with decimal)</label>
        <input type="text" value="<?= $rowall['engine_size'] ?>" name="engine_size">
        <label for="engine_type">Engine Type Model</label>
        <select name="engine_type">
            <?php
            $sql = "SELECT * FROM engine_type";
            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()) :
                ?>
                <option value="<?= $row['engine_type'] ?>"><?= $row['engine_type'] ?></option>
            <?php endwhile; ?>
        </select>
        <label for="horsepower">Horsepower</label>
        <input type="text" value="<?= $rowall['horsepower'] ?>" name="horsepower">
        <label for="torque">Torque</label>
        <input type="text" value="<?= $rowall['torque'] ?>" name="torque">
        <label for="consumption">Consumption (KM/L)</label>
        <input type="text" value="<?= $rowall['consumption'] ?>" name="consumption">
        <label for="top_speed">Top Speed (KM/H)</label>
        <input type="text" value="<?= $rowall['top_speed'] ?>" name="top_speed">
        <label for="acceleration">Acceleration (0-100 KM/H in seconds)</label>
        <input type="text" value="<?= $rowall['acceleration'] ?>" name="acceleration">
        <label for="transmission_type">Transmission Type</label>
        <select name="transmission_type">
            <?php
            $sql = "SELECT * FROM transmission_type";
            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()) : ?>
                <option value="<?= $row['transmission_type'] ?>"><?= $row['transmission_type'] ?></option>
            <?php endwhile; ?>
        </select>
        <label for="gears">Gears</label>
        <input type="text" value="<?= $rowall['gears'] ?>" name="gears">
        <label for="new_price">New Price</label>
        <input type="text" value="<?= $rowall['new_price'] ?>" name="new_price">
        <label for="weight">Weight</label>
        <input type="text" value="<?= $rowall['car_weight'] ?>" name="weight">
        <label for="doors">Doors</label>
        <select name="doors">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>
        <label for="airbags">Airbags</label>
        <select name="airbags">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>
        <label for="cylinders">Cylinders</label>
        <select name="cylinders">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
        </select>
        <label for="drivetrain">Drivetrain</label>
        <select name="drivetrain">
            <?php
            $sql = "SELECT * FROM drivetrain";
            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()) : ?>
                <option value="<?= $row['drivetrain'] ?>"><?= $row['drivetrain'] ?></option>
            <?php endwhile; ?>
        </select>
        <label for="load_capacity">Load Capacity</label>
        <input type="text" value="<?= $rowall['load_capacity'] ?>" name="load_capacity">
        <label for="seats">Seats</label>
        <select name="seats">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>
        <label for="fuel_type">Fuel Type</label>
        <select name="fuel_type">
            <?php
            $sql = "SELECT * FROM fuel_type";
            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()) : ?>
                <option value="<?= $row['type'] ?>"><?= $row['type'] ?></option>
            <?php endwhile; ?>
        </select>
        <label for="tank_capacity">Tank Capacity</label>
        <input type="text" value="<?= $rowall['tank_capacity'] ?>" name="tank_capacity">
        <label for="year_start">Start Year</label>
        <input type="text" value="<?= $rowall['year_start'] ?>" name="year_start">
        <label for="year_end">End Year</label>
        <input type="text" value="<?= $rowall['year_end'] ?>" name="year_end">
        <input type="hidden" name="id" value="<?= $_GET['edit'] ?>">
        <button type="submit" name="edit">Submit</button>
    </form>

<?php endif; ?>


    <!------------------------------------------------------ LIST MODELS ------------------------------------------------------>


<?php else :
    $sql = "SELECT * FROM car_model_info";
    $result = $conn->query($sql);
    ?>

    <?php while ($row = $result->fetch_assoc()) : ?>
    <?= $row['brand'] ?> |
    <?= $row['model'] ?> |
    <?= $row['car_body_type'] ?> |
    <?= $row['equipment_model'] ?> |
    <?= $row['engine_size'] ?> |
    <?= $row['engine_type'] ?> |
    <?= $row['horsepower'] ?> |
    <?= $row['torque'] ?> |
    <?= $row['consumption'] ?> |
    <?= $row['top_speed'] ?> |
    <?= $row['acceleration'] ?> |
    <?= $row['transmission_type'] ?> |
    <?= $row['gears'] ?> |
    <?= $row['new_price'] ?> |
    <?= $row['car_weight'] ?> |
    <?= $row['doors'] ?> |
    <?= $row['airbags'] ?> |
    <?= $row['cylinders'] ?> |
    <?= $row['drivetrain'] ?> |
    <?= $row['load_capacity'] ?> |
    <?= $row['seats'] ?> |
    <?= $row['fuel_type'] ?> |
    <?= $row['tank_capacity'] ?> |
    <?= $row['year_start'] ?> |
    <?= $row['year_end'] ?> |
    <a href="?edit=<?= $row['id'] ?>">Edit</a><br><br>
<?php endwhile; ?>

<?php endif; ?>


<?php include '../includes/footer.php'; ?>