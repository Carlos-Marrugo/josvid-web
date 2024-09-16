<?php
// Saving data from 
$courseName = $_GET['courseName'];
$price = $_GET['price'];
$imageURL = $_GET['imageURL'];

// Insert data on table
$connection_obj = mysqli_connect("localhost", "root", "", "test");  

if (!$connection_obj) {
    echo "Error No: " . mysqli_connect_errno();
    echo "Error Description: " . mysqli_connect_error();
    exit;
}

$query = "INSERT INTO usertem (courseName, price, URLCouse) VALUES ('$courseName', '$price', '$imageURL')";
$result = mysqli_query($connection_obj, $query) or die(mysqli_error($connection_obj));

// Verifying if insertion is succesfully
if ($result) {
    echo "El curso ha sido agregado al carrito con éxito.";
} else {
    echo "Error al agregar el curso al carrito.";
}

// Close the conexion 
mysqli_close($connection_obj);
?>