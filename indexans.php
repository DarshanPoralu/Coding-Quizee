<?php
include 'includes/head.php';
?>

<?php
  $row = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
  $ln = ['C Basic', 'C Intermediate', 'C Advanced', 'C# Basic', 'C# Intermediate', 'C# Advanced', 'C++ Basic', 'C++ Intermediate', 'C++ Advanced', 'Java Basic', 'Java Intermediate', 'Java Advanced', 'Python Basic', 'Python Intermediate', 'Python Advanced'];
  if(isset($_SESSION['sessionId'])){
    $email_id = $_SESSION['sessionId'];
    for($i = 0; $i < 15; $i++){
      $sql = "SELECT * FROM score WHERE email_id = '$email_id' AND languagename = '$ln[$i]'";
      $result = mysqli_query($conn, $sql);
      $row[$i] = mysqli_fetch_assoc($result);
    }
  }
?>

<?php
    function helper($row, $ind, $type){
      if($row[$ind] > 0){
        header("Location: answers/index_ans.php" . "$type");
        exit();
      }
      else {
?>
        <script>alert("You have to attempt the Quiz to view answers(If you haven't logged in, log in and attempt).")</script>
<?php
      }
    }
?>


<?php
  if(isset($_POST['submit1'])){
    helper($row, 0,  '?type=C Basic');
  } elseif(isset($_POST['submit2'])){
    helper($row, 1,  '?type=C Intermediate');
  } elseif(isset($_POST['submit3'])){
    helper($row, 2,  '?type=C Advanced');
  } elseif(isset($_POST['submit4'])){
    helper($row, 3,  '?type=C# Basic');
  } elseif(isset($_POST['submit5'])){
    helper($row, 4,  '?type=C# Intermediate');
  } elseif(isset($_POST['submit6'])){
    helper($row, 5,  '?type=C# Advanced');
  } elseif(isset($_POST['submit7'])){
    helper($row, 6,  '?type=C++ Basic');
  } elseif(isset($_POST['submit8'])){
    helper($row, 7,  '?type=C++ Intermediate');
  } elseif(isset($_POST['submit9'])){
    helper($row, 8,  '?type=C++ Advanced');
  } elseif(isset($_POST['submit10'])){
    helper($row, 9,  '?type=Java Basic');
  } elseif(isset($_POST['submit11'])){
    helper($row, 10,  '?type=Java Intermediate');
  } elseif(isset($_POST['submit12'])){
    helper($row, 11,  '?type=Java Advanced');
  } elseif(isset($_POST['submit13'])){
    helper($row, 12,  '?type=Python Basic');
  } elseif(isset($_POST['submit14'])){
    helper($row, 13,  '?type=Python Intermediate');
  } elseif(isset($_POST['submit15'])){
    helper($row, 14,  '?type=Python Advanced');
  }
?>

  <title>Coding Quizee | Answer</title>
</head>

<body class="hom">
  <?php
  include 'includes/navbar.php';
   ?>

  <div class="container-fluid con_ans ans_pad" id="c">
    <h1 class="hd">C</h1>
    <div class="row al">
      <div class="col-sm-4">
        <h3>C - Basic Level</h3>
      </div>
      <div class="col-sm-4">
        <h2 class="dash">-</h2>
      </div>
      <div class="col-sm-4">
        <form action="" method="post">
          <button type="submit" name="submit1" class="btn btn-primary btn3">View Answers</button>
        </form>
      </div>
    </div>
    <div class="row al">
      <div class="col-sm-4">
        <h3>C - Intermediate Level</h3>
      </div>
      <div class="col-sm-4">
        <h2 class="dash">-</h2>
      </div>
      <div class="col-sm-4">
        <form action="" method="post">
          <button type="submit" name="submit2" class="btn btn-primary btn3">View Answers</button>
        </form>
      </div>
    </div>
    <div class="row al">
      <div class="col-sm-4">
        <h3>C - Advanced Level</h3>
      </div>
      <div class="col-sm-4">
        <h2 class="dash">-</h2>
      </div>
      <div class="col-sm-4">
        <form action="" method="post">
          <button type="submit" name="submit3" class="btn btn-primary btn3">View Answers</button>
        </form>
      </div>
    </div>
  </div>
  <div class="container-fluid con_ans" id="ch">
    <h1 class="hd">C#</h1>
    <div class="row al">
      <div class="col-sm-4">
        <h3>C# - Basic Level</h3>
      </div>
      <div class="col-sm-4">
        <h2 class="dash">-</h2>
      </div>
      <div class="col-sm-4">
        <form action="" method="post">
          <button type="submit" name="submit4" class="btn btn-primary btn3">View Answers</button>
        </form>
      </div>
    </div>
    <div class="row al">
      <div class="col-sm-4">
        <h3>C# - Intermediate Level</h3>
      </div>
      <div class="col-sm-4">
        <h2 class="dash">-</h2>
      </div>
      <div class="col-sm-4">
        <form action="" method="post">
          <button type="submit" name="submit5" class="btn btn-primary btn3">View Answers</button>
        </form>
      </div>
    </div>
    <div class="row al">
      <div class="col-sm-4">
        <h3>C# - Advanced Level</h3>
      </div>
      <div class="col-sm-4">
        <h2 class="dash">-</h2>
      </div>
      <div class="col-sm-4">
        <form action="" method="post">
          <button type="submit" name="submit6" class="btn btn-primary btn3">View Answers</button>
        </form>
      </div>
    </div>
  </div>
  <div class="container-fluid con_ans" id="cp">
    <h1 class="hd">C++</h1>
    <div class="row al">
      <div class="col-sm-4">
        <h3>C++ - Basic Level</h3>
      </div>
      <div class="col-sm-4">
        <h2 class="dash">-</h2>
      </div>
      <div class="col-sm-4">
        <form action="" method="post">
          <button type="submit" name="submit7" class="btn btn-primary btn3">View Answers</button>
        </form>
      </div>
    </div>
    <div class="row al">
      <div class="col-sm-4">
        <h3>C++ - Intermediate Level</h3>
      </div>
      <div class="col-sm-4">
        <h2 class="dash">-</h2>
      </div>
      <div class="col-sm-4">
        <form action="" method="post">
          <button type="submit" name="submit8" class="btn btn-primary btn3">View Answers</button>
        </form>
      </div>
    </div>
    <div class="row al">
      <div class="col-sm-4">
        <h3>C++ - Advanced Level</h3>
      </div>
      <div class="col-sm-4">
        <h2 class="dash">-</h2>
      </div>
      <div class="col-sm-4">
        <form action="" method="post">
          <button type="submit" name="submit9" class="btn btn-primary btn3">View Answers</button>
        </form>
      </div>
    </div>
  </div>
  <div class="container-fluid con_ans" id="j">
    <h1 class="hd">Java</h1>
    <div class="row al">
      <div class="col-sm-4">
        <h3>Java - Basic Level</h3>
      </div>
      <div class="col-sm-4">
        <h2 class="dash">-</h2>
      </div>
      <div class="col-sm-4">
        <form action="" method="post">
          <button type="submit" name="submit10" class="btn btn-primary btn3">View Answers</button>
        </form>
      </div>
    </div>
    <div class="row al">
      <div class="col-sm-4">
        <h3>Java - Intermediate Level</h3>
      </div>
      <div class="col-sm-4">
        <h2 class="dash">-</h2>
      </div>
      <div class="col-sm-4">
        <form action="" method="post">
          <button type="submit" name="submit11" class="btn btn-primary btn3">View Answers</button>
        </form>
      </div>
    </div>
    <div class="row al">
      <div class="col-sm-4">
        <h3>Java - Advanced Level</h3>
      </div>
      <div class="col-sm-4">
        <h2 class="dash">-</h2>
      </div>
      <div class="col-sm-4">
        <form action="" method="post">
          <button type="submit" name="submit12" class="btn btn-primary btn3">View Answers</button>
        </form>
      </div>
    </div>
  </div>
  <div class="container-fluid con_ans" id="p">
    <h1 class="hd">Python</h1>
    <div class="row al">
      <div class="col-sm-4">
        <h3>Python - Basic Level</h3>
      </div>
      <div class="col-sm-4">
        <h2 class="dash">-</h2>
      </div>
      <div class="col-sm-4">
        <form action="" method="post">
          <button type="submit" name="submit13" class="btn btn-primary btn3">View Answers</button>
        </form>
      </div>
    </div>
    <div class="row al">
      <div class="col-sm-4">
        <h3>Python - Intermediate Level</h3>
      </div>
      <div class="col-sm-4">
        <h2 class="dash">-</h2>
      </div>
      <div class="col-sm-4">
        <form action="" method="post">
          <button type="submit" name="submit14" class="btn btn-primary btn3">View Answers</button>
        </form>
      </div>
    </div>
    <div class="row al">
      <div class="col-sm-4">
        <h3>Python - Advanced Level</h3>
      </div>
      <div class="col-sm-4">
        <h2 class="dash">-</h2>
      </div>
      <div class="col-sm-4">
        <form action="" method="post">
          <button type="submit" name="submit15" class="btn btn-primary btn3">View Answers</button>
        </form>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

<?php include 'includes/footer.php' ?>

</html>
