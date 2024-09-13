<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $servername = "localhost";
    $database = "buoi5";
    $username = "root";
    $password = "";
    //SELECT
    $dbh = mysqli_connect(hostname:'localhost', ussername:'root', password:'', databsename: 'buoi5');
    if (!$dbh){
        die("Unable to connect to MySQL: ".mysqli_connect_error());
    }
    $sql_stmt = "SELECT *FROM my_info";
    $results = mysqli_query(mysql: $dbh, query: $sql_stmt);
    if(!$results){
        die("Database access failed".mysqli_connect_error());
    }
    $rows = mysqli_num_rows(results: $results);
    if($rows) {
        while ($rows = mysquli_fetch_array($rows)){
            echo 'stt'.$rows['stt'].'<br>';
            echo 'ho_ten'.$rows['ho_ten'].'<br>';
            echo 'gioi_tinh'.$rows['gioi_tinh'].'<br>';
            echo 'email'.$rows['email'].'<br>';
            echo 'dia_chi'.$rows['dia_chi'].'<br>';
            echo 'quoc_tich'.$rows['quoc_tich'].'<br>';
        }
    }
    mysqli_close($dbh);

    //INSERT
    $dbh = mysqli_connect(hostname:'localhost', ussername:'root', password:'', databsename: 'buoi5');
    if (!$dbh){   
        die("Unable to connect to MySQL: " . mysqli_error());
    }
    if (!mysqli_select_db($dbh, 'my_personal_contacts')){    
        die("Unable to select database: " . mysql_error());
    }
    $sql_stmt = "INSERT INTO `my_contacts` (`ho_ten`,`gioi_tinh`,`email`,`dia_chi`,`quoc_tich`)";
    $sql_stmt .= "VALUES('Poseidon','Nu','poseidon456@gmail.com','Troy','Ithaca')";  
    $result = mysqli_query($dbh, $sql_stmt);
    if (!$result) {
        die("Adding record failed: " . mysqli_error()); 
    } else {
        echo "Poseidon has been successfully added to your contacts list";
    }
    mysqli_close($dbh);

    //UPDATE
    $dbh = mysqli_connect('localhost', 'root', 'melody');
    if (!$dbh){ 
        die("Unable to connect to MySQL: " . mysqli_error());
    }
    if (!mysqli_select_db($dbh,'my_personal_contacts')){    
        die("Unable to select database: " . mysql_error());
    }
    $sql_stmt = "UPDATE `my_info` SET `email` = 'poseidon@ocean.oc'";
    $sql_stmt .= "WHERE `stt` = 6";
    $result = mysqli_query($dbh,$sql_stmt);
    if (!$result) {
        die("Deleting record failed: " . mysqli_error());
    } else {
        echo "ID number 5 has been successfully updated";
    }
    mysqli_close($dbh);

    //DELETE
    $dbh = mysqli_connect('localhost', 'root', 'melody');
    if (!$dbh){   
        die("Unable to connect to MySQL: " . mysqli_error());
    }
    if (!mysqli_select_db($dbh,'my_personal_contacts')){     
        die("Unable to select database: " . mysqli_error());
    }
    $stt = 5
    $sql_stmt = "DELETE FROM `my_info` WHERE `stt` = $stt";
    $result = mysqli_query($dbh,$sql_stmt); 
    if (!$result) {
        die("Deleting record failed: " . mysqli_error());
        // Thông báo lỗi nếu thực thi thất bại 
    } else {
        echo "ID number $id has been successfully deleted";
    }
    mysqli_close($dbh);

    ?>
</body>
</html>