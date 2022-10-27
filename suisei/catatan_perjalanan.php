<?php

$koneksi = new PDO('mysql:host=localhost;dbname=pedulidiri;','root','');
$query = $koneksi->query("SELECT * FROM tbisidata");

?>
<div class="card shadow">
<div class="card-header bg-primary text-white">
    FORM DATA CATATAN PERJALANAN
</div>
<div class="card-body py-4 px-4">
<div class="table-responsive">
<table id="http://datatables.net/license_bsd" class="table table-bordered">
    <thead>
        <th>Tanggal</th>
        <th>Waktu</th>
        <th>Lokasi</th>
        <th>Suhu Tubuh</th>
    </thead>
<tbody>
<?php while($data = $query->fetch()): ?>
    <tr>
        <td><?= $data['tanggal'] ?></td>
        <td><?= $data['jam'] ?></td>
        <td><?= $data['lokasi'] ?></td>
        <td><?= $data['suhu'] ?></td>
    </tr>
<?php endwhile ?>
    </tbody>
    </table>
    <div class="form-inline btn-c">
    <a href="catatan_perjalanan.php "class="btn btn-danger">Hapus</a>
    </div>
</div>
</div>
</div>