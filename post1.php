<?php

// set up variables to store all user input
$fullname = $_POST['fullname'];
$address = $_POST['address'];
$city = $_POST['city'];
$phone = $_POST['phone'];
$email = $_POST['email'];



if($_POST['SubmitThis']){
	$fullname = $_POST['fullname'];
	$address = $_POST['address'];
	$city = $_POST['city'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	
	$required = array('fullname', 'address', 'city', 'phone', 'email');
	$expected = array('fullname', 'address', 'city', 'phone', 'email');
	$missing = array();
	$thisUserInput = array('fullname', 'address', 'city', 'phone', 'email');
	$thisField = array('fullname', 'address', 'city', 'phone', 'email');
	
	foreach($expected as $thisField) {
		$thisUserInput = $_POST[$thisField];
		if (in_array($thisField, $required)){
			if (empty($thisUserInput)) {
				array_push($missing, $thisField);
			} else {
				${$thisfield} = $thisUserInput;
			}
		} else {
			${$thisfield} = $thisUserInput;
		}
	}
				

	
	if (empty($missing)){
		$tagStr = implode(", ", $tag);
		if (!empty($email)) {
			$email = "<a href='mailto:$email'>$email</a>";
		}

	
	
// use a variable to store the output.  The output ($output) will be printed below (line 34). 



$output = "
			<table>
			<tr><th>Full Name</th><td> $fullname </td></tr>
		    <tr><th>Address</th><td> $address </td></tr>
		   	<tr><th>City</th><td> $city </td></tr>
		   	<tr><th>Phone</th><td> $phone </td></tr>
		   	<tr><th>Email</th><td> <a href='mailto:$email'> $email </a></td></tr>
			</table>
			";
	

			
	} else {
		// empty($missing) is false --> $missing array is not empty -- prepare a message for the user

		$missingFieldList = implode(", ",$missing);
		$output = "The following fields are missing from your post, please go back and fill them in.  Thank you. <br>
						<b>Missing fields: $missingFieldList </b>
					";

	}


} else {
	$output = "Please post your message use <a href='post1.php'>this form</a>.";
}


?>
