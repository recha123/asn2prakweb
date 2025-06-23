<?php include 'koneksi.php'; ?>

<?php
$nip = $_GET['nip'];
$query = "DELETE FROM karyawan WHERE nip=$nip";

if (mysqli_query($conn, $query)) {
    header("Location: index.php");
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}
?>