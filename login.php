<!-- HEADER & BODY (start) -->
<?php require 'includes/header.php'; ?>

<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
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
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password">
        <button type="submit" name="login-button">SIGN IN</button>
      </form>
    </div>
  </div>
</section>
