<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </head>
    <body>
<body>
<?php
include('36.php');
$cust_no = $_GET['cust_no'];
$s = "select * from cust where cust_no=$cust_no";
$fill = mysqli_query($con,$s);
$result = mysqli_fetch_array($fill);
?>
 <div class="col-lg-3 m-auto">
 
 <form method="post">
 
 <br><br><div class="container">
 
 <div class="header">
 <h1 class="text-center"> customer Update</h1>
 </div><br>

 
 <label> cust_name: </label>
 <input type="text" name="cust_name" class="form-control" value="<?php echo $result['cust_name'] ?>"> <br>

 <label> item_purchase: </label>
 <input type="text" name="item_purchase" class="form-control" value="<?php echo $result['item_purchase'] ?>"> <br>

 <label> mob_no: </label>
 <input type="text" name="mob_no" class="form-control" value="<?php echo $result['mob_no'] ?>"> <br>

 <button class="btn btn-success" type="submit" name="done"> Submit </button><br>

 </div>
 </form>
<?php
 if (isset($_POST['done'])){
    
    $cust_name = $_POST['cust_name'];
    $item_purchase = $_POST['item_purchase'];
    $mob_no = $_POST['mob_no'];
    $q = "UPDATE `cust` SET `cust_name`='$cust_name', `item_purchase`='$item_purchase', `mob_no`='$mob_no' WHERE `cust_no`=$cust_no";
    $query = mysqli_query($con,$q);
    header('location:42.php');
 }
?>
 </div>
</body>
</html>