<link rel="StyleSheet" href="../CSS/Style.css?v=<?php echo time(); ?>" >

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
<meta charset="utf-8">
<link rel="icon" href="../img/logo.png" type="image/ico">
</head>
<body>
    <?php 
    /*
<header>

    <div id="image_link"><img src="../img/logo.png"></div>
    <div id="header_links"> 	
        <a href="../HTML/shop.html"> Shop now</a> 
        <a href="../HTML/contact.html"> Contact us</a> 
        <a href="../HTML/order.html"> Order now </a>
        <a href="../HTML/about.html"> About us</a>
    </div>
    <div><a href="../HTML/sign.html"><button>Sign in</button></a></div>


</header>

*/

?>
<header class="navbar navbar-expand-lg navbar-light bg-light mb-3">
    <div class="container-fluid">
        <div id="image_link"><img src="../img/logo.png"></div>
        <div style="width:100%;">
            <ul class="navbar-nav mb-2 mb-lg-0 d-flex justify-content-around" id="header_links" style="width:100%;">    
                <li class="nav-item">
                    <a class="nav-link link" href="../../PHP/shop.php" id="shop">Shop now</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link" href="../../PHP/contact.php" id="contact">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link" href="../../PHP/order.php" id="order">Order now</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link" href="#" id="about">About us</a>
                </li>           
            </ul>
        </div>
            <a href="../HTML/sign.html" class="btn btn-primary" style="width: 100px;">Sign in</a>
    </div>

</header>
    <nav> 
        <a href="../../PHP/technology.php?search_key=technology"> <img src="../img/technologyico.png" alt=""></a>
        <a href="../../PHP/technology.php?search_key=furniture"><img src="../img/furnitureico.png" alt=""></a>
        <a href="../../PHP/technology.php?search_key=pets"><img src="../img/petsico.png" alt=""></a>
        <a href="../../PHP/clothes.php"><img src="../img/clothesico.png" alt=""></a> 
        <a href="../../PHP/technology.php?search_key=homeware"><img src="../img/fridgeico.png" alt=""></a> 

            
    </nav>   

<main >