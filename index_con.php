<?php
  if(isset($_POST['submit1'])){
    $email = $_POST['email'];
    $user = "From: " . "$email" . "\r\n";
    $uname = $_POST['uname'];
    $msg = $_POST['msg'];
    $subject = "Message from Coding Quizee.";
    if(empty($email) || empty($uname) || empty($msg)){
?>
      <script>alert('All fields are mandatory to enter.')</script>
<?php
    } else {
      $admin = "darshanpm.cs19@bmsce.ac.in";
      if(mail($admin, $subject, $msg, $user)){
        header("Location: index_con.php?success");
      }
    }
  }
?>

<?php
include 'includes/head.php';
?>

  <title>Coding Quizee | Contact us</title>
</head>

<body class="hom">
  <?php
  include 'includes/navbar.php';
   ?>

  <div class="container log_div cont2">
    <div class="div_log cont1">
      <h1 class="hd_cont">Contact Us</h1>
      <p class="p_cont">Got a question?We'd love to hear from you.Send us a message <br> and we'll respond as soon as possible.</p>
    </div>
    <form method="post" action="">
    <div class="mb-3 blk10 blk_cont container">
      <label for="formGroupExampleInput" class="form-label">Name</label>
      <input type="text" class="form-control frm_cont" name="uname" id="validationCustomUsername" aria-describedby="inputGroupPrepend">
    </div>
    <div class="mb-3 blk21 blk_cont container">
      <label for="exampleInputEmail1" class="form-label">Email</label>
      <input type="email" class="form-control frm_cont" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3 blk3 blk_cont container">
      <label for="exampleFormControlTextarea1" class="form-label">Message</label>
      <textarea class="form-control frm_cont" name="msg" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>

    <div class="bt">
      <button type="submit" name="submit1" class="btn btn-primary btn3">Send Message</button>
    </div>
    <div class="container_inf">
    </div>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

<?php
  if(isset($_GET['success'])){
    echo "<div class='container_inf'><p>Your Message has been sent.</p></div>";
  }
?>


<?php include 'includes/footer.php' ?>

</html>
