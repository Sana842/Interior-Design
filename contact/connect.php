<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ;
    $email = $_POST['emi'] ;
    $phone = $_POST['phon'] ;
    $address = $_POST['addr'] ;
    $date = $_POST['date'] ;
    $mess = $_POST['mess'] ;
  

    $conn = new mysqli('localhost', 'root', '', 'interiordesign');
    if ($conn->connect_error) {
        die('Connection Failed: ' . $conn->connect_error);
    } else {
        $stmt = $conn->prepare("INSERT INTO contact (name, email, phone, address, date, message) VALUES (?, ?, ?, ?, ?, ?)");
        if ($stmt) {
            $stmt->bind_param("ssssss", $name, $email, $phone, $address, $date, $mess);
            $stmt->execute();
            $stmt->close();
            $conn->close();
            echo "<script>alert('Successful. We will be in touch with you soon.');</script>";
            
        // echo "<script type='text/javascript'> document.location ='pumbling.php'; </script>";

           
        } else {
            echo "Error preparing statement: " . $conn->error;
        }
    }
}

?>