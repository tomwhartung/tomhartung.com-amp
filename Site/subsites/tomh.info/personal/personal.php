<?php
   //
   // personal.php: personal page -- actually more html and javascript than php
   // -------------------------------------------------------------------------
   // The .php extension enables us to use standard headers, footers,
   // background, etc.
   //
   require ("../inc/constants.php");
   $background  = $DEFAULT_BACKGROUND;
   $title       = 'tomh gets personal!';
   $colorScheme = $RED;
   require ("../inc/printHeader.php");    /* imports style sheet(s) */
   $oneOrTwoLevels = $TWO;
   require ("../inc/printNavbar.php");
?>

<script language="JavaScript1.3" src="../inc/statusFunctions.js"> </script>

<style type="text/css">
div.lhsImage {
  /* position: fixed; */
}
</style>

<div class="lhsImage">
<img class="lhsImage" src="../images/lhs/personal-lightLeft_noFlash_shake_3.jpg" />
</div>

<div class="content">
<h1>Getting personal</h1>
<p>
Check it out: there's a whole new layer of options on the navbar above.
You didn't think all my personal information could fit on a single page, didja?
Peel the onion, people, peel the onion!
</p>
<h2>What's up?</h2>
<p>
The big news is, I now have a blog running at
<a href="http://tomhartung.com/">tomhartung.com</a>.
I'm hosting it, along with
<a href="http://groja.com/">groja.com</a> and
<a href="http://artsyvisions.com/">artsyvisions.com</a>
on a dedicated server at home.
</p>

<h2>Ch-ch-ch-changes</h2>
<p>
Following is a list of changes made to this site since its initial release:
</p>
<ul>
 <li>In April of 2008:
  <ul>
   <li>Updated site to reflect new blog at
    <a href="http://www.tomhartung.com">tomhartung.com</a>
    and batches of photos posted at
    <a href="http://www.artsyvisions.com/friends/tomh">artsyvisions.com</a>
   </li>
  </ul>
 <li>In April of 2006:
  <ul>
   <li>Updated my
    <a href="../work/resume.php"
      onMouseOver="window.status='Go directly to resume';return true;"
      onMouseOut="setStatusToDefault();return true;">resume</a>
    (in reality this takes place on an ongoing basis)
   </li>
   <li>Changed the personal -&gt;
     <a href="theLatest.php"
       onMouseOver="window.status='Go directly to the latest page';return true;"
       onMouseOut="setStatusToDefault();return true;">the latest</a>
     page so it refers people to my blog at groja.com
     and returned the text of that page to the version telling how I quit smoking</li>
   <li>Added links to new photo galleries to the personal -&gt;
    <a href="photos.php"
      onMouseOver="window.status='Go directly to photos page';return true;"
      onMouseOut="setStatusToDefault();return true;">photos</a>
    page</li>
   <li>Completely rewrote the personal -&gt;
    <a href="computing.php"
      onMouseOver="window.status='Go directly to computing page';return true;"
      onMouseOut="setStatusToDefault();return true;">computing</a>
    page</li>
   <li>Updated the personal -&gt;
     <a href="dancing.php"
       onMouseOver="window.status='Go directly to the dancing page';return true;"
       onMouseOut="setStatusToDefault();return true;">dancing</a>
     page</li>
  </ul>
 </li>
 <li>In February of 2005:
  <ul>
   <li>In February of 2005: added latest job to
    <a href="../work/resume.php"
      onMouseOver="window.status='Go directly to resume';return true;"
      onMouseOut="setStatusToDefault();return true;">resume</a></li>
   <li>Updated the personal -&gt;
    <a href="computing.php"
      onMouseOver="window.status='Go directly to computing page';return true;"
      onMouseOut="setStatusToDefault();return true;">computing</a>
    page</li>
   <li>Fixed some errors that appeared only in IE 6</li>
  </ul>
 </li>
 <li>In September of 2004:
  <ul>
   <li>Updated the entire site, using 
   <a href="http://www.csszengarden.com/" target="computing_window">Cascading Style Sheets</a></li>
  </ul>
 </li>
</ul>
<p>
</p>
</div>

<div class="footer">
</p>
<p>
<?php
   $pageCreated = $DEFAULT_PAGE_CREATED;
   $pageUpdated = '$Date: 2006/04/14 19:42:58 $';
   require ( "../inc/printFooter.php" );
?>
</div>
</body>
</html>
