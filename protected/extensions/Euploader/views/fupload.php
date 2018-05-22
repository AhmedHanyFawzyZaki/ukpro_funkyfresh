<link href="https://rawgithub.com/hayageek/jquery-upload-file/master/css/uploadfile.css" rel="stylesheet">

<script src="https://rawgithub.com/hayageek/jquery-upload-file/master/js/jquery.uploadfile.min.js"></script>


<script>
$(document).ready(function()
{
	$("#fileuploader").uploadFile({
	url:"<?php   echo  $this->config['action']; ?>",
	method:"POST",
	fileName:"<?php   echo  $name ; ?>",
	allowedTypes:"<?php   echo  $allowextension ; ?>",

	});
});
</script>




<div id="fileuploader">Upload</div>

