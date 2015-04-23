function submitFile(){
  var file = $('#userfile').val();
  var fsize = $('#userfile')[0].files[0].size;
  var file_ext = file.split('.').pop();
  var match = file_ext.match(/jpg|jpeg|png|gif/i);
  if(fsize>5242880) {
    alert("<b>"+fsize +"</b> Too big file! <br />File is too big, it should be less than 5 MB.");
    return false;
  }
  if(!match) {
    $('#error').html("<h1>Oops! Something went wrong.</h1><br/><p>Remember that only .jpg, .png, or .gif files are allowed.</p>");
    return false;
  }
}