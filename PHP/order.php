<!Doctype html>
<html>
<head>
<title>CITY shop</title>
<link rel="StyleSheet" href="cityshop.css" >
<meta charset="utf-8">
<link rel="icon" href="logo.jpg" type="image/ico">
<style>
/*::after

.large{    font-size:1.5em;
	}
#colorgold{color:gold;}	
input[type=text],input[type=tel],input[type=email] {
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

*/
input{
	max-width: 800px;
	min-height: 50px;
}
</style>
<script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" >
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js">
</script>
<script>
$(document).ready(function(){
$('form').validate(); });
</script>
<script>
	function validateForm(emailtxt) {
	var value = emailtxt.value;
	var pattern = /^\w+({.-}?\w+)*@\w+([.-]?\w+)*(\.\w{2,3})+/;
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
<h1>Order Now</h1>
<p>If you want to order please full this form with your true information<br>
<b>PAYING WHEN RECIEVING YOUR ORDER</b> 

<!-- > -->
<form name="ordering" class="form" method="post" id="ordering" action="mailto:ibrahimsbl1234@gmail.com" onsubmit="return validateForm(document.forms[0].emailtxt)" >
<fieldset>
<legend>Costumer's Information</legend>
   <label for="name" class="form-label">Name:</label>
     <input type="text" class="form-control" name="name" id="name" required="required">
  <label for="account" class="form-label">E-mail:</label>
     <input type="email" class="form-control" name="account" id="emailtxt" placeholder="Email@" class="required email" >
  <label for="phone" class="form-label">Phone:</label>
     <input type="tel" class="form-control" name="phone" id="phone" required="required">
  <label for="country" class="form-label">Country:</label>
     <input type="text" class="form-control" name="country" id="country" required="required" list="mycountry">
	 <datalist id="mycountry">
	        <option value="Afghanistan" label="Afghanistan">
		    <option value="Albania" label="Albania">
			<option value="Andora" label="Andora">
			<option value="Australia" label="Australia">
			<option value="Bahrain" label="Bahrain">
			<option value="Belgium" label="Belgium">
			<option value="Brazil" label="Brazil">
			<option value="Bulgaria" label="Bulgaria">
			<option value="Cameroon" label="Cameroon">
			<option value="Chile" label="Chile">
			<option value="China" label="China">
			<option value="Colombia" label="Colombia">
			<option value="Canada" label="Canada">
			<option value="Costa Rica" label="Costa Rica">
			<option value="Cuba" label="Cuba">
			<option value="Denmark" label="Denmark">
			<option value="Ecuador" label="Ecuador">
			<option value="Egypt" label="Egypt">
			<option value="Estonia" label="Estonia">
			<option value="Ethiopia" label="Ethiopia">
			<option value="Finland" label="Finland">
			<option value="France" label="France">
			<option value="Gabon" label="Gabon">
			<option value="Georgia" label="Georgia">
			<option value="Germany" label="Germany">
			<option value="Ghana" label="Ghana">
			<option value="Greece" label="Greece">
			<option value="Hungary" label="Hungary">
			<option value="India" label="India">
			<option value="Iran" label="Iran">
			<option value="Iraq" label="Iraq">
			<option value="Ireland" label="Ireland">
			<option value="Italy" label="Italy">
			<option value="Jamaica" label="Jamaica">
			<option value="Japan" label="Japan">
			<option value="Kosovo" label="Kosovo">
			<option value="Kuwait" label="Kuwait">
			<option value="Lebanon" label="Lebanon">
			<option value="Luxembourg" label="Luxembourg">
			<option value="Malaysia" label="Malaysia">
			<option value="Mali" label="Mali">
			<option value="Mexico" label="Mexico">
			<option value="North Korea" label="North Korea">
			<option value="Portugal" label="Portugal">
			<option value="Qatar" label="Qatar">
			<option value="Romania" label="Romania">
			<option value="Russia" label="Russia">
			<option value="Turkey" label="Turkey">
			<option value="Ukraine" label="Ukraine">
			<option value="Venezuela" label="Venezuela">
			<option value="Zimbabwe" label="Zimbabwe">
	 </datalist> 
	
  <label for="city" class="form-label">City:</label>
     <input type="text" class="form-control" name="city" id="city" required="required">
  <label for="adress" class="form-label">Adress:</label>
     <input type="text" class="form-control" name="adress" id="adress" required="required">
 
  <label for="item" class="form-label">Chosen item:</label>
     <input type="text" class="form-control" name="item" id="item" list="choice" required="required">
	    <datalist id="choice">
		    <option value="philips steam Purple" label="philips steam Purple">
			<option value="philips steam Pink" label="philips steam Pink">
			<option value="Chopper White" label="Chopper White">
			<option value="Moulinex White" label="Moulinex White">
			<option value="Samsung Microwave Oven" label="Samsung Microwave Oven">
			<option value="Ferrari Refrigerator Orange" label="Ferrari Refrigerator Orange">
			<option value="LG Refrigerator Silver" label="LG Refrigerator Silver">
			<option value="LG washer-dryer Machine Black" label="LG washer-dryer Machine Black">
			<option value="Campomatic Washing Machine Black" label="Campomatic Washing Machine Black">
			<option value="Samsung TV 49 Inches Black" label="Samsung TV 49 Inches Black">
			<option value="Sharp LED HD TV 32 Inches Black" label="Sharp LED HD TV 32 Inches Black">
			<option value="Black T-Shirt For Men" label="Black T-Shirt For Men">
			<option value="Print Logo T-Shirt For Men" label="Print Logo T-Shirt For Men">
			<option value="China T-Shirt For Men" label="China T-Shirt For Men">
			<option value="fabric men's coat" label="fabric men's coat">
			<option value="bomber jacket" label="bomber jacket">
			<option value="men's winter coat" label="men's winter coat">
			<option value="Slim Fit Jacket" label="Slim Fit Jacket">
			<option value="Casual Blazer Suit" label="Casual Blazer Suit">
			<option value="Black Men Suits Groom Tuxedos" label="Black Men Suits Groom Tuxedos">
			<option value="hip hop tshirt for woman" label="hip hop tshirt for woman">
			<option value="Crew Neck Oversized Tshirt for woman" label="Crew Neck Oversized Tshirt for woman">
			<option value="MGOO Cotton Soft Tshirts for woman" label="MGOO Cotton Soft Tshirts for woman">
			<option value="Kids Summer Casual Clothes Dress" label="Kids Summer Casual Clothes Dress">
			<option value="V-neck Long Casual Dresses" label="V-neck Long Casual Dresses">
			<option value="wholesale Woman's dress" label="wholesale Woman's dress">
			<option value="MacBook Pro 15" label="MacBook Pro 15">
			<option value="HUAWEI HONOR MagicBook 15 Laptop" label="HUAWEI HONOR MagicBook 15 Laptop">
			<option value="HUAWEI Mate Book 14" label="HUAWEI Mate Book 14">
			<option value="Newest Teclast F15S" label="Newest Teclast F15S">
			<option value="Lenovo Xiaoxin Air" label="Lenovo Xiaoxin Air">
			<option value="Lenovo Laptop Yangtian S550" label="Lenovo Laptop Yangtian S550">
			<option value="Original Global Huawei P40 Mobile 5G Phone" label="Original Global Huawei P40 Mobile 5G Phone">
			<option value="Original HUAWEI Y6P 4GB+64GB Smart Phone" label="Original HUAWEI Y6P 4GB+64GB Smart Phone">
			<option value="Authentic Original New Apple iPhone" label="Authentic Original New Apple iPhone">
			<option value="Authentic Original Brand New iPhone 12 Pro/Pro Max" label="Authentic Original Brand New iPhone 12 Pro/Pro Max">
			<option value="sport gym t-shirt men" label="sport gym t-shirt men">
			<option value="Heavy Cotton Oversize T Shirt" label="Heavy Cotton Oversize T Shirt">
			<option value="Men's Bodybuilding Muscle T-Shirt" label="Men's Bodybuilding Muscle T-Shirt">
			<option value="Cheap Cotton padded Jacket" label="Cheap Cotton padded Jacket">
			<option value="jacket boutique coat" label="jacket boutique coat">
			<option value="Spring Autumn Fleece Plus Size Jackets" label="Spring Autumn Fleece Plus Size Jackets">
			<option value="Customized Suits Set For Men" label="Customized Suits Set For Men">
			<option value="Bespoke tailor suits" label="Bespoke tailor suits">
			<option value="Summer Pink Mens Suits" label="Summer Pink Mens Suits">
			<option value="Print Women White Tshirt" label="Print Women White Tshirt">
			<option value="Summer Loose Short Sleeve Tshirt" label="Summer Loose Short Sleeve Tshirt">
			<option value="Long Sleeve O-Neck Tees Tops cloth" label="Long Sleeve O-Neck Tees Tops cloth">
			<option value="europe slim women dresses" label="europe slim women dresses">
			<option value="Sleeve Long Evening Dress" label="Sleeve Long Evening Dress">
			<option value="Elegant Pencil Woman Dress" label="Elegant Pencil Woman Dress">
		</datalist>
  <input type="submit" id="submit" value="Submit" class="btn btn-success"> 
  <input type="Reset" value="Reset" class="btn btn-danger">
</fieldset>
</form>
</span>
<?php
	require("../Includes/design/footer.php");
?>