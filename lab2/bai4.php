<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./public/css/bootstrap.min.css">
    <script src="./public/js/jquery-3.4.1.min.js"></script>
    <script src="./public/js/bootstrap.min.js"></script>
    <script src="./public/js/jquery.js"></script>
	<script src="./public/js/jquery.validate.js"></script>
    <script src="./public/js/cau4b.js"></script>
    <title>Bài tập 4b</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <form action="" class="form-horizontal" id="formValidate">
                <div class="form-group">
                    <label for="txtTenCuaBan" class="control-label col-sm-2">Tên của bạn</label>
                    <div class="col-sm-4">
                        <input type="text" name="txtTenCuaBan" id="txtTenCuaBan" class="form-control" placeholder="Tên của bạn">
                    </div>
                </div>

                <div class="form-group">
                    <label for="txtHoCuaBan" class="control-label col-sm-2">Họ của bạn</label>
                    <div class="col-sm-4">
                        <input type="text" name="txtHoCuaBan" id="txtHoCuaBan" class="form-control" placeholder="Họ của bạn">
                    </div>
                </div>

                <div class="form-group">
                    <label for="txtTenDangNhap" class="control-label col-sm-2">Tên đăng nhập</label>
                    <div class="col-sm-4">
                        <input type="text" name="txtTenDangNhap" id="txtTenDangNhap" class="form-control" placeholder="Tên đăng nhập">
                    </div>
                </div>

                <div class="form-group">
                    <label for="txtEmail" class="control-label col-sm-2">Hộp thư điện tử</label>
                    <div class="col-sm-4">
                        <input type="text" name="txtEmail" id="txtEmail" class="form-control" placeholder="Hộp thư điện tử">
                    </div>
                </div>

                <div class="form-group">
                    <label for="txtPassword" class="control-label col-sm-2">Mật khẩu</label>
                    <div class="col-sm-4">
                        <input type="password" id="txtPassword" name="txtPassword" class="form-control" placeholder="Mật khẩu">
                    </div>
                </div>

                <div class="form-group">
                    <label for="txtRePassword" class="control-label col-sm-2">Nhập lại mật khẩu</label>
                    <div class="col-sm-4">
                        <input type="password" id="txtRePassword" name="txtRePassword" class="form-control" placeholder="Nhập lại mật khẩu">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-4">
                        <div class="checkbox">
                            <label><input type="checkbox" id="chkaccept" name="chkaccept">Đồng ý các quy định của chúng tôi</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-4">
                        <input type="submit" class="btn btn-primary" value="Đăng ký">
                    </div>
                </div>

            </form>
        </div>
    </div>

</body>

</html>