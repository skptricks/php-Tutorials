<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Add tinymce editor in PHP or HTML </title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="tinymce/tinymce.min.js"></script>
<style>
.texteditor-container { 
 width:700px;
 height:365px;
}
textarea#editor1 {
 width:500px !important;
 border:1px solid red;
 
}
</style>
<script>
 tinymce.init({
   selector: 'textarea#editor',  //Change this value according to your HTML
   auto_focus: 'element1',
   width: "700",
   height: "200"
 });
 
 $( document ).ready(function() {
 
  $('#buttonpost').on("click", function(){
   tinyMCE.triggerSave();
   var value = $("textarea#editor").val();  
   $("#display-post").html(value);
   $(".texteditor-container").hide();
   return false;
  });
 
 });   
 
</script>

</head>
<body>
 
 <div class="texteditor-container">
     <h1> Add tinymce editor in PHP or HTML </h1>
  <textarea name="editor" id="editor"></textarea>
  <input type="button" id="buttonpost" value="Publish Post"  />
 </div>
 
 <div id="display-post" style="width:700px;" ></div>
 
 
</body>
</html>
