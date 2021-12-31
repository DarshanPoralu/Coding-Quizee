<!-- Header -->
<?php
ob_start();
include '../includes/admin_head.php';
$language = 'C Basic';
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <title>Coding Quizee | Admin | Modify | Add</title>
</head>

<body>
  <!-- Navbar for modify -->
  <?php
    include '../includes/nav_modify.php';
   ?>

  <!-- Container with two columns -->
   <div class="row al">

     <!-- First column contains input fields to add question to a particular quiz -->
     <div class="col-sm-5  add add1">
       <form method="post" action="">
       <?php  include '../includes/forms.php' ?>
       <div class="bt">
         <button type="submit" name="submit" class="btn btn-primary btn3">Add</button>
       </div>
       <div class="container_inf">
       </div>
       </form>
     </div>

     <!-- Second column contains all the questions of a particular quiz -->
     <div class="col-sm-6 add">
       <div class="container-fluid opt">

         <!-- Form to choose quiz type selected -->
         <form action="" method="post">
           Select a Quiz-Type to delete

           <!-- Contains a select tag and container that retrives all questions from database -->
           <?php include '../includes/questions.php'; ?>
   </div>

   <!-- Question data to enter to database -->
   <?php
   if(isset($_POST['submit'])){
     if(isset($_COOKIE["language"])){
       $language = $_COOKIE["language"];
       echo "$language";
     }

     $question = $_POST['question'];
     $option1 = $_POST['option1'];
     $option2 = $_POST['option2'];
     $option3 = $_POST['option3'];
     $option4 = $_POST['option4'];
     $answer = $_POST['inlineRadioOptions'];
     $explanation = $_POST['explanation'];
     $sql = "INSERT INTO Questions(languagename, question, option1, option2, option3, option4, answer, explanation) VALUES ('$language', '$question', '$option1', '$option2', '$option3', '$option4', '$answer', '$explanation')";
     $result = mysqli_query($conn, $sql);
   }
    ?>

   <!-- To add text to placeholder -->
   <script type="text/javascript">
     $('#question').attr('placeholder',' To print satements in different lines please add <br> at the of end line.\n Example: Hello print <br> this on two different lines.\n \n Will be printed as: \n Hello print \n this on two different lines.');
   </script>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
