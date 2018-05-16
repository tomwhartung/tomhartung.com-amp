<?php
   //
   // resume.php: my resume -- actually more javascript and html than php
   // -------------------------------------------------------------------
   // The .php extension enables us to use the standard header "include" files.
   // But actually we override some of that to make this more printer-friendly:
   //   o Change back ground to white
   //   o Change link colors to black
   //   o Do not print the nav bar
   // At least it's as consistent as possible -- resume must be unique!
   //
   require ("../inc/constants.php");
   $background  = $NONE;
   $title = 'The Resume of Thomas Walter Hartung';
   $colorScheme = $NOIR;
   require ("../inc/printHeader.php");     /* imports style sheet(s) */
?>

<div class="resume">
<p style="font-size:24px;margin-top:150px;text-align: center;">A new and improved version of this resume is now hosted on a new website!</p>

<noscript language="JavaScript">
<p style="font-size:24px;margin-top:75px;text-align: center;">
 Please find the new version at <a href='http://www.tomhartung.com/resume'>http://www.tomhartung.com/resume</a>.</p>
</noscript>

<script language="JavaScript">
  var newResume = 'http://www.tomhartung.com/resume';
  var seconds =    5;
  var intervalMs = 1000;   // 1000 ms/sec
  var timeoutMs = seconds * intervalMs;

  document.write( '<p style="font-size:24px;margin-top:75px;text-align: center;">' );
  document.write( 'Redirecting to "' + newResume + '" in <span id="seconds">' + seconds + '</span> seconds....' );
  document.write( '</p>' );

  var secondsElt = document.getElementById( 'seconds' );
  var parentElt  = secondsElt.parentNode;
  var oldSecsElt = secondsElt;
  var newSecsElt = document.createTextNode(seconds);

  function myReplace( )
  {
     seconds--;
     newSecsElt = document.createTextNode(seconds);
  // newSecsElt.setAttribute("color", "red");
     parentElt.replaceChild( newSecsElt, oldSecsElt );
     oldSecsElt = newSecsElt;
  }

  window.setTimeout( 'window.location.replace(newResume)', timeoutMs );
  window.setInterval( 'myReplace();', intervalMs );

</script>
</div>

</body>
</html>
