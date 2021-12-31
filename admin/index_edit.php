<!-- Header -->
<?php
ob_start();
include '../includes/admin_head.php';
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <title>Coding Quizee | Admin | Modify | Delete</title>
</head>

<?php
  $language = 'C Basic';

// Question data to update a selected question to database
  if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $question = $_POST['question'];
    $option1 = $_POST['option1'];
    $option2 = $_POST['option2'];
    $option3 = $_POST['option3'];
    $option4 = $_POST['option4'];
    $answer = $_POST['inlineRadioOptions'];
    $explanation = $_POST['explanation'];
    $sql = "UPDATE Questions SET question = '$question', option1 = '$option1', option2 = '$option2', option3 = '$option3', option4 = '$option4', answer = '$answer', explanation = '$explanation', languagename = '$language'  WHERE question_id = $id";
    $result = mysqli_query($conn, $sql);
  }
 ?>

<body>
  <!-- Navbar for modify -->
  <?php
    include '../includes/nav_modify.php';
   ?>

   <!-- Container with two columns -->
   <div class="row al">

     <!-- First column contains input fields to edit a particular question -->
     <div class="col-sm-5  add add1">
       <form method="post" action="">

         <!-- evertime onkeyup calls GetDetail function  -->
         <div class="mb-3 add_cont container">
           <label for="formGroupExampleInput" class="form-label">Enter the ID of question to edit</label>
           <input type="text" class="form-control frm_cont sb" name="id" aria-describedby="inputGroupPrepend" onkeyup="GetDetail(this.value)" value="">
         </div>

         <?php  include '../includes/forms.php' ?>

         <div class="bt">
           <button type="submit" name="submit" class="btn btn-primary btn3">Edit</button>
         </div>
       </form>
     </div>

     <!-- Second column contains all the questions of a particular quiz -->
     <div class="col-sm-6 add">
       <div class="container-fluid opt">
         <form action="" method="post">
           Select a Quiz-Type to delete
           <?php include '../includes/questions.php'; ?>
         </div>


    <script>
            // GetDetail gets triggred all the time for id input field
            function GetDetail(str) {

                // if string length is zero, then all input fields are made empty
                if (str.length == 0) {
                  $("#question").val("");
                  $("#option1").val("");
                  $("#option2").val("");
                  $("#option3").val("");
                  $("#option4").val("");
                  $("#inlineRadio1").prop("checked", false);
                  $("#inlineRadio2").prop("checked", false);
                  $("#inlineRadio3").prop("checked", false);
                  $("#inlineRadio4").prop("checked", false);
                  $("#explanation").val("");
                  return;
                }

                else {


                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function () {
                        if (this.readyState == 4 &&
                                this.status == 200) {
                            var myObj = JSON.parse(this.responseText);
                            $("#question").val(myObj[0]);
                            $("#option1").val(myObj[1]);
                            $("#option2").val(myObj[2]);
                            $("#option3").val(myObj[3]);
                            $("#option4").val(myObj[4]);
                            if(myObj[5] === 'A'){
                              $("#inlineRadio1").prop("checked", true);
                            } else if (myObj[5] === 'B') {
                              $("#inlineRadio2").prop("checked", true);
                            } else if (myObj[5] === 'C') {
                              $("#inlineRadio3").prop("checked", true);
                            } else{
                              $("#inlineRadio4").prop("checked", true);
                            }
                            $("#explanation").val(myObj[6]);
                        }
                    };
                    xmlhttp.open("GET", "request_id.php?id=" + str, true);
                    xmlhttp.send();
                }
            }
        </script>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
