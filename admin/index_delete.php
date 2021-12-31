<!-- Header -->
<?php
  include '../includes/admin_head.php';
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <title>Coding Quizee | Admin | Modify | Delete</title>
</head>

<?php
  $language = 'C Basic';

  // Deletes a question from particular quiz based on Id entered by user
  if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $sql = "DELETE FROM Questions WHERE question_id = $id";
    $result = mysqli_query($conn, $sql);
  }
 ?>

<body>
  <!-- Navbar for modify -->
  <?php
    include '../includes/nav_modify.php';
    $language = 'C Basic';
   ?>

   <!-- Container with two columns -->
   <div class="row al">

     <!-- First column contains id input field to delete question from a particular quiz -->
     <div class="col-sm-5  add add1">
       <form method="post" action="">
       <div class="mb-3 add_cont container">
         <label for="formGroupExampleInput" class="form-label">Enter the ID of question to delete</label>
         <input type="text" class="form-control frm_cont" name="id" aria-describedby="inputGroupPrepend">
       </div>
       <div class="bt">
         <button type="submit" name="submit" class="btn btn-primary btn3">Delete</button>
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
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
