<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<style>
 body{
  background-color:#add8e6;  
}
#img_contain{
  border:1px solid grey;
  margin-top:10px;
  width:520px;  
}

#imgInp{  
  padding:10px;
  background-color:#d3d3d3;  
}
#blah{
  height:320px;
  width:auto;
  display:block;
  margin-left: auto;
   margin-right: auto;
  padding:5px;
}

.credit{    
  font: 14px "Century Gothic", Futura, sans-serif;
  font-size:12px;
  color:#3d3d3d;
  text-align:left;
  margin-top:10px;
  margin-left:auto;
  margin-right:auto;
}
.credit a{
  color:gray;
}

.credit a:hover{
  color:black;  
}
.credit a:visited{
  color:MediumPurple;
}

</style>

<script>
  function readURL(input) {

if (input.files && input.files[0]) {
  var reader = new FileReader();

  reader.onload = function(e) {
    $('#blah').attr('src', e.target.result);

    $('#blah').hide();
    $('#blah').fadeIn(650);
  }
  reader.readAsDataURL(input.files[0]);
}
}

$("#imgInp").change(function() {
readURL(this);
});
  </script>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<body>
<form id="form1" runat="server">
    <input type='file' id="imgInp" />
    <div id='img_contain'><img id="blah" align='middle' src="http://www.clker.com/cliparts/c/W/h/n/P/W/generic-image-file-icon-hi.png" alt="your image" title=''/></div>
</form>
</body>

<div class="credit">Modified using <a href="https://stackoverflow.com/questions/4459379/preview-an-image-before-it-is-uploaded">Ivan Baev's</a> code.</div>
</body>
</html>