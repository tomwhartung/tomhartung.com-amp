<?php
   //
   // computing.php: my opinions about computers, i.e., Bill Gates sucks
   // ------------------------------------------------------------------
   // The .php extension enables us to use standard headers, footers,
   // background, etc.
   //
   require ("../inc/constants.php");
   $background  = $DEFAULT_BACKGROUND;
   $title       = "tomh: compute this!";
   $colorScheme = $GREEN;
   require ("../inc/printHeader.php");   /* imports style sheet(s) */
   $oneOrTwoLevels = $TWO;
   require ("../inc/printNavbar.php");
?>

<script language="JavaScript1.3" SRC="../inc/statusFunctions.js"> </script>

<div class="lhsImage">
<img class="lhsImage" src="../images/lhs/computing-fwd_bkls_ms_2.jpg" />
</div>

<div class="content">
<h1>Computers</h1>
<p>
If you take a look at my
<a href="../work/resume.php">resume</a>,
you'll see that I have some experience with computers.  
At my first job we used punch cards.
Since then, things have certainly evolved.
</p>
<h2>Dedicated web server is in da house</h2>
<p>
I am now the proud owner of a Static IP address and am hosting
<a href="http://groja.com/">groja.com</a>
on a dedicated server at home.
It runs on
<a href="http://www.gentoo.org" target="computing_window">Gentoo</a>
&#151; which is a type of
<a href="http://en.wikipedia.org/wiki/Linux" target="computing_window">Linux</a>
&#151; an
<a href="http://en.wikipedia.org/wiki/Operating_System" target="computing_window">Operating System</a>
that functions somewhat like Microsoft's
<a href="http://en.wikipedia.org/wiki/Microsoft_Windows" target="computing_window">Windows.</a>
</p>
<p>
Like programming, even if you're an expert, system administration-type tasks,
such as installing operating systems and
setting up a network can be challenging, fun, and frustrating.
Both types of work involve plenty of problem solving and require patience and creativity.
</p>
<p>
But I've done a lot more programming than system administration 
over the years,
so getting all that set up was a learning experience of major proportions.
</p>
<h3>Home is where the LAN is</h3>
<p>
My
<a href="http://en.wikipedia.org/wiki/Local_area_network" target="computing_window">LAN</a>
consists of three home computers, networked by a
<a href="http://linksys.com/" target="computing_wndow">Linksys</a>
wireless router.
<ul>
 <li>The groja.com dedicated web server is a
  <a href="http://www.powerspec.com/" target="computing_wndow">PowerSpec</a>
  running
  <a href="http://www.gentoo.org/" target="computing_window">Gentoo</a>.
  It is connected directly to the router.
 </li>
 <li>My desktop computer is a dual-boot
  <a href="http://www.powerspec.com/" target="computing_wndow">PowerSpec</a>
  that runs
  <a href="http://en.opensuse.org/Welcome_to_openSUSE.org" target="computing_window">SuSE</a>
   10.0 Linux and Windows XP.
  A Linksys wireless PCI card connects it to the router.
 </li>
 <li>The laptop I am using in the photo to the left is a dual-boot
  <a href="http://www.dell.com" target="computing_wndow">Dell</a>
  that runs
  <a href="http://gentoo.org/" target="computing_window">Gentoo</a>
   and
  <a href="http://en.wikipedia.org/wiki/Windows_ME" target="computing_window">Windows ME</a>.
   A Linksys wireless PCMCIA card connects it to the router.
 </li>
</ul>
</p>
<p>
The versions of gentoo on the server and laptop are virtually identical.
For details, please see my
 <a href="http://groja.com/modules.php?name=Journal&file=display&jid=24" target="computing_window">blog</a>.
</p>
<p>
I use Windows only occasionally &#151; that is to say, as little as possible.
It comes in handy at times for such things as seeing how one of my sites looks in IE
 and web surfing during commercials when watching TV.
</p>
<p>
By the time you read this, I may have replaced
<a href="http://www.microsoft.com/windowsme/" target="computing_window">Windows ME</a>
on the laptop with something else,
because as of July 11, 2006
<a href="http://www.microsoft.com/" target="computing_window">Microsoft</a>
will no longer support
<a href="http://en.wikipedia.org/wiki/Windows_ME#Relation_to_other_Windows_releases" target="computing_window">Windows ME</a>!
</p>
<h3>Wireless woes</h3>
<p>
Getting the wireless PCMCIA card on the laptop to work under Linux was challenging.
On the third try I was happy to read on the
 <a href="http://gentoo-wiki.com/" target="computing_window">gentoo wiki</a>
 that 
</p>
<blockquote>
 <a href="http://gentoo-wiki.com/HARDWARE_Wireless" target="computing_window">
  Setting up wireless in Linux is generally one of the most frustrating things you'll encounter</a>.
</blockquote>
<p>
Wow, thanks &#151; I feel much better now!
</p>
<h4>Fedora core 3 and linuxant</h4>
<p>
The first time I did this I had no clue what I was getting into.
Linksys does not publish their specifications,
so the Linux people cannot write drivers for their hardware.
</p>
<p>
After a day or two of research I figured out I had to use the
 <a href="http://www.linuxant.com/driverloader/" target="computing_window">driverloader</a>
program from
 <a href="http://www.linuxant.com/company/" target="computing_window">linuxant</a>
to <q>translate</q> the code in the Windows driver for the wireless card into code
that Linux could <q>understand.</q>
</p>
<p>
That sounds easy enough, but it wound up taking another few days to finally get a
 <a href="http://en.wikipedia.org/wiki/Kernel_%28computer_science%29" target="computing_window">kernel</a>
 with all of the proper options set correctly
 and all of the software properly installed in the correct sequence and all.
Additionally, this was my first experience in doing any sort of networking.
</p>
 <a href="" target="computing_window"> </a>
<h4>When computing, it's always time to KISS</h4>
<p>
After losing the hard disk on the desktop, I bought a copy of SuSE 10.0
 and installed it on the new disk.
So, when I got the
 <a href="http://groja.com/" target="computing_window">groja.com</a>
site running, I had three computers, each with a different
 <a href="http://en.wikipedia.org/wiki/Linux_distribution" target="computing_window">distro</a>
of Linux: Gentoo on the server, SuSE on the desktop, and Fedora Core on the laptop.
</p>
<p>
Now one of the most important things you can ever do when working with computers is to
 Keep It Simple, Stupid
 (<a href="http://en.wikipedia.org/wiki/KISS_principle" target="computing_window">KISS</a>).
The server had to run gentoo, and the desktop had to run SuSE, so the Fedora Core
 on the laptop had to go.
Because I'd paid $50 for the SuSE and it had taken a week or two to get gentoo going,
 I decided to go with SuSE.
</p>
<h4>SuSE 10.0 and ndiswrapper</h4>
<p>
Despite having successfully been through the process once before,
 getting the wireless card to work with SuSE 10.0 took quite awhile.
After some more research, I decided to use a program called
<a href="http://ndiswrapper.sourceforge.net/mediawiki/index.php/Main_Page" target="computing_window">
 ndiswrapper</a>
instead of driverloader.
</p>
<p>
There are websites that document how to do all of this, but 
this time it took me a long time to realize that Linksys uses different chip sets &#151; and different drivers &#151;
in different <em>versions</em> of the same card.
The CD that came with the card contains multiple driver files,
and for a few days I was trying to use the wrong one.
No wonder it wouldn't work!
</p>
<p>
Note that not all websites are created equal.
If you search for WPC54G &#151; the product number of the PCMCIA card I use &#151; in
<a href="http://www.linux-wlan.org/docs/wlan_adapters.html.gz" target="cpomputing_window">this list,</a>
you'll find only one entry, and it states that this card uses Broadcom chips.
If you search for WPC54G in
<a href="http://ndiswrapper.sourceforge.net/mediawiki/index.php/List#L" target="cpomputing_window">this list,</a>
you'll find there are <em>five</em> versions of the card.
It so happens that I have version 4 of the card, which uses AirConn chips.  Pfft....
</p>
<p>
Once I figured out which Windows driver to load into ndiswrapper,
the PCMCIA card in the laptop started working like it should,
and getting the wireless PCI card to work in the desktop was a piece of cake.
</p>
<h4>Gentoo and ndiswrapper</h4>
<p>
To make a long story short, although the wireless connection
 worked &#151; and continues to work &#151; fine on the desktop,
 the laptop's wireless connection would not stay up under SuSE 10.0.
Weird!
</p>
<p>
So I spent weeks scripting and deliberating and experimenting and
 eventually decided to put gentoo on the laptop.
For details, see
 <a href="http://groja.com/modules.php?name=Journal&file=display&jid=24" target="computing_window">
  this entry</a>
 in
 <a href="http://groja.com/modules.php?name=Journal&file=search&bywhat=aid&exact=1&forwhat=tomh" target="computing_window">
  my blog</a>.
</p>
<h3>Hardware herstory</h3>
<p>
The story of my network is a <em>herstory</em> rather than a <em>history</em>
because I name all my computers after
<a href="http://www.allthatnoir.com/" target="computing_window">film noir actresses.</a>
</p>
<p>
The laptop I am using in the photo in the left-hand margin is a Dell
Inspiron 8000 bought in the spring of 2002.
It has a 1 GHz Pentium PIII, 256 MB RAM, a 15 inch XGA+ display,
an ATI Mobility M4 graphics card, a 32 GB internal hard disk,
an internal DVD/CD drive, and a removable CD R/W drive.
</p>
<p>
The display on the laptop crapped out just as I was starting my job search
in October 2004, so I needed a replacement PC right away.
I went to
<a href="http://www.microcenter.com/" target="computing_window">Micro Center</a>
and bought a PowerSpec 8735.
It has a 2.8 GHz Pentium 4 processor, 512 MB Ram,
32 MB S3 Pro Savage graphics card, and an 80 GB internal hard disk.
The 19-inch HP Pavillion F1903 flat screen display is quite nice,
and actually cost more than the PC.
</p>
<p>
After a bit of research and experimentation, in February of 2005 I figured out how to
get an old Compaq display to work with the laptop &#151;
the trick is, you have to press Fn+F8 <em>three</em> times whenever
<a href="http://en.wikipedia.org/wiki/X_Window_System" target="computing_window">XWindows</a>
restarts (which apprently happens every time you log out of Fedora Core and SuSE).
I then installed Fedora Core 3 on it and used it to develop and test groja.com.
</p>
<p>
In the Fall of 2005, when it came time to launch groja.com,
I decided to get another PowerSpec.
Micro Center had two models that had
<a href="http://www.linspire.com/" target="computing_window">Linspire,</a>
rather than Windows, pre-installed.
I bought a PowerSpec 1405 for under $300, and
for the first time in my life was able to avoid paying the
<a href="http://en.wikipedia.org/wiki/Criticism_of_Microsoft"<q>Microsoft tax!</q></a>
This PowerSpec is now the groja.com dedicated server.
It has a 1.5 GHz AMD&reg; Sempron(tm) 2200+ Processor, 128MB RAM,
40 GB internal hard disk, and &#151; currently &#151; no display (I use
<a href="http://openssh.org/" target="computing_window">ssh</a>
to access it remotely).
</p>
<h3>Linux: the <a href="http://en.wikipedia.org/wiki/Distro" target="computing_window">distros</a> I've used</h3>
<p>
As mentioned previously, I greatly prefer
<a href="http://en.wikipedia.org/wiki/Linux" target="computing_window">Linux</a>
to
<a href="http://en.wikipedia.org/wiki/Microsoft_Windows" target="computing_window">Windows,</a>
especially when it comes to development environments.
To me, using Linux feels more like using a tool while using
Windows feels more like playing with a toy.
Another big difference between the two is that Linux is
<a href="http://en.wikipedia.org/wiki/Free_software" target="computing_window">free software.</a>
(Disambiguating the word
<a href="http://en.wikipedia.org/wiki/Free" target="computing_window"><em>free</em></a>
is left as an exercise for the reader.)
</p>
<p>
I've been running various versions of
<a href="http://www.redhat.com"
         onMouseOver="linkStatus();return true;"
         onMouseOut="setStatusToDefault();return true;"
         target="computing_wndow">Red Hat Linux</a>
at home for years, but was somewhat disappointed with the initial release of
their replacement for it,
<a href="http://www.redhat.com/fedora/"
         onMouseOver="linkStatus();return true;"
         onMouseOut="setStatusToDefault();return true;"
         target="computing_wndow">Fedora Core 1</a>.
That is why, when I bought the new desktop, I decided to try
<a href="http://www.novell.com/linux/suse/"
         onMouseOver="linkStatus();return true;"
         onMouseOut="setStatusToDefault();return true;"
         target="computing_wndow">SuSE</a>
9.1 on it.
</p>
<p>
But there were some issues with SuSE 9.1 as well.
Most importantly, getting the
<a href="http://apache.org/" target="computing_window">apache web server</a>
to work was a chore.
Like I said, system administration is a lot different from programming.
But there was no way I'd develop groja.com under Windows, <em>no way!</em>
</p>
<p>
In February of 2005, right around the time I figured out how to get the Compaq monitor to work
with the laptop, Fedora Core 3 was out, so I decided to give it a try.
This time getting apache to work was trivial, and the laptop became
the groja.com development box.
</p>
<p>
When development was done and the time came to put groja.com online,
I bought a new server.
As mentioned above, I was able to find a box that had
<a href="http://www.linspire.com/" target="computing_window">Linspire</a>
pre-installed instead of Windows.
Now if you've never worked with Linux and would like to try a
<a href="http://en.wikipedia.org/wiki/Distro" target="computing_window">distro</a>
that looks and feels a lot like windows, give Linspire
a try.
It came with the server I bought and it's pretty cute.
Go for it!
</p>
<p>
For a number of years, a friend has been bugging me to try 
<a href="http:///gentoo.org" target="computing_window">Gentoo.</a>
I had given it a try in the Fall of 2004 when I first got the new desktop but,
after a week or two, decided we weren't yet ready for each other.
</p>
<p>
A year later, in the Fall of 2005, I chose to use it on the groja.com dedicated server because,
due to security concerns, I wanted that box to have precisely what it needed
to host the site, nothing more and nothing less.
As it turned out, both Gentoo and I had evolved a bit,
and getting groja.com to run on it wasn't too difficult.
</p>
<p>
More recently, router issues led to an update of my DSL service through Qwest,
and a hard disk crash &#151; after less than a year! &#151; led to installing
SuSE 10.0 on the desktop.
After some deliberation, I decided to put SuSE 10.0 on the laptop as well,
for consistency.
</p>
<h3>Gentoo and do-it-yourself auto repair</h3>
<p>
It sounds like more and more people
&#151; specifically several of my programming guru and system administrator buddies &#151;
are moving towards
<a href="http://gentoo.org" target="computing_window">Gentoo.</a>
At this point, I can see why: distros like SuSE include tools like
<a href="http://forge.novell.com/modules/xfmod/project/?yast" target="computing_window">YaST</a>
(Yet another Setup Tool) which can be great &#151; when they work.
</p>
<p>
But when a sys-admin GUI tool like YaST doesn't work, things can get frustrating.
In contrast, when Gentoo doesn't work, it's usually due to user ignorance.
<a href="http://www.urbandictionary.com/define.php?term=Not+that+there's+anything+wrong+with+that" 
 target="computing_window"><em>Not that there's anything wrong with that!</em></a>
</p>
<p>
Back in the 1970s, before we had computers in our homes and cars,
it was fun to tinker with cars.
We'd buy the books and learn how to take them apart, troubleshoot the issues,
buy cool tools and new parts, and put them back together.
This was challenging, fun, and frustrating at times.
Maybe we saved some money, maybe not.
At the end of the day, any pain experienced was voluntary and, more often than not,
the satisfaction of fixing the thing would make it all worthwhile.
</p>
<p>
It's important to remember that, despite the fact that you might fall prey to a greedy repair shop,
you shouldn't need to know how a car works, if all you want to do is drive it.
</p>
<p>
I feel like working with Linux distros is somewhat similar.
It's challenging, fun, and frustrating at times.
You can learn a lot and maybe save some money, but in the end
the satisfaction of doing it yourself somehow makes it all worthwhile.
</p>
<p>
But despite the fact that you might fall prey to a greedy software vendor,
there should be no need to know how an operating system works,
if all you want to do is use the computer.
</p>
<p>
So therefore, although I like to encourage people to use Linux instead of Windows,
I sincerely hope I don't sound like snob when talking about it.
The truth is, sometimes I feel more like a masochist than anything else
&#151; unless I'm going to be doing some serious development, as was the case with groja.com.
</p>
<p>
Like do-it-yourself car repair, Linux in general &#151; and Gentoo in particular &#151;
is not for everyone!
At least, not <em>yet....</em>
</p>
<h2>Technical details about tomh.info</h2>
<p>
This version of the site is written in XHTML 1.0 transitional.
Most of the functionality formerly provided Javascript has been
replaced with functionality provided by Cascading Style Sheets (CSS).
</p>
<p>
I prefer editing these pages using vim (a text editor -- I have been using
either it or its predecessor vi on Unix OSes since the 1980s).
But if an authoring tool becomes available that totally supports
XHTML 1.1 strict and CSS, perhaps I would be willing to give it a try.
</p>
<p>
All of the files (except the home page, index.html) have the .php
extension to enable PHP routines to generate headers,
navbars, and footers that are consistent throughout the site.
</p>
<h2>CPSR</h2>
<p>
Back in the 1980s, during hey day of Artificial Intelligence and Star Wars
(Ronald Regan's, not George Lucas'), I learned about and joined CPSR, a group of
people who are concerned about the impact of computer technology on society.
Some examples of the issues we are concerned about are
privacy rights, the integrity of computerized voting machines,
and women and minorities in computing.
</p>
<p>
For more information, please visit the website for the
<a href="http://www.cpsr.org/home.html"
         onMouseOver="linkStatus();return true;"
         onMouseOut="setStatusToDefault();return true;"
         target="computing_wndow">
Computer Professionals for Social Responsibility (CPSR)</a>.
</p>
</div>

<div class="footer">
<?php
   $pageCreated = '2002/08/18';
   $pageUpdated = '$Date: 2006/06/02 03:40:34 $';
   require ( "../inc/printFooter.php" );
?>
</div>
</body>
</html>
