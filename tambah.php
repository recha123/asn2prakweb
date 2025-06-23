<?php include 'koneksi.php'; ?>

<style>
    body {
        font-family: 'Segoe UI', sans-serif;
        background-color: #f0f8ff;
        color: #333;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 40px;
    }

    h2 {
        color: #4b6cb7;
    }

    form {
        background-color: #ffffff;
        padding: 25px 40px;
        border-radius: 20px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        width: 100%;
        max-width: 400px;
    }

    label {
        display: block;
        margin-top: 15px;
        font-weight: 600;
        color: #555;
    }

    input[type="text"] {
        width: 100%;
        padding: 10px 12px;
        margin-top: 5px;
        border: 1px solid #ccc;
        border-radius: 12px;
        outline-color: #a3d5ff;
        font-size: 14px;
    }

    button {
        margin-top: 25px;
        padding: 10px 20px;
        background: linear-gradient(135deg, #4b6cb7, #182848);
        color: white;
        border: none;
        border-radius: 15px;
        font-size: 16px;
        cursor: pointer;
        transition: 0.3s;
    }

    button:hover {
        background: linear-gradient(135deg, #6a89cc, #1e3c72);
    }

    .message {
        margin-top: 20px;
        padding: 10px;
        background-color: #d4edda;
        border-left: 5px solid #28a745;
        color: #155724;
        border-radius: 8px;
    }

    .error {
        background-color: #f8d7da;
        border-left: 5px solid #dc3545;
        color: #721c24;
    }
</style>

<h2>Form Tambah Data Karyawan 🌼</h2>

<form method="POST" action="">
    <label for="nip">NIP:</label>
    <input type="text" name="nip" required>

    <label for="nama">Nama:</label>
    <input type="text" name="nama" required>

    <label for="jabatan">Jabatan:</label>
    <input type="text" name="jabatan" required>

    <label for="departemen">Departemen:</label>
    <input type="text" name="departemen" required>

    <label for="email">Email:</label>
    <input type="text" name="email" required>

    <label for="no_telepon">No Telepon:</label>
    <input type="text" name="no_telepon" required>

    <button type="submit" name="simpan">💾 Simpan</button>
</form>

<?php
if (isset($_POST['simpan'])) {
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $departemen = $_POST['departemen'];
    $email = $_POST['email'];
    $no_telepon = $_POST['no_telepon'];

    $query = "INSERT INTO karyawan (nip, nama, jabatan, departemen, email, no_telepon) 
              VALUES ('$nip', '$nama', '$jabatan', '$departemen', '$email', '$no_telepon')";

    if (mysqli_query($conn, $query)) {
        echo "<div class='message'>Data berhasil ditambahkan! 🎉</div>";
    } else {
        echo "<div class='message error'>Error: " . $query . "<br>" . mysqli_error($conn) . "</div>";
    }
}
?>
