<?php
include("csv.php");
$csv= new csv();
if (isset($_POST['sub'])) {
    $csv->import($_FILES['file']['name']);
   
}
?>

<!DOCTYPE html>
<html >

<body>
<form method="post" enctype="multipart/form-data">
     <p>Filed:</p>
    <input type= "file" name="file">
    <br>
    <p>File 2:</p>
    <input type= "file" name= "file2">
    <br
    <br>
    <input type="submit" name="sub" value= "Import" >
    
</body>
</html>
