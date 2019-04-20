<!DOCTYPE html>
<html>
<head>

<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "crud");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
	$fullname = mysqli_real_escape_string($link, $_REQUEST['fullname']);
    $designation = mysqli_real_escape_string($link, $_REQUEST['designation']);
    $id = mysqli_real_escape_string($link, $_REQUEST['id']);
    $birthday = mysqli_real_escape_string($link, $_REQUEST['birthday']);
    $nic = mysqli_real_escape_string($link, $_REQUEST['nic']);
   	$permaddress = mysqli_real_escape_string($link, $_REQUEST['permaddress']);
    $curraddress = mysqli_real_escape_string($link, $_REQUEST['curraddress']);
    $mobile = mysqli_real_escape_string($link, $_REQUEST['mobile']);
    $landphone = mysqli_real_escape_string($link, $_REQUEST['landphone']);
    $firstapp = mysqli_real_escape_string($link, $_REQUEST['firstapp']);
    $retiredate = mysqli_real_escape_string($link, $_REQUEST['retiredate']);
    $currdate = mysqli_real_escape_string($link, $_REQUEST['currdate']);
    $spouse = mysqli_real_escape_string($link, $_REQUEST['spouse']);
    $child1name = mysqli_real_escape_string($link, $_REQUEST['child1name']);
    $child1bday = mysqli_real_escape_string($link, $_REQUEST['child1bday']);
    $child2name = mysqli_real_escape_string($link, $_REQUEST['child2name']);
    $child2bday = mysqli_real_escape_string($link, $_REQUEST['child2bday']);
    $child3name = mysqli_real_escape_string($link, $_REQUEST['child3name']);
    $child3bday = mysqli_real_escape_string($link, $_REQUEST['child3bday']);
    $child4name = mysqli_real_escape_string($link, $_REQUEST['child4name']);
    $child4bday = mysqli_real_escape_string($link, $_REQUEST['child4bday']);

?>

</head>

<body>

<?php
 
// Attempt insert query execution
$sql = "INSERT INTO people (fullname,  designation,  id,  birthday,  nic,  permaddress,  curraddress,  mobile,  landphone,  firstapp,  retiredate,  currdate,  spouse,  child1name,  child1bday,  child2name,  child2bday,  child3name,  child3bday,  child4name,  child4bday) VALUES ('$fullname', '$designation', '$id', '$birthday', '$nic', '$permaddress', '$curraddress', '$mobile', '$landphone', '$firstapp', '$retiredate', '$currdate', '$spouse', '$child1name', '$child1bday', '$child2name', '$child2bday', '$child3name', '$child3bday', '$child4name', '$child4bday')";
if(mysqli_query($link, $sql)){
    header("Location: /");
    
}
else{
    header("Location: /error.php");
}


/*
{
    echo "<style> body, html {color: #A09E8B} </style>";
    echo "<p style='color:red; font-size:24px'>".ERROR: Could not able to execute $sql." . mysqli_error($link)</p>";
}
 */
 
// Close connection
mysqli_close($link);
?>

</body>
</html>

