<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./public/css/bootstrap.min.css">
    <link rel="stylesheet" href="./public/css/mycustom5.css">
    <script src="./public/js/jquery-3.4.1.min.js"></script>
    <script src="./public/js/bootstrap.min.js"></script>
    <title>Grid Template for Bootstrap</title>
</head>

<body>
    <div class="container">

        <!-- header -->
        <div class="row">
            <div class="col-sm-6">
                <h1><img class="img-responsive" src="./public/img/logo.jpg" /></h1>
            </div>
            <div class="col-sm-6">
                <div class="btn-group pull-right">
                    <a href="#" class="btn btn-primary">Trang chủ</a>
                    <a href="#" class="btn btn-primary">Dịch vụ</a>
                    <a href="#" class="btn btn-primary">Về chúng tôi</a>
                    <a href="#" class="btn btn-primary">FAQ</a>
                    <a href="#" class="btn btn-primary">Liên hệ</a>
                </div>
            </div>
        </div>

        <hr />

        <!-- slide -->
        <div class="row">
            <div class="col-sm-12">
                <div id="carousel-slide" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-slide" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-slide" data-slide-to="1"></li>
                        <li data-target="#carousel-slide" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="./public/img/1.jpg" alt="Slide 1" width="100%" />
                        </div>
                        <div class="item">
                            <img src="./public/img/2.jpg" alt="Slide 2" width="100%" />
                        </div>
                        <div class="item">
                            <img src="./public/img/3.jpg" alt="Slide 3" width="100%" />
                        </div>
                    </div>
                    <a class="left carousel-control" href="#carousel-slide" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-slide" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-sm-4">
                <img src="./public/img/11.jpg" />
                <h4>Điểm du lịch 1</h4>
                <p>Đây là địa điểm du lịch 1, chi tiết về điểm du lịch này các bạn có thể có được bằng cách liên lạc với chúng tôi trực tiếp qua điện thoại hoặc email.</p>
            </div>
            <div class="col-sm-4">
                <img src="./public/img/12.jpg" />
                <h4>Điểm du lịch 2</h4>
                <p>Đây là địa điểm du lịch 2, chi tiết về điểm du lịch này các bạn có thể có được bằng cách liên lạc với chúng tôi trực tiếp qua điện thoại hoặc email.</p>
            </div>
            <div class="col-sm-4">
                <img src="./public/img/13.jpg" />
                <h4>Điểm du lịch 3</h4>
                <p>Đây là địa điểm du lịch 3, chi tiết về điểm du lịch này các bạn có thể có được bằng cách liên lạc với chúng tôi trực tiếp qua điện thoại hoặc email.</p>
            </div>
        </div>

        <div class="row bg-success">
            <div class="col-sm-12">
                <h4>Hãy liên hệ với chúng tôi!</h4>
                <p>Chúng tôi mong muốn lắng nghe từ bạn.</p>
                <div class="col-sm-offset-9">
                    <a href="#" class="btn btn-primary">Liên hệ</a>
                </div>
            </div>
        </div>

        <hr />

        <div class="row">
            <footer>
                <div>
                    <p>© Bản quyền thuộc về Công ty Du lịch Bụi.</p>
                    <ul class="nav nav-pills pull-right">
                        <li><a href="#">Trang chủ</a></li>
                        <li><a href="#">Dịch vụ</a></li>
                        <li><a href="#">Về chúng tôi</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Liên hệ</a></li>
                    </ul>
                </div>
            </footer>
        </div>
        
    </div>
</body>

</html>