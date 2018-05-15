<?php
   //
   // friends.php: friends page -- actually more html and javascript than php
   // -----------------------------------------------------------------------
   // The .php extension enables us to use standard headers, footers,
   // background, etc.
   //
   require ("../inc/constants.php");
   $background  = $DEFAULT_BACKGROUND;
   $title       = 'tomh\'s friends';
   $colorScheme = $YELLOW;
   require ("../inc/printHeader.php");  /* imports style sheet(s) */
   $oneOrTwoLevels = $ONE;
   require ("../inc/printNavbar.php");
?>

<script language="JavaScript1.3" SRC="../inc/statusFunctions.js"> </script>

<div class="lhsImage">
<table class="lhsCaptionedImage" cols="1" border="0" cellspacing="0" cellpadding="0">
<tr>
<td class="lhsImage">
<a href="../images/lhs/friends-Jim_1-fullsize.jpg"
  target="friendsWindow">
<img class="lhsImage" src="../images/lhs/friends-Jim_1.jpg" /></a>
</td>
</tr>
<tr>
<td class="lhsCaption">
Jim Armstrong
<br />
December 9th, 1954
<br />
through
<br />
April 5th, 2002
</td>
</tr>
</table>
</div>

<div class="content">
<h1>tomh's friends</h1>
<p>
Your link here: if you're a friend and want me to post your two cents or
your favorite link or whatever, please
<a href="http://tomhartung.com/index.php/more-/contact-me">contact me</a>.
</p>
<h2>Remembering Jim Armstrong</h2>
<p>
The photograph at left is of Jim Armstrong, taken on
Thanksgiving Day of 2001, a few months before he passed away.
Click on it to see a fullsize version in a new window.
</p>
<p>
Growing up in Richmond, Virginia, he was one of my best friends.
It was Jim who turned me on to The Grateful Dead
just after we graduated from high school, need I say more?
</p>
<p>
Jim was very out-going.
Back in the day, if I had a weekend night free, Jim is the one
I'd call to find out what was happening.
</p>
<p>
As we got older and partied less, Jim's place became the hangout.
When visiting him you might bump into the same friend you saw
last weekend, or someone from the old southside gang that you
hadn't seen in two or even five years.
</p>
<p>
At one point Jim told me if I ever got in trouble,
e.g., for a DUI or something, I could call him for help.
Fortunately I am a good kid and never had to take him up
on his offer.
I wonder how many other people he told to do the same?
He had <em>a lot</em> of friends.
</p>
<p>
Jim is still loved dearly, and greatly missed, by many, including myself!
</p>
<h2>Feed animals with a click of your mouse</h2>
<p>
Valerie asks that you visit
<a href="http://www.theanimalrescuesite.com/home"
   onMouseOver="linkStatus();return true;"
   onMouseOut="setStatusToDefault();return true;"
   target="friendsWindow">The Animal Rescue Site</a>
every day to give a bowl of food -- at no cost to you -- and
participate in the fight to save animals in need.
</p>
<p>
Funding to purchase a bowl of food, paid for by site sponsors, is 
generated when you click on the "Feed an Animal in Need" button on the 
homepage of The Animal Rescue Site. In 2002, with your help, we hope to 
give over five million bowls of food to animals living in humane 
shelters or sanctuaries.
</p>
<p>
Over ten million animals are abused, neglected or abandoned yearly. 
Over 27,000 defenseless animals are being harmed or dying every day!
Please consider making this website your homepage, 
and help spread the word to your friends and family.
Make visiting
<a href="http://www.theanimalrescuesite.com/home"
   onMouseOver="linkStatus();return true;"
   onMouseOut="setStatusToDefault();return true;"
   target="friendsWindow">
The Animal Rescue Site</a>
part of your daily routine!

<h2>Friends' web sites</h2>
<p>
Interested in log cabins and wood-burning stoves?
Visit
<a href="http://www.home.earthlink.net/~llamadars/"
   onMouseOver="linkStatus();return true;"
   onMouseOut="setStatusToDefault();return true;"
   target="friendsWindow">Dave and Robin's Website on Semi-Rural Living</a>.
</p>
<p>
Dave Gerow plays Latin music for a radio show entitled <em>Esuche</em>
in Hawaii on Kauai Community Radio,
<a href="http://www.kkcr.org/"
   onMouseOver="linkStatus();return true;"
   onMouseOut="setStatusToDefault();return true;"
   target="friendsWindow">KKCR</a>.
His show runs every Tuesday from 3:00 to 5:00 P.M. Hawaii time.
That translates to 7:00 A.M. to 9:00 A.M. for people in Denver, and 
from 9:00 A.M. to 11:00 A.M. Virginia time.
Dave says to call on the toll free line to make a request.
</p>
<p>
Bob Nagel is now CEO of
<a href="http://www.reymet.com/"
   onMouseOver="linkStatus();return true;"
   onMouseOut="setStatusToDefault();return true;"
   target="friendsWindow">Reymet Federal Credit Union</a>.
Bob is a huge fan of classic british rock, specifically the
Rolling Stones, The Who, and The Kinks.
He got a gang of us tickets for my
<a href="../images/friends/stonesJune1978.jpeg"
   onMouseOver="linkStatus();return true;"
   onMouseOut="setStatusToDefault();return true;"
   target="friendsWindow">first Stones show in 1978</a>.
I remember seeing Keith Richards playing with a capo in Philly that year,
just like it was yesterday -- and I guarantee you that I have not been
the same since....
</p>
<p>
Travis Shirk would like you to visit his website,
<a href="http://www.nicfit.net"
   onMouseOver="linkStatus();return true;"
   onMouseOut="setStatusToDefault();return true;"
   target="friendsWindow">
nicfit.net</a>.
Travis and I worked together at
<a href="http://www.mapquest.com/"
   onMouseOver="linkStatus();return true;"
   onMouseOut="setStatusToDefault();return true;"
   target="friendsWindow">mapquest.com</a>.
He has turned me on to some very cool music.
</p>
<p>
After the Keith-Richards-uses-a-capo-like-the-bluegrass-dudes
revelation I had at the Rolling Stones concert in 1978,
Steve Parker, aka. sparker, was one of the few friends I had in
Virginny who also listened to punk rock back in the 1980s.
We are especially fond of the group
<a href="http://www.80smusiccentral.com/x.html"
   onMouseOver="linkStatus();return true;"
   onMouseOut="setStatusToDefault();return true;"
   target="friendsWindow">X</a>.
</p>
<p>
Randy Fay is now a
<a href="http://www.hobobiker.com/"
   onMouseOver="linkStatus();return true;"
   onMouseOut="setStatusToDefault();return true;"
   target="friendsWindow">hobo biker</a>.
</p>

<div class="footer">
<?php
   $pageCreated = $DEFAULT_PAGE_CREATED;
   $pageUpdated = '$Date: 2008/04/30 19:37:26 $';
   require ( "../inc/printFooter.php" );
?>
</div>
</body>
</html>
