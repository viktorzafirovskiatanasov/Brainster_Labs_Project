<?php include("db.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Clients</title>
    <meta charset="utf-8" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />

    <!-- Latest compiled and minified Bootstrap 4.6 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous" />
    <!-- CSS script -->
    <link rel="stylesheet" href="./css/main.css" />
    <!-- Latest Font-Awesome CDN -->
    <script src="https://kit.fontawesome.com/0e37b883f4.js" crossorigin="anonymous"></script>
</head>

<body>

    <table class="table table-striped table-dark">
        <?php $query = "SELECT * FROM students ORDER BY id ASC" ;
        if($records = mysqli_query($conn, $query)){
            if(mysqli_num_rows($records) > 0){ ?>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Име и Презиме</th>
            <th scope="col">Компанија</th>
            <th scope="col">Имејл</th>
            <th scope="col">Телефон</th>
            <th scope="col">Тип на студент</th>
        </tr>
        </thead>
        <?php while($row = mysqli_fetch_array($records)){ ?>
        <tr>
            <th scope="row"><?php echo $row["id"]; ?></th>
            <td><?php echo $row["nameSurname"]; ?></td>
            <td><?php echo $row["companyName"]; ?></td>
            <td><?php echo $row["email"]; ?></td>
            <td><?php echo $row["phoneNumber"]; ?></td>
            <td><?php echo $row["studentType"]; ?></td>
        </tr>
        <?php
        }
        mysqli_free_result($records);
    } 
    else{
        echo '<script>alert("Нема податоци во датабазата")</script>';
        echo "<script>window.location = 'form.php'</script>";
    }
    }?>
    </table>
    <div class="text-center">
        <a href="form.php">
            <button type="button" class="btn text-white p-3">Почетна</button>
        </a>
    </div>
</body>

</html>