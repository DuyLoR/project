<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../project01/css/reset.css">
    <link rel="stylesheet" href="../project01/css/style.css">
    <title>Order</title>
</head>

<body>
    <!-- begin heading -->
    <div id="heading">

        <div class="heading-form container display-flex text-center">
            <div class="logo">
                <a href="../project01/index.php"><img src="../project01/image/logo/logo.png" alt="logo"></a>
            </div>
            <div class="nav-menu">
                <ul class="display-flex">
                    <li><a href="../project01/index.php">Home</a></li>
                    <li><a href="../project01/categories.php">Categories</a></li>
                    <li><a href="../project01/food.php">Foods</a></li>
                    <li><a href="#footer">Contact</a></li>
                </ul>
            </div>
        </div>

    </div>

    <!-- begin order -->
    <div class="order-background">
        <div class="container">
            <h1 class="text-heading-order text-center">
                Fill this form to confirm your order.
            </h1>
            <div class="order-form">
                <fieldset>
                    <legend>Selected Food</legend>
                    <div class="food-order display-flex">
                        <img src="../project01/image/food-img/menu-pizza.jpg" alt="Pizza"
                            class="order-img border-radius">
                        <div class="order-content">
                            <h3 class="order-title">Food Tide</h3>
                            <h3 class="order-price">$2.3</h3>
                            <h3 class="order-quantity">Quantity</h3>
                            <input type="number" name="number" id="">
                        </div>
                    </div>
                </fieldset>
            </div>
            <div class="order-form">
                <fieldset>
                    <legend>Delivery Details</legend>
                    <div class="order-contact">
                        <h3 class="text-contact">Full Name</h3>
                        <input type="text" name="name" id="" placeholder="E.g. DuyLoR" class="input-content" require>
                        
                        <h3 class="text-contact">Phone Number</h3>
                        <input type="text" name="phone" id="" placeholder="E.g. 123456xxxxx" class="input-content" require>
                        
                        <h3 class="text-contact">Email</h3>
                        <input type="email" name="" id="" placeholder="E.g. DuyLoR@gmail.com" class="input-content" require>
                        
                        <h3 class="text-contact">Address</h3>
                        <textarea name="Address" id="" class="input-content" rows="10" placeholder="E.g. City, Country"></textarea>
                        <input type="submit" name="submit" value="Confirm Order" class="btn border-radius" >
                    </div>
                </fieldset>
            </div>
        </div>
    </div>
    <!-- end order -->

    <!-- begin footer -->
    <div id="footer">

        <div class="container">
            <div class="link-icon text-center">
                <a href="#" class="social-icon">
                    <img src="https://scontent.fhan2-4.fna.fbcdn.net/v/t1.15752-9/cp0/129116540_426805215145688_3600266875695006466_n.png?_nc_cat=100&ccb=1-5&_nc_sid=ae9488&_nc_ohc=mBAg1FWqtD8AX-CwTH-&_nc_oc=AQng94tp-NC0e93OATBncpmj2CG619oFLm0irTES3GhgSSCI88jDLDJW66tnHpNcTv8&tn=xKkE-uEp5dUqYviM&_nc_ht=scontent.fhan2-4.fna&oh=5369fcc728a93f2b08130ae5d7f348ac&oe=616992D0"
                        alt="Facebook">
                </a>
                <a href="#" class="social-icon">
                    <img src="https://scontent.fhan2-3.fna.fbcdn.net/v/t1.15752-9/cp0/99384986_711556522719545_7406983535052980224_n.png?_nc_cat=101&ccb=1-5&_nc_sid=ae9488&_nc_ohc=d_uA2RzYmz4AX_JjeQ8&_nc_ht=scontent.fhan2-3.fna&oh=34e318549c2f67c8bf5ac0e784d1c47e&oe=61682E46"
                        alt="Intagram">
                </a>
                <a href="#" class="social-icon">
                    <img src="https://scontent.fhan2-2.fna.fbcdn.net/v/t1.15752-9/cp0/100651708_766678490402755_5849077263319957504_n.png?_nc_cat=111&ccb=1-5&_nc_sid=ae9488&_nc_ohc=3GdbOr7ap2sAX8AgMqp&tn=xKkE-uEp5dUqYviM&_nc_ht=scontent.fhan2-2.fna&oh=ec5e6612afda70652d06d83b48baabd3&oe=616921F9"
                        alt="twitter">
                </a>
            </div>
            <h3 class="coppyright text-center">All rights reserved. Designed By <a href="#">DuyLoR</a></h3>
        </div>
    </div>
    <!-- end footer -->

</body>

</html>