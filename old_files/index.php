<?php
include ("global.php"); //DO NOT REMOVE
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>KC Food Not Bombs</title>
  <meta name="description" content="We offer free, hot, vegan friendly meals, groceries, literature, and household items to anyone in need.">
  <meta name="author" content="Bob Palmer">
  <meta name="keywords" content="Food Not Bombs Kansas City Free Food Free Store Free Skool Free School Comida No Bombas">
  <link rel="stylesheet" type="text/css" href="styles.css">
  <link rel="icon" type="image/png" href="/kcfnb-icon.png">
  <script src='https://www.google.com/recaptcha/api.js'></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script>
  $(document).ready(function(){
    //fix menu after reaching a certain point
    var nav = $("#main-nav");
    var pos = nav.offset().top;
    $(window).scroll(function(){
      var fix = ($(this).scrollTop() > pos) ? true : false;
      nav.toggleClass("main-nav-fix", fix);
      $('body').toggleClass("body-fix", fix);
    });
        //$("#main-nav").removeClass("main-nav-fix");
  });
  </script>
  <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->
</head>
<body>
  <div id="Container">
  <div id="Header">
    <img id="Banner" src="banner.png" alt="Kansas City Food Not Bombs">
    <h1>Kansas City Food Not Bombs</h1>
    <h2>Next Serving Downtown KC: <?=$nextDateDowntown?></h2>
    <h2>Next Serving Northeast KC: <?=$nextDate?></h2>
    <ul id="main-nav">
      <li><a href="#About">About Us</a></li>
      <li><a href="#Donation">Donations</a></li>
      <li><a href="#Photos">Photos</a></li>
      <li><a href="#Literature">Literature</a></li>
      <li><a href="#Maps">Locations</a></li>
      <li><a href="#Contact">Contact Us</a></li>
    </ul>
    <!--<nav><a href="#About">About Us</a> | <a href="#Donation">Donations</a> | <a href="#Photos">Photos</a> | <a href="#Maps">Locations</a> | <a href="#Contact">Contact Us</a></nav>-->
  </div>
  <div id="About">
    <h2>About Us</h2>
    <p>Free hot meals served at Independence Ave &amp; Monroe Ave (Outside the old Apple Market in Northeast KC) every Sunday at 4pm and at 9th St &amp; Harrison St in Downtown KC every Friday at 3pm. KC Food Not Bombs is a local chapter of the international <a href="http://foodnotbombs.net/" target="_blank">Food Not Bombs</a> organization. You can also check out <a href="http://www.foodnotbombs.net/new_site/contacts.php">other Food Not Bombs chapters</a>.</p>
    <p><a href="http://foodnotbombs.net/" target="_blank">Food Not Bombs</a> is one of the fastest growing movements and is gaining momentum throughout the world. There are hundreds of autonomous chapters sharing free vegetarian food with hungry people and protesting war and poverty. Food Not Bombs is not a charity. This energetic grassroots movement is active throughout the Americas, Europe, Africa, the Middle East, Asia and Australia. Food Not Bombs is organizing for peace and an end to the occupations of Iraq, Afghanistan and Palestine. For over 25 years the movement has worked to end hunger and has supported actions to stop the globalization of the economy, restrictions to the movements of people, end exploitation and the destruction of the earth. </p>
    <p>The first group was formed in Cambridge, Massachusetts in 1980 by anti-nuclear activists. <a href="http://foodnotbombs.net/" target="_blank">Food Not Bombs</a> is an all-volunteer organization dedicated to nonviolent social change. <a href="http://foodnotbombs.net/" target="_blank">Food Not Bombs</a> has no formal leaders and strives to include everyone in its decision making process. Each group recovers food that would otherwise be thrown out and makes fresh hot vegetarian meals that are served in outside in public spaces to anyone without restriction. Each independent group also serves free vegetarian meals at protests and other events. The San Francisco chapter has been arrested over 1,000 times in government's effort to silence its protest against the city's anti- homeless policies. Amnesty International states it will adopt those Food Not Bombs volunteers that are convicted as "Prisoners of Conscience" and will work for their unconditional release. Even though we are dedicated to nonviolence, <a href="http://foodnotbombs.net/" target="_blank">Food Not Bombs</a> activists in the United States have been under investigation by the FBI Joint Terrorism Task Force, Pentagon and other intelligence agencies. A number of <a href="http://foodnotbombs.net/" target="_blank">Food Not Bombs</a> volunteers have been arrested on terrorism charges but there has never been a conviction.</p>
  </div>
  <div id="Donation">
    <h2>Donations</h2>
    <p>Your donations allow us to serve the community with hot meals, groceries, household items, and more. We handle donations differently depending on the item being donated.</p>
    <h3>Food Items</h3>
    <p>We greatly appreciate produce, juice, bread, grains, rice, pasta, spices, and other non-meat/non-dairy ingredients. Any food items we have left over after meal preparation are given out to the community. To donate a food item, please contact us to arrange a pickup. We usually pick up food items on Sunday mornings, but have some flexibility to pick up at other times throughout the week as needed. Most of our donations come from local vendors who would be throwing food out due to packaging damage or partial case spoilage. We sort through these items manually to recover and prepare food which is still safe to eat.</p>
    <h3>Serving Supplies and Free Store Items</h3>
    <p>Plasticware, paper plates, and cups are also appreciated. Without these items, we would not be able to serve hot meals. Household items, clothing, goods, books, and appliances are distributed directly to the community we proudly serve through our Free Store. We can accept these items in person during our serving or food prep times. We can also arrange a pickup anytime throughout the week. </p>
    <h3>Cash</h3>
    <p>Cash donations allow us to take care of unexpected expenses. Last minute ingredients, seasonal supplies, gas for far away donation pickups, and this website all cost money. We can accept cash donations in person, or via PayPal.</p>
    <form id="DonationForm" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
      <input type="hidden" name="cmd" value="_s-xclick">
      <input type="hidden" name="hosted_button_id" value="M9VPQHRFSADV6">
      <input id="donation-button" type="image" src="donation.png" border="0" name="submit" alt="Click here to donate via Paypal">
      <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
    </form>
  </div>
  <div id="Photos">
    <h2>Photos</h2>
    <iframe id="photo-frame"src="//embedsocial.com/facebook_album/album_photos/1190147131072849" width="776" height="1100" frameborder="0" scrolling="no" marginheight="-20" marginwidth="0"></iframe>
  </div>
  <div id="Literature">
    <h2>Literature</h2>
    <iframe id="photo-frame"src="/zines/" width="776" height="560" frameborder="0" scrolling="yes" marginheight="-20" marginwidth="0"></iframe>
  </div>
  <div id="Maps">
    <h2>Locations</h2>
    <p>We <strong>prepare</strong> and <strong>serve</strong> meals in <strong>Northeast Kansas City</strong> every <strong>Sunday</strong>.</p>
    <div class="table">
      <div class="Table-Row">
        <div class="Table-Cell" id="ServingLocationMap">
          <h3>Serving Location</h3>
          <iframe width="380" height="400" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJeWlttfX6wIcRRrRiTz9zBAE&key=AIzaSyAGkf-n4v305so_iSfUD69rqniT9JnscpQ" allowfullscreen></iframe>
          <p>3719 Independence Ave, Kansas City, MO 64124</p>
          <p>4:00 PM - 6:00 PM</p>
        </div>
        <div class="Table-Cell" id="PrepLocationMap">
          <h3>Prep Location</h3>
          <iframe width="380" height="400" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=3226%20E%2012th%20St%2C%20Kansas%20City%2C%20MO%2064127&key=AIzaSyAGkf-n4v305so_iSfUD69rqniT9JnscpQ" allowfullscreen></iframe>
          <p>3226 E 12th St, Kansas City, MO 64127</p>
          <p>1:30 PM - 4:00 PM</p>
        </div>
      </div>
    </div>
    <p>We <strong>prepare</strong> and <strong>serve</strong> meals in <strong>Downtown Kansas City</strong> every <strong>Friday</strong>.</p>
    <div class="table">
      <div class="Table-Row">
        <div class="Table-Cell" id="DowntownServingLocationMap">
          <h3>Serving Location</h3>
          <iframe width="380" height="400" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=E+9th+St+%26+Harrison+St,+Kansas+City,+MO+64106&key=AIzaSyAGkf-n4v305so_iSfUD69rqniT9JnscpQ" allowfullscreen></iframe>
          <p>9th and Harrison St, Kansas City, MO 66108</p>
          <p>3:00 PM - 4:00 PM</p>
        </div>
        <div class="Table-Cell" id="DowntownPrepLocationMap">
          <h3>Prep Location</h3>
          <iframe width="380" height="400" frameborder="0" style="border:0" src="" allowfullscreen></iframe>
          <p>Contact Us for Location</p>
          <p>12:00 PM - 2:30 PM</p>
        </div>
      </div>
    </div>
  </div>
  <div id="Contact">
    <h2>Contact</h2>
    <a href="https://www.facebook.com/kcfnb/">Find us on Facebook</a>
    <form action="/contactengine.php" method="post">
      <input name="Time" id="Time" type="hidden">
      <div id="ContactForm">
      <p><label for="Name">Name:</label>&nbsp&nbsp&nbsp<input class="submissionfield" name="Name" id="Name" type="text"required=required></p>
      <p><label for="Email">Email:</label>&nbsp&nbsp&nbsp<input class="submissionfield" name="Email" id="Email" type="Email" required=required></p>
      <p><label for="Location">Location:</label>&nbsp&nbsp&nbsp<select class="submissionfield" name="Location" id="Location" required=required><option value="Any">Any</option><option value="Downtown">Downtown</option><option value="Northeast">Northeast</option></select></p>
      <p><!--<label for="Subject">Subject:</label>--><input name="Subject" id="Subject" type="hidden" value="KC Food Not Bombs Website Comment" required=required></p>
      <p><label for="Mesage">Message:</label><textarea class="submissionfield" name="Message" id="Message" rows="6" cols="50" required=required></textarea></p>
      </div>
      <div class="g-recaptcha" data-sitekey="6LeI5x8UAAAAADsvLo9-hdBGA_q81mJSx7VJDiTw"></div>
      <br />
      <br />
      <button type="submit"><img src="send_message.png" alt="Send us a message!"/></button>
    </form>
  </div>
  <div id="Footer">
  Go be excellent to each other.
  </div>
  </div>
</body>
</html>
