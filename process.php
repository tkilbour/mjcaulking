<?php
$mailto2 = "mandjcaulking@q.com";
$subject = "Form Results";
foreach($_POST as $key => $value) {
	$message .= $key . ': ' . $value;
	$message .= "\n";
}
if(mail($mailto, $subject, $message) && mail($mailto2, $subject, $message)) {
	header('Location: http://mjcaulking.com/thanks.html');
}
?>
