<!Doctype html>
<html>
<head>
<title>CITY shop</title>
<link rel="StyleSheet" href="../CSS/shop.css?v=<?php echo time(); ?>" >

<?php
    require("../Includes/design/header.php");
    include("../Includes/functions/databaseConnection.php");
?>
<?php
    if(isset($_GET["search_key"])){
        $title = $_GET["search_key"];
    }
?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <h4 class="alert-heading text-uppercase"><?php echo $title;?></h4>
    please to now the exactly product you need to order it or take more informations about it save the REF# code and ask us and send it to us<br><strong>attention</strong>:ways to contact with us found in "contact us" block
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<br>
<hr>
<table class="table">
    <tr><td colspan="2"><div style="padding-top: .5rem;
    padding-bottom: .5rem;
    color: #6c757d;
    text-align: center;"><strong>Our Products</strong></div></td></tr>
    <?php
        $db = connect();
        $query = "SELECT * FROM ".$title;
        $stmt = $db->prepare($query);
        $stmt->execute();
        $stmt->bind_result($id,$name,$ref,$image,$desc,$price,$discount);
        if($stmt->fetch()){
            echo "<tr>";
            
            echo '<td><img src="../img/'.$image.'" alt="'.$name.'" height="350" width="350" ></td>';
            echo '<td><br><br>'.$desc.'<br>
                    Ref#:'.$ref.'<br>';
            if($discount > 0){
                $newp = $price - $price*($discount/100);
                echo '<b>US $'.$newp.'</b>&nbsp;&nbsp;<small><s>'.$price.'</s><span class="text-danger"> -'.$discount.'%</span></small>';
            }else{
                echo '<b>US $'.$price.'</b>';
            }
            echo "</td>";
            echo "</tr>";

            //fetch all
            while($stmt->fetch()){
                echo "<tr>";
                
                echo '<td><img src="../img/'.$image.'" alt="'.$name.'" height="350" width="350" ></td>';
                echo '<td><br><br>'.$desc.'<br>
                        Ref#:'.$ref.'<br>';
                if($discount > 0){
                    $newp = $price - $price*($discount/100);
                    echo '<b>US $'.$newp.'</b>&nbsp;&nbsp;<small><s>'.$price.'</s><span class="text-danger"> -'.$discount.'%</span></small>';
                }else{
                    echo '<b>US $'.$price.'</b>';
                }
                echo "</td>";
                echo "</tr>";
            }       
        }else{
            //if no values in this section
            echo "<tr>";
            echo '<td class="d-flex justify-content-center">';
            echo '<img src="../img/commingSoon.jpg" style="width: 700px;height: 200px;">';
            echo "</td>";
                
            echo "</tr>";
                
        }

        ?>
<!--     <tr>

        <td><img src="appleLaptop.png" alt="MacBook Pro 15"  height="350" width="350"></td>
        <td><br><br>New Original Apple MacBook Pro Latest Model 16" Retina Display Intel i7/i9 16G Memory Radeon Pro Graphic 512G/1T SSD Notebook<br>
            Ref#:MacBook Pro 15<br>
            <b>US $2,999.00 - 3,599.00</b>
	    </td>
    </tr>
    <tr>
	    <td><img src="huawei Laptop1.png" alt="HUAWEI Mate Book 14"  height="350" width="350"></td>
        <td><br><br>HUAWEI MateBook 14 2020 14 inch laptop Ryzen 7nm R5-4600H/ R7-4800H 16G 512G PCIE SSD FHD IPS 2K touch screen ultrabook<br>
            Ref#:HUAWEI Mate Book 14<br>
            <b>US $1,104.00 - 1,212.00</b><small><s>US $1,380.00 - 1,515.00</s> <span class="redText">-20%</span></small>
        </td>
    </tr>
	<tr>

        <td><img src="huawei Laptop 2.png" alt="HUAWEI HONOR MagicBook 15 Laptop"  height="350" width="350">
		</td>
        <td><br><br>HUAWEI HONOR MagicBook 15 Laptop 2020 Version 15.6'' 7nm process 16GB 512GB AMD Ryzen r5-4500U/r7-4700U Windows 10 Pro English<br>
            Ref#:HUAWEI HONOR MagicBook 15 Laptop<br>
            <b>US $939.99 - 1,089.99</b>
        </td>
    </tr>
    <tr>
        <td><img src="Laptop Teclast.png" alt="Newest Teclast F15S"  height="350" width="350"></td>
        <td><br><br>Newest Teclast F15S 15.6 Inch Laptop Windows 10 Notebook 1920x1080 Intel Apollo Lake Laptops 8GB RAM 128GB SSD Dual Wifi HDMI<br>
            Ref#:Newest Teclast F15S<br>
            <b>US $289.49</b><small><s>US $374.99</s></small>
        </td>
    </tr>
	<tr>
	    <td><img src="Lenovo 1.png" alt="Lenovo Xiaoxin Air"  height="350" width="350"></td>
        <td><br><br>Lenovo Xiaoxin Air 15.6 inch Laptop AMD Ryzen R7 4800U R5 4600U 512GB SSD 16GB DDR4 Windows 10 Notebook With Backlit Keyboard<br>
            Ref#:Lenovo Xiaoxin Air<br>
            <b>US $899.99 - 969.99</b>
        </td>
    </tr>
	<tr>
        <td><img src="Lenovo 2.png" alt="Lenovo Laptop Yangtian S550"  height="350" width="350"></td>
        <td><br><br>2020 Lenovo Laptop Yangtian S550 With AMD R7 4800U 16GB Ram 512GB SSD Memory Metal Body 14 Inch Backlit Screen Fingerprint<br>
            Ref#:Lenovo Laptop Yangtian S550<br>
            <b>#US $1,040.00 - 1,200.00</b><small><s>US $1,300.00 - 1,500.00</s> <span class="redText">-20%</span></small>
        </td>
    </tr>
	<tr>
        <td><img src="huawei phone1.png" alt="Original Global Huawei P40 Mobile 5G Phone"  height="350" width="350"></td>
        <td><br><br>Original Global Huawei P40 Mobile 5G Phone 6.1 Inches OLED Screen 422PPI 8GB +128GB ROM Smart Phone 50MP 3800mAh Kirin 990<br>
            Ref#:Original Global Huawei P40 Mobile 5G Phone<br>
            <b>US $559.30</b><small><s> US $1,141.43</s> <span class="redText">-51%</span></small>
        </td>
    </tr>
	<tr>
        <td><img src="huawei phone 2.png" alt="Original HUAWEI Y6P 4GB+64GB Smart Phone"  height="350" width="350"></td>
        <td><br><br>Original HUAWEI Y6P 4GB+64GB Smart Phone EMUI 10.1 5000 mAh battery 6.3 inch Mobile Phone Colorful 8MP+13MP Camera Cellphone<br>
            Ref#:Original HUAWEI Y6P 4GB+64GB Smart Phone<br>
            <b>US $159.99</b><small><s> US $199.99</s> <span class="redText">-20%</span></small>
        </td>
    </tr>
	<tr>
        <td><img src="iphone 12.png" alt="Authentic Original New Apple iPhone"  height="350" width="350"></td>
        <td><br><br>Authentic Original New Apple iPhone 12/12 Mini 5G 5.4/6.1" Super Retina XDR Display A14 Bionic IOS 14 Smartphone Super Slim Thin<br>
            Ref#:Authentic Original New Apple iPhone<br>
            <b>US $919.20 - 1,227.20</b><small><s>  US $1,149.00 - 1,534.00</s> <span class="redText">-20%</span></small>
        </td>
    </tr>
	<tr>
        <td><img src="iPhone 12 pro.png" alt="Authentic Original Brand New iPhone 12 Pro/Pro Max"  height="350" width="350"></td>
        <td><br><br>Authentic Original Brand New iPhone 12 Pro/Pro Max 5G 6.1/6.7" XDR Display with Original Adaptor as Gift IOS 14 Smartphone<br>
            Ref#:Authentic Original Brand New iPhone 12 Pro/Pro Max<br>
            <b>US $1,669.00 - 2,199.00</b>
        </td>
    </tr> -->
</table>
<br class="clearleft">

<?php
    require("../Includes/design/footer.php");
?>