<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Bài tập 6.1</title>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="./public/css/bootstrap.min.css">
    
    <style type="text/css">
        /* This puts titles always on a separate line from thumbnails */

        #videos-list img {
            display: block;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="page-header">Các đoạn phim hay nhất</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <ul id="videos-list">
                </ul>
            </div>
            <div class="col-sm-9" id="video-watcher"></div>
        </div>
    </div>
    <script src="./public/js/jquery.js"></script>
    <script src="./public/js/youtube.js"></script>
    <script src="./public/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {

            var addVideoToList = function(video) {

                var videoLink = $('<a>');
                videoLink.append(video.title);
                var thumbnailUrl = youtube.generateThumbnailUrl(video.youtubeId);
                var thumbnailImg = $('<img>');
                thumbnailImg.attr('src', thumbnailUrl);
                videoLink.append(thumbnailImg);

                videoLink.on('click', function(e) {
                    e.preventDefault();

                    var videoEmbed = $('<iframe></iframe>');
                    videoEmbed.attr('src', youtube.generateEmbedUrl(video.youtubeId));
                    videoEmbed.attr('width', 560);
                    videoEmbed.attr('height', 315);

                    var videoTitle = $('<h2>');
                    videoTitle.html(video.title + " <small>" + video.author + "</small>");

                    var videoWatcher = $('#video-watcher');
                    videoWatcher.hide();
                    videoWatcher.append(videoTitle);
                    videoWatcher.append(videoEmbed);
                    videoWatcher.fadeIn();
                });

                var videoItem = $('<li>');
                videoItem.append(videoLink);
                $('#videos-list').append(videoItem);
            };

            // Viết mã lệnh tại đây
            $.ajax({
                url:"videos.json",
                dataType:"JSON",
                success:function(result){
                    $.each(result,function(index,value){
                        addVideoToList(value);
                    });
                }
            });
        });
    </script>
</body>

</html>