<!doctype html>
<html lang="en">

<?php
include '../includes/database.php';
session_start();
$language = str_replace('%20', ' ' ,$_GET['type']);
$email_id = $_SESSION['sessionId'];
include '../includes/ans_head.php';
 ?>

  <title>Coding Quizee | Answers | C Basic</title>
</head>

<body>
  <div class="container-fluid con1">
    <div class="container-fluid co_an">
      <h1 class="ac1"><?php echo $language; ?></h1>
      <a class="btn btn-primary but2" href="../indexans.php" role="button">Back</a>
    </div>

    <div class="container-fluid con_ans_exp">
      <?php
      $i = 1;
      $sql = "SELECT question, option1, option2, option3, option4, answer, explanation FROM Questions WHERE question_id in (SELECT question_id FROM Attempt WHERE email_id = '$email_id' and languagename = '$language')";
      $result = mysqli_query($conn, $sql);
      while($res = mysqli_fetch_array($result)){
       ?>
      <p class="sub1"> <?php echo (string)$i." . ".$res['question']; ?> </p>
      <p class="sub1">A) <?php echo $res['option1']; ?> <br>
                      B) <?php echo $res['option2']; ?> <br>
                      C) <?php echo $res['option3']; ?> <br>
                      D) <?php echo $res['option4']; ?> <br> </p>
            <p class="main">Answer: <?php echo $res['answer']; ?> <br></p>
            <p>
        <a class="btn btn-primary pri" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
          View Explanation
        </a>
      </p>
      <div class="collapse" id="collapseExample">
        <div class="card card-body txt">
          Explanation: <?php echo $res['explanation']; ?>
        </div>
      </div>
      <div class="size">

      </div>
    <?php  $i += 1; } ?>

    </div>
  </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
