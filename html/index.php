<?php
   include "config.php";

   $content_page_url = "";
   $page = $_GET["page"];

   if (strlen($page) == 0) { $page = "home"; }
   $content_page_url = $config["base_url"]."content/action_show.php?page=".$page;

   
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>O'Reilly Research</title>

   <link rel="stylesheet" type="text/css" href="styles/layout.css" />
   <link rel="stylesheet" type="text/css" href="styles/horizontal_nav.css" />

</head>

<body>
<div id="maincontainer">

<div id="topsection"><div class="innertube">

<div id="header">
<table>
   <tr>
      <td> <img src="logo.png"/></td>
      <td style="padding: 5px"> <h1><?php echo $config["site_title"]; ?></h1></td>
   </tr>
</table>

<ul class="nav">
   <li>
      <strong><a href="index.php?page=home">Home</a></strong>
   </li>
   <li>
      <strong><a href="index.php?page=write">Write</a></strong>
   </li>
   <li>
      <strong><a href="index.php?page=attach">Attach</a></strong>
   </li>
   <li>
      <strong><a href="index.php?page=suggest">Suggestions</a></strong>
   </li>
</ul>


</div></div>

<div id="contentwrapper">
<div id="contentcolumn">
<div class="innertube">
<?php
   echo file_get_contents($content_page_url);
?>

</div>
</div>
</div>

<!--
<div id="leftcolumn">
<div class="innertube">
This is the content for the inner column that all goes here
</div>
</div>
-->

<div id="footer">
   Footer content goes here
</div>

</div>


</body>
</html>

