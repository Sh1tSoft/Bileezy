<?php
/* - HEADER & BODY (start) - */
require 'includes/header.php';
?>

<?php


// LOG OUT
if (!empty($_GET['logout']) && $_GET['logout'] == "true") {
    unset($_SESSION['email']);
    header('Location: index.php');
    return;
}

// LOGIN
if (!empty($_SESSION['email'])) {
    header('Location: index.php');
} else {
    // email
    if (!empty($_POST['email'])) {
        // PASSWORD
        if (!empty($_POST['password'])) {
            $email = $_POST['email'];
            $query = "SELECT * FROM users WHERE email = '$email'";
            $result = $conn->query($query);
            if ($result->num_rows > 0) {
                $password = $_POST['password'];
                $row = $result->fetch_assoc();
                if ($password == $row['password']) {
                    $_SESSION['email'] = $email;
                    header('Location: index.php');
                   }
                }
            }
        }
    }
    ?>

<?php
if(isset($_POST['regi-button']))
{
    $email = $_POST["email"];
    $password = $_POST["password"];
    $full_name = $_POST["full_name"];
    $address = $_POST["address"];
    $zipcode = $_POST["zipcode"];
    $city = $_POST["city"];
    $phone = $_POST["phone"];

    $query = "INSERT INTO `users`(`email`, `password`, `full_name`, `address`, `zipcode`, `city`, `phone`)
    VALUES ('$email', '$password', '$full_name', '$address', '$zipcode', '$city', '$phone')";
    $result = $conn->query($query);
    $conn->close();
  }
?>

<!--- HEADER SECTION END --->
<section>
  <div class="container full-height">
    <div class="login-form">
      <form action="" method="post">
        <div class="icon">
          <i class="material-icons">mail_outline</i>
          <input type="email" name="email" placeholder="Email">
        </div>

        <div class="icon">
          <i class="material-icons">lock_outline</i>
          <input type="password" name="password" placeholder="Adganskode">
        </div>
        <div class="form-actions">
          <p>Ny bruger?</p> <a class="change-tab" href="#"> Opret konto</a>
          <button type="submit" name="login-button">LOG IND</button>
        </div>
      </form>
    </div>

    <div class="regi-form">
      <form action="" method="post" name="regiform">
        <div class="icon">
          <i class="material-icons">person_outline</i>
          <input type="text" name="full_name" placeholder="Fulde Navn" required>
        </div>

        <div class="icon">
          <i class="material-icons">mail_outline</i>
          <input type="email" name="email" placeholder="Email" required>
        </div>

        <div class="icon">
          <i class="material-icons">lock_outline</i>
          <input type="password" name="password" placeholder="Adganskode" id="password" required>
        </div>

        <div class="icon">
          <i class="material-icons">replay</i>
          <input type="password" name="confirm-password" placeholder="Bekræft Adganskode" id="confirmPassword" required>
          <label class="error" for="confirmPassword" id="password_error"></label>
        </div>

        <div class="icon">
          <i class="material-icons">location_on</i>
          <input type="text" name="address" placeholder="Addresse" required>
        </div>


          <div class="icon">
            <i class="material-icons">location_city</i>
            <input type="text" name="city" placeholder="By" required>
          </div>

          <div class="icon">
            <i class="material-icons">smartphone</i>
            <input type="number" name="zipcode" placeholder="Post Nummer" required>
          </div>

        <div class="icon">
          <i class="material-icons">smartphone</i>
          <input type="phone" name="phone" placeholder="Telefon Nummer" required>
        </div>


        <div class="form-actions">
          <p>Allerede Bruger?</p> <a class="change-tab" href="#">Log ind</a>
          <button type="submit" name="regi-button" id="submit">OPRET KONTO</button>
        </div>
      </form>
    </div>
  </div>
</section>

<?php require 'includes/footer.php'; ?>
