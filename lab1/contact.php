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
            <div class="col-sm-8">
                <h3>Liên hệ với chúng tôi!</h3>
                <p>Chúng tôi mong muốn lắng nghe từ bạn. Hãy liên hệ với chúng tôi và một thành viên của chúng tôi sẽ liên lạc với bạn trong thời gian sớm nhất. Chúng tôi yêu thích việc nhận được email của bạn mỗi ngày <em>mỗi ngày</em>.</p>
                <form class="form-horizontal">
                    <div class="form-group">
                        <label for="name" class="control-label col-sm-2">Tên của bạn</label>
                        <div class="col-sm-10">
                            <input type="text" placeholder="Tên của bạn" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-sm-2 control-label">Email của bạn</label>
                        <div class="col-sm-10">
                            <input type="email" placeholder="Email của bạn" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="textarea" class="col-sm-2 control-label">Nội dung</label>
                        <div class="col-sm-10">
                            <textarea id="textarea" rows="3" class="form-control"></textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-sm-4">
                <h5>Bản đồ</h5>
                <p>
                    <a href="#">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15729855.42909206!2d96.7382165931671!3d15.735434000981483!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31157a4d736a1e5f%3A0xb03bb0c9e2fe62be!2zVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1445179448264" width="200" height="200" frameborder="0" style="border:0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                        <br />
                    </a>
                    <br />
                    <a href="#">Xem bản đồ</a>
                </p>
                <p>
                    Đại chỉ 1.
                    <br /> Địa chỉ 2.
                </p>
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