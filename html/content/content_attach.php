<?php
   include "../config.php";   
?>


<head>
<link href="<?php echo $config["base_url"]; ?>uploadify/uploadify.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="<?php echo $config["base_url"]; ?>uploadify/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="<?php echo $config["base_url"]; ?>uploadify/swfobject.js"></script>
<script type="text/javascript" src="<?php echo $config["base_url"]; ?>uploadify/jquery.uploadify.v2.1.4.min.js"></script>

</head>
<body>


        	<div id="custom-demo" class="demo"> 
<script type="text/javascript"> 
	$(function() {
		$('#custom_file_upload').uploadify({
  'uploader'       : '<?php echo $config["base_url"]; ?>uploadify/uploadify.swf',
  'script'         : '<?php echo $config["base_url"]; ?>uploadify/uploadify.php',
  'cancelImg'      : '<?php echo $config["base_url"]; ?>uploadify/cancel.png',
  'folder'         : 'uploads',
  'multi'          : true,
  'auto'           : true,
  'fileExt'        : '*.*',
  'fileDesc'       : 'Image Files (.JPG, .GIF, .PNG)',
  'queueID'        : 'custom-queue',
  'queueSizeLimit' : 3,
  'simUploadLimit' : 3,
  'removeCompleted': true,
  'onSelectOnce'   : function(event,data) {
      $('#status-message').text(data.filesSelected + ' files have been added to the queue.');
    },
  'onAllComplete'  : function(event,data) {
      $('#status-message').text(data.filesUploaded + ' files uploaded, ' + data.errors + ' errors.');
    }
});				});
				</script> 
        <style type="text/css"> 
        #custom-demo .uploadifyQueueItem {
  background-color: #FFFFFF;
  border: none;
  border-bottom: 1px solid #E5E5E5;
  font: 11px Verdana, Geneva, sans-serif;
  height: 50px;
  margin-top: 0;
  padding: 10px;
  width: 350px;
}
#custom-demo .uploadifyError {
  background-color: #FDE5DD !important;
  border: none !important;
  border-bottom: 1px solid #FBCBBC !important;
}
#custom-demo .uploadifyQueueItem .cancel {
  float: right;
}
#custom-demo .uploadifyQueue .completed {
  color: #C5C5C5;
}
#custom-demo .uploadifyProgress {
  background-color: #E5E5E5;
  margin-top: 10px;
  width: 100%;
}
#custom-demo .uploadifyProgressBar {
  background-color: #0099FF;
  height: 3px;
  width: 1px;
}
#custom-demo #custom-queue {
  border: 1px solid #E5E5E5;
  height: 213px;
margin-bottom: 10px;
  width: 370px;
}				</style> 
        <div class="demo-box"> 
        <div id="status-message">Select some files to upload:</div>
<div id="custom-queue"></div>
<input id="custom_file_upload" type="file" name="Filedata" />        </div> 
      </div> 
      </div> 
</div>

<p>
<a href="/cgi-bin/commit_attachments.cgi" target="_blank">Commit attachments to repository</a>
 
</body>

