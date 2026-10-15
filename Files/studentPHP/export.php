<?php
// export.php
include 'config.php';
// Memaksa browser mendownload berkas sebagai file Excel (.xls)
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=Laporan_Mahasiswa.xls");
header("Pragma: no-cache");
header("Expires: 0");
$query = "SELECT students.*, majors.name AS major_name 
          FROM students 
          JOIN majors ON students.major_id = majors.id 
          ORDER BY students.id DESC";
$result = mysqli_query($conn, $query);
?>
<table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jurusan</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
<td>{$no}</td>
<td>'{$row['nim']}</td>
<td>{$row['name']}</td>
<td>{$row['major_name']}</td>
</tr>";
            $no++;
        }
        ?>
    </tbody>
</table>