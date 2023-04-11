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
// not in practical start
include '36.php';
if (!isset($_GET['enroll'])){
    header('location:45-46index.php');
}
// not in practical end
if (!isset($_GET['enroll'])){
$enroll = $_GET['enroll'];
$s = "select * from student where enroll=$enroll";
$fill = mysqli_query($con,$s);
$result = mysqli_fetch_array($fill);
?>
 <div class="col-lg-3 m-auto">
 
 <form method="post">
 
 <br><br><div class="container">
 
 <div class="header">
 <h1 class="text-center"> student Update</h1>
 </div><br>

 
 <label> name: </label>
 <input type="text" name="name" class="form-control" value="<?php echo $result['name'] ?>"> <br>

 <label> Dob: </label>
 <input type="text" name="dob" class="form-control" value="<?php echo $result['dob'] ?>"> <br>

 <label> Departmant: </label>
 <input type="text" name="dept" class="form-control" value="<?php echo $result['dept'] ?>"> <br>

 <button class="btn btn-success" type="submit" name="done"> Submit </button><br>

 </div>
 </form>
<?php

 if (isset($_POST['done'])){
    
    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $dept = $_POST['dept'];
    $q = "UPDATE `student` SET `name`='$name', `dob`='$dob', `dept`='$dept' WHERE `enroll`=$enroll";
    $query = mysqli_query($con,$q);
    header('location:45-46index.php');
 }
}
?>
 </div>
</body>
</html>