<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET["id"])) {
        $kategori_id = $_GET["id"];

        // Lakukan kueri untuk mendapatkan data kategori berdasarkan $kategori_id
        include("../database/config.php");
        $query = "SELECT * FROM categories WHERE category_id = '$kategori_id'";
        $result = mysqli_query($conn, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $data_kategori = mysqli_fetch_assoc($result);

            // Tampilkan formulir untuk mengonfirmasi penghapusan kategori
            echo '<p>Anda yakin ingin menghapus kategori ini?</p>';
            echo '<form method="post" action="">
                    <input type="hidden" name="kategori_id" value="' . $kategori_id . '">
                    <button type="submit" name="hapus" class="btn btn-danger">Ya, Hapus</button>
                    <a href="kategori.php" class="btn btn-secondary">Batal</a>
                  </form>';
        } else {
            echo '<p>Data kategori tidak ditemukan.</p>';
            echo '<a href="kategori.php" class="btn btn-secondary">Kembali</a>';
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["kategori_id"]) && isset($_POST["hapus"])) {
        $kategori_id = $_POST["kategori_id"];

        // Lakukan kueri untuk menghapus data kategori
        include("../database/config.php");
        $query = "DELETE FROM categories WHERE category_id = '$kategori_id'";
        $result = mysqli_query($conn, $query);

        if ($result) {
            header("Location: kategori.php");
            exit();
        } else {
            $error = "Gagal menghapus kategori.";
        }

        mysqli_close($conn);
    }
}
?>
