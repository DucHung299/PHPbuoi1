    <?php
    try {
        $conn = new PDO("mysql: host=localhost; dbname=buoi5";"root"; "");
        $conn -> setAttribute(PDO:ATTR_ERRMODE, PDO:ERRMODE_EXCEPTION);
        $sql = "INSERT INTO `my_info` ('ho_ten', 'gioi_tinh', 'email', 'dia_chi', 'quoc_tich')
                VALUES (':ho_ten', ':gioi_tinh',':email',':dia_chi',':quoc_tich')";
        $stmt = $conn -> prepare($sql);
        $stmt->bindParam(':email',$ho_ten);
        $stmt->bindParam(':gioi_tinh',$gioi_tinh);
        $stmt->bindParam(':email',$email);
        $stmt->bindParam(':dia_chi',$dia_chi);
        $stmt->bindParam(':quoc_tich',$quoc_tich);

        $ho_ten = 'Nguyen Ba Khang';
        $gioi_tinh = 'Nam';
        $email = 'nguyenbakhang@gmail.com';
        $dia_chi = 'Ha Dong';
        $quoc_tich = 'Viet Nam';
        $stmt->execute();
        echo "New record created successfully";
        //SELECT
        $sql_1 = "SELECT * FROM my_info";
        $stmt = $conn -> prepare($sql);
        $stmt -> execute();
        $stmt -> setFetchMode(PDO::FETCH_ASSOC);
        foreach($stmt->fetchAll() as $rows) {
            echo 'stt'.$rows['stt'].'<br>';
            echo 'ho_ten'.$rows['ho_ten'].'<br>';
            echo 'gioi_tinh'.$rows['gioi_tinh'].'<br>';
            echo 'email'.$rows['email'].'<br>';
            echo 'dia_chi'.$rows['dia_chi'].'<br>';
            echo 'quoc_tich'.$rows['quoc_tich'].'<br>';
        }
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    //UPDATE
    $sql_2 = "UPDATE my_info SET email = :email WHERE ho_ten = :ho_ten";
    $stmt = $conn->prepare($sql_1);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':ho_ten', $full_names);
    $email = 'poseidon_new@sea.oc';
    $ho_ten = 'Poseidon';
    $stmt->execute();

    echo "updated successfully";

    //DELETE
    $sql_3 = "DELETE FROM my_contacts WHERE stt = :stt";
    $stmt = $conn->prepare($sql_3);
    $stmt->bindParam(':stt', $stt);
    // Giá trị
    $id = 6;
    $stmt->execute();
    echo "Deleted successfully";
    ?>
