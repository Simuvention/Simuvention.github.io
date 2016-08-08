<head>
<script>
    setTimeout(function () { window.location.href= 'checkStatus.php'; // redirection address, back to home screen
},10000); // Redirect after 5 seconds
//adapted from http://stackoverflow.com/questions/6119451/page-redirect-after-certain-time-php
  </script>         
</head>
<html>
<body>

<?php echo exec('checkStatus.bat') ?><br />
<p>This page will refresh every 10 seconds or click to manually refresh</p>
<INPUT type="button" value="Refresh job status" onClick="window.open('checkStatus.php','windowname',' width=400,height=200')">
<!--Adapted from- http://stackoverflow.com/questions/7865669/opening-a-new-page-in-php-on-a-button-press-->
<!--<a class="button" href="checkStatus.php">Refresh Job Status</a>-->
</body>
</html>