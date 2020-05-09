$(window).on('load', function() {
    $('.slide-contents').each(function() {
        let projectName = $(this).closest('.section').children('.header').children('h1').text();

        if ($(this).children('.caption').length === 1) {
            let caption = $(this).children('.caption').text();

            $(this).children('img').attr('alt', `${projectName} - ${caption}`);
        }
    })
});