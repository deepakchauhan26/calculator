<?php
include 'db.php';
if(isset($_GET['expression']) && isset($_GET['result'])) {
    $expression = $_GET['expression'];
    $result = $_GET['result'];
    $createdOn = date("Y-m-d H:i:s.u");
    $conn = OpenCon();    
    $sql = "INSERT INTO calendar (expression, result, createdOn) VALUES ('$expression', '$result', '$createdOn')";
    $result = $conn->query($sql);
    CloseCon($conn);
   if($result) {
       echo '{
        "status": 201,
        "message":"Successfully!"
       }';
   }else {
    echo '{
        "err": 500,
        "message":"Unexpected error occurred"
       }';
   }
}
?>
D:\xamp\htdocs\calc\backend\listSavedSearches.php
