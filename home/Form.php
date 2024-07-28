<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ;
    $email = $_POST['email'] ;
    $phone = $_POST['phone'] ;
    $location = $_POST['location'] ;
    $area = $_POST['area'] ;
    $budget = $_POST['budget'] ;
    $requirement = $_POST['requirement'] ;

    $conn = new mysqli('localhost', 'root', '', 'interiordesign');
    if ($conn->connect_error) {
        die('Connection Failed: ' . $conn->connect_error);
    } else {
        $stmt = $conn->prepare('INSERT INTO home (name, email, phone, location, area, budget, requirement) VALUES (?, ?, ?, ?, ?, ?, ?)');
        if ($stmt) {
            $stmt->bind_param("sssssss", $name, $email, $phone, $location, $area, $budget, $requirement);
            $stmt->execute();
            $stmt->close();
            $conn->close();
            echo "<script>alert('Successful. Response submitted.');</script>";
            echo "<script>window.history.back();</script>";
        } else {
            echo "Error preparing statement: " . $conn->error;
        }
    }
}
