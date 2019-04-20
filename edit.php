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
  background: white;
  width: 100%;
  border-spacing: initial;
  margin: 2px 0px;
  word-break: break-word;
  table-layout: auto;
  line-height: 1.8em;
  color: #333;
  border-radius: 4px;
  padding: 20px 40px;
}

.demo-table td {
  padding: 15px 0px;
}
.demoInputBoxl {
  padding: 10px 100px;
  border: #a9a9a9 1px solid;
  border-radius: 5px;
}


.demoInputBoxs {
  padding: 10px 30px;
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
  max-width: 600px;
  margin: auto;
  opacity: 0.8;
}

</style>
</head>
<body style="background-image: url(images/bg.jpg); background-attachment: fixed; background-size:cover; ">
<?php
require 'db.php';
$id = $_GET['id'];
$sql = 'SELECT * FROM people WHERE id=:id';
$statement = $connection->prepare($sql);
$statement->execute([':id' => $id ]);
$person = $statement->fetch(PDO::FETCH_OBJ);
if (isset ($_POST['fullname'])  && isset($_POST['designation'])  && isset($_POST['birthday'])  && isset($_POST['nic'])  && isset($_POST['permaddress'])  && isset($_POST['curraddress'])  && isset($_POST['mobile'])  && isset($_POST['landphone'])  && isset($_POST['firstapp'])  && isset($_POST['retiredate'])  && isset($_POST['currdate'])  && isset($_POST['spouse'])  && isset($_POST['child1name'])  && isset($_POST['child1bday'])  && isset($_POST['child2name'])  && isset($_POST['child2bday'])  && isset($_POST['child3name'])  && isset($_POST['child3bday'])  && isset($_POST['child4name'])  && isset($_POST['child4bday']) ) {
  $fullname = $_POST['fullname'];
  $designation = $_POST['designation'];
  $birthday = $_POST['birthday'];
  $nic = $_POST['nic'];
  $permaddress = $_POST['permaddress'];
  $curraddress = $_POST['curraddress'];
  $mobile = $_POST['mobile'];
  $landphone = $_POST['landphone'];
  $firstapp = $_POST['firstapp'];
  $retiredate = $_POST['retiredate'];
  $currdate = $_POST['currdate'];
  $spouse = $_POST['spouse'];
  $child1name = $_POST['child1name'];
  $child1bday = $_POST['child1bday'];
  $child2name = $_POST['child2name'];
  $child2bday = $_POST['child2bday'];
  $child3name = $_POST['child3name'];
  $child3bday = $_POST['child3bday'];
  $child4name = $_POST['child4name'];
  $child4bday = $_POST['child4bday'];
  $sql = 'UPDATE people SET fullname=:fullname, designation=:designation, birthday=:birthday, nic=:nic, permaddress=:permaddress, curraddress=:curraddress, mobile=:mobile, landphone=:landphone, firstapp=:firstapp, retiredate=:retiredate, currdate=:currdate, spouse=:spouse, child1name=:child1name, child1bday=:child1bday, child2name=:child2name, child2bday=:child2bday, child3name=:child3name, child3bday=:child3bday, child4name=:child4name, child4bday=:child4bday WHERE id=:id';
  $statement = $connection->prepare($sql);
  if ($statement->execute([':fullname' => $fullname, ':designation' => $designation, ':birthday' => $birthday, ':nic' => $nic, ':permaddress' => $permaddress, ':curraddress' => $curraddress, ':mobile' => $mobile, ':landphone' => $landphone, ':firstapp' => $firstapp, ':retiredate' => $retiredate, ':currdate' => $currdate, ':spouse' => $spouse, ':child1name' => $child1name, ':child1bday' => $child1bday, ':child2name' => $child2name, ':child2bday' => $child2bday, ':child3name' => $child3name, ':child3bday' => $child3bday, ':child4name' => $child4name, ':child4bday' => $child4bday, ':id' => $id])) {
    header("Location: /");
  }



}


 ?>
<?php require 'header.php'; ?>
<br><br><br>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Update Employee</h2>
    </div>
    <div class="card-body">
      <?php if(!empty($message)): ?>
        <div class="alert alert-success">
          <?= $message; ?>
        </div>
      <?php endif; ?>
      <form method="post">
        <h3><b>Basic Information</b></h3>
        <br>
        <div class="form-group">
          <label for="id">Computer Number</label>
          <input value="<?= $person->id; ?>" type="text" name="id" id="id" class="form-control" autocomplete="off">
        </div>
        <div class="form-group">
          <label for="fullname">Full Name</label>
          <input type="text" value="<?= $person->fullname; ?>" name="fullname" id="fullname" class="form-control" autocomplete="off">
        </div>
        <div class="form-group">
          <label for="designation">Designation</label><br>
          <input type="text" value="<?= $person->designation; ?>" name="designation" id="designation" class="form-control" autocomplete="off">
        </div>
        <div class="form-group">
          <label for="birthday">Birthday</label>
          <input type="date" value="<?= $person->birthday; ?>" name="birthday" id="birthday" class="form-control" autocomplete="off">
        </div>
        <div class="form-group">
          <label for="nic">NIC</label>
          <input type="text" value="<?= $person->nic; ?>" name="nic" id="nic" class="form-control" autocomplete="off" maxlength="12">
        </div>
        <div class="form-group">
          <label for="permaddress">Permenent Address</label>
          <input type="text" value="<?= $person->permaddress; ?>" name="permaddress" id="permaddress" class="form-control" autocomplete="off">
        </div>
        <div class="form-group">
          <label for="curraddress">Current Address</label>
          <input type="text" value="<?= $person->curraddress; ?>" name="curraddress" id="curraddress" class="form-control" autocomplete="off">
        </div>
        <div class="form-group">
          <label for="mobile">Mobile Number</label>
          <input type="text" value="<?= $person->mobile; ?>" name="mobile" id="mobile" class="form-control" autocomplete="off" maxlength="10">
        </div>
        <div class="form-group">
          <label for="landphone">Land Phone Number</label>
          <input type="text" value="<?= $person->landphone; ?>" name="landphone" id="landphone" class="form-control" autocomplete="off" maxlength="10">
        </div>
        <br>
        <h3><b>Work Information</b></h3>
        <br>
        <div class="form-group">
          <label for="firstapp">First Appointment Date</label>
          <input type="date" value="<?= $person->firstapp; ?>" name="firstapp" id="firstapp" class="form-control" autocomplete="off">
        </div>
        <div class="form-group">
          <label for="retiredate">Retirement Date</label>
          <input type="date" value="<?= $person->retiredate; ?>" name="retiredate" id="retiredate" class="form-control" autocomplete="off">
        </div>
        <div class="form-group">
          <label for="currdate">Date of Appointment to the current post</label>
          <input type="date" value="<?= $person->currdate; ?>" name="currdate" id="currdate" class="form-control" autocomplete="off">
        </div>
        <br>
        <h3><b>Personal Information</b></h3>
        <br>
        <div class="form-group">
          <label for="spouse">Name of Spouse</label>
          <input type="text" value="<?= $person->spouse; ?>" name="spouse" id="spouse" class="form-control" autocomplete="off">
        </div>
        <div class="form-group">
          <label for="child1name">Child 01 - Name</label>
          <input type="text" value="<?= $person->child1name; ?>" name="child1name" id="child1name" class="form-control" autocomplete="off">
        </div>
        <div class="form-group">
          <label for="child1bday">Child 01 - Birthday</label>
          <input type="date" value="<?= $person->child1bday; ?>" name="child1bday" id="child1bday" class="form-control" autocomplete="off">
        </div>
        <div class="form-group">
          <label for="child2name">Child 02 - Name</label>
          <input type="text" value="<?= $person->child2name; ?>" name="child2name" id="child2name" class="form-control" autocomplete="off">
        </div>
        <div class="form-group">
          <label for="child2bday">Child 02 - Birthday</label>
          <input type="date" value="<?= $person->child2bday; ?>" name="child2bday" id="child2bday" class="form-control" autocomplete="off">
        </div>
        <div class="form-group">
          <label for="child3name">Child 03 - Name</label>
          <input type="text" value="<?= $person->child3name; ?>" name="child3name" id="child3name" class="form-control" autocomplete="off">
        </div>
        <div class="form-group">
          <label for="child3bday">Child 03 - Birthday</label>
          <input type="date" value="<?= $person->child3bday; ?>" name="child3bday" id="child3bday" class="form-control" autocomplete="off">
        </div>
        <div class="form-group">
          <label for="child4name">Child 04 - Name</label>
          <input type="text" value="<?= $person->child4name; ?>" name="child4name" id="child4name" class="form-control" autocomplete="off">
        </div>
        <div class="form-group">
          <label for="child4bday">Child 04 - Birthday</label>
          <input type="date" value="<?= $person->child4bday; ?>" name="child4bday" id="child4bday" class="form-control" autocomplete="off">
        </div>
        

        <div class="form-group" align="center">
          <button type="submit" class="btn btn-info">Update Employee</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php require 'footer.php'; ?>
<br><br>
<br><br>
</body>
</html>
