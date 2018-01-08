<?php
    include 'dbh.inc.php';

    if (isset($_POST['submit'])) {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $brand = mysqli_real_escape_string($conn, $_POST['brand']);
            $modelName = mysqli_real_escape_string($conn, $_POST['model_name']);
            $body_type = mysqli_real_escape_string($conn, $_POST['body_type']);
            $equipment_model = mysqli_real_escape_string($conn, $_POST['equipment_model']);
            $engine_size = mysqli_real_escape_string($conn, $_POST['engine_size']);
            $engine_type = mysqli_real_escape_string($conn, $_POST['engine_type']);
            $horsepower = mysqli_real_escape_string($conn, $_POST['horsepower']);
            $torque = mysqli_real_escape_string($conn, $_POST['torque']);
            $consumption = mysqli_real_escape_string($conn, $_POST['consumption']);
            $top_speed = mysqli_real_escape_string($conn, $_POST['top_speed']);
            $acceleration = mysqli_real_escape_string($conn, $_POST['acceleration']);
            $transmission_type = mysqli_real_escape_string($conn, $_POST['transmission_type']);
            $gears = mysqli_real_escape_string($conn, $_POST['gears']);
            $new_price = mysqli_real_escape_string($conn, $_POST['new_price']);
            $weight = mysqli_real_escape_string($conn, $_POST['weight']);
            $doors = mysqli_real_escape_string($conn, $_POST['doors']);
            $airbags = mysqli_real_escape_string($conn, $_POST['airbags']);
            $cylinders = mysqli_real_escape_string($conn, $_POST['cylinders']);
            $drivetrain = mysqli_real_escape_string($conn, $_POST['drivetrain']);
            $load_capacity = mysqli_real_escape_string($conn, $_POST['load_capacity']);
            $seats = mysqli_real_escape_string($conn, $_POST['seats']);
            $fuel_type = mysqli_real_escape_string($conn, $_POST['fuel_type']);
            $year_start = mysqli_real_escape_string($conn, $_POST['year_start']);
            $years_end = mysqli_real_escape_string($conn, $_POST['year_end']);


            //Insert the user into the database
            $sql = "INSERT INTO car_model_info (
                brand,
                model,
                car_body_type,
                equipment_model,
                engine_size,
                engine_type,
                horsepower,
                torque,
                consumption,
                top_speed,
                acceleration,
                transmission_type,
                gears,
                new_price,
                car_weight,
                doors,
                airbags,
                cylinders,
                drivetrain,
                load_capacity,
                seats,
                fuel_type,
                year_start,
                year_end
                )
                    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
            //Create prepared statement
            $stmt = mysqli_stmt_init($conn);

            //Check if prepared statement fails
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                echo mysqli_errno($this->$conn);
            } else {
                //Bind parameters to the placeholder
                //"ssssdsiididsiiiiiississs"
                mysqli_stmt_bind_param($stmt, "ssssssssssssssssssssssss", $brand, $modelName, $body_type, $equipment_model, $engine_size, $engine_type, $horsepower, $torque, $consumption, $top_speed, $acceleration, $transmission_type,
                $gears, $new_price, $weight, $doors, $airbags, $cylinders, $drivetrain, $load_capacity, $seats, $fuel_type, $year_start, $years_end);

                //Run query in database
                mysqli_stmt_execute($stmt);

                $conn->close();
                //header("Location: ../index.php?added");
                echo "Det virkede";
            }
        }
    }
?>