<?php
   include "../config.php";
   $page = $_GET["page"];
   $page_to_show = "";

   //Lookup table that maps the given page to a correspondin exhibit template   
   $page_lookup = array (
      "home" => "content_home.php",
      "write" => "content_write.php",
      "attach" => "content_attach.php",
      "suggest" => "content_suggest.php",      
  );

  $page_to_show = $config["base_url"]."content/".$page_lookup[$page];
?>

<div style="padding: 10px">
   <iframe src="<?php echo $page_to_show; ?>" width="1150" height="1145" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
</div>
