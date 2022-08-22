<?php
include 'db.php';
    $conn = OpenCon();
    $sql = "SELECT * FROM calendar order by id desc";
    $result = $conn->query($sql);
    while($row = mysqli_fetch_array($result)) {
        $rows[] = $row;
    }
    CloseCon($conn);
    echo json_encode($rows);
?>
