<?php
include('connection.php');
if(isset($_POST['done'])){
  $customer_name = $_POST['customer_name'];
  $email_id = $_POST['email_id'];
  $ph_no = $_POST['ph_no'];
  $people_no = $_POST['people_no'];
  $address = $_POST['address'];
  $query = "SELECT * FROM trips_data";
 
}
?>
<html>
<head>
  <title>

  </title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">
  <div class="col-lg-12">
    <br><br>
    <h1 class="text-warning text-center">Your Existing trip</h1>
    <table class="table table-striped table-hover table-bordered">
      <tr>
        <th>Id</th>
        <th>Customer Name</th>
        <th>Email Id</th>
        <th>Phone Number</th>
        <th>Number in People</th>
        <th>Address</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    <?php 
        include "connection.php";
        $query="SELECT * FROM trips_data";
        $data=mysqli_query($conn, $query);
        while($res = mysqli_fetch_array($data)){
    ?>
    <tr>
        <td><?php echo $res['id']; ?></td>
        <td><?php echo $res['customer_name']; ?></td>
        <td><?php echo $res['email_id']; ?></td>
        <td><?php echo $res['ph_no']; ?></td>
        <td><?php echo $res['people_no']; ?></td>
        <td><?php echo $res['address']; ?></td>
        <td><button type="button" class="btn btn-primary"><a class="text-white" href="update.php?id=<?php echo $res['id'];?>">Update</a></button></td>
        <td><button type="button" class="btn btn-danger"><a class="text-white" href="delete.php?id=<?php echo $res['id'];?>">Delete</a></button></td>
      </tr>
      <?php
        }
      ?>
      
    </table>
</body>