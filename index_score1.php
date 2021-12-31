<?php
include 'includes/head.php';
?>

  <title>Coding Quizee | Scorecard | Your Score</title>
</head>

<body class="hom">
  <?php
  include 'includes/nav_score.php';
  ?>
  <div class="container-fluid box bt">
    <table class="content-table sticky">
      <thead>
        <tr>
          <th>Date</th>
          <th>Quiz type</th>
          <th>Score</th>
        </tr>
      </thead>
      <tbody>
        <?php
        if(isset($_SESSION['sessionId'])){
        $email_id = $_SESSION['sessionId'];
        $sql = "SELECT date, languagename, score FROM score where email_id = '$email_id' ORDER BY date DESC";
        $result = mysqli_query($conn, $sql);
        while($res = mysqli_fetch_array($result)){
         ?>
        <tr>
          <td><?php echo $res['date']; ?></td>
          <td><?php echo $res['languagename']; ?></td>
          <td><?php echo $res['score']; ?></td>
        </tr>
      <?php
      }
    }
      ?>
      </tbody>
    </table>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
<?php include 'includes/footer.php' ?>

</html>
