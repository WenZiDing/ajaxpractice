<?php

if($_POST["type"] == '2'){
  $num = $_POST['num'];
  $num =  $num+1;
  $returndata = $num;
  echo json_encode($returndata);
}

if($_POST['type'] == '3'){
  $num = $_POST['num'];
  $num =  $num+10;
  $returndata = $num;
  echo json_encode($returndata);
}

if($_POST['type'] == '4'){
  $num = $_POST['num'];
  $num =  0;
  $returndata = $num;
  echo json_encode($returndata);
}

if($_POST['type'] == '5'){
  $num = $_POST['num']+$_POST['plusnum'];
  echo json_encode($num);
}

if($_POST['type'] == '6'){
  $num = $_POST['num'] - $_POST['lessnum'];
  echo json_encode($num);
}
if($_POST['type'] == ''){
  
}


?>