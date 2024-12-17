<?php
// Mục đích: kiểm tra xem bạn có quyền truy cập trang này hay không thông qua biến $_SESSION['da_dang_nhap'] = 1 --> được phép truy cập; và ngược lại.
session_start();

if (!isset($_SESSION['da_dang_nhap'])) {
    echo "
            <script type='text/javascript'>
                window.alert('Bạn không được phép truy cập');
                window.location.href='dangnhap.php';
            </script>
        ";
}; ?>
<?php
include("../config.php");
$id = $_POST['txtID'];
$ten_ncc = $_POST['txtTennv'];
$dia_chi = $_POST['txtDiachi'];
$sdt = $_POST['txtSdt'];
$gioitinh = $_POST['txtGioitinh'];
$ngaysinh = $_POST['txtNgaySinh'];


$sql = "
                  UPDATE `nhanvien` 
                  SET `hoten` = '" . $ten_ncc . "', `quequan` = '" . $dia_chi . "', `sdt` = '" . $sdt . "' , `gioitinh` = '" . $gioitinh . "', `ngaysinh` = '" . $ngaysinh . "' 
                  WHERE `nhanvien`.`manhanvien` = '" . $id . "';
                 ";

$ncc = mysqli_query($ket_noi, $sql);

echo "
                <script type='text/javascript'>
                window.alert('Cập nhật nhân viên thành công');
                window.location.href='nhanvien.php';
                </script>
               ";; ?>$