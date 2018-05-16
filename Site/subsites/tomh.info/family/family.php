<?php
   //
   // family.php: family page -- actually more html and javascript than php
   // ---------------------------------------------------------------------
   // The .php extension enables us to use standard headers, footers,
   // background, etc.
   //
   require ("../inc/constants.php");
   $background  = $DEFAULT_BACKGROUND;
   $title       = "tomh's family";
   $colorScheme = $GREEN;
   require ("../inc/printHeader.php");  /* imports style sheet(s) */
   $oneOrTwoLevels = $ONE;
   require ("../inc/printNavbar.php");
?>

<script language="JavaScript1.3" SRC="../inc/statusFunctions.js"> </script>

<div class="lhsImage">
<img class="lhsImage" src="../images/lhs/family-withMildred_1.jpg" />
</div>

<div class="content">
<h1>Meet my family!</h1>
<p>
I'm still single, never married.
Rats!  I knew I forgot to do something!
</p>
<p>
Well, don't be surprised if maybe someday I finally hook up with someone.
And then again, what's so easy for most to do is
incredibly difficult for me, so don't be surprised if I don't.
As an idealist and someone totally into harmonious relationships,
I want to find the <q>perfect</q> woman, with a minumum of grief
for all parties involved.
That's eaiser said than done, and ofttimes it seems to be
not worth the trouble.
</p>

<h2>Immediate family</h2>
<p>
My father's name is Homer and he lives in Urbanna, Virginia with my
step-mom Ginny.
He has a PhD in Chemistry and is a retired research chemist.
</p>
<p>
My Mom passed away on December 11th, 2000.
Her name was Carol Jeanne Schnakenberg; most people called her "Jeanne."
After she and my Dad divorced she married Juergen Schnackenberg.
She had a Masters Degree and taught Psychiatric Nursing for
many years at St. Mary's Hospital and Memorial Hospital in Richmond, VA.
</p>
<p>
My sister Marti lives in Richmond, Virginia.
She uses a QY-100 Yamaha Sequencer with a built-in rhythm machine,
a Gibson Les Paul, a Fender Stratocaster, and 
a Fostex V-16-track recorder to
compose and record her own music.  
She even burns her own CDs on two home units, one is a
Phillips and the other is a Pioneer.
</p>
<p>
My brother Matt and his wife Amy live in Palmyra, Virginia,
which is a little east of Charlottesville.
They work in Charlottesville and have two children: Ethan and Libbey.
</p>

<h2>Aunts, uncles, and cousins</h2>
<p>
My father is the oldest of three brothers.
Uncle Richard is the middle one and Uncle Victor is the youngest.
</p>
<p>
Cousin Lin is Uncle Richard and Aunt Mary's daughter.
She is married to Henry Chambers and
<a href="http://members.cox.net/hlcham/"
   onMouseOver="linkStatus();return true;"
   onMouseOut="setStatusToDefault();return true;"
   target="familyWindow">the Chambers Family Website</a>
has lots of pictures.
</p>
<p>
Cousins David and Richard are Uncle Victor and Aunt Lin's sons.
David is married to LeighAnn and they have four daughters and
two grandchildren.
The daughter's names are Shahann Lynn Hartung, April Ann Hartung,
Katherine Elizabeth Hartung Clinkenbeard, and Dawn Michell Hartung.
The grandchildren are named Autumn Renee Elizabeth Earle (Shahanna's
daughter) and Zackery Tyler Clinkenbeard.
</p>
<p>
Cousin Richard owns the
<a href="http://timeoutcafe.com/"
   onMouseOver="linkStatus();return true;"
   onMouseOut="setStatusToDefault();return true;"
   target="familyWindow">Time Out Sports Cafe</a>,
a sports bar in Jackson, Mississippi.
The website's
<a href="http://timeoutcafe.com/events.html"
   onMouseOver="linkStatus();return true;"
   onMouseOut="setStatusToDefault();return true;"
   target="familyWindow">Scrapbook</a>
has lots and lots of pictures.
It looks like they have some real good times at his place.
If you're in town please drop on by there and tell him tomh sent ya!
</p>
<p>
Hopefully I'll be able to update this section soon
with names and information about some other Aunts, Uncles,
and Cousins....
</p>
</div>

<div class="photos">
<hr />
<h1>tomh's online family album</h1>
<p>
Welcome to my online family photo album.
If you think you can click on an image and see the full size
version in a separate window, maybe you have ESP or something!
</p>
<table class="photos" cols="2" border="0" cellpadding="0">
<tr><td class="photoImg">
<a href="../images/family/Homer_Ginny_Cody_vista-fullsize.jpg"
   target="familyWindow"
   title="Click to display full-size image"
   name="Thumbnail of Homer, Ginny, and Cody, with a vista in background."
   alt="Thumbnail of Homer, Ginny, and Cody, with a vista in background."
   onMouseOver="imageStatus();return true;"
   onMouseOut="setStatusToDefault();return true;">
<img src="../images/family/Homer_Ginny_Cody_vista-thumbnail.jpg" /></a>
</td><td class="photoDesc">
Here's a recent shot of my Dad and Ginny up in the mountains.
</td></tr>
<tr><td class="photoImg">
<a href="../images/family/Homer_Ginny_Cody_MtJ-fullsize.jpg"
   target="familyWindow"
   title="Click to display full-size image"
   name="Thumbnail of Homer, Ginny, and Cody on Mt Jefferson."
   alt="Thumbnail of Homer, Ginny, and Cody on Mt Jefferson."
   onMouseOver="imageStatus();return true;"
   onMouseOut="setStatusToDefault();return true;">
<img src="../images/family/Homer_Ginny_Cody_MtJ-thumbnail.jpg" /></a>
</td><td class="photoDesc">
When you live in Urbanna, I guess being 4683 feet above sea level means something.
(Sorry, but it certainly does not impress someone like me, who lives in Denver.)
</td></tr>
<tr><td class="photoImg">
<a href="../images/family/Marti_glamour_1-fullsize.jpg"
   target="familyWindow"
   title="Click to display full-size image"
   name="Thumbnail of Marti's studio shot."
   alt="Thumbnail of Marti's studio shot."
   onMouseOver="imageStatus();return true;"
   onMouseOut="setStatusToDefault();return true;">
<img src="../images/family/Marti_glamour_1-thumbnail.jpg" /></a>
</td><td class="photoDesc">
This is a studio shot of my sister Marti.
</td></tr>
<tr><td class="photoImg">
<a href="../images/family/Matt_family_pool-fullsize.jpg"
   target="familyWindow"
   title="Click to display full-size image"
   name="Thumbnail of Matt's family taking a swim."
   alt="Thumbnail of Matt's family taking a swim."
   onMouseOver="imageStatus();return true;"
   onMouseOut="setStatusToDefault();return true;">
<img src="../images/family/Matt_family_pool-thumbnail.jpg" /></a>
</td><td class="photoDesc">
Here's a picture of, from left to right, Libbey, Amy, Ethan, and Matt.
</td></tr>
<tr><td class="photoImg">
<a href="../images/family/Marti_1-fullsize.jpg"
   target="familyWindow"
   title="Click to display full-size image"
   name="Thumbnail of a more natural shot of Marti."
   alt="Thumbnail of a more natural shot of Marti."
   onMouseOver="imageStatus();return true;"
   onMouseOut="setStatusToDefault();return true;">
<img src="../images/family/Marti_1-thumbnail.jpg" /></a>
</td><td class="photoDesc">
Here's a more recent shot of Marti, taken with her new digital camera.
</td></tr>
<tr><td class="photoImg">
<a href="../images/family/Amy_Libbey-fullsize.jpg"
   target="familyWindow"
   title="Click to display full-size image"
   name="Thumbnail of Amy and Libbey."
   alt="Thumbnail of Amy and Libbey."
   onMouseOver="imageStatus();return true;"
   onMouseOut="setStatusToDefault();return true;">
<img src="../images/family/Amy_Libbey-thumbnail.jpg" /></a>
</td><td class="photoDesc">
Here we have Amy and Libbey,
</td></tr>
<tr><td class="photoImg">
<a href="../images/family/Matt_Ethan-fullsize.jpg"
   target="familyWindow"
   title="Click to display full-size image"
   name="Thumbnail of Matt and Ethan."
   alt="Thumbnail of Matt and Ethan."
   onMouseOver="imageStatus();return true;"
   onMouseOut="setStatusToDefault();return true;">
<img src="../images/family/Matt_Ethan-thumbnail.jpg" /></a>
</td><td class="photoDesc">
and here we have Matt and Ethan,
</td></tr>
<tr><td class="photoImg">
<a href="../images/family/Marti_2-fullsize.jpg"
   target="familyWindow"
   title="Click to display full-size image"
   name="Thumbnail of another more natural shot of Marti."
   alt="Thumbnail of another more natural shot of Marti."
   onMouseOver="imageStatus();return true;"
   onMouseOut="setStatusToDefault();return true;">
<img src="../images/family/Marti_2-thumbnail.jpg" /></a>
</td><td class="photoDesc">
and here another shot of Marti.
</td></tr>
<tr><td class="photoImg">
<a href="../images/family/dadAndVic-1-fullsize.jpeg"
   target="familyWindow"
   title="Click to display full-size image"
   name="Thumbnail of Dad and Uncle Victor."
   alt="Thumbnail of Dad and Uncle Victor."
   onMouseOver="imageStatus();return true;"
   onMouseOut="setStatusToDefault();return true;">
<img src="../images/family/dadAndVic-1-thumbnail.jpeg" /></a>
</td><td class="photoDesc">
Here is a photo of my Dad (on the left) with his brother Victor.
</td></tr>
<tr><td class="photoImg">
<a href="../images/family/daltons-2-fullsize.jpeg"
   target="familyWindow"
   title="Click to display full-size image"
   name="Thumbnail of ..."
   alt="Thumbnail of ..."
   onMouseOver="imageStatus();return true;"
   onMouseOut="setStatusToDefault();return true;">
<img src="../images/family/daltons-2-thumbnail.jpeg" /></a>
</td><td class="photoDesc">
<p>
My step mom Ginny had two daughters from a marriage
before she met my Dad.
Donna is her oldest daughter.
</p>
<p>
This picture is of Donna and her family, Taylor, Madison,
and her husband Rob.
</p>
</td></tr>
<tr><td class="photoImg">
<a href="../images/family/gigi-1-fullsize.jpeg"
   target="familyWindow"
   title="Click to display full-size image"
   name="Thumbnail of ..."
   alt="Thumbnail of ..."
   onMouseOver="imageStatus();return true;"
   onMouseOut="setStatusToDefault();return true;">
<img src="../images/family/gigi-1-thumbnail.jpeg" /></a>
</td><td class="photoDesc">
Here is my Dad and Ginny with Ginny's grandchild Gigi.
</td></tr>
<tr><td class="photoImg">
<a href="../images/family/jack-1-fullsize.jpeg"
   target="familyWindow"
   title="Click to display full-size image"
   name="Thumbnail of ..."
   alt="Thumbnail of ..."
   onMouseOver="imageStatus();return true;"
   onMouseOut="setStatusToDefault();return true;">
<img src="../images/family/jack-1-thumbnail.jpeg" /></a>
</td><td class="photoDesc">
<p>
This is Ginger, Ginny's youngest daughter and mother of Gigi,
with her son Jack.
</p>
<p>
Ginger's husband's name is Paul, and last time I visited them
he was the proud owner of a Camaro (I can relate to that!).
Maybe he'll send me a picture of himself (and his car?!?) soon.
</p>
</td></tr>
<!-- Use to add new images:
<tr><td class="photoImg">
<a href="../images/family/-1-fullsize.jpg"
   target="familyWindow"
   title="Click to display full-size image"
   name="Thumbnail of ..."
   alt="Thumbnail of ..."
   onMouseOver="imageStatus();return true;"
   onMouseOut="setStatusToDefault();return true;">
<img src="../images/family/-1-thumbnail.jpg" /></a>
</td><td class="photoDesc">

</td></tr>
 END MULTILINE COMMENT -->
</table>
</div>

<div class="footer">
<?php
   $pageCreated = $DEFAULT_PAGE_CREATED;
   $pageUpdated = '$Date: 2004/09/19 18:56:37 $';
   require ( "../inc/printFooter.php" );
?>
</div>
</body>
</html>
