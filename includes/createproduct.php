<?php
    include_once 'dbh.inc.php';
    include "../WideImage/WideImage.php";

if(isset($_POST['create'])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $brand = mysqli_real_escape_string($conn, $_POST['brand']);
        $modelName = mysqli_real_escape_string($conn, $_POST['model']);
        $mileAge = mysqli_real_escape_string($conn, $_POST['mileage']);
        $price = mysqli_real_escape_string($conn, $_POST['price']);
        $desc = mysqli_real_escape_string($conn, $_POST['description']);
        $condition = mysqli_real_escape_string($conn, $_POST['condition']);
        $lastCheck = mysqli_real_escape_string($conn, $_POST['last_check']);
        $service = mysqli_real_escape_string($conn, $_POST['service']);
        $color = mysqli_real_escape_string($conn, $_POST['color']);
        $registrationDate = mysqli_real_escape_string($conn, $_POST['registration_date']);

        $fileNew = false;
        if ($_FILES['file']['error'] == 0) {

            $filearray = $_FILES;

            foreach ($filearray as $file) {
        
            $fileName = $file['name'];
            $fileTmpName = $file['tmp_name'];
            $fileSize = $file['size'];
            $fileError = $file['error'];
            $fileType = $file['type'];

            $fileExt = explode('.', $fileName);
            $fileActualExt = strtolower(end($fileExt));
    
            $allowed = array('jpg', 'png', 'gif', 'jpeg');
    
            if (in_array($fileActualExt, $allowed)) {

                //Checks for errors
                if ($fileError === 0) {
                    $fileValidated = true;
                } else {
                    echo "Fejl i uploading af fil: " . $_FILES["file"]["error"];
                    exit();
                }
            } else {
                echo "Du kan ikke uploade denne type filer";
                exit();
            }

                if ($fileValidated == true) {
                    //Make uniqiue name, so files dont replace each other
                    $fileNameRaw = "raw." . $fileActualExt;
                    $fileNameMedium = uniqid('', true) . "." . $fileActualExt;

                    //Paths for database
                    $fileDestinationMediumBase = 'assets/images/products/' . $fileNameMedium;

                    //Paths to move files
                    $fileDestinationRaw = '../assets/images/products/' . $fileNameRaw;
                    $fileDestinationMedium = '../assets/images/products/' . $fileNameMedium;
                    
                    //Move raw file
                    move_uploaded_file($fileTmpName, $fileDestinationRaw);

                    //Resize images from raw file
                    $image = WideImage::load($fileDestinationRaw);
                    $resizedMedium = $image->resize(600, 700);
                    $resizedMedium->saveToFile($fileDestinationMedium);
                    //Delete raw file
                    unlink($fileDestinationRaw);
                    $fileNew = true;
                }

                if ($fileNew == true & $fileValidated == true) {
                    
                    //Insert the image into the database
                    $sql = "INSERT INTO products (brand, model, mileage, price, description_text, car_condition, last_check, service_ok, color, registration_date, image_path)
                            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
                    //Create second prepared statement
                    $stmt2 = mysqli_stmt_init($conn);
                    

                    //Check if prepared statement fails
                    if (!mysqli_stmt_prepare($stmt2, $sql)) {
                        header("Location: ../index.php?error");
                        exit();
                    } else {
                        //Bind parameters to the placeholder
                        mysqli_stmt_bind_param($stmt2, "siiisssisss", $brand, $modelName, $mileAge, $price, $desc, $condition, $lastCheck, $service, $color, $registrationDate, $fileDestinationMediumBase);

                        //Run query in database
                        mysqli_stmt_execute($stmt2);
                        header("Location: ../create/product.php?success");
                        exit();
                    }
                }
            }

        } elseif ($_FILES['file']['error'] == 4) {
            //Insert the image into the database
            $sql = "INSERT INTO products (brand, model, mileage, price, description_text, car_condition, last_check, service_ok, color, registration_date)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
            //Create second prepared statement
            $stmt2 = mysqli_stmt_init($conn);
            

            //Check if prepared statement fails
            if (!mysqli_stmt_prepare($stmt2, $sql)) {
                header("Location: ../index.php?error");
                exit();
            } else {
                //Bind parameters to the placeholder
                mysqli_stmt_bind_param($stmt2, "siiisssiss", $brand, $modelName, $mileAge, $price, $desc, $condition, $lastCheck, $service, $color, $registrationDate);

                //Run query in database
                mysqli_stmt_execute($stmt2);
                header("Location: ../create/product.php?success");
                exit();
        }
    }
}
}
?>