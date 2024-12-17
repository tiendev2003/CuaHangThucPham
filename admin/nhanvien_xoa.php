<?php 
    // Mục đích: kiểm tra xem bạn có quyền truy cập trang này hay không thông qua biến $_SESSION['da_dang_nhap'] = 1 --> được phép truy cập; và ngược lại.
    session_start();

    if(!isset($_SESSION['da_dang_nhap'])) {
        echo "
            <script type='text/javascript'>
                window.alert('Bạn không được phép truy cập');
                window.location.href='dangnhap.php';
            </script>
        ";
    }
;?>
<?php
          include("../config.php");
  
  
          $id_ncc = $_GET["id"];
          
          $sql = "
                  DELETE FROM `nhanvien` WHERE `nhanvien`.`manhanvien` = '".$id_ncc."'
                 ";
  
          $ncc = mysqli_query($ket_noi, $sql);
  
          echo "
                <script type='text/javascript'>
                  window.alert('Xóa nhà nhân viên thành công');
                  window.location.href='nhanvien.php';
                </script>
               ";
;?>