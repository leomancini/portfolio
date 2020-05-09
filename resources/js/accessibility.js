$(window).on('load', function() {
    $('.slide').each(function() {
        // let projectName = $(this).closest('.section').children('.header').children('h1').text();
        let captionText = '';

        if ($(this).data('slide-id') === 0) {
            captionText += $(this).closest('.section').children('.header').children('h2').html();

            if ($(this).children('.slide-contents').children('.caption').length > 0) {
                captionText += $(this).children('.slide-contents').children('.caption').text();
            }

            if ($(this).children('.slide-contents').children().children('.caption').length > 0) {
                captionText += $(this).children('.slide-contents').children().children('.caption').text();
            }

            let formattedcaptionText = captionText.replace(/\./g, '. ').replace(/\<br\>/g, ' ');

            $(this).children('.slide-contents').children('.image-with-loading-placeholder').children('img').attr('alt', formattedcaptionText);
        } else {
            if ($(this).children('.slide-contents').children('.caption').length === 1) {
                captionText = $(this).children('.slide-contents').children('.caption').text();
    
                $(this).children('.slide-contents').children('img').attr('alt', captionText);
            }
        }
    });

    $('.slide-thumbnail-wrapper').each(function() {
        let captionText = $(this).children('label').text();

        $(this).children('.slide-thumbnail').children('.slide-thumbnail-image').children('img').attr('alt', captionText);
    });
});