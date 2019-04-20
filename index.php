
<body style="background-image: url(images/bg.jpg); background-attachment: fixed; background-size:cover;">

  <?php
require 'db.php';
$sql = 'SELECT * FROM people';
$statement = $connection->prepare($sql);
$statement->execute();
$people = $statement->fetchAll(PDO::FETCH_OBJ);
 ?>
<?php require 'header.php'; ?>

    
 
<!--
    <div>
      <br>
      <h3 align="center"><b><font color="black"> Search : </font>
      <input id="txt_searchall" type="text" placeholder="Ex : 123456" maxlength="6" autocomplete="off"></h3>

    </div>
-->
<br><br><br>
    <div class="card-body">
      <table border="2" bordercolor="black" align="center" id="t01"  class="blueTable" style='border-collapse:collapse; border: 5px;
  width: 90%; background-color: white; opacity: 0.8;' >
          <thead>
          <tr>
          <th><b>Action</b></th>
          <th><b>Computer Number</b></th>
          <th><b>Full Name</b></th><
          <th><b>Designation</b></th>
          <th><b>Birthday</b></th>
          <th><b>NIC</b></th>
          <th><b>Permenent Address</b></th>
          <th><b>Currrent Address</b></th>
          <th><b>Mobile Number</b></th>
          <th><b>Land Phone Number</b></th>
          <th><b>First Appointment Date</b></th>
          <th><b>Retirement Date</b></th>
          <th><b>Date of Appointment to the current post</b></th>
          <th><b>Name of Spouse</b></th>
          <th><b>Child 01 - Name</b></th>
          <th><b>Child 01 - Birthday</b></th>
          <th><b>Child 02 - Name</b></th>
          <th><b>Child 02 - Birthday</b></th>
          <th><b>Child 03 - Name</b></th>
          <th><b>Child 03 - Birthday</b></th>
          <th><b>Child 04 - Name</b></th>
          <th><b>Child 04 - Birthday</b></th>
        </tr>
        <thead>
        <tbody>
        <tr>
          <?php foreach($people as $person): ?>
          <td>
            &nbsp;&nbsp;
              <a href="edit.php?id=<?= $person->id ?>" class="btn btn-info">Edit</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <a onclick="return confirm('Are you sure you want to delete this entry?')" href="delete.php?id=<?= $person->id ?>" class='btn btn-danger'>Delete</a></td>
          <td><center><?= $person->id; ?></center></td>
          <td><?= $person->fullname; ?></td>
          <td><?= $person->designation; ?></td>
          <td><?= $person->birthday; ?></td>
          <td><?= $person->nic; ?></td>
          <td><?= $person->permaddress; ?></td>
          <td><?= $person->curraddress; ?></td>
          <td><?= $person->mobile; ?></td>
          <td><?= $person->landphone; ?></td>
          <td><?= $person->firstapp; ?></td>
          <td><?= $person->retiredate; ?></td>
          <td><?= $person->currdate; ?></td>
          <td><?= $person->spouse; ?></td>
          <td><?= $person->child1name; ?></td>
          <td><?= $person->child1bday; ?></td>
          <td><?= $person->child2name; ?></td>
          <td><?= $person->child2bday; ?></td>
          <td><?= $person->child3name; ?></td>
          <td><?= $person->child3bday; ?></td>
          <td><?= $person->child4name; ?></td>
          <td><?= $person->child4bday; ?></td>
         </tr>
         <tr class='notfound'>
              <td colspan='15'><center>No record found</center></td>
          </tr>
        <?php endforeach; ?>
        </tbody>
      </table>
      <br><br><br>
    </div>
  <?php require 'footer.php'; ?>
<!-- Script -->
        <script type='text/javascript'>
            $(document).ready(function(){

                // Search all columns
                $('#txt_searchall').keyup(function(){
                    // Search Text
                    var search = $(this).val();

                    // Hide all table tbody rows
                    $('table tbody tr').hide();

                    // Count total search result
                    var len = $('table tbody tr:not(.notfound) td:nth-child(2):contains("'+search+'")').length;

                    if(len > 0){
                      // Searching text in columns and show match row
                      $('table tbody tr:not(.notfound) td:contains("'+search+'")').each(function(){
                          $(this).closest('tr').show();
                      });
                    }else{
                      $('.notfound').show();
                    }
                    
                });

                // Search on name column only
                $('#compnumber').keyup(function(){
                    // Search Text
                    var search = $(this).val();

                    // Hide all table tbody rows
                    $('table tbody tr').hide();

                    // Count total search result
                    var len = $('table tbody tr:not(.notfound) td:nth-child(2):contains("'+search+'")').length;
                    
                    if(len > 0){
                      // Searching text in columns and show match row
                      $('table tbody tr:not(.notfound) td:contains("'+search+'")').each(function(){
                          $(this).closest('tr').show();
                      });
                    }else{
                      $('.notfound').show();
                    }
                    
                });
               
            });

            // Case-insensitive searching (Note - remove the below script for Case sensitive search )
            $.expr[":"].contains = $.expr.createPseudo(function(arg) {
                return function( elem ) {
                    return $(elem).text().toUpperCase().indexOf(arg.toUpperCase()) >= 0;
                };
            });
        </script>
<!--
 <script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 1; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
-->