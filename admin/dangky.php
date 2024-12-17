<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Đăng Ký - Gsore ADMIN</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content" style = "background-color:#8CFF70;">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Tạo Tài Khoản</h3></div>
                                    <div class="card-body">
                                        <form method="POST" action="dangkykiemtra.php" enctype="multipart/form-data">                                            
                                            <div class="form-floating mb-3 ">
                                                        <input class="form-control" id="txtTenNguoiDung" name = "txtTenNguoiDung" type="text" placeholder="Điền họ tên của bạn" />
                                                        <label for="txtTenNguoiDung">Họ và Tên</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="txtEmail" name= "txtEmail" type="email" placeholder="name@example.com" />
                                                <label for="txtEmail">Email</label>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="txtPassword" name = "txtPassword" type="password" placeholder="Create a password" />
                                                        <label for="txtPPassword">Password</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputPasswordConfirm" type="password" placeholder="Confirm password" />
                                                        <label for="inputPasswordConfirm">Confirm Password</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-4 mb-0" >
                                                <div class="d-grid"><input  class="btn  btn-block" style = "background-color:#3c8c32;"  type="submit" name="btnSubmit" value="Đăng ký"></div>                                               
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="dangnhap.php" >Bạn đã có tài khoản? Đi tới trang đăng nhập.</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
               
            </div>            
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>