$('.ui.right.dropdown.item').dropdown();

$('#modalMenuBtn').click(
  function()
  {
    $('#modalMenu').modal({closable: false}).modal('show');
  }
);

onLoadAndResize();

$(window).resize(onLoadAndResize);

function onLoadAndResize()
{
  if($(window).width() <= 768)
  {
    $('#logo').removeClass('small');
    $('#logo').addClass('tiny');

    $('#menu').hide();

    $('#modalMenuBtn').show();

    $('#newsletterForm').css(
      {
        top: 'auto',
        right: 'auto',
        position: 'relative'
      }
    );

    $('#socialList').css(
      {
        bottom: 'auto',
        right: 'auto',
        position: 'relative'
      }
    );

    $('#footerCol1').removeClass('two wide column');
    $('#footerCol1').addClass('eight wide column');
    $('#footerCol2').removeClass('three wide column');
    $('#footerCol2').addClass('eight wide column');
    $('#footerCol3').removeClass('eleven wide column');
    $('#footerCol3').addClass('sixteen wide column');

    $('#loginFormCol').removeClass('nine wide column');
    $('#loginFormCol').addClass('sixteen wide column');

    $('#formLogo').removeClass('hidden');
  }
  else
  {
    $('#logo').removeClass('tiny');
    $('#logo').addClass('small');

    $('#menu').show();

    $('#modalMenuBtn').hide();

    $('#newsletterForm').css(
      {
        top: 0,
        right: 0,
        position: 'absolute'
      }
    );

    $('#socialList').css(
      {
        bottom: 0,
        right: 0,
        position: 'absolute'
      }
    );

    $('#footerCol1').removeClass('eight wide column');
    $('#footerCol1').addClass('two wide column');
    $('#footerCol2').removeClass('eight wide column');
    $('#footerCol2').addClass('three wide column');
    $('#footerCol3').removeClass('sixteen wide column');
    $('#footerCol3').addClass('eleven wide column');

    $('#loginFormCol').removeClass('sixteen wide column');
    $('#loginFormCol').addClass('nine wide column');

    $('#formLogo').addClass('hidden');
  }
}
