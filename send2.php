<?php

$fio = $_POST['fio'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$nameSite = $_POST['nameSite'];

// $fio = $_POST['name'];
// $email = $_POST['phone'];

$fio = htmlspecialchars($fio);
$email = htmlspecialchars($email);
$tel = htmlspecialchars($tel);
$fio = urldecode($fio);
$email = urldecode($email);
$tel = urldecode($tel);
$fio = trim($fio);
$email = trim($email);
$tel = trim($tel);


//$fio = "Дмитрий";
//$email = "+37529211321323213";
//echo $fio;
//echo $email;
$message2 = '<p style="color:red">Имя -'.$fio.'</p><p>Телефон -'.$tel.'</p>';

$message = '  <table  width="width: 600px" bgcolor="black" cellpadding="0" cellspacing="0" border="0" style="width: 100%;font-family: Arial, Helvetica, sans-serif; font-size: 16px;padding: 20px 0px; " >
    <tr>
      <td style="text-align: center;"><img src="img/mail.png" alt="" ></td>
    </tr>
    <tr>
      <td><h1 style="color:white; text-align: center;">Заявка с сайта <a href="http://biz-up.by" target="_blank" style="color:white;text-decoration-line: none">biz-up.by</a></h1></td>
    </tr>
    <tr style="color:white;text-align: center">
      <td>ФИО: '.$fio.'</td>
    </tr>
    
    <tr style="color:white;text-align: center">
      <td style="padding-top: 10px;">Телефон:  '.$tel.'</td>
    </tr>
    <tr style="color:white;text-align: center">
      <td style="padding-top: 10px;">Email:  '.$email.'</td>
    </tr>
    <tr>
      <td style="padding: 10px">&nbsp;</td>
    </tr>
  </table>';

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
if (mail($nameSite ,"Новая заявка", $message,$headers))
 {     
    $result = array(
    	'name' => $_POST["fio"]
    );
    echo json_encode($result);
} else {
    echo "при отправке сообщения возникли ошибки";
}

?>