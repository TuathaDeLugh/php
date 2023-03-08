<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</head>

<body>
    <?php
    include('36.php');
    ?>
    <div class="col-lg-3 m-auto">
        <div class="container">

            <div class="header">
                <h3 class="text-center"> Search
                </h3>
                <form action="47.php" method="post">
                    <label> cust_name: </label>
                    <input type="text" name="cust_name" class="form-control"
                        value="<?php if (isset($_POST['cust_name'])) {
                            echo $_POST['cust_name'];
                        } ?>"><br>
                    <button class="btn btn-success" type="submit" name="done"> Search </button>
                </form>
            </div><br>
            <table class="table table-striped" id="table">

                <tr class="bg-dark text-center">

                    <th class="text-white">cust_no</th>
                    <th class="text-white"> cust_name </th>
                    <th class="text-white"> item_purchase </th>
                    <th class="text-white"> mob_no </th>
                </tr>
                <?php
                if (isset($_POST['done'])) {
                    $cust_name = $_POST['cust_name'];
                    include '36.php';
                    $q = "select * from cust where cust_name='$cust_name'";

                    $query = mysqli_query($con, $q);

                    while ($result = mysqli_fetch_array($query)) {
                        ?>
                        <tr class="text-center">
                            <td>
                                <?php echo $result['cust_no']; ?>
                            </td>
                            <td>
                                <?php echo $result['cust_name']; ?>
                            </td>
                            <td>
                                <?php echo $result['item_purchase']; ?>
                            </td>
                            <td>
                                <?php echo $result['mob_no']; ?>
                            </td>
                        </tr>
                        <?php
                    }
                }
                ?>
            </table>
        </div>
    </div>
</body>
</html>