<?php include 'nav.php' ?>
<script src="js/jquery.min.js"></script>
<script src="js/sanitize.js"></script>
<div id="error"></div>
<form class="form-inline" action="save.php" onsubmit="return submitFile()" enctype="multipart/form-data" method="POST">
  <label for="userfile">Upload a file: </input>
  <input name="userfile" id="userfile" type="file" />
  <br />
  <input type="submit" class="btn btn-primary" id="submit-btn" value="Send File" />
</form>
<?php include 'foot.php' ?>