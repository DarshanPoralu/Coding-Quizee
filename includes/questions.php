      <select id="selectOption" name="type">
        <option value="C Basic">C Basic</option>
        <option value="C Intermediate">C Intermediate</option>
        <option value="C Advanced">C Advanced</option>
        <option value="C# Basic">C# Basic</option>
        <option value="C# Intermediate">C# Intermediate</option>
        <option value="C# Advanced">C# Advanced</option>
        <option value="C++ Basic">C++ Basic</option>
        <option value="C++ Intermediate">C++ Intermediate</option>
        <option value="C++ Advanced">C++ Advanced</option>
        <option value="Java Basic">Java Basic</option>
        <option value="Java Intermediate">Java Intermediate</option>
        <option value="Java Advanced">Java Advanced</option>
        <option value="Python Basic">Python Basic</option>
        <option value="Python Intermediate">Python Intermediate</option>
        <option value="Python Advanced">Python Advanced</option>
      </select>
      <button type="submit" name="submit1" class="btn btn-primary btn4">Submit</button>
    </form>
  </div>

  <div class="container-fluid con_ans_exp">
    <?php
    if(isset($_POST['submit1'])){
      $language = $_POST['type'];
      setcookie('language', $_POST['submit1'], time() + 3600, '/');
    }
    $i = 1;
    $sql = "SELECT question_id, question, option1, option2, option3, option4, answer, explanation FROM Questions WHERE languagename = '$language'";
    $result = mysqli_query($conn, $sql);
    while($res = mysqli_fetch_array($result)){
     ?>
     <p class="main">Question ID: <?php echo $res['question_id']; ?> </p>
    <p class="sub"> <?php echo (string)$i." . ".$res['question']; ?> </p>
    <p class="sub1">A) <?php echo $res['option1']; ?> <br>
                    B) <?php echo $res['option2']; ?> <br>
                    C) <?php echo $res['option3']; ?> <br>
                    D) <?php echo $res['option4']; ?> <br> </p>
          <p class="main">Answer: <?php echo $res['answer']; ?> <br></p>
          <p>
            <a class="btn btn-primary pri" data-bs-toggle="collapse" href="#multiCollapseExample<?php echo $i; ?>" + role="button" aria-expanded="false" aria-controls="multiCollapseExample<?php echo $i; ?>">View Explanation</a>
          </p>
          <div class="collapse multi-collapse" id="multiCollapseExample<?php echo $i; ?>">
            <div class="txt">
              Explanation: <?php echo $res['explanation']; ?>
            </div>
          </div>
    <div class="size">
    </div>
  <?php  $i += 1; } ?>

  </div>

</div>
