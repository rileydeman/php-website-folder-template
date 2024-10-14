<?php
$status = ["status" => "403", "message" => "Forbidden"];

header('Content-Type: application/json');
echo json_encode($status);
?>