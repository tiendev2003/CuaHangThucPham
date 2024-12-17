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
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Gsore | Quản trị hệ thống</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="../index.php">Gsore Origanic Food </a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <div class="form-control"><?php echo $_SESSION['ten_nguoi_dung']; ?> </div>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="dangky.php">Đăng Ký</a></li>
                    <li><a class="dropdown-item" href="dangxuat.php">Đăng Xuất</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Hệ thống</div>
                        <a class="nav-link" href="index.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Bảng điều khiển
                        </a>
                        <a class="nav-link collapsed" href="nguoidung.php" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                            Quản trị người dùng
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseOne" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link" href="nguoidung.php"> Người dùng</a>
                                <a class="nav-link" href="nhanvien.php"> Nhân viên</a>
                                <a class="nav-link" href="dangky.php"> Đăng Ký</a>
                                <a class="nav-link" href="dangxuat.php">Đăng Xuất</a>
                            </nav>
                        </div>
                        <a class="nav-link" href="tintuc.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-newspaper"></i></div>
                            Quản trị tin tức
                        </a>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <div class="sb-nav-link-icon"><i class="fas fa-archive"></i></div>
                            Quản trị sản phẩm
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseTwo" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link" href="sanpham.php"> Sản phẩm</a>
                                <a class="nav-link" href="loaisanpham.php">Loại sản phẩm</a>
                                <a class="nav-link" href="nhacungcap.php">Nhà cung cấp</a>
                            </nav>
                        </div>
                        <a class="nav-link" href="khachhang.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                            Quản trị khách hàng
                        </a>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <div class="sb-nav-link-icon"><i class="fas fa-shopping-cart"></i></div>
                            Quản trị bán hàng
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseThree" aria-labelledby="headingThree" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link" href="hoadon.php"> Hoá đơn</a>
                                <a class="nav-link" href="phuong-thuc-thanh-toan.php">Phương thức thanh toán</a>
                                <a class="nav-link" href="khuyenmai.php">Khuyến mãi</a>
                                <a class="nav-link" href="thongke.php">Thống kê</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            <div class="sb-nav-link-icon"><i class="fas fa-edit"></i></div>
                            Quản trị yêu cầu
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseFour" aria-labelledby="headingFour" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link" href="lien-he.php"> Liên hệ</a>
                                <a class="nav-link" href="tro-giup.php">Trợ giúp</a>
                            </nav>
                        </div>
                        <a class="nav-link" href="binhluan.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-comments"></i></div>
                            Quản trị bình luận
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Đã đăng nhập</div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">

            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Nhân viên</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="index.php">Bảng điều khiển</a></li>
                        <li class="breadcrumb-item active">Nhân viên</li>
                    </ol>

                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Danh sách Nhân viên| <a href="nhanvien_them_moi.php">Thêm mới</a>
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Họ tên nhân viên</th>
                                        <th>Giới tính</th>
                                        <th>Quê quán</th>
                                        <th>Số điện thoại</th>
                                        <th>Ngày sinh</th>
                                        <th>Sửa</th>
                                        <th>Xóa</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <?php
                                    include("../config.php");

                                    $sql = " SELECT *  from nhanvien order by manhanvien desc";

                                    $ncc = mysqli_query($ket_noi, $sql);
                                    $i = 0;
                                    while ($row = mysqli_fetch_array($ncc)) {
                                        $i++;; ?>

                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $row["hoten"]; ?></td>
                                            <td><?php echo $row["gioitinh"]; ?></td>
                                            <td><?php echo $row["quequan"]; ?></td>
                                            <td><?php echo $row["sdt"]; ?></td>
                                            <td><?php echo $row["ngaysinh"]; ?></td>
                                            <td><a href="nhanvien_sua.php?id=<?php echo $row["manhanvien"]; ?>">Sửa</a></td>
                                            <td><a href="nhanvien_xoa.php?id=<?php echo $row["manhanvien"]; ?>">Xóa</a></td>
                                        </tr>
                                    <?php
                                    }; ?>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">


                </div>
            </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>