$(document).ready(function () {

    $('a').each(function () {
        var linkURL = youtube.generateThumbnailUrl($(this).attr('href'));
        var img = $('<img>').attr('src', linkURL);
        $(this).append("<br>").append(img);
        $(this).on('click', function (e) {
            e.preventDefault();
            var emBedURL = youtube.generateEmbedUrl($(this).attr('href'));
            var ifram = $('<iframe></iframe>').attr('src', emBedURL).attr('width', 800).attr('height', 500);
            $('#clip').fadeIn('slow', function () {
                $(this).html(ifram);
            });
        })
    });

});
