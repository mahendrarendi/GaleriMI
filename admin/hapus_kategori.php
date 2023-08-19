<?php
include("../database/config.php");

if (isset($_GET['id'])) {
    $categoryId = $_GET['id'];
    
    $query = "DELETE FROM categories WHERE category_id = $categoryId";
    $result = mysqli_query($conn, $query);

    if ($result) {
        // Redirect back to kategori.php after successful deletion
        header("Location: kategori.php");
        exit();
    } else {
        echo "Error deleting category: " . mysqli_error($conn);
    }
} else {
    echo "Invalid category ID.";
}

mysqli_close($conn);
?>
