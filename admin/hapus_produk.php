<?php
include("../database/config.php");

if (isset($_GET['id'])) {
    $productId = $_GET['id'];
    
    $query = "DELETE FROM products WHERE product_id = $productId";
    $result = mysqli_query($conn, $query);

    if ($result) {
        // Redirect back to kategori.php after successful deletion
        header("Location: produk.php");
        exit();
    } else {
        echo "Error deleting product: " . mysqli_error($conn);
    }
} else {
    echo "Invalid produk ID.";
}

mysqli_close($conn);
?>
