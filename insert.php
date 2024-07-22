<?php

include 'connDB.php';

$form_type = $_POST['form_type'];
$params = [];
$sql = "";

switch ($form_type) {
    case 'Contact';
        $sql = "INSERT INTO CONTACT (Όνομα, Επώνυμο, Email, Θέμα, Αφήστε το μήνυμά σας) VALUES (?, ?, ?, ?, ?)";
        $params = [
            $_POST['Όνομα'],
            $_POST['Επώνυμο'],
            $_POST['Email'],
            $_POST['Θέμα'],
            $_POST['Αφήστε το μήνυμά σας']
        ];
        break;
}

try {
    $stmt = $conn->prepare($sql);
    $stmt->bind_param(str_repeat("s", count($params)), ...$params); // assuming all params are strings
    $stmt->execute();
    echo "New record created successfully";
} catch (mysqli_sql_exception $e) {
    echo "Error: " . $sql . "<br>" . $e->getMessage();
}

$conn->close();
?>