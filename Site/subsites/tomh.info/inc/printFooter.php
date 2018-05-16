<?php
//
// printFooter.php: prints standard footer for pages on tomh.info and groja.com
// ----------------------------------------------------------------------------
//
   //
   // Remove leading '$Date: 2009/09/24 21:56:56 $' from $pageUpdated (RCS checkin date)
   //
   $pageUpdatedLen = strLen( $pageUpdated );
   $lenWithoutDSigns = $pageUpdatedLen - 7;
   $printPageUpdated = substr ( $pageUpdated, 6, $lenWithoutDSigns );

   // print( 'pageUpdated = "' . $pageUpdated . "\"\n" );
   // print( 'pageUpdatedLen = "' . $pageUpdatedLen . "\"\n" );
   // print( 'lenWithoutDSigns = "' . $lenWithoutDSigns . "\"\n" );
   // print( 'printPageUpdated = "' . $printPageUpdated . "\"\n" );
   // print( '<br \>' . "\n" );

   print(
      '<hr \>' . "\n" .
      '<table class="footer" ' .
        'cols="2" width="100%" border="0" cellspacing="0" cellpadding="0">' . "\n" .
      '   <tr>' . "\n" .
      '      <td align="left">' . "\n" .
      '         Other Sites: <a href="http://www.tomhartung.com">tomhartung.com</a>,' . "\n" .
      '              <a href="http://www.artsyvisions.com/friends/tomh">artsyvisions.com</a>,' . "\n" .
      '              <a href="http://www.groja.com">groja.com</a>' . "\n" .
      '      </td>' . "\n" .
      '      <td align="right" valign="top">' . "\n" .
      '         Page Created: ' . "$pageCreated \n" .
      '      </td>' . "\n" .
      '   </tr>' . "\n" .
      '   <tr>' . "\n" .
      '      <td align="left">' . "\n" .
      '         <a href="http://tomhartung.com/index.php/contact-me" ' .
                   'title="Contact me" target="_blank">' .
                   '[Link to contact page at tomhartung.com]</a>' . "\n" .
      '      </td>' . "\n" .
      '      <td align="right" valign="top">' . "\n" .
      '         Last Updated: ' . "$printPageUpdated\n" .
      '      </td>' . "\n" .
      '   </tr>' . "\n" .
      '</table>' . "\n" .
      '<address class="footer">' .
      '&copy; 2001-2009 Tom Hartung, P. O. Box 18216, Denver, CO 80218' . "\n" .
      '</address>' . "\n" .
      '<hr \>' . "\n" .
      '<br \>' . "\n"
   );
?>
