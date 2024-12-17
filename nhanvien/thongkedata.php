<?php
header('Content-Type: application/json');

require_once('../config.php');

$sqlQuery = "SELECT YEAR(ngaydat) AS Nam, MONTH(ngaydat) AS Thang, SUM(tongtien) AS TongSoTien FROM hoadon GROUP BY YEAR (ngaydat), MONTH(ngaydat) ORDER BY Nam, Thang;";

$result = mysqli_query($ket_noi, $sqlQuery);

$data = array();
foreach ($result as $row) {
    $data[] = $row;
}

mysqli_close($ket_noi);

echo json_encode($data);
