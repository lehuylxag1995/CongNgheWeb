<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./public/css/bootstrap.min.css">
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
                        <form action="" class="form-horizontal">
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
                        <form>
                            <div class="form-group">
                                <label for="txtemail1">Email:</label>
                                <input id="txtemail1" class="form-control" type="text" placeholder="Nhập vào email">
                            </div>
                            <div class="form-group">
                                <label for="txtpassword1">Password:</label>
                                <input id="txtpassword1" class="form-control" type="password" placeholder="Nhập vào mật khẩu">
                            </div>
                            <div class="checkbox">
                                <label for="chkbox1">
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
                        <form action="" class="form-inline">
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
                                <label for="chkbox2">
                                    <input type="checkbox" id="chkbox2"> Ghi nhớ tôi
                                </label>
                            </div>
                            <button type="submit" class="btn btn-primary">Đăng nhập</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>