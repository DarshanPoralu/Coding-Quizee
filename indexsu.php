<?php
  if(isset($_POST['submit'])){
    include 'includes/database.php';

    $username = $_POST['username'];
    $email_id = $_POST['email_id'];
    $password = $_POST['password'];
    $repassword = $_POST['re_password'];
    $sample = explode("@", $email_id);
    $address = $sample[1];
    $uppercase = preg_match('@[A-Z]@', $_POST['password']);
    $lowercase = preg_match('@[a-z]@', $_POST['password']);
    $number    = preg_match('@[0-9]@', $_POST['password']);
    $specialChars = preg_match('@[^\w]@', $_POST['password']);


    if(empty($username) || empty($email_id) || empty($password) || empty($repassword)){
      echo "<script>alert('All fields are mandatory to enter.')</script>";
    } else if ($address !== "bmsce.ac.in"){
      echo "<script>alert('Enter a valid bmsce mail id.')</script>";
    } else if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
      echo "<script>alert('Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.')</script>";
    } else if($password !== $repassword){
      echo "<script>alert('Passwords not matching.')</script>";
    } else {
      $sql1 = "SELECT username FROM signin WHERE username = '$username'";
      $result1 = mysqli_query($conn, $sql1);
      $row1 = mysqli_fetch_assoc($result1);
      $sql2 = "SELECT email_id FROM signin WHERE email_id = '$email_id'";
      $result2 = mysqli_query($conn, $sql2);
      $row2 = mysqli_fetch_assoc($result2);
      if($row1 > 0){
        echo "<script>alert('Username already taken.')</script>";
      }
      elseif ($row2 > 0) {
        echo "<script>alert('Email already exists.')</script>";
      }
      else{
        $sql = "INSERT INTO signin VALUES('$email_id', '$username' , '$password')";
        $result = mysqli_query($conn, $sql);
        if($result){
          $username = "";
          $email_id = "";
          $password = "";
          $repassword = "";
          header("Location: indexl.php?success=registered");
          exit();
        } else {
          echo "<script>alert('Unknown error! Please try after sometime.')</script>";
        }
      }
    }
   }
 ?>

<?php
include 'includes/head.php';
?>

  <title>Coding Quizee | Sign up</title>
</head>

<body class="hom">
  <?php
  include 'includes/navbar.php';
   ?>

  <div class="container log_div">
    <div class="div_log">
      <h1 class="hd">Sign up</h1>
    </div>
    <form id="form_id" method="POST" action="">
      <div class="mb-3 blk container blk0">
        <i class="fas fa-user ico"></i>
        <input type="text" class="form-control frm one"  aria-describedby="inputGroupPrepend" name="username" required placeholder="Username">
      </div>
      <div class="mb-3 blk container blk11">
        <i class="fas fa-envelope ico"></i>
        <input type="email" class="form-control frm two"  aria-describedby="emailHelp" name="email_id" placeholder="Email">
      </div>
      <div class="mb-3 blk container blk21">
        <i class="fas fa-lock ico"></i>
        <input type="password" class="form-control frm three"  name="password" placeholder="Password">
      </div>
      <div class="mb-3 blk container blk3">
        <i class="fas fa-lock ico"></i>
        <input type="password" class="form-control frm four"  name="re_password" placeholder="Re-type Password">
      </div>
      <div class="bt">
        <button type="submit" name="submit" class="btn btn-primary btn3">Create Account</button>
      </div>
      <div class="container last">
        <p class="last_p">Have an account?</p>
        <a href="indexl.php">Log in</a>
      </div>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>

<?php include 'includes/footer.php' ?>

</html>
