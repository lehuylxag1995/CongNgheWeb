<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./public/css/bootstrap.min.css">
    <script src="./public/js/jquery-3.4.1.min.js"></script>
    <script src="./public/js/bootstrap.min.js"></script>
    <title>Form biểu mẩu - bài tập số 4</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-5 col-sm-offset-3">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Biểu mẫu đăng nhập</h3>
                    </div>
                    <div class="panel-body">
                        <form action="" class="form-horizontal" role="form">
                            <div class="form-group">
                                <label for="txtemail" class="col-sm-3 control-label">Email:</label>
                                <div class="col-sm-7">
                                    <input id="txtemail" type="text" class="form-control" placeholder="Nhập vào email">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="txtpassword" class="col-sm-3 control-label">Mật khẩu:</label>
                                <div class="col-sm-7">
                                    <input type="password" class="form-control" placeholder="Nhập vào mật khẩu" id="txtpassword">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-7">
                                    <label for="chkremember">
                                        <input type="checkbox" id="chkremember"> Ghi nhớ tôi
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-7">
                                    <input type="submit" class="btn btn-primary" value="Đăng Nhập">
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-5 col-sm-offset-3">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Biểu mẫu đăng nhập</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form">
                            <div class="form-group">
                                <label for="txtemail1" class="control-label">Email:</label>
                                <input id="txtemail1" class="form-control" type="text" placeholder="Nhập vào email">
                            </div>
                            <div class="form-group">
                                <label for="txtpassword1" class="control-label">Password:</label>
                                <input id="txtpassword1" class="form-control" type="password" placeholder="Nhập vào mật khẩu">
                            </div>
                            <div class="checkbox">
                                <label for="chkbox1" class="control-label">
                                    <input type="checkbox" name="" id="chkbox1"> Ghi nhớ tôi
                                </label>
                            </div>
                            <input type="submit" value="Đăng nhập" class="btn btn-primary">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-7 col-sm-offset-2">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Biểu mẩu đăng nhập</h3>
                    </div>
                    <div class="panel-body">
                        <form action="" class="form-inline" role="form">
                            <div class="form-group has-success">
                                <div class="input-group">
                                    <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
                                    <input type="text" name="" id="txtemail2" class="form-control" placeholder="Nhập vào email">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group has-error">
                                    <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
                                    <input type="password" name="" id="txtpassword2" class="form-control" placeholder="Nhập vào password">
                                </div>
                            </div>
                            <div class="checkbox">
                                <label for="chkbox2" class="control-label">
                                    <input type="checkbox" id="chkbox2"> Ghi nhớ tôi
                                </label>
                            </div>
                            <button type="submit" class="btn btn-primary">Đăng nhập</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-5 col-sm-offset-3" style="border: 1px solid red;">
                <h3 class="control-label">Mở biểu mẩu đăng nhập</h3>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modaldangnhap">
                    Mở hộp thoại
                </button>
                <div class="modal fade" id="modaldangnhap" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <div class="col-sm-12 col-sm-offset-4">
                                    <h3 class="modal-title"><span class="glyphicon glyphicon-lock"></span> Đăng Nhập</h3>
                                </div>
                            </div>
                            <div class="modal-body">
                                <form action="" role="form">
                                    <div class="form-group">
                                        <label for="txtid" class="control-label"> <span class="glyphicon glyphicon-user"></span> Người dùng:</label>
                                        <input type="text" class="form-control" placeholder="Nhập tên người dùng" id="txtid">
                                    </div>
                                    <div class="form-group">
                                        <label for="txtpassword" class="control-label"><span class="glyphicon glyphicon-eye-open"></span> Mật khẩu:</label>
                                        <input type="password" class="form-control" id="txtpassword" placeholder="Nhập mật khẩu">
                                    </div>
                                    <div class="checkbox">
                                        <label for="chkremember3" class="control-label">
                                            <input type="checkbox" id="chkremember3"> Ghi nhớ tôi
                                        </label>
                                    </div>
                                    <button type="button" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Đăng Nhập</button>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" data-dismiss="modal" class="btn btn-danger pull-left"><span class="glyphicon glyphicon-remove"></span>Huỷ bỏ</button>
                                <p>Bạn chưa phải là thành viên? <a href="#">Đăng ký</a></p>
                                <p>Quên <a href="#">mật khẩu?</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>