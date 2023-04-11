<html>
    <body>
        <form action="41.php" method="post">
            Enter Student Name : 
            <input type="text" name="name" id=""><br>
            Enter Enrollment : 
            <input type="text" name="enroll" id=""><br>
            Enter DOB : 
            <input type="date" name="dob" id=""><br>
            Enter Department : 
            <input type="text" name="dept" id=""><br>
            <input type="submit" value="SUBMIT" name="submit">
        </form>
    </body>
</html>

<?php
if (isset($_POST['submit'])){
    $con = mysqli_connect("localhost","root","");
    mysqli_select_db($con,"db");
    $name = $_POST['name'];
    $enroll = $_POST['enroll'];
    $dob = $_POST['dob'];
    $dept = $_POST['dept'];
    $q = "insert into student values('$enroll','$name','$dob','$dept')";
    // $c = "create table student(name varchar(30),enroll varchar(12),dob varchar(8),dept varchar(20))";
    if(isset($con))
    {
        echo "Connect to Mysql";
    }
    else{
        echo "Couldn't connect ".mysqli_error($con);
    }
    // if(mysqli_query($con,$c))
    // {
    //     echo "<br>Table Created!";
    // }
    if(mysqli_query($con,$q))
    {
        echo "<br>Data Inserted!";
        header('location:45-46index.php');
    }
    mysqli_close($con);
}
?>