<?php
include_once 'db.php';

// Set headers
header('Content-Type: application/json');

// GET request - Retrieve all users
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $users = array();
        while ($row = $result->fetch_assoc()) {
            $users[] = $row;
        }
        echo json_encode($users);
    } else {
        echo json_encode(array('message' => 'No users found.'));
    }
}

// Other CRUD operations (POST, PUT/PATCH, DELETE) can be similarly implemented
