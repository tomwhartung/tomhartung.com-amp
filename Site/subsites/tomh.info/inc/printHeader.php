<?php
  //
  // printHeader: print beginning html stuff common to all pages
  // -----------------------------------------------------------
  //
  print(
    '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"' . "\n" .
    '  "http://ww.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">' . "\n" .
    '<html>' . "\n"
  );

  print(
    '<head>' . "\n" .
    '<base_target="_top">' . "\n" .
    '<title>' . $title . '</title>' . "\n"
  );

  // I can't decide which icon to use so we'll let the computer decide:
  //
  $randomDecmal123  = rand( 0.5, 3.4999 );        // rounds to 1, 2, or 3
  $randomInteger123 = round( $randomDecmal123 );

  switch( $randomInteger123 )
  {
    case 1:
      $iconName = "../images/icons/infp-original-icon.jpg";
      break;
    case 2:
      $iconName = "../images/icons/infp-mondrianesque-icon.jpg";
      break;
    case 3:
      $iconName = "../images/icons/infp-rhythm-icon.jpg";
      break;
    default:
      $iconName = "../images/icons/infp-original-icon.jpg";
      break;
  }

  print(
    '<link rel="shortcut icon" href="' . $iconName . '">' . "\n" .
    '<link rel="stylesheet" href="../inc/basicStyles.css">' . "\n"
  );

  if ( $colorScheme == $BLUE )
  {
    print(
      '<link rel="stylesheet" href="../inc/blueStyles.css">' . "\n"
    );
  }
  elseif ( $colorScheme == $GREEN )
  {
    print(
      '<link rel="stylesheet" href="../inc/greenStyles.css">' . "\n"
    );
  }
  elseif ( $colorScheme == $RED )
  {
    print(
      '<link rel="stylesheet" href="../inc/redStyles.css">' . "\n"
    );
  }
  elseif ( $colorScheme == $YELLOW )
  {
    print(
      '<link rel="stylesheet" href="../inc/yellowStyles.css">' . "\n"
    );
  }
  else
  {
    print(
      '<link rel="stylesheet" href="../inc/blackStyles.css">' . "\n"
    );
  }

  print(
    '</style>' . "\n" .
    '</head>' . "\n"
  );

  print(
    '<body '
  );

  if ( $background != $NONE )
  {
    print( 'style="background-image: url(' . $background . ')"' );
  }

  print( ">\n" );
  include_once( '../google_analytics.php' );
?>
