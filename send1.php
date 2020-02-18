<?php
$fio = $_POST['fio'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$nameSite = $_POST['nameSite'];

   
    $result = array(
      'fio' => $_POST["fio"],
      'email' => $_POST["email"],
      'tel' => $_POST["tel"],
      'nameSite' => $_POST["nameSite"]
    );

    echo json_encode($result);
 
?>