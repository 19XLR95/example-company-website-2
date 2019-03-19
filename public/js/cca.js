onLoadAndResize();

$(window).resize(onLoadAndResize);

$('.ui.dropdown').dropdown();

function onLoadAndResize()
{
  if($(window).width() <= 768)
  {
    $('#footerRightCol').removeClass('right aligned column');
    $('#footerRightCol').addClass('left aligned column');

    $('#logoCol').addClass('center aligned');
    $('#btnCol').addClass('center aligned');

    $('#logoutBtn').removeClass('right floated');

    $('#langDropdown').css('float', 'none');
    $('#langDropdown').css('margin-right', '5px');
    $('#langDropdown').css('margin-left', '0');

    if($('#changeBtn').length)
    {
      $('#changeBtn').removeClass('right floated');
    }
  }
  else
  {
    $('#footerRightCol').removeClass('left aligned column');
    $('#footerRightCol').addClass('right aligned column');

    $('#logoCol').removeClass('center aligned');
    $('#btnCol').removeClass('center aligned');

    $('#logoutBtn').addClass('right floated');

    $('#langDropdown').css('float', 'right');
    $('#langDropdown').css('margin-right', '0');
    $('#langDropdown').css('margin-left', '8px');

    if($('#changeBtn').length)
    {
      $('#changeBtn').addClass('right floated');
    }
  }
}
