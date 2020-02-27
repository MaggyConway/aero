$('.tabs-list .tabs-item').click(function() {
    event.preventDefault();
 
    $('.pre_loader').css('display', 'block');
    console.log($('.pre_loader'));

    let tabsList = $('.tabs-list .tabs-item');
    $(tabsList).removeClass('violet_font');
    $(this).addClass('violet_font');

    let data = {
        ELEMENT_CODE: $(this).attr('data-slug')
    }
    $.post('/local/templates/aero/ajax/info.php', data,  function(data) {
          if (data.length){
                let content = $(data).find('.about_card--right .content');
                $('.about_card--right').html(' ').append(content);
          } else {

          }
          
    });

    setLocation(data.ELEMENT_CODE);
});

$( document ).ajaxComplete(function() {
    education_tab();
    management_tab();
    modals(); 
    // setTimeout(function() {
    //     $('.pre_loader').css('display', 'none');
    // }, 2000);
    $('.pre_loader').css('display', 'none');
});


function setLocation(curLoc){
    try {
        history.pushState(null, null, curLoc);
        return;
    } catch(e) {}
    location.href = curLoc;
}

// $('violet_font').click(function() {
//     $(this).removeClass('violet_font');
// });