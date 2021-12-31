<!-- Header -->
<?php
include '../includes/admin_head.php';
?>

  <title>Coding Quizee | Admin</title>
</head>

<body class="hom">

  <!-- Navbar for admin panel -->
  <nav class="navbar navbar-dark navbar-expand-lg navb ans_nav">
    <div class="container-fluid">
      <h1 class="head1">Coding Quizee</h1>
      <button class="navbar-toggler tog" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item ">
            <a class="nav-link active" href="#">Admin</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Modifiy
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="index_add.php">Add</a></li>
              <li><a class="dropdown-item" href="index_edit.php">Edit</a></li>
              <li><a class="dropdown-item" href="index_delete.php">Delete</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="../includes/sign_out.php" tabindex="-1" aria-disabled="true">Sign out</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
    <div class="container-fluid box bt admin">
      <table class="content-table sticky">
        <thead>
          <tr>
            <th>Date</th>
            <th>Name</th>
            <th>Quiz type</th>
            <th>Score</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
          <!-- Retrives all users score from database.  -->
          <?php
          $sql = "SELECT date, username, languagename, score FROM score s JOIN signin si ON s.email_id = si.email_id ORDER BY date DESC";
          $result = mysqli_query($conn, $sql);
          while($res = mysqli_fetch_array($result)){
           ?>
          <tr>
            <td><?php echo $res['date']; ?></td>
            <td><?php echo $res['username']; ?></td>
            <td><?php echo $res['languagename']; ?></td>
            <td><?php echo $res['score']; ?></td>
            <!-- Deletes the score of particular user and quiz selected -->
            <td> <a href="../includes/delete.php?d=<?php echo $res['date']; ?>&u=<?php echo $res['username']; ?>&l=<?php echo $res['languagename']; ?>&s=<?php echo $res['score']; ?>"><i class="far fa-trash-alt del"></i></a> </td>
          </tr>
        <?php
        }
        ?>
        </tbody>
      </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    </body>


</html>
