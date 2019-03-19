<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="The most powerful tool for analizing data.">


    <title>The Most Powerful Analyze Tool | Compass+</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:300,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300i,400,700" rel="stylesheet">
    <link rel="stylesheet" href="PCXEC022019142/css/compassplus.css">
  </head>

  <body>
    <div class="ui red compact icon message">
      <i class="circle info icon"></i>
      <div class="content">
        <div style="font-family: 'Poppins', sans-serif !important; font-weight: 400 !important;" class="header">
          {{__('localization.previewTitle')}}
        </div>
        <p style="font-family: 'Poppins', sans-serif !important; font-weight: 400 !important;">{{__('localization.previewDescription')}}</p>
      </div>
    </div>

    <a id="logo" href="preview?pid={{$projectID}}&page=index" id="logo" class="ui small image">
      <img src="PCXEC022019142/res/images/logo.png" alt="Compass+ Logo">
    </a>

    <button id="modalMenuBtn" class="ui icon inverted basic button">
      <i class="fas fa-bars"></i>
    </button>

    <div id="modalMenu" class="ui basic modal">
      <i class="close icon"></i>

      <div class="ui center aligned grid">
        <div class="ui sixteen wide column">
          <a class="active item menuItem" href="preview?pid={{$projectID}}&page=index">Home</a>
        </div>
        <div class="ui sixteen wide column">
          <a class="item menuItem" href="preview?pid={{$projectID}}&page=features">Features</a>
        </div>
        <div class="ui sixteen wide column">
          <a class="item menuItem" href="preview?pid={{$projectID}}&page=pricing">Pricing</a>
        </div>
        <div class="ui sixteen wide column">
          <a class="item menuItem" href="preview?pid={{$projectID}}&page=contact">Contact</a>
        </div>
        <div class="ui sixteen wide column">
          <a class="ui violet button menuItem" href="preview?pid={{$projectID}}&page=login">Login</a>
        </div>
        <div class="ui sixteen wide column">
          <div class="ui right dropdown item menuItem">
            <i class="fas fa-globe-americas"></i>
            <i class="dropdown icon"></i>
            <div class="menu">
              <div class="item">English</div>
              <div class="item">Türkçe</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="menu" class="ui secondary menu">
      <a class="item menuItem" href="preview?pid={{$projectID}}&page=index">Home</a>
      <a class="item menuItem" href="preview?pid={{$projectID}}&page=features">Features</a>
      <a class="item menuItem" href="preview?pid={{$projectID}}&page=pricing">Pricing</a>
      <a class="item menuItem" href="preview?pid={{$projectID}}&page=contact">Contact</a>
      <a class="ui violet button menuItem" href="preview?pid={{$projectID}}&page=login">Login</a>
      <div class="ui right dropdown item menuItem">
        <i class="fas fa-globe-americas"></i>
        <i class="dropdown icon"></i>
        <div class="menu">
          <div class="item">English</div>
          <div class="item">Türkçe</div>
        </div>
      </div>
    </div>

    <div class="ui image">
      <img src="PCXEC022019142/res/images/bg1.png" alt="Compass+">

      <div id="mainBgDimmer" class="ui active dimmer">
        <div class="content">
          <div class="ui grid">
            <div class="ui one column row">
              <div class="ui column">
                <h1 id="title">Compass<b id="titleSuffix">+</b></h1>
              </div>
            </div>

            <div class="ui one column row">
              <div class="ui column">
                <p id="slogan">Analyze whatever you want.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="sections" class="ui center aligned padded grid">
      <div class="ui sixteen wide column">
        <h1 class="sectionsText">What is Compass+?</h1>
      </div>

      <div class="ui sixteen wide column">
        <p class="sectionsText">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lectus magna, tempus nec finibus rhoncus, eleifend sit amet purus. Morbi gravida posuere accumsan. Morbi odio velit, congue in lectus laoreet, semper ornare nulla. Nulla aliquet ante a arcu convallis, feugiat rutrum erat sodales. Nullam facilisis nisl et lacus dapibus, vitae pretium diam tincidunt. Nulla aliquet, metus ac maximus sollicitudin, diam justo dignissim velit, nec suscipit risus libero sit amet ex. Etiam blandit consectetur pretium. Aliquam erat volutpat. Nam commodo viverra magna, nec suscipit orci aliquet nec. Ut dapibus tincidunt ante viverra ornare. Duis elementum ante in dui aliquet, at eleifend urna pellentesque. Donec suscipit aliquam quam eu pretium. In eget orci iaculis, aliquam metus eget, dignissim augue. Nulla venenatis turpis id maximus maximus.
        </p>
      </div>
    </div>

    <div id="sections" class="ui center aligned padded grid">
      <div class="ui sixteen wide column">
        <h1 class="sectionsText">How can Compass+ help you?</h1>
      </div>

      <div class="ui sixteen wide column">
        <p class="sectionsText">
          Phasellus ut ultricies diam. Praesent in sem diam. Vivamus et ante quis nisl tincidunt sollicitudin ornare sed est. Donec fermentum nisl eget eleifend tincidunt. Praesent vitae volutpat dui. Quisque ex lacus, sollicitudin ut arcu non, sodales malesuada urna. Nunc eget pellentesque sapien, at mollis tellus. Quisque mollis augue ut leo faucibus laoreet ac at sem. In hac habitasse platea dictumst. Aliquam sed feugiat quam.

          Nunc fermentum sed dui eget egestas. Vivamus tristique consequat mauris, quis tincidunt enim fringilla tincidunt. Donec ut tristique lorem. Integer consequat vitae nulla a elementum. Fusce id elit erat. Integer eget dapibus ligula, et pharetra ipsum. Curabitur efficitur at nunc nec aliquam.
        </p>
      </div>
    </div>

    <div id="subMenu1" class="ui stackable grid">
      <div class="ui ten wide middle aligned column">
        <p class="sectionsText">
          Pellentesque tincidunt ante eu ligula condimentum, tincidunt scelerisque nunc porttitor.
        </p>
      </div>
      <div class="ui six wide right aligned column">
        <div class="horizontal list">
          <a class="ui violet button item menuItem" href="contact.html">Request Demo</a>
        </div>
      </div>
    </div>

    <div id="sections" class="ui center aligned padded stackable grid">
      <div class="ui sixteen wide column">
        <h1 class="sectionsText">Which platform can Compass+ run on?</h1>
      </div>

      <div class="ui sixteen wide column">
        <p class="sectionsText">
          Nunc fermentum sed dui eget egestas. Vivamus tristique consequat mauris, quis tincidunt enim fringilla tincidunt.
        </p>
      </div>

      <div class="ui five wide column">
        <div class="ui raised segment sectionsSegment">
          <i class="far fa-window-maximize sectionsItem"></i>
          <p class="sectionsText">
            Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin at imperdiet velit. Duis eleifend mauris in scelerisque pretium.
          </p>
        </div>
      </div>

      <div class="ui five wide column">
        <div class="ui raised segment sectionsSegment">
          <i class="fas fa-desktop sectionsItem"></i>
          <p class="sectionsText">
            Vivamus vel velit sed nunc sodales placerat. Donec et consequat nibh, at volutpat leo. Donec malesuada, orci eu faucibus tempor, ipsum magna pulvinar enim, at faucibus ex leo non lectus.
          </p>
        </div>
      </div>

      <div class="ui five wide column">
        <div class="ui raised segment sectionsSegment">
          <i class="fas fa-server sectionsItem"></i>
          <p class="sectionsText">
            Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque iaculis tellus elit, quis porttitor ante ultrices ac.
          </p>
        </div>
      </div>
    </div>

    <div id="subMenu2" class="ui stackable grid">
      <div class="ui ten wide middle aligned column">
        <p>
          Sed iaculis malesuada vestibulum. Pellentesque eget pretium justo, in consectetur sapien.
        </p>
      </div>
      <div class="ui six wide right aligned column">
        <div class="horizontal list">
          <a class="ui violet button item menuItem" href="get-started.html">Get Started</a>
        </div>
      </div>
    </div>

    <div id="sections" class="ui center aligned padded grid">
      <div class="ui sixteen wide column">
        <h1 class="sectionsText">Who use Compass+?</h1>
      </div>

      <div class="ui four wide column">
        <img class="ui small centered image fakeLogo" src="PCXEC022019142/res/images/fake-logo1.jpeg" alt="Fake Logo">
      </div>

      <div class="ui four wide column">
        <img class="ui small centered image fakeLogo" src="PCXEC022019142/res/images/fake-logo2.jpg" alt="Fake Logo">
      </div>

      <div class="ui four wide column">
        <img class="ui tiny centered image fakeLogo" src="PCXEC022019142/res/images/fake-logo3.jpg" alt="Fake Logo">
      </div>

      <div class="ui four wide column">
        <img class="ui small centered image fakeLogo" src="PCXEC022019142/res/images/fake-logo4.jpg" alt="Fake Logo">
      </div>

      <div class="ui four wide column">
        <img class="ui small centered image fakeLogo" src="PCXEC022019142/res/images/fake-logo5.jpg" alt="Fake Logo">
      </div>

      <div class="ui four wide column">
        <img class="ui small centered image fakeLogo" src="PCXEC022019142/res/images/fake-logo6.jpg" alt="Fake Logo">
      </div>

      <div class="ui four wide column">
        <img class="ui small centered image fakeLogo" src="PCXEC022019142/res/images/fake-logo7.jpg" alt="Fake Logo">
      </div>

      <div class="ui four wide column">
        <img class="ui small centered image fakeLogo" src="PCXEC022019142/res/images/fake-logo8.png" alt="Fake Logo">
      </div>
    </div>

    <footer>
      <div class="ui padded doubling grid">
        <div id="footerCol1" class="ui two wide column">
          <div class="ui list">
            <a class="item menuItem lineMargin" href="preview?pid={{$projectID}}&page=index">Home</a>
            <a class="item menuItem lineMargin" href="preview?pid={{$projectID}}&page=features">Features</a>
            <a class="item menuItem lineMargin" href="preview?pid={{$projectID}}&page=pricing">Pricing</a>
            <a class="item menuItem lineMargin" href="preview?pid={{$projectID}}&page=contact">Contact</a>
          </div>
        </div>

        <div id="footerCol2" class="ui three wide column">
          <div class="ui list">
            <a class="item menuItem lineMargin" href="preview?pid={{$projectID}}&page=career">Career</a>
            <a class="item menuItem lineMargin" href="preview?pid={{$projectID}}&page=news">News</a>
            <a class="item menuItem lineMargin" href="preview?pid={{$projectID}}&page=contact">Request Demo</a>
            <a class="item menuItem lineMargin" href="preview?pid={{$projectID}}&page=get-started">Get Started</a>
          </div>
        </div>

        <div id="footerCol3" class="ui eleven wide column">
          <form id="newsletterForm" class="ui form">
            <div class="ui fields">
              <div class="field">
                <input type="text" placeholder="Newsletter...">
              </div>
              <button type="submit" class="ui violet icon button">
                <i class="fas fa-chevron-right"></i>
              </button>
            </div>
          </form>

          <div id="socialList" class="ui right aligned horizontal list">
            <a class="icon item menuItem socialLink" href="#">
              <i class="fab fa-twitter"></i>
            </a>
            <a class="icon item menuItem socialLink" href="#">
              <i class="fab fa-linkedin-in"></i>
            </a>
            <a class="icon item menuItem socialLink" href="#">
              <i class="fab fa-youtube"></i>
            </a>
            <a class="icon item menuItem socialLink" href="#">
              <i class="fab fa-facebook-f"></i>
            </a>
          </div>
        </div>

        <div class="ui sixteen wide center aligned column">
          <a style="color: white;" class="sectionsText" href="https://clasxsoft.com">
              All rights reserved. | ClasX Software &reg
            </a>
        </div>
      </div>
    </footer>
  </body>

  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
  <script src="PCXEC022019142/js/compassplus.js"></script>
</html>
