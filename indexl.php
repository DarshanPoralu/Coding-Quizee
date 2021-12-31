<?php
  if(isset($_POST['submit'])){
    include 'includes/database.php';
    $email_id = $_POST['email_id'];
    $password = $_POST['password'];
    if(empty($email_id) || empty($password)){
      echo "<script>alert('All fields are mandatory to enter.')</script>";
    } elseif($email_id === "Admin@bmsce.ac.in" && $password === "Admin"){
      session_start();
      $_SESSION['sessionId'] = $row['email_id'];
      $_SESSION['sessionUser'] = $row['username'];
      header("Location: admin/index_admin.php?success=loggedin(admin)");
      exit();
    } else {
        $sql = "SELECT * FROM signin where email_id = '$email_id'";
        $result = mysqli_query($conn, $sql);
        if($row = mysqli_fetch_assoc($result)){
          if ($password !== $row['password']) {
              echo "<script>alert('Wrong password.')</script>";
          } else {
              session_start();
              $_SESSION['sessionId'] = $row['email_id'];
              $_SESSION['sessionUser'] = $row['username'];
              header("Location: index.php?success=loggedin");
              exit();
          }
    }
     else {
?>
      <script>alert("Email doesn't exist.")</script>
<?php
    }
  }
   }
?>

<?php
include 'includes/head.php';
?>

  <title>Coding Quizee | Login</title>
</head>

<body class="hom">
  <?php
  include 'includes/navbar.php';
   ?>

  <div class="container log_div">
    <div class="div_log">
      <h1 class="hd">Login</h1>
    </div>
    <form id="form_id" method="post" action="">
      <div class="mb-3 blk container blk1">
        <i class="fas fa-envelope ico"></i>
        <input type="email" class="form-control frm one" id="exampleInputEmail1" aria-describedby="emailHelp" name="email_id" placeholder="Email">
      </div>
      <div class="mb-3 blk container blk2">
        <i class="fas fa-lock ico"></i>
        <input type="password" class="form-control frm two" id="exampleInputPassword1" name="password" placeholder="Password">

      </div>
      <div class="container frg">
        <a href="#">Forgot password?</a>
      </div>
      <div class="bt">
        <button type="submit" name="submit" class="btn btn-primary btn3">Login</button>
      </div>

    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>

<?php include 'includes/footer.php' ?>

</html>
