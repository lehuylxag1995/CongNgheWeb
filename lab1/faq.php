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
        <div class="row">
            <div class="col-sm-6">
                <h1><img class="img-responsive" src="./public/img/logo.jpg" /></h1>
            </div>
            <div class="col-sm-6">
                <div class="btn-group pull-right">
                    <a href="ex5.php" class="btn btn-primary">Trang chủ</a>
                    <a href="service.php" class="btn btn-primary">Dịch vụ</a>
                    <a href="about.php" class="btn btn-primary">Về chúng tôi</a>
                    <a href="faq.php" class="btn btn-primary">FAQ</a>
                    <a href="contact.php" class="btn btn-primary">Liên hệ</a>
                </div>
            </div>
        </div>
        <hr />
        <div class="row">
            <h2 class="text-center">FAQ</h2>
        </div>
        <hr />
        <div class="row">
            <div class="panel-group" id="accordion">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <p class="panel-title" data-toggle="collapse" data-parent="#accordion" data-target="#collapse1">1. Tôi có thể trả tiền thông qua PayPal?</p>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse in">
                        <div class="panel-body" id="collapse1">
                            <p>Được. Chúng tôi chấp nhận việc chi trả qua PayPal.</p>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <p class="panel-title" data-toggle="collapse" data-parent="#accordion" data-target="#collapse2">2. Tôi có thể hủy bỏ đặt hàng?</p>
                    </div>
                    <div class="panel-collapse collapse" id="collapse2">
                        <div class="panel-body">
                            <p>Được. Bạn có thể hủy bỏ đặt hàng bất khi nào bạn muốn.</p>
                        </div>
                    </div>

                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <p class="panel-title" data-toggle="collapse" data-parent="#accordion" data-target="#heading3">3. Chính sách hoàn tiền như thế nào?</p>
                    </div>
                    <div id="heading3" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>Bạn có thể nhận được tiền hoàn trả 100% bất kể khi nào và vì bất kỳ lý do gì.</p>
                        </div>
                    </div>

                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <p class="panel-title" data-toggle="collapse" data-parent="#accordion" data-target="#heading4">4. Làm thế nào để tôi có thể nhận được hóa đơn?</p>
                    </div>
                    <div class="panel-collapse collapse" id="heading4">
                        <div class="panel-body">
                            <p>Bạn có thể nhận được hóa đơn thông qua email hoặc thư tín.</p>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <hr />
        <div class="row">
            <footer>
                <div>
                    <p>© Bản quyền thuộc về Công ty Du lịch Bụi.</p>
                    <ul class="nav nav-pills pull-right">
                        <li><a href="ex5.php">Trang chủ</a></li>
                        <li><a href="service.php">Dịch vụ</a></li>
                        <li><a href="about.php">Về chúng tôi</a></li>
                        <li><a href="faq.php">FAQ</a></li>
                        <li><a href="contact.php">Liên hệ</a></li>
                    </ul>
                </div>
            </footer>
        </div>
    </div>








</body>

</html>