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

<!--- HEADER SECTION END --->
<section>
  <div class="container full-height">
    <div class="login-form">
      <h3>Login</h3>
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
          <p>Ny bruger?</p> <a class="change-tab" href="regi.php"> Opret konto</a>
          <button type="submit" name="login-button">LOG IND</button>
        </div>
      </form>
    </div>
  </div>
</section>

<?php require 'includes/footer.php'; ?>
