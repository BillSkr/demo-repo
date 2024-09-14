<?php

$server_name = "localhost";
$username = "root";
$password = "";
$database_name = "contact";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: ".$conn->connect_error);
} else {
    mysqli_set_charset($conn, 'utf8');
}

if(isset($POST['save']))
{
    $First_Name = $_POST['First Name'];
    $Last_Name = $_POST['Last Name'];
    $Email = $_POST['Email'];
    $Subject = $_POST['Subject'];
    $Message = $_POST['Message'];

    $sql_query = "INSERT INTO contact (First_Name,Last_Name,Email,subject,message) VALUES ('$First_Name', '$Last_Name', '$Email', '$Subject', '$Message')";
    
    if (mysqli_query($conn, $sql_query))
        {
            echo "New details entry inserted successfully !";
        }
        else{
            echo "Error: " . $sql . "" . mysqli_error($conn);
        }
        mysqli_close($conn);
}
?>