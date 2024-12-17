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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Thêm mới loại sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <?php
    // 1. Load file cấu hình để kết nối đến máy chủ CSDL, CSDL
    include("../config.php");

    // 2. Viết câu lệnh truy vấn để thêm mới dữ liệu vào bảng TIN TỨC trong CSDL

    $ten_loai_san_pham = $_POST['txtTenLoaiSanPham'];
    $level = $_POST['txtLevel'];
    $parent_id = isset($_POST['txtParent']) ? $_POST['txtParent'] : 0;

    // Lấy ra được thông tin & xử lý liên quan đến bức ẢNH MINH HỌA được SUBMIT từ form TIN TỨC THÊM MỚI
    $noi_se_luu_buc_anh_tren_website = "./images/img/" . basename($_FILES["txtAnhLoai"]["name"]);
    $luu_file_anh_tam = $_FILES["txtAnhLoai"]["tmp_name"];

    // UPLOAD bức ảnh tạm này lên MÁY CHỦ WEB
    $ket_qua_up_anh = move_uploaded_file($luu_file_anh_tam, $noi_se_luu_buc_anh_tren_website);

    // Ghi nhận thông tin bức ẢNH MINH HỌA được UPLOAD lên hệ thống hay chưa?
    if (!$ket_qua_up_anh) {
        $anh_loai = NULL;
    } else {
        $anh_loai = basename($_FILES["txtAnhLoai"]["name"]);
    }

    $sql =  "INSERT INTO `loaisanpham` ( `tenloaisanpham`, `anhloai`, `level`, `parent_id`)  VALUES ('" . $ten_loai_san_pham . "', '" . $anh_loai . "' , '" . $level . "', '" . $parent_id . "');";
    // 3. Thực thi câu lệnh lấy dữ liệu mong muốn
    $tintuc = mysqli_query($ket_noi, $sql);
    //4. Thông báo chèn dữ liệu thành công và đẩy các bạn về trang Quản trị sp
    echo "
                <script type='text/javascript'>
                    window.alert('Bạn đã thêm mới loại sản phẩm thành công');
                    window.location.href='loaisanpham.php';
                </script>
            ";; ?>

</body>

</html>