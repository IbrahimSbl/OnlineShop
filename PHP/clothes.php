<!Doctype html>
<html>
<head>
<title>CITY shopping</title>
<link rel="StyleSheet" href="../CSS/shop.css?v=<?php echo time(); ?>" >
<?php 
     require("../Includes/design/header.php");
     include("../Includes/functions/databaseConnection.php");
?>



<div class="alert alert-success alert-dismissible fade show" role="alert">
    <h4 class="alert-heading text-uppercase"><?php echo "Clothes";?></h4>
    please to now the exactly product you need to order it or take more informations about it save the REF# code and ask us and send it to us<br><strong>attention</strong>:ways to contact with us found in "contact us" block
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

<hr>
<h3>Our Products</h3>
<h1>Men's Clothing</h1>
<div class="align">
<?php
     $db = connect();
     $query = "SELECT * FROM `clothes` WHERE `category` = 'men'";
     $stmt = $db->prepare($query);
     $stmt->execute();
     $stmt->bind_result($id,$cat,$name,$ref,$image,$desc,$price,$discount);

     while($stmt->fetch()){
          echo "<div>";
          echo "<figure>";
          echo '<img src="../img/'.$image.'" alt="'.$image.'" width="100%" height="300px">';
          echo "<figcaption>";
          echo $desc."<br>";
          echo 'Ref#:'.$ref.'<br>';
          if($discount > 0){
               $newp = $price - $price*($discount/100);
               echo '<b>US $'.$newp.'</b>&nbsp;&nbsp;<small><s>'.$price.'</s><span class="text-danger"> -'.$discount.'%</span></small>';
           }else{
               echo '<b>US $'.$price.'</b>';
           }
          echo "</figcaption>";
          echo "</figure>";
          echo "</div>";
     }
     unset($stmt);
?>

</div>

<h1>Women's Clothing</h1>
<div class="align">
<?php
     $db = connect();
     $query = "SELECT * FROM `clothes` WHERE `category` = 'woman'";
     $stmt = $db->prepare($query);
     $stmt->execute();
     $stmt->bind_result($id,$cat,$name,$ref,$image,$desc,$price,$discount);

     while($stmt->fetch()){
          echo "<div>";
          echo "<figure>";
          echo '<img src="../img/'.$image.'" alt="'.$image.'" width="100%" height="300px">';
          echo "<figcaption>";
          echo $desc."<br>";
          echo 'Ref#:'.$ref.'<br>';
          if($discount > 0){
               $newp = $price - $price*($discount/100);
               echo '<b>US $'.$newp.'</b>&nbsp;&nbsp;<small><s>'.$price.'</s><span class="text-danger"> -'.$discount.'%</span></small>';
           }else{
               echo '<b>US $'.$price.'</b>';
           }
          echo "</figcaption>";
          echo "</figure>";
          echo "</div>";
     }
     unset($stmt);
?>

</div>
<!--
<h3>Our Products</h3>
<h1>Men's Clothing</h1>
<h2>T-Shirt</h2>

<div class="align">
       <div >
       <figure>
       <img src="T-shirt5.png" alt="Heavy Cotton Oversize T Shirt" width="100%" height="300px">
	   <figcaption>High Quality Short Sleeve 100% Heavy Cotton Oversize T Shirt <br>
       Ref#:Heavy Cotton Oversize T Shirt<br>
       <b>$4.30</b>
	   </figcaption>
	   </figure>
       </div>

       <div >
       <figure>
       <img src="T-shirt2.png" alt="Print Logo"  width="100%" height="310px">
	   <figcaption>Fashion Custom Print Logo Men's Fashion
       Hoodies Casual Three Pieces <br>
       Ref#:Print Logo T-Shirt For Men<br><b>$7.30</b>
       </figcaption>
       </figure>
	   </div>

       <div >
       <figure>
       <img src="T-shirt3.png" alt="China t-shirt" width="100%" height="310px">
	   <figcaption> China t-shirt factory for men online selling cheap online clothes shopping 
        <br>Ref#:China T-Shirt For Men<br>
       <b>$1.99 - $7.99</b><small>/ Piece</small>
       </figcaption>
       </figure>
       </div>
</div>
<div class="align">

       <div>
       <figure>
       <img src="T-shirt4.png" alt="sport gym t-shirt men" width="100%">
       <figcaption>Wholesale custom spandex muscle dry fit running fitness workout sport gym t-shirt t shirt men  <br>
       Ref#:sport gym t-shirt men <br>
       <b>$5.39</b>
	   </figcaption>
	   </figure>
       </div>
       
        <div >
        <figure>
        <img src="T-shirt1.png" alt="Black T-Shirt" width="100%"  height="300px">
        <figcaption>Black and White Customized Clothes 95% Polyester 5% Spandex <br>
        Printing Causal Boys Hoodie Sets for Men
        Ref#:Black T-Shirt For Men<br><b>$6.60</b></figcaption>
        </figure>

        </div>
 
        <div >
        <figure>
        <img src="T-Shirt6.png" alt="Men's Bodybuilding Muscle T-Shirt" width="100%" height="300px">
        <figcaption>Custom Slim Fit Men's Bodybuilding Muscle Training Workout Fitness Plain Gym T Shirt <br>
        Ref#:Men's Bodybuilding Muscle T-Shirt<br>
        <b>$6.99</b>
	    </figcaption>
	    </figure>
        </div>
</div>
<h2>Men's Jackets & Coats</h2>
<div class="align">
<div>
<figure>
<img src="coat1.png" alt="fabric men's coat" width="100%" height="300px">
<figcaption> Online shop hot selling waterproof fabric men's outdoor jackets 
Ref#:fabric men's coat<br>
<b>$47.00</b>
</figcaption>
</figure>
</div>
<div>
<figure>
<img src="coat2.png" alt="bomber jacket " width="100%" height="300px">
<figcaption>online clothes shopping down quilted bomber jacket for men 
Ref#:bomber jacket<br>
<b>$23.00 - $35.50</b>
</figcaption>
</figure>
</div>
<div>
<figure>
<img src="coat3.png" alt="men's winter coat" width="100%" height="300px">
<figcaption> 
men's winter coat from China factory wholesale clothes<br>
Ref#:men's winter coat<br><b>$65.00</b>
</figcaption>
</figure>
</div>
</div>
<div class="align">
<div>
     <figure>
     <img src="coat4.png" alt="Cheap Cotton padded Jacket" width="100%" height="300px">
     <figcaption>Custom Wholesale oem mens down jacket seamless Down Coat Men's Cheap Cotton padded Jacket  <br>
     Ref#:Cheap Cotton padded Jacket<br>
     <b>$48.00</b>
	 </figcaption>
	 </figure>
</div>
<div>
     <figure>
     <img src="coat5.png" alt="jacket boutique coat" width="100%" height="300px">
     <figcaption>Men's casual plus velvet thickened men's jacket Men's pure cotton jacket boutique coat  <br>
     Ref#:jacket boutique coat<br>
     <b>$21.00</b>
	 </figcaption>
	 </figure>
</div>
<div>
     <figure>
     <img src="coat6.png" alt="Spring Autumn Fleece Plus Size Jackets" width="100%" height="300px">
     <figcaption>Men Stand Collar Bomber Jacket Fashion Streetwear Cheap Zipper Hoodies Mens Spring Autumn Fleece Plus Size Jackets  <br>
     Ref#:Spring Autumn Fleece Plus Size Jackets<br>
     <b>$10.90</b>
	 </figcaption>
	 </figure>
</div>
</div>
<h2>Men's Suits</h2>
<div class="align">
<div>
<figure>
<img src="suit1.png" alt=" Slim Fit Jacket" width="100%" height="300px">
<figcaption> 
Fashion Men Uniforms Two Piece Professional Slim Fit Jacket+Long Pants Business Casual Office Clothes E93158<br>
Ref#:Slim Fit Jacket<br><b>$36.00</b>
</figcaption>
</figure>
</div>
<div>
<figure>
<img src="suit2.png" alt="Men Tuxedos Floral Pattern Casual Blazer Suit Jacket Black Pants Wedding Suits For Man Party Prom Male Stage Slim Fit Costumes" width="100%" height="300px">
<figcaption> 
Men Tuxedos Floral Pattern Casual Blazer Suit Jacket Black Pants Wedding Suits For Man Party Prom Male Stage Slim Fit Costumes<br>
Ref#:Casual Blazer Suit<br><b>$38.00</b>
</figcaption>
</figure>
</div>

<div>
<figure>
<img src="suit3.png" alt=" Black Men Suits Groom Tuxedos" width="100%" height="300px">
<figcaption> YSMARKET Hot Fashion S-4XL 3 Pieces Black Men Suits Groom Tuxedos One Button Groomsman Wedding Suits Mens Clothes Plus Size
<br>
Ref#:Black Men Suits Groom Tuxedos<br>
<b>$33.00</b>
</figcaption>
</figure>
</div>
</div>
<div class="align">
<div>
     <figure>
     <img src="suit4.png" alt="Customized Suits Set For Men" width="100%" height="300px">
     <figcaption>Pant Suit Pants Business Man 3 Pcs Customized Suits Set For Men  <br>
     Ref#:Customized Suits Set For Men<br>
     <b>$159.99</b>
	 </figcaption>
	 </figure>
</div>
<div>
     <figure>
     <img src="suit5.png" alt="bespoke tailor suits" width="100%" height="300px">
     <figcaption>Window products full canvas 2 pieces custom bespoke tailor suits wool fabric men blazer and pant suits for men  <br>
     Ref#:Bespoke tailor suits<br>
     <b>$400.00</b>
	 </figcaption>
	 </figure>
</div>
<div>
     <figure>
     <img src="suit6.png" alt="Summer Pink Mens Suits" width="100%" height="300px">
     <figcaption>2019 Summer Pink Mens Linen Suit Casual 2 Pieces Suit <br>
     Ref#:Summer Pink Mens Suits<br>
     <b>$72.00</b>
	 </figcaption>
	 </figure>
</div>
</div>
<h1>Woman's Clothes</h1>
<h2>Woman's T-Shirt</h2>
<div class="align">
<div>
<figure>
<img src="wtshirt1.png" alt="custom v-neck cotton plain hip hop tshirt" width="100%" height="300px">
<figcaption> 
custom v-neck cotton plain hip hop multicolour tie dye t shirts oversized printing tshirt women femme tops <br>
Ref#:hip hop tshirt for woman<br>
<b>$6.60</b>
</figcaption>
</figure>
</div>
<div>
<figure>
<img src="wtshirt2.png" alt="tshirt" width="100%" height="300px">
<figcaption> 
Washed Out Oversize Tee Ladies Soft Blank Vintage Crew Neck Oversized Tshirt Women <br>
Ref#:Crew Neck Oversized Tshirt for woman<br><b>$7.00</b>
</figcaption>
</figure>
</div>
<div>
<figure>
<img src="wtshirt3.png" alt="MGOO" width="100%" height="300px">
<figcaption> 
MGOO Custom 100% Cotton Soft Tshirts Girls Graphic Printing Plain Hemp Crop T-shirt Women <br>
Ref#:MGOO Cotton Soft Tshirts for woman<br>
<b>$6.00</b>
</figcaption>
</figure>
</div>
</div>
<div class="align">
<div>
     <figure>
     <img src="wtshirt4.png" alt="Print Women White Tshirt" width="100%" height="300px">
     <figcaption>2020 Spring New Fashion Loose Anime Tshirt Print Women White Tshirt<br>
     Ref#:Print Women White Tshirt<br>
     <b>$3.05</b>
	 </figcaption>
	 </figure>
</div>
<div>
     <figure>
     <img src="wtshirt5.png" alt="Summer Loose Short Sleeve Tshirt" width="100%" height="300px">
     <figcaption>If You Wanted A Soft Serve Print Tshirts Summer Loose Short Sleeve Casual Blouse Fashion Letter Tops Cotton T-shirt Women <br>
     Ref#:Summer Loose Short Sleeve Tshirt<br>
     <b>$4.59</b>
	 </figcaption>
	 </figure>
</div>
<div>
     <figure>
     <img src="wtshirt6.png" alt="Long Sleeve O-Neck Tees Tops cloth" width="100%" height="300px">
     <figcaption>T-Shirts 2020 Autumn and winter Women cotton T-Shirt Solid Color Loose Base Casual Long Sleeve O-Neck Tees Tops cloth <br>
     Ref#:Long Sleeve O-Neck Tees Tops cloth<br>
     <b>$1.42</b>
	 </figcaption>
	 </figure>
</div>
</div>
<h2>Woman's Dresses</h2>
<div class="align">
<div>
<figure>
<img src="dress1.png" alt="Kids Summer Casual Clothes Dress" width="100%" height="300px">
<figcaption> 
China Factory Direct Sale Kids Summer Casual Clothes Dress For Girls <br>
Ref#:Kids Summer Casual Clothes Dress<br>
<b>$6.30</b>
</figcaption>
</figure>
</div>
<div>
<figure>
<img src="dress2.png" alt="V-neck Long Casual Dresses" width="100%" height="300px">
<figcaption> 
Latest Design Women Dress 2020 Sexy Woman Dresses Cheap Clothes for Women Online Shops V-neck Long Casual Dresses<br>
Ref#:V-neck Long Casual Dresses<br>
<b>$7.46</b>
</figcaption>
</figure>
</div>
<div>
<figure>
<img src="dress3.png" alt="Woman's dress" width="100%" height="300px">
<figcaption> 
clothes for wholesale online shopping womens clothes womens 2021 SC_ST20186<br>
Ref#:wholesale Woman's dress<br>
<b>$8.20</b>
</figcaption>
</figure>
</div>
</div>
<div class="align">
<div>
     <figure>
     <img src="dress4.png" alt="europe slim clothes women dresses" width="100%" height="300px">
     <figcaption>Fashion women clothes long sleeves hot sale woman dress high quality europe slim clothes women dresses<br>
     Ref#:europe slim clothes women dresses<br>
     <b>$4.20</b>
	 </figcaption>
	 </figure>
</div>
<div>
     <figure>
     <img src="dress5.png" alt="Sleeve Long Evening Dress" width="100%" height="300px">
     <figcaption>YH Hot Selling Casual Fashion Clothing Women Dresses 2019 Ladies Long Sleeve Long Evening Dress <br>
     Ref#:Sleeve Long Evening Dress<br>
     <b>$7.50</b>
	 </figcaption>
	 </figure>
</div>
<div>
     <figure>
     <img src="dress6.png" alt="Elegant Pencil Woman Dress" width="100%" height="300px">
     <figcaption>New Discount Hawaiian Polynesian Traditional Tribal Print Women Dresses Elegant Pencil Off Shoulder Party Bodycon Midi Dress<br>
     Ref#:Elegant Pencil Woman Dress<br>
     <b>$15.99</b>
	 </figcaption>
	 </figure>
</div>
</div>

-->


<?php
     require("../Includes/design/footer.php");
?>