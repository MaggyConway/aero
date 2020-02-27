//вкладка Образование (О Центре)
//console.log(window.location.pathname);
window.education_tab = function() {
    var aviaTitle = $('.education .avia-title');
    var aeroTitle = $('.education .aero-title');
    //console.log(aviaTitle[0]);
    //console.log(aeroTitle[0]);
    var aviaContent = $('.education .avia-content');
    var aeroContent = $('.education .aero-content');
    //console.log(aviaContent[0]);
    //console.log(aeroContent[0]);

if ($(window).width() > 900) {
    if ($('.about_card').length !== 0) {
        var right_card = $('.about_card')[0].offsetWidth - 310 - 50;
    }
} else if ($(window).width() <= 900) {
    var right_card = $('.about_card')[0].offsetWidth - 50;
}



    if ($('.card__table').length !== 0) { //проверка на существование блока в DOM
        //console.log($('.card__table').length);
        var card_tableW = $('.card__table')[0].offsetWidth;
        var avia_table = $('.card__table')[0].offsetHeight + 30; //+40
        var aero_table = $('.card__table')[1].offsetHeight + 10; //+40
    }
    // if ($('.card__table')) {
    // }
    // if ($('.card__table')) {
    // }

    var edu = $('.edu');

    for (var i = 0; i < edu.length; i++) {
        $(edu[0]).css('height', avia_table);
        $(edu[1]).css('height', aero_table);
    }
    //console.log(card_tableH); //360

    if (card_tableW > right_card) {
        $('.edu').css('width', right_card);
    }

    aviaTitle.click(function() {
        //console.log(aviaContent.height());
        aviaContent.css({
            width: right_card,
        });

        $(aviaContent).toggleClass('clicked');
    
        if (aviaContent.height() == 0) {
            aviaContent.css('height', avia_table);
        } else {
            aviaContent.css('height', 0);
            //console.log(aviaContent.height());
        }

        aviaTitle.toggleClass('down');
    });

    aeroTitle.click(function() {
        aeroContent.css({
            width: right_card,
            marginBottom: '40px'
        });

        if (aeroContent.height() == 0) {
            aeroContent.css('height', aero_table);
        } else {
            aeroContent.css('height', 0);
        }

        aeroTitle.toggleClass('down');
    });
}

education_tab();