<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title> HTML AND CSS DEMO </title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
$fnameErr = $lnameErr = $emailErr = $confirmemailErr = $phnErr = $delErr = $cardErr = "";
$fname = $lname = $email = $confirmemail = $phone = $card = $delivery = "" ;
if($_SERVER["REQUEST_METHOD"] == "POST") {   
if(empty($_POST["fname"])) {     
$fnameErr = "First Name is required";   
}  
elseif(!preg_match("/^[a-zA-Z ]*$/",$_POST["fname"])) {
$fnameErr = "Only letters and white space allowed";
}
else{     
$fname = test_input($_POST["fname"]);   
}   

if(empty($_POST["lname"])) {     
$lnameErr = "Last Name is required";   
}  
elseif(!preg_match("/^[a-zA-Z ]*$/",$_POST["lname"])) {
$lnameErr = "Only letters and white space allowed";
}
else{     
$lname = test_input($_POST["lname"]);   
}

if(empty($_POST["email"])) {     
$emailErr = "Email is required";   
} 
elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {  
$emailErr = "Invalid email format";}   
else{     
$email = test_input($_POST["email"]);   
}

if(empty($_POST["confirmemail"])) {     
$confirmemailErr = "Please confirm your email!";   
} 
elseif(!filter_var($_POST["confirmemail"], FILTER_VALIDATE_EMAIL)){  
$confirmemailErr = "Invalid email format";
}   
else{     
$confirmemail = test_input($_POST["confirmemail"]);   
}

if(empty($_POST["phone"])) {  
$phnErr = "Phone number is required";
}
elseif(!preg_match("/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/", $_POST["phone"])){
$phnErr = "The phone number is invalid";
}
else{     
$phone = test_input($_POST["phone"]);   
}

if(empty($_POST["delivery"])) {    
$delErr = "Please enter delivery instructions, for eg: call 999-999-9999 on arrival.";  
} 
else{    
$delivery = test_input($_POST["delivery"]);  
}
}

if(empty($_POST["card"])) 
{    
$cardErr = "Please choose payment method";  
} 
else {    
$card = test_input($_POST["card"]);  
}
}

function test_input($data){   
$data = trim($data);   
$data = stripslashes($data);   
$data = htmlspecialchars($data);   
return $data;
}
?>

1. Have a Coffee Lover's Account? <br> <br>
<a class = "signin" href = "http://www.w3schools.com/"> Sign In </a> </span> <br> <br>
<form enctype="multipart/form-data" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>
First Name * 
<input type="text" name="fname" size="20"> <br> <br>
Last Name *  
<input type="text" name="lname" size="20"> <br> <br>
Email Address * 
<input type="text" name="email" size="20"> <br> <br>
Confim Email *
<input type="text" name="confirmemail" size="20"> <br> <br>
Phone Number * 
<input type="tel" name="phone"> <br> <br>
Delivery Instructions * <br/>
<textarea name="delivery" maxlength="1000" cols="40" rows="3"></textarea><br/>
<hr/>
2. PAY YOUR ORDER * <br> <br>
METHOD * 
<input type="radio" name="card" value="CreditCard">Credit card
<input type="radio" name="card" value="GiftCard">Gift Card
<input type="radio" name="card" value="Cash">Cash <br> <br>
<input name="submit" type="submit" value="Pay">
<input type="reset" value="Reset"> <br> <br> 
<hr>
Your credit card transaction is being processed by Coffee Lover's...
</form>
</body>
</html>







