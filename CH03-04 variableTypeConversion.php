<?php
$design['title']       = "LPMJ Book - Variable type conversion";
$design['description'] = "Converting types of variables acitvity from the book Learning PHP, MySQL & JavaScript with jQuery, CSS & HTML5 by Robin Nixon";
$design['keywords']    = 'variable, type, convert, pi, area, circle, radius, number, string, book, learning php mysql javascript with jquery css html5, robin nixon, activities, learning, php, mysql, javascript, jquery, css, html, html5, robin, nixon, O\'Reilly, LPMJ';
$design['LEFT']        = <<<_END
<a href="https://paul-s-reid.com/web-dev/LPMJ%20Book-php"><h1>LPMJ Book</h1>
<h2>Robin Nixon</h2></a>
Here is some code from the book <i>Learning <span class="php">PHP</span>, <span class="mysql">MySQL</span> & <span class="js">JavaScript</span> with <span class="jquery">jQuery</span>, <span class="css">CSS</span> & <span class="html">HTML<span class="notBold">5</span></span> </i> by Robin Nixon.
<br>Here I am experimenting with different types of variables. I convert numbers to strings and back again a few times.
<br>See what it evaluates to over there 👉!
_END;
$design['RIGHT']       = '<pre class="code">';
$number                = 12345 * 67890;
$design['RIGHT']      .= substr($number, 3, 1);
$design['RIGHT']      .= "<hr>";
$pi                    = "3.1415927";
$radius                = 5;
$design['RIGHT']      .= "pi: " . $pi;
$design['RIGHT']      .= "
Area of a circle with a radius of " . $radius . ": " . $pi * ($radius * $radius);
$design['RIGHT']      .= "</pre>";
require_once "../twoColumnDesign.php";
