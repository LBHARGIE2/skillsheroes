<?php
header('Content-Type: application/json');

$pdo = new PDO("mysql:host=localhost; dbname=destinations; charset=utf8", "root", "");

$query = $pdo->prepare("SELECT city, country, image, number_of_bookings FROM destinations ORDER BY number_of_bookings DESC");
$query->execute();

echo json_encode($query->fetchAll(PDO::FETCH_ASSOC));
