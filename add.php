
<html>
<head>
<title>Employee Registration Form</title>
<style>

body{
	
	font-family:calibri;
}



.error-message {
	padding: 7px 10px;
	background: #fff1f2;
	border: #ffd5da 1px solid;
	color: #d6001c;
	border-radius: 4px;
}
.success-message {
	padding: 7px 10px;
	background: #cae0c4;
	border: #c3d0b5 1px solid;
	color: #027506;
	border-radius: 4px;
}
.demo-table {
	width: 100%;
	border-spacing: initial;
	margin: 2px 0px;
	word-break: break-word;
	table-layout: auto;
	line-height: 1.8em;
	color: #333;
	border-radius: 4px;
	padding: 20px 40px;
	opacity: 0.8;
}

.demo-table td {
	padding: 15px 0px;
}
.demoInputBoxl {
	padding: 10px 10px;
	border: #a9a9a9 1px solid;
	border-radius: 5px;
	width: 100%;
}


.demoInputBoxs {
  padding: 10px 10px;
  border: #a9a9a9 1px solid;
  border-radius: 5px;
}
.btnRegister {
	padding: 10px 30px;
	background-color: #3367bb;
	border: 5;
	color: #FFF;
	cursor: pointer;
	border-radius: 4px;
	margin-left: 10px;
  float: right;
  font-size: 150%;
  font-family: arial;
  line-height: 80%;
}
.content {
  max-width: 70%;
  margin-left: 15%;
  margin-right: 15%;
  opacity: 0.8;
}

</style>
</head>
<body style="background-image: url(images/bg.jpg); background-attachment: fixed; background-size:cover; ">

<?php require 'header.php'; ?>
<br><br><br>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Add Employee</h2>
    </div>



<div class="content">

<form action="add_db.php" method="post">

<table border="0" width="1000" align="center"  class="demo-table">
<col width="25%">
<col width="75%">
<tr><td colspan="2"><h2>Basic Information</h2></td></tr>
<tr>
<td>Full Name</td>
<td><input type="text" autocomplete="off" class="demoInputBoxl" name="fullname" value="<?php if(isset($_POST['fullname'])) echo $_POST['fullname']; ?>"></td>
</tr>

<tr>
<td>Designation</td>
<td><select type="select"  autocomplete="off" class="demoInputBoxl" name="designation" value="<?php if(isset($_POST['designation'])) echo $_POST['designation']; ?>">
    <option value="Locomotive Driver">Locomotive Driver</option>
    <option value="Driver's Assistant">Driver's Assistant</option>
    <option value="Shunting Engine Driver">Shunting Engine Driver</option>
	</select>
</td>
</tr>

<tr>
<td>Computer Number</td>
<td><input type="text" autocomplete="off" class="demoInputBoxs" name="id" maxlength="6" value="<?php if(isset($_POST['id'])) echo $_POST['id']; ?>"></td>
</tr>


<tr>
<td>Birthday</td>
<td><input type="date"  autocomplete="off" class="demoInputBoxs" name="birthday" value="<?php if(isset($_POST['birthday'])) echo $_POST['birthday']; ?>"></td>
</tr>

<tr>
<td>NIC Number</td>
<td><input type="text" autocomplete="off"  class="demoInputBoxl" name="nic" maxlength="12" value="<?php if(isset($_POST['nic'])) echo $_POST['nic']; ?>"></td>
</tr>

<tr>
<td>Permanent Address</td>
<td>
<textarea rows="5" cols="16"  autocomplete="off" class="demoInputBoxl" name="permaddress" value="<?php if(isset($_POST['permaddress'])) echo $_POST['permaddress']; ?>"></textarea></td>
</tr>

<tr>
<td>Current Address</td>
<td>
<textarea rows="5" cols="16"  autocomplete="off" class="demoInputBoxl" name="curraddress" value="<?php if(isset($_POST['curraddress'])) echo $_POST['curraddress']; ?>"></textarea></td>
</tr>

<tr>
<td>Mobile Number</td>
<td><input type="text"  autocomplete="off" class="demoInputBoxs" name="mobile" value="<?php if(isset($_POST['mobile'])) echo $_POST['mobile']; ?>"></td>
</tr>

<tr>
<td>Land Phone Number</td>
<td><input type="text" class="demoInputBoxs" autocomplete="off" name="landphone" value="<?php if(isset($_POST['landphone'])) echo $_POST['landphone']; ?>"></td>
</tr>
<tr><td colspan="2"><h2>Work Information</h2></td></tr>
<tr>
<td>First Appointment Date</td>
<td><input type="date" class="demoInputBoxs" autocomplete="off"  name="firstapp" value="<?php if(isset($_POST['firstapp'])) echo $_POST['firstapp']; ?>"></td>
</tr>

<tr>
<td>Retirement Date</td>
<td><input type="date" class="demoInputBoxs"  autocomplete="off" name="retiredate" value="<?php if(isset($_POST['retiredate'])) echo $_POST['retiredate']; ?>"></td>
</tr>

<tr>
<td>Date of Appointment to the current post</td>
<td><input type="date" class="demoInputBoxs"  autocomplete="off" name="currdate" value="<?php if(isset($_POST['currdate'])) echo $_POST['currdate']; ?>"></td>
</tr>
<tr><td colspan="2"><h2>Personal Information</h2></td></tr>
<tr>
<td>Name of Spouse</td>
<td><input type="text" class="demoInputBoxl"  autocomplete="off" name="spouse" value="<?php if(isset($_POST['spouse'])) echo $_POST['spouse']; ?>"></td>
</tr>

<tr>
<td>Child 01 - Name</td>
<td><input type="text" class="demoInputBoxl"  autocomplete="off" name="child1name" value="<?php if(isset($_POST['child1name'])) echo $_POST['child1name']; ?>"></td>
</tr>

<tr>
<td>Child 01 - Birthday</td>
<td><input type="date" class="demoInputBoxs"  autocomplete="off" name="child1bday" value="<?php if(isset($_POST['child1bday'])) echo $_POST['child1bday']; ?>"></td>
</tr>


<tr>
<td>Child 02 - Name</td>
<td><input type="text" class="demoInputBoxl"  autocomplete="off" name="child2name" value="<?php if(isset($_POST['child2name'])) echo $_POST['child2name']; ?>"></td>
</tr>

<tr>
<td>Child 02 - Birthday</td>
<td><input type="date" class="demoInputBoxs"  autocomplete="off" name="child2bday" value="<?php if(isset($_POST['child2bday'])) echo $_POST['child2bday']; ?>"></td>
</tr>

<tr>
<td>Child 03 - Name</td>
<td><input type="text" class="demoInputBoxl"  autocomplete="off" name="child3name" value="<?php if(isset($_POST['child3name'])) echo $_POST['child3name']; ?>"></td>
</tr>

<tr>
<td>Child 03 - Birthday</td>
<td><input type="date" class="demoInputBoxs"  autocomplete="off" name="child3bday" value="<?php if(isset($_POST['child3bday'])) echo $_POST['child3bday']; ?>"></td>
</tr>

<tr>
<td>Child 04 - Name</td>
<td><input type="text" class="demoInputBoxl"  autocomplete="off" name="child4name" value="<?php if(isset($_POST['child4name'])) echo $_POST['child4name']; ?>"></td>
</tr>

<tr>
<td>Child 04 - Birthday</td>
<td><input type="date" class="demoInputBoxs"  autocomplete="off" name="child4bday" value="<?php if(isset($_POST['child4bday'])) echo $_POST['child4bday']; ?>"></td>
</tr>

<tr>
<td colspan="2">

	<center>
<input type="submit" value="SUBMIT" class="btn btn-info"></center></td>
</tr>
</table>
</form>
</div>
<br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><hr>
<br><br>
<br><br><hr>
<?php require 'footer.php'; ?>

</body>
</html>