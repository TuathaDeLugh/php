<!DOCTYPE html>
<html lang="en">
    <!-- I don't know what to do in 43 so I added dynamically update & delete -->
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simple-notify@0.5.5/dist/simple-notify.min.css" />
        <script src="https://cdn.jsdelivr.net/npm/simple-notify@0.5.5/dist/simple-notify.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </head>
    <body>
    <?php
    //  info not in old42 
    // echo $_SERVER['HTTP_REFERER'];
    function alert($status,$text){
        ?><script>
        new Notify({
    status: '<?php echo $status; ?>',
    title: 'Database',
    text: '<?php echo $text; ?>',
    effect: 'slide',
    speed: 500,
    customClass: null,
    customIcon:null,
    showIcon: true,
    showCloseButton: true,
    autoclose: true,
    autotimeout: 3000,
    gap: 20,
    distance: 20,
    type: 1,
    position: 'right top'
  })
        
        </script>
                  <?php
                }
                error_reporting(E_ERROR | E_PARSE);
        if (str_contains($_SERVER['HTTP_REFERER'], '45.php')) {
            alert('success', 'Data Upadatd');
        }
        if (str_contains($_SERVER['HTTP_REFERER'], '40.php')) {
            alert('success', 'Data Inserted');
        }
        if (str_contains($_SERVER['HTTP_REFERER'], '46.php')) {
            alert('success', 'Data Deleted');
        }
   ?>
    
    <div class="container">
 <div class="col-lg-12">
 <br><br>
 <!-- main practical start -->
 <h1 class="text-center" > Display customer Data </h1>
 <br>
 <a href="41.php">  <button class="btn-info btn text-white">insert</button></a>  <br><br>
 <table class="table table-striped">
 
 <tr class="bg-dark text-center">

 <th class="text-white">enroll</th>
 <th class="text-white"> name </th>
 <th class="text-white"> dob  </th>
 <th class="text-white"> dept </th>

 <th class="text-white"> Delete </th>
 <th class="text-white"> Update </th>

 </tr >
 <?php

 include '36.php'; 
 $q = "select * from student ";

 $query = mysqli_query($con,$q);

 while($result = mysqli_fetch_array($query)){
 ?>
 <tr class="text-center">
 <td> <?php echo $result['enroll'];  ?> </td>
 <td> <?php echo $result['name'];  ?> </td>
 <td> <?php echo $result['dob'];  ?> </td>
 <td> <?php echo $result['dept'];  ?> </td>
 <td>  <a href="46.php?enroll=<?php echo $result['enroll']; ?>" class="text-white"> <button class="btn-danger btn">Delete</button> </a>   </td>
 <td>  <a href="45.php?enroll=<?php echo $result['enroll']; ?>" class="text-white"><button class="btn-primary btn"> Update </button></a>  </td>
 </tr>
 <?php 
 }
  ?>
 </table>  

 </div>
 <!-- practical done -->
 </div>
 </body>
</html>