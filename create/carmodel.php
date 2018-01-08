<style>
    input, select {
        display: block;
    }
</style>

<?php 
include '../includes/dbh.inc.php'; 
include '../includes/createcarmodel.php';
?>

<form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
    <label for="brand">Brand</label>
    <select name="brand">
        <?php 
            $sql = "SELECT * FROM car_brands";
            $result = $conn->query($sql);
        ?>
        <?php while ($row = $result->fetch_assoc()) : ?>
            <option value="<?=$row['brand']?>"><?=$row['brand']?></option>
        <?php endwhile; ?>
    </select>
    <label for="model_name">Model Name</label>
    <input type="text" name="model_name">
    <label for="body_type">Body Type</label>
    <select name="body_type">
        <?php 
            $sql = "SELECT * FROM car_body_type";
            $result = $conn->query($sql);
        ?>
        <?php while ($row = $result->fetch_assoc()) : ?>
            <option value="<?=$row['body_type']?>"><?=$row['body_type']?></option>
        <?php endwhile; ?>
    </select>
    <label for="equipment_model">Equipment Model</label>
    <input type="text" name="equipment_model">
    <label for="engine_size">Engine Size (Liter with decimal)</label>
    <input type="text" name="engine_size">
    <label for="engine_type">Engine Type Model</label>
    <select name="engine_type">
        <?php 
            $sql = "SELECT * FROM engine_type";
            $result = $conn->query($sql);
        ?>
        <?php while ($row = $result->fetch_assoc()) : ?>
            <option value="<?=$row['engine_type']?>"><?=$row['engine_type']?></option>
        <?php endwhile; ?>
    </select>
    <label for="horsepower">Horsepower</label>
    <input type="text" name="horsepower">
    <label for="torque">Torque</label>
    <input type="text" name="torque">
    <label for="consumption">Consumption (KM/L)</label>
    <input type="text" name="consumption">
    <label for="top_speed">Top Speed (KM/H)</label>
    <input type="text" name="top_speed">
    <label for="acceleration">Acceleration (0-100 KM/H in seconds)</label>
    <input type="text" name="acceleration">
    <label for="transmission_type">Transmission Type</label>
    <select name="transmission_type">
        <?php 
            $sql = "SELECT * FROM transmission_type";
            $result = $conn->query($sql);
        ?>
        <?php while ($row = $result->fetch_assoc()) : ?>
            <option value="<?=$row['transmission_type']?>"><?=$row['transmission_type']?></option>
        <?php endwhile; ?>
    </select>
    <label for="gears">Gears</label>
    <input type="text" name="gears">
    <label for="new_price">New Price</label>
    <input type="text" name="new_price">
    <label for="weight">Weight</label>
    <input type="text" name="weight">
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
        ?>
        <?php while ($row = $result->fetch_assoc()) : ?>
            <option value="<?=$row['drivetrain']?>"><?=$row['drivetrain']?></option>
        <?php endwhile; ?>
    </select>
    <label for="load_capacity">Load Capacity</label>
    <input type="text" name="load_capacity">
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
        ?>
        <?php while ($row = $result->fetch_assoc()) : ?>
            <option value="<?=$row['type']?>"><?=$row['type']?></option>
        <?php endwhile; ?>
    </select>
    <label for="tank_capacity">Tank Capacity</label>
    <input type="text" name="tank_capacity">
    <label for="year_start">Start Year</label>
    <input type="text" name="year_start">
    <label for="year_end">End Year</label>
    <input type="text" name="year_end">
    <button type="submit" name="submit">Submit</button>
</form>