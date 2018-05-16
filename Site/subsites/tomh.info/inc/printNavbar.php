<?php
  //
  // printNavbar: print html for navbar (common to all pages)
  // --------------------------------------------------------
  //
  print(
    '<div class="navbar">' . "\n" .
    '<table class="navbar" cols="2" ' .
      'border="0" cellspacing="2" cellpadding="0">' . "\n" .
    ' <tr>' . "\n" .
    '  <td class="navbarImage">' . "\n"
  );

  if ( $colorScheme == $BLUE )
  {
    print( '   <img src="../images/header/infp-blue.jpg"></td>' . "\n" );
  }
  elseif ( $colorScheme == $GREEN )
  {
    print( '   <img src="../images/header/intj-green.jpg"></td>' . "\n" );
  }
  elseif ( $colorScheme == $RED )
  {
    print( '   <img src="../images/header/isfj-red.jpg"></td>' . "\n" );
  }
  elseif ( $colorScheme == $YELLOW )
  {
    print( '   <img src="../images/header/istp-yellow.jpg"></td>' . "\n" );
  }

  print(
    '  <td class="navbarText">' . "\n" .
    '   <a href="http://www.monkeys.com/spammers-are-leeches/"> </a>' . "\n" .
    '   <table class="navbarText" cols="6" ' .
         'border="0" cellspacing="0" cellpadding="0">' . "\n" .
    '    <tr>' . "\n" .
    '     <td class="navbarLogo" colspan="6" valign="top">' . "\n"
  );

  if ( $colorScheme == $BLUE )
  {
    print(
      '<img class="navbarLogo" src="../images/header/underlined-logo-blue.gif" ' .
        'align="top"></td>' . "\n"
    );
  }
  elseif ( $colorScheme == $GREEN )
  {
    print(
      '<img class="navbarLogo" src="../images/header/underlined-logo-green.gif" ' .
        'align="top"></td>' . "\n"
    );
  }
  elseif ( $colorScheme == $RED )
  {
    print(
      '<img class="navbarLogo" src="../images/header/underlined-logo-red.gif" ' .
        'align="top"></td>' . "\n"
    );
  }
  elseif ( $colorScheme == $YELLOW )
  {
    print(
      '<img class="navbarLogo" src="../images/header/underlined-logo-yellow.gif" ' .
        'align="top"></td>' . "\n"
    );
  }

  if ( $oneOrTwoLevels == $ONE )
  {
    $tdClass = "nbOptsOneLevel";
  }
  else
  {
    $tdClass = "nbOptsTwoLevels";
  }

  print(
    '</tr>' . "\n" .
    '<tr valign="top">' . "\n" .
    ' <td class="' . $tdClass . '" valign="top">' . "\n" .
    '  <a class="navbarOptions" href="../index.html">home</a></td>' . "\n" .
    ' <td class="' . $tdClass . '" valign="top">' . "\n" .
    '  <a class="navbarOptions" href="../work/resume.php">resume</a></td>' . "\n" .
    ' <td class="' . $tdClass . '" valign="top">' . "\n" .
    '  <a class="navbarOptions" href="../personal/personal.php">personal</a></td>' . "\n" .
    ' <td class="' . $tdClass . '" valign="top">' . "\n" .
    '  <a class="navbarOptions" href="../family/family.php">family</a></td>' . "\n" .
    ' <td class="' . $tdClass . '" valign="top">' . "\n" .
    '  <a class="navbarOptions" href="../friends/friends.php">friends</a></td>' . "\n" .
    ' <td class="' . $tdClass . '" valign="top">' . "\n" .
    '  <a class="navbarOptions" href="http://www.groja.com">groja.com</a></td>' . "\n" .
    '</tr>' . "\n"
  );

  if ( $oneOrTwoLevels == $TWO )
  {
    print(
      '    <tr valign="top">' . "\n" .
      '     <td class="' . $tdClass . '" valign="top">' . "\n" .
      '      <a class="navbarOptions" href="theLatest.php">the latest</a></td>' . "\n" .
      '     <td class="' . $tdClass . '" valign="top">' . "\n" .
      '      <a class="navbarOptions" href="photos.php">photos</a></td>' . "\n" .
      '     <td class="' . $tdClass . '" valign="top">' . "\n" .
      '      <a class="navbarOptions" href="media.php">media</a></td>' . "\n" .
      '     <td class="' . $tdClass . '" valign="top">' . "\n" .
      '      <a class="navbarOptions" href="computing.php">computing</a></td>' . "\n" .
      '     <td class="' . $tdClass . '" valign="top">' . "\n" .
      '      <a class="navbarOptions" href="dancing.php">dancing</a></td>' . "\n" .
      '     <td class="' . $tdClass . '" valign="top">' . "\n" .
      '      <a class="navbarOptions" href="politics.php">politics</a></td>' . "\n"
    );
  }

  print(
    '    </tr>' . "\n" .
    '   </table>' . "\n" .
    '  </td>' . "\n" .
    ' </tr>' . "\n" .
    '</table>' . "\n" .
    '</div>' . "\n"
  );
?>
