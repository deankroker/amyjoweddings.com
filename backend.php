<?php
	if(!empty($_POST['email']))
					{
						$to="dean@deankroker.com";
						$email = $_POST['email'];
						$name = $_POST['name'];
						$subject = $_POST['subject'];
						$message = $_POST['message'];
						$headers = "From:" . $email;
						echo mail($to,$subject,$message,$headers);
					}
?>