<?php
include 'dbconnect.php';
$sql='select * from notes';
$result=mysqli_query($con,$sql); ?>
<table class="table" id="myTable">
<thead>
  <tr>
    <th scope="col">Sno</th>
    <th scope="col">Title</th>
    <th scope="col">Description</th>
    <th scope="col">Actions</th>
  </tr>
</thead>
<tbody>
  <?php
  $sno=0;
  while ($row=mysqli_fetch_assoc($result)) {
    $sno=$sno+1;
  echo "
  <tr>
    <th scope='row'>". $sno ."</th>
    <td> ". $row['title']."</td>
    <td> ". $row['description']."</div></td>
    <td><button class='edit btn btn-sm btn-primary' id=". $row['sno'].">Edit</button> <button class='delete btn btn-sm btn-primary' id=d". $row['sno'].">Delete</button></td>
  </tr>";
}
  ?>
 
</tbody>
</table>


