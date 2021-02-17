<?php
use \Tsugi\Core\LTIX;
use \Tsugi\UI\Output;

require_once "top.php";
require_once "nav.php";
?>
<div id="container">
<div style="margin-left: 10px; float:right">
<iframe width="400" height="225" src="https://www.youtube.com/embed/UjeNA_JtXME?rel=0" frameborder="0" allowfullscreen></iframe>
</div>
<h1>Python for Everybody</h1>
<?php if ( isset($_SESSION['id']) ) { ?>
<p>
Welcome to my free web site for Python for Everybody.
Now that you have logged in, you have access to course-style features of this web site.
<ul>
<li>
As you go through the <a href="lessons">Lessons</a> in the course you now will see additional
links to the autograders in the class.  You can attempt the autograders and get a score.</li>
<li>
You can track your progress through the course using the <a href="assignments">Assignments</a>
tool and when you complete a group of assignments, you can earn a <a href="badges">Badge</a>.
You can download these badges and host them on your web site or refer the badge URLs on this site.</li>
<li>
If you want to use these Creative Commons Licensed materials
in your own classes you can
<a href="materials.php">download or link</a> to the artifacts on this site,
<a href="tsugi/cc/">export the course material</a> as an
IMS Common Cartridge®, or apply for
an IMS Learning Tools Interoperability® (LTI®)
<a href="tsugi/admin/key/index.php">key and secret</a>
 to launch the autograders from your LMS.
</li>
</ul>
<?php } else { ?>
<p>
Welcome to the web site for my
<a href="book.php">Python for Everybody</a> text book.
You can take this course for a certificate on
<a href="https://www.coursera.org/specializations/python" target="_blank">Coursera</a>,
<a href="https://www.edx.org/bio/charles-severance" target="_blank">edX</a>, or
<a href="https://www.futurelearn.com/courses/programming-for-everybody-python" target="_blank">FutureLearn</a>.
</p>
<p>
You can use this web site many different ways:
<ul>
<li>
You browse my videos and course materials under <a href="lessons">Lessons</a>.  The materials
I have developed
for this class are all provided with a Creative Commons license so you can download or link to
them to incorporate them into your own teaching if you like.</li>
<li>
If you <a href="tsugi/login.php">log in</a> to this site
it is as if you have joined a free, global
open and online course.  You have a grade book, autograded assignments, a discussion forum, and can earn
badges for your efforts.</li>
<li>
We take your privacy seriously on this site, you can review our
<a href="privacy">Privacy Policy</a> for more details.
</li>
<li>
If you want to use these materials
in your own classes you can download or link to the artifacts on this site,
<a href="tsugi/cc/">export the course material</a> as an
IMS Common Cartridge®, or apply for
an IMS Learning Tools Interoperability® (LTI®)
<a href="tsugi/admin/key/index.php">key and secret</a>
 to launch the autograders from your LMS.
</li>
<li>
The code for this site including the autograders, slides, and course content is all available on
<a href="https://github.com/csev/py4e" target="_blank">GitHub</a>.  That means you could make your own
copy of the course site, publish it and remix it any way you like.  Even more exciting, you could translate
the entire site (course) into your own language and publish it.  I have provided
some <a href="https://github.com/csev/py4e/blob/master/TRANSLATION.md" target="_new">
instructions on how to translate this course</a> in my GitHub repository.
</li>
</ul>
<?php } ?>
This site uses <a href="http://www.tsugi.org" target="_blank">Tsugi</a>
framework to embed a learning management system into this site and
provide the autograders.
If you are interested in collaborating
to build these kinds of sites for yourself, please see the
<a href="http://www.tsugi.org" target="_blank">tsugi.org</a> website and/or
contact me.
</p>
<!--
<?php
echo(Output::safe_var_dump($_SESSION));
var_dump($USER);
?>
-->
</div>
<?php $OUTPUT->footer();
