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
$ten_nv = $_POST['txtTennv'];
$gioitinh = $_POST['txtGioitinh'];
$sdt = $_POST['txtSdt'];
$dia_chi = $_POST['txtDiachi'];
$ngaysinh = $_POST['txtNgaySinh'];
$email = $_POST['txtEmail'];
$mk = $_POST['txtMatkhau'];


$sql_user = "INSERT INTO nguoidung (tennguoidung, emailnguoidung, matkhau) VALUES ('$ten_nv', '$email', '$mk')";

if (mysqli_query($ket_noi, $sql_user)) {
    $id_user = mysqli_insert_id($ket_noi);
    $sql = "
    INSERT INTO `nhanvien` (`manhanvien`, `hoten`, `gioitinh`, `quequan`, `ngaysinh`, `sdt`, `manguoidung`) 
    VALUES (NULL, '" . $ten_nv . "', '" . $gioitinh . "', '" . $dia_chi . "', '" . $ngaysinh . "', '" . $sdt . "', '" . $id_user . "');
   ";
    // Thực thi câu lệnh
    mysqli_query($ket_noi, $sql);
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($ket_noi);
}





echo "
                <script type='text/javascript'>
                window.alert('Thêm mới nhân viên thành công');
                window.location.href='nhanvien.php';
                </script>
               ";; ?>