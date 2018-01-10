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
require 'includes/dbh.inc.php';
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
  <div class="container">
    <div class="login-form">
      <form action="" method="post">
        <div class="email">
          <i class="material-icons">person</i>
          <input type="email" name="email" placeholder="Email">
        </div>

        <div class="password">
          <i class="material-icons">lock_open</i>
          <input type="password" name="password" placeholder="Password">
        </div>
        <div class="form-actions">
          <p>Ny bruger?</p> <a href="#"> Opret Bruger</a>
          <button class="form-btn-2" type="submit" name="login-button">LOG IND</button>
        </div>
      </form>
    </div>
  </div>
</section>
