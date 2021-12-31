<?php
  require_once '../includes/database.php';
  $q_id = (int)$_REQUEST['id'];
  if($q_id !== ""){
    $sql = "SELECT question, option1, option2, option3, option4, answer, explanation FROM Questions WHERE question_id = $q_id";
    $result = mysqli_query($conn, $sql);
    $res = mysqli_fetch_array($result);
    $question = $res['question'];
    $option1 = $res['option1'];
    $option2 = $res['option2'];
    $option3 = $res['option3'];
    $option4 = $res['option4'];
    $answer = $res['answer'];
    $explanation = $res['explanation'];
    $result = array("$question", "$option1", "$option2", "$option3", "$option4", "$answer", "$explanation");
    $myJSON = json_encode($result);
    echo $myJSON;
  }
 ?>
