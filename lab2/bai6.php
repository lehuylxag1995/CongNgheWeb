<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo Gallery</title>
    <link rel="stylesheet" href="./public/css/bootstrap.min.css">
    <link rel="stylesheet" href="./public/css/photo-gallery.css">
</head>

<body>
    <div class="container">
        <div id="header" class="row text-center">
            <h2>Thư viện ảnh của tôi</h2>
        </div>
        <ul class="row">
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                <img class="img-responsive" src="./public/images/photodune-174908-rocking-the-night-away-xs.jpg">
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                <img class="img-responsive" src="./public/images/photodune-287182-blah-blah-blah-yellow-road-sign-xs.jpg">
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                <img class="img-responsive" src="./public/images/photodune-460760-colors-xs.jpg">
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                <img class="img-responsive" src="./public/images/photodune-461673-retro-party-xs.jpg">
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                <img class="img-responsive" src="./public/images/photodune-514834-touchscreen-technology-xs.jpg">
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                <img class="img-responsive" src="./public/images/photodune-916206-legal-xs.jpg">
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                <img class="img-responsive" src="./public/images/photodune-1062948-nature-xs.jpg">
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                <img class="img-responsive" src="./public/images/photodune-1471528-insant-camera-kid-xs.jpg">
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                <img class="img-responsive" src="./public/images/photodune-2255072-relaxed-man-xs.jpg">
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                <img class="img-responsive" src="./public/images/photodune-2360379-colors-xs.jpg">
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                <img class="img-responsive" src="./public/images/photodune-2360571-jump-xs.jpg">
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                <img class="img-responsive" src="./public/images/photodune-2361384-culture-for-business-xs.jpg">
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                <img class="img-responsive" src="./public/images/photodune-2441670-spaghetti-with-tuna-fish-and-parsley-s.jpg">
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                <img class="img-responsive" src="./public/images/photodune-2943363-budget-xs.jpg">
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                <img class="img-responsive" src="./public/images/photodune-3444921-street-art-xs.jpg">
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                <img class="img-responsive" src="./public/images/photodune-3552322-insurance-xs.jpg">
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                <img class="img-responsive" src="./public/images/photodune-3807845-food-s.jpg">
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                <img class="img-responsive" src="./public/images/photodune-3835655-down-office-worker-xs.jpg">
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                <img class="img-responsive" src="./public/images/photodune-4619216-ui-control-knob-regulators-xs.jpg">
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                <img class="img-responsive" src="./public/images/photodune-5771958-health-xs.jpg">
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                <img class="img-responsive" src="./public/images/photodune-268693-businesswoman-using-laptop-outdoors-xs.jpg">
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                <img class="img-responsive" src="./public/images/photodune-352207-search-of-code-s.jpg">
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                <img class="img-responsive" src="./public/images/photodune-247190-secret-email-xs.jpg">
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                <img class="img-responsive" src="./public/images/photodune-682990-online-search-xs.jpg">
            </li>
        </ul>
    </div>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">

                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <script src="./public/js/jquery.js"></script>
    <script src="./public/js/bootstrap.min.js"></script>
    <script>
        // Mã lệnh được viết tại đây
        $(document).ready(function() {
            $('li img').off('click').on('click', function() {
                //Get path soure image
                var imgURL = $(this).attr('src');
                //Create new <img> with "class=img-responsive"
                var imgModalBody = $('<img></img>').addClass('img-responsive');

                // Get position of image in libary images
                var index = $(this).parent('li').index() + 1;

                // Build content for modal
                imgModalBody = imgModalBody.attr('src', imgURL);
                var contentModal =
                    "<div style='height:25px;clear:both;display:block;'>" +
                    "<a id='next' class='controls next' href='" + (index + 1) + "'>kế tiếp &raquo;</a>" +
                    "<a id='previous' class='controls previous' href='" + (index - 1) + "'>&laquo; trước đó</a>" +
                    "<div style='height:25px;clear:both;display:block;'>";

                // Show modal and set content for modal show, else remove content modal show
                $('#myModal').modal('show').on('shown.bs.modal', function(e) {
                    $('.modal-body').html(imgModalBody).append(contentModal);
                    //Check "truoc do" and "ke tiep"
                    if($('#previous').attr('href')==0)
                        $('#previous').hide();
                    if($('#next').attr('href')==$('ul.row li').length+1)
                        $('#next').hide();
                });
                $('#myModal').on('hide.bs.modal', function() {
                    $('.modal-body').html('');
                });

                //add event click into <a> and get position value from "href"
                $(document).on('click', 'div a', function(e) {
                    e.preventDefault();
                    index = $(this).attr('href');
                    var src = $('ul.row li:nth-child(' + index + ') img').attr('src');

                    // Replace image current in modal show. Update value "href" of 2 path "<a>"
                    $('div.modal-body img').attr('src',src);
                    var next=$('#next').attr('href',(Number(index)+1));
                    var previuos=$('#previous').attr('href',(Number(index)-1));

                    // If value "href" of path is 0 then hide "truoc do" same to "ke tiep"
                    (previuos.attr('href')==="0") ? previuos.hide():previuos.show();
                    (next.attr('href')==$('ul.row li').length+1) ? next.hide():next.show();
                });

            });
        });
    </script>
</body>

</html>