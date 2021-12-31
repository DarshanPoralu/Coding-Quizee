<?php
include 'includes/head.php';
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<title>Coding Quizee | Scorecard | Leaderboard</title>
</head>

<body class="hom">
  <?php
  include 'includes/nav_score.php';
  ?>
<div class="container-fluid options">
  Quiz-Type
  <select id="selectOption">
    <option value="c_b">C Basic</option>
    <option value="c_i">C Intermediate</option>
    <option value="c_a">C Advanced</option>
    <option value="ca_b">C# Basic</option>
    <option value="ca_i">C# Intermediate</option>
    <option value="ca_a">C# Advanced</option>
    <option value="cp_b">C++ Basic</option>
    <option value="cp_i">C++ Intermediate</option>
    <option value="cp_a">C++ Advanced</option>
    <option value="j_b">Java Basic</option>
    <option value="j_i">Java Intermediate</option>
    <option value="j_a">Java Advanced</option>
    <option value="p_b">Python Basic</option>
    <option value="p_i">Python Intermediate</option>
    <option value="p_a">Python Advanced</option>
  </select>
</div>
<div class="container-fluid box">
  <table class="content-table sticky cont">
    <thead>
      <tr>
        <th>Rank</th>
        <th>Name</th>
        <th>Quiz Type</th>
        <th>Score</th>
      </tr>
    </thead>
    <tbody>
      <?php
      if(isset($_SESSION['sessionId'])){
      $sql = "SELECT rank_id, short, username, languagename, score FROM score s JOIN signin si ON s.email_id = si.email_id";
      $result = mysqli_query($conn, $sql);
      while($res = mysqli_fetch_array($result)){
       ?>
         <tr position=<?php echo $res['short']; ?>>
           <td><?php echo $res['rank']; ?></td>
           <td><?php echo $res['username']; ?></td>
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
<script type="text/javascript">
var rows = $("table.content-table tbody tr");
$("table").removeClass("cont");
var sort = rows.filter("[position=c_b]");
var sorted = new Array(sort.length);
for (var i = 0; i < sort.length; i++) {
  sorted[i] = sort[i].innerText.split("\t");
}
help(sorted, "c_b");


$('#selectOption').on('change', function() {
  var selected = this.value;
  var sort = rows.filter("[position=" + selected + "]");
  // console.log(sort);
  var sorted = new Array(sort.length);

  for (var i = 0; i < sort.length; i++) {
    sorted[i] = sort[i].innerText.replaceAll("\n          ", "").slice(1, -7);
    sorted[i] = sorted[i].split(" ");
    sorted[i][2] = sorted[i][2] + " " + sorted[i][3];
    sorted[i][3] = sorted[i][4];
    console.log(sorted);
  }
  help(sorted, selected);
});

function help(sorted, selected){
  sorted.sort(function(a, b) {
    return b[3] - a[3];
  });

  for (var i = 0; i < sorted.length; i++) {
    rows.filter("[position=" + selected + "]")[i].innerHTML = "\n        <td>" + (i + 1) + "</td>\n        <td>" + sorted[i][1] + "</td>\n        <td>" + sorted[i][2] + "</td>\n        <td>" + sorted[i][3] + "</td>\n      ";
  }
  rows.filter("[position=" + selected + "]").show();
  rows.not("[position=" + selected + "]").hide();
}

</script>
</body>
<?php include 'includes/footer.php' ?>

</html>
