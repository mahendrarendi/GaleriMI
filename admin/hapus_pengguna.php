<?php
include("../database/config.php");

if (isset($_GET['id'])) {
    $userId = $_GET['id'];
    
    $query = "DELETE FROM users WHERE id = $userId";
    $result = mysqli_query($conn, $query);

    if ($result) {
        // Redirect back to pengguna.php after successful deletion
        header("Location: pengguna.php");
        exit();
    } else {
        echo "Error deleting user: " . mysqli_error($conn);
    }
} else {
    echo "Invalid user ID.";
}

mysqli_close($conn);
?>
