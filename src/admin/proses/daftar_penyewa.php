<?php
include('koneksi.php');

$jenis_kamar_filter = isset($_GET['jenis_kamar']) ? $_GET['jenis_kamar'] : '';


$query = "SELECT 
tbl_penyewa.id_sewa AS id_penyewa,
tbl_penyewa.nama,
tbl_penyewa.no_hp,
tbl_jenis_kamar.jenis_kamar AS jenis_kamar, 
tbl_penyewa.cekin,
tbl_penyewa.cekout,
tbl_penyewa.jumlah_kamar,
tbl_penyewa.total,
tbl_jenis_kamar.harga
FROM 
tbl_penyewa
JOIN 
tbl_jenis_kamar ON tbl_penyewa.id_kamar = tbl_jenis_kamar.id_kamar";

if ($jenis_kamar_filter != '') {
    $query .= " WHERE tbl_jenis_kamar.jenis_kamar = '" . $jenis_kamar_filter . "'";
}

$result = mysqli_query($koneksi, $query);

if ($result && mysqli_num_rows($result) > 0) { ?>
    <table class="min-w-full divide-y divide-gray-200">
    <thead class="bg-gray-50">
    <tr>
    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID Penyewa</th>
    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama</th>
    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No. HP</th>
    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Jenis Kamar</th>
    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Check In</th>
    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Check Out</th>
    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Jumlah Kamar</th>
    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Total</th>
    </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-200"> <?php
    
    while ($row = mysqli_fetch_assoc($result)) {
        ?><tr>
        <td class="px-6 py-4 whitespace-nowrap"><div class="text-sm text-gray-900"> <?php echo $row['id_penyewa'] ?></div></td>
        <td class="px-6 py-4 whitespace-nowrap"><div class="text-sm text-gray-900"> <?php echo $row['nama'] ?></div></td>
        <td class="px-6 py-4 whitespace-nowrap"><div class="text-sm text-gray-900"> <?php echo $row['no_hp'] ?></div></td>
        <td class="px-6 py-4 whitespace-nowrap"><div class="text-sm text-gray-900 text-left"> <?php echo $row['jenis_kamar'] ?>- Rp: <?php echo number_format($row['harga'], 0, ',', '.'); ?> </div></td>
        <td class="px-6 py-4 whitespace-nowrap"><div class="text-sm text-gray-900"> <?php echo $row['cekin'] ?></div></td>
        <td class="px-6 py-4 whitespace-nowrap"><div class="text-sm text-gray-900"> <?php echo $row['cekout'] ?> </div></td>
        <td class="px-6 py-4 whitespace-nowrap"><div class="text-sm text-gray-900"> <?php echo $row['jumlah_kamar'] ?></div></td>
        <td class="px-6 py-4 whitespace-nowrap"><div class="text-sm text-gray-900 text-left">Rp: <?php echo number_format($row['total'], 0, ',', '.');?></div></td>
        </tr>
        <?php
    }
    ?></tbody>
    </table> <?php
} else {
    echo '<div class="text-gray-500">tidak ada data yang di temukan.</div>';
}
mysqli_close($koneksi);

?>
