<?php
  include '../includes/database.php';
  session_start();
  $time = 10;
  $language = str_replace('%20', ' ' ,$_GET['type']);
  $email_id = "";
  if(strpos($language, "Intermediate")){
    $time = 15;
  } else if(strpos($language, "Advanced")){
    $time = 20;
  }


// If logged in select random 10 questions
  if(isset($_SESSION['sessionId'])){
    $question_ids = [];
    $sql = "SELECT question_id FROM Questions ORDER BY RAND() LIMIT 10";
    $result = mysqli_query($conn, $sql);

    // Push the id's of questions  into array
    while($res = mysqli_fetch_array($result)){
      array_push($question_ids, $res['question_id']);
    }

  // Delete the previous questions that exist
  $email_id = $_SESSION['sessionId'];
  $sql = "SELECT question_id FROM attempt";
  $result = mysqli_query($conn, $sql);
  while($res = mysqli_fetch_array($result)){
    $sql = "DELETE FROM attempt WHERE languagename = '$language' and email_id = '$email_id'";
    $result = mysqli_query($conn, $sql);
    break;
  }

  // Insert the id's of questions into attempt table
  foreach($question_ids as $question_id){
    $sql = "INSERT INTO attempt VALUES ('$email_id', '$language', '$question_id')";
    $result = mysqli_query($conn, $sql);
  }
}

  // Insert score into database after submitted
  if(isset($_POST['submit'])){
    if($_SESSION['sessionId']){
    $rank = '1';
    $short = $_GET['short'];
    $score = $_COOKIE['score'];
    $date = date('Y-m-d');
    $sql = "INSERT INTO score VALUES ('$rank', '$short', '$language', '$score', '$date', '$email_id')";
    $result = mysqli_query($conn, $sql);
    if($result){
      header("Location: ../index.php?success=quiz_given");
      exit();
    }
  } else {
    header("Location: ../index.php?success=quiz_given(Not_logged_in)");
  }
  }
?>

<!doctype html>
<html lang="en">

<?php include '../includes/ans_head.php' ?>

  <title>Coding Quizee | Questions | C Basic</title>
</head>

<body>
  <div class="container-fluid con1">
    <div class="container-fluid con2">
      <?php include '../includes/progress.php' ?>

      <div id="clockdiv" class="conatiner cck">
        <div class="cck1">
          <i class="fas fa-clock clk"></i>
        </div>
        <div class="cck2">
          <p id='count'>10 : 00</p>
        </div>
      </div>

      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary but1" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Submit
      </button>

      <!-- Modal -->
      <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title tit" id="staticBackdropLabel">C Basic</h5>
              <button type="button" class="btn-close cls" data-bs-dismiss="modal" aria-label="Close">X</button>
            </div>
            <div class="modal-body bod">
              <ul>
                <li class="f"></li>
                <li class="s"></li>
                <li>Please review your answers once before submitting, if you have reviewed, then you can submit and check your score in scorecard(Only if you have logged in).</li>
              </ul>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <form action="" method="post">
                <button type="submit" name="submit" id="sub_but" class="btn btn-primary but3">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>


    </div>
    <div class="container-fluid con3">
      <div id="carouselExampleControls" class="carousel slide" data-bs-interval="False">
        <div class="carousel-inner">
          <?php
            $result = 0;
            $answers = [];
            $choices = [];
            if($email_id == ""){
              $sql = "SELECT question, option1, option2, option3, option4, answer FROM Questions WHERE languagename = '$language' ORDER BY RAND() LIMIT 10";
              $result = mysqli_query($conn, $sql);
            }
            else{
              $sql = "SELECT question, option1, option2, option3, option4, answer FROM Questions WHERE question_id in (SELECT question_id FROM Attempt WHERE email_id = '$email_id' and languagename = '$language')";
              $result = mysqli_query($conn, $sql);
            }
            $i = 11;
            while($res = mysqli_fetch_array($result)){
              array_push($answers, $res['answer']);
              array_push($choices, (string)$i);
              if($i == 11){
          ?>
          <div class="carousel-item active 11">
            <?php
          }
          else{
           ?>
           <div class="carousel-item <?php echo $i; ?>">
             <?php } ?>
            <div class="container-fluid con4">
              <p class="sub"><?php echo ($i/11)." . ".$res['question']; ?></p>
            </div>
            <div class="container-fluid con5">
              <div class="choice-container">
                <div class="choice-prefix">
                  <p class="pre A">A</p>
                </div>
                <div class="choice-text">
                  <p class="text A"><?php echo $res['option1']; ?></p>
                </div>
              </div>
              <div class="choice-container">
                <div class="choice-prefix">
                  <p class="pre B">B</p>
                </div>
                <div class="choice-text">
                  <p class="text B"><?php echo $res['option2']; ?></p>
                </div>
              </div>
              <div class="choice-container">
                <div class="choice-prefix">
                  <p class="pre C">C</p>
                </div>
                <div class="choice-text">
                  <p class="text C"><?php echo $res['option3']; ?></p>
                </div>
              </div>
              <div class="choice-container">
                <div class="choice-prefix">
                  <p class="pre D">D</p>
                </div>
                <div class="choice-text">
                  <p class="text D"><?php echo $res['option4']; ?></p>
                </div>
              </div>
            </div>
          </div>
          <?php
          $i += 11;
          }
          ?>
        <a class="carousel-control-prev ctr ctr1" href="#carouselExampleControls" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon ctrl-prev" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next ctr ctr2" href="#carouselExampleControls" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon ctrl-nxt" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </a>
      </div>

    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="calculate.js" charset="utf-8"></script>
  <script src="timer.js" charset="utf-8"></script>
  <script type="text/javascript">
  const start = <?php echo "$time"; ?>;
  time_cal(start);
  </script>
  <script type="text/javascript">
  var answers = <?php echo json_encode($answers); ?>;
  var choices = <?php echo json_encode($choices); ?>;
  var score = 0;
  var option = [1, 1, 1, 1, 1, 1, 1, 1, 1, 1];
  var choice = [1, 1, 1, 1, 1, 1, 1, 1, 1, 1];
  var s = new Array(10);
  var count = 0;
  cal(answers, choices, score, option, choice, s, count);
  </script>
</body>

</html>
