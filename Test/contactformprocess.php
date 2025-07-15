<?php

/* Email Variables */

$emailSubject = 'contactformprocess!';
$webMaster = 'thepick@southeastern.edu';


/* Data Variables */

$email = $_POST['email'];
$name = $_POST['name'];
$course = $_POST['course'];
$instructor = $_POST['instructor'];
$classification = $_POST['classification'];
$title = $_POST['title'];
$file = $_FILE['file'];
$essay = $_POST['essay'];
$certification = $_POST['certification'];




$body = <<<EOD
<br><hr><br>
Name: $name <br>
Email: $email <br>
Course: $course <br>
Instructor: $instructor <br>
Classification: $classification <br>
Title: $title <br>
File: $file <br>
Essay: $essay <br>
Certification: $certification <br>
Classification: $classification <br>

EOD;
$headers = "From: $email\r\n";
$headers .= "Content-type: text/html\r\n";
$success = mail($webMaster, $emailSubject, $body,
$headers);


/* Results rendered as HTML */

$theResults = <<<EOD
<html>
<head>
<title>sent message</title>
<meta http-equiv="refresh" content="5;URL=http://english.selu.edu/pick/submit.html">
<style type="text/css">
<!--
body {
background-color: #444;
font-family: Verdana, Arial, Helvetica, sans-serif;
font-size: 20px;
font-style: normal;
line-height: normal;
font-weight: normal;
color: #fec001;
text-decoration: none;
padding-top: 200px;
margin-left: 150px;
width: 800px;
}




-->
</style>
</head>
<div align="center">Thank you for your submission. Your email will be answered as soon as possible!
</div>
</div>
</body>
</html>
EOD;
echo "$theResults";
?>