<!Doctype html>
<html>
<head>
<title>CITY shop</title>
<link rel="StyleSheet" href="cityshop.css" >
<meta charset="utf-8">
<link rel="icon" href="logo.jpg" type="image/ico">
<style>

.large{    font-size:1.5em;
	}
#colorgold{color:gold;}	
input[type=text],input[type=email] {
  border: none;
  width:50%;
  padding: 8px 20px;
  margin: 8px 2px;
  border-bottom: 2px solid red;
}
input[type=submit],input[type=reset]{
    background-attachment:gold;
	border:none;
	padding: 8px 20px;
	margin:8px 2px;
	cursor:pointer;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script> 
<script>
	$(document).ready(function(){
	$('form').validate(); 
	});
</script> 
<script>
	function validateForm(emailtxt) {
	var value = emailtxt.value;
	var pattern = /^\w+({.-}?\w+)*@\w+([.-]?\w+)*(\.\w{2,3})+$/;
	var result = value.match(pattern);
	if (result){
	return true;
	}
	return false;
	}; 
</script>

<?php
	require("../Includes/design/header.php");
?>
<span class="large">
<h1>Contact Us</h1>
<p>If you want to put your own product or your companies advertising <br>
   Please click <a href="post.html">here</a><br>
If you want to ask us about some item in our page or if you have a suggestion to us <br>

Please full the following form : <br>
</p>
<form name="contact" class="form" method="post" id="contact" action="mailto:ibrahimsbl1234@gmail.com" onsubmit="return validateForm(document.forms[0].emailtxt)">
<fieldset>
<legend>Contact Us</legend>
    <label for="email" class="form-lable">* Email:</label>
    <input type="text" class="form-control" name="email" id ="emailtxt" placeholder="Email@" required="required">
    <label for="item" class="form-lable">Product:</label>
	<input type="text" class="form-control" name="item" id="item" placeholder="Paste the REF#">
	<label for="comments" class="form-lable">Comments:</label>
	<textarea name="comments" class="form-control" id="comments" cols="30" rows="4" placeholder="Enter your question here"></textarea>
	<label for="suggestion" class="form-lable">Suggestion:</label>
	<textarea name="suggestion" class="form-control" id="suggestion" cols="30" rows="4" placeholder="Enter your suggestion here"></textarea>
	<input type="submit" value="Submit" class="btn btn-primary" >
	<input type="reset" value="Reset" class="btn btn-warning">
</fieldset>
</form>
</span>


<?php
	require("../Includes/design/footer.php");
?>