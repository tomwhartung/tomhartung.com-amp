//
// statusFunctions.js: fcns to change status text in bottom of browser window
// --------------------------------------------------------------------------
//
// document.write("Defining functions in statusFunctions.js<BR>");
//
var thankYouStatus='Thank you for visiting tomh.info!';
window.defaultStatus=thankYouStatus;

//
// ====================================================
// Functions to set status field (at bottom of browser)
// ====================================================
// The status and defaultstatus fields are a bit flakey on the
// various browsers.  Actually, in general, handling the onMouseOut
// event seems to work best.
// E.g., it seemed to work fine for the nav bar until I changed
//     the value of this.src for onMouseOver events.  Weird.
//     What a BTW (Big Time Waster)!
//
function setStatusToDefault()
{
   window.status = thankYouStatus;
}

function linkStatus()
{
   window.status = "Opens link in separate window";
}

function imageStatus()
{
   window.status = "Opens image in separate window";
}

function emailStatus()
{
   window.status = "Send me an email!";
}

function grojaStatus()
{
   window.status = "See Spiritual Portraits at groja.com";
}
