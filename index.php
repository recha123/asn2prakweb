<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Karyawan</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #fefaff;
            margin: 0;
            padding: 40px;
            color: #333;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h2 {
            color: #6a5acd;
        }

        a {
            text-decoration: none;
            background-color: #a7bfff;
            color: #fff;
            padding: 8px 16px;
            border-radius: 12px;
            font-weight: bold;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transition: background-color 0.3s;
        }

        a:hover {
            background-color: #859eff;
        }

        table {
            margin-top: 20px;
            border-collapse: collapse;
            width: 90%;
            max-width: 1000px;
            background-color: #fff;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 14px 20px;
            text-align: left;
        }

        th {
            background-color: #e0eaff;
            color: #333;
        }

        tr:nth-child(even) {
            background-color: #f9f9ff;
        }

        td a {
            background-color: #ffaad4;
            color: white;
            padding: 6px 10px;
            border-radius: 8px;
            font-size: 13px;
            margin-right: 4px;
            display: inline-block;
        }

        td a:hover {
            background-color: #f979bd;
        }
    </style>
</head>
<body>

    <h2>🌸 Data Karyawan 🌸</h2>
    <a href="tambah.php">➕ Tambah Data</a>

    <table>
        <tr>
            <th>NIP</th>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Departemen</th>
            <th>Email</th>
            <th>No Telepon</th>
            <th>Aksi</th>
        </tr>

        <?php
        $result = mysqli_query($conn, "SELECT * FROM karyawan");
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                <td>".$row['nip']."</td>
                <td>".$row['nama']."</td>
                <td>".$row['jabatan']."</td>
                <td>".$row['departemen']."</td>
                <td>".$row['email']."</td>
                <td>".$row['no_telepon']."</td>
                <td>
                    <a href='edit.php?nip=".$row['nip']."'>Edit</a>
                    <a href='hapus.php?nip=".$row['nip']."' onclick=\"return confirm('Yakin hapus?');\">Hapus</a>
                </td>
            </tr>";
        }
        ?>
    </table>

</body>
</html>
