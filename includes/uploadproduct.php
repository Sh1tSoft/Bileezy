<?php
    include_once 'dbh.inc.php';
    include "../WideImage/WideImage.php";

if(isset($_POST['submit'])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $fileNew = false;
        if (!empty($_FILES)) {

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

                    sleep(5);

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
                    $sql = "INSERT INTO product_images (image_path)
                            VALUES (?);";
                    //Create second prepared statement
                    $stmt2 = mysqli_stmt_init($conn);
                    

                    //Check if prepared statement fails
                    if (!mysqli_stmt_prepare($stmt2, $sql)) {
                        header("Location: ../index.php?error");
                        exit();
                    } else {
                        //Bind parameters to the placeholder
                        mysqli_stmt_bind_param($stmt2, "s", $fileDestinationMediumBase);

                        //Run query in database
                        mysqli_stmt_execute($stmt2);
                        $fileUploaded = true;
                    }
                }
            }

                if ($fileUploaded == true) {
                    header("Location: ../create/product.php?success");
                    exit();
                }

                if ($fileNew == false) {
                    
                    //Insert the image into the database
                    $sql = "INSERT INTO products (product_no, product_title, product_price, product_units, product_category, product_link)
                            VALUES (?, ?, ?, ?, ?, ?);";
                    //Create second prepared statement
                    $stmt2 = mysqli_stmt_init($conn);
                    

                    //Check if prepared statement fails
                    if (!mysqli_stmt_prepare($stmt2, $sql)) {
                        header("Location: ../index.php?login=error2");
                        exit();
                    } else {
                        //Bind parameters to the placeholder
                        mysqli_stmt_bind_param($stmt2, "ssssss", $productNo, $productName, $productPrice, $productUnits, $productCategory, $productLink);

                        //Run query in database
                        mysqli_stmt_execute($stmt2);
                    }
                        $conn->close();
                        header("Location: ".$doc_root."/admin/products.php?added");
                
                }
        }
    }
}
?>