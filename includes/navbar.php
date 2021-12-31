<nav class="navbar navbar-dark navbar-expand-lg navb">
  <div class="container-fluid">
    <h1 class="head1">Coding Quizee</h1>
    <button class="navbar-toggler tog" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="index_abt.php">About</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Quiz
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="index.php#c">C</a></li>
            <li><a class="dropdown-item" href="index.php#ch">C#</a></li>
            <li><a class="dropdown-item" href="index.php#cp">C++</a></li>
            <li><a class="dropdown-item" href="index.php#j">Java</a></li>
            <li><a class="dropdown-item" href="index.php#p">Python</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Answers
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="indexans.php#c">C</a></li>
            <li><a class="dropdown-item" href="indexans.php#ch">C#</a></li>
            <li><a class="dropdown-item" href="indexans.php#cp">C++</a></li>
            <li><a class="dropdown-item" href="indexans.php#j">Java</a></li>
            <li><a class="dropdown-item" href="indexans.php#p">Python</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Scorecard
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="index_score1.php">Your scores</a></li>
            <li><a class="dropdown-item" href="index_score2.php">Leaderboard</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="index_con.php">Contact us</a>
        </li>
        <li class="nav-item">
          <?php if(isset($_SESSION['sessionId'])): ?>
            <a class="nav-link active" href="index.php"><?php echo $_SESSION['sessionUser'] ?></a>
            <?php else: ?>
            <a class="nav-link active" href="indexl.php">Login</a>
            <?php endif; ?>
        </li>
        <li class="nav-item">
          <?php if(isset($_SESSION['sessionId'])): ?>
            <a class="nav-link active" href="includes/sign_out.php">Sign out</a>
            <?php else: ?>
            <a class="nav-link active" href="indexsu.php">Sign up</a>
            <?php endif; ?>
        </li>
      </ul>
    </div>
  </div>
</nav>
