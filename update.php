<?php
include('connection.php');
if(isset($_POST['done'])){
    $id = $_GET['id'];
    $customer_name = $_POST['customer_name'];
    $email_id = $_POST['email_id'];
    $ph_no = $_POST['ph_no'];
    $people_no = $_POST['people_no'];
    $address = $_POST['address'];
    $query = "UPDATE trips_data set id=$id, customer_name='$customer_name', email_id='$email_id', ph_no='$ph_no', people_no='$people_no', address='$address' WHERE id=$id";

    $data = mysqli_query($conn, $query);
    header('location:display.php');
}
?>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class = "col-lg-6 m-auto" style="float:center">
    <form action = "" method = "POST">
  <br><br><div class="card" style="float:center">

    <div class="card-header bg-dark">
        <h2 class="text-white text-center">Update Your Trip</h2>   
    </div>
    
        <label for="customer_name"> Custome Name: </label>
        <input type ="text" class="form-control" id="customer_name" placeholder="Enter Name" name="customer_name"/> <br>  
    
        <label for="email_id"> Email: </label>
        <input type ="text" class="form-control" id="email_id" placeholder="Enter Email" name="email_id"/><br>
    
        <label for="ph_no"> Phone Number: </label>
        <input type ="text" class="form-control" id="ph_no" placeholder="Enter Phone Number" name="ph_no"/><br>
    
        <label for="people_no"> People in Number: </label>
        <input type ="text" class="form-control" id="people_no" placeholder="Enter Number of people" name="people_no"/><br>
    
        <label for="address"> Address: </label>
        <input type ="text" class="form-control" id="address" placeholder="Enter Your Address" name="address"/><br>
    
    <button type="submit" class="btn btn-primary" name="done">Submit</button>
   </div>
  </form>
</div>
</body>
</html>