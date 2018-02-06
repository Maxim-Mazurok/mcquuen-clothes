<?php
$products = [
	"Lightning McQueen" => [
		"Price" =>49.99,
		"Title" =>"Lightninng McQueen",
		"Description" =>"This svitshot with the image of the fastest and legendary cartoon rider - Lightning MacQueen.<br>
		You can pay for your purchase in many ways. Starting from the replenishment from the phone, ending with replenishment with a bank card. To select the method of purchase, click on the 'BUY'"
	]
];
$code = $_GET["code"];
$item = $products[$code]

?>

<!DOCTYPE html>
<html>
<head>
    <title>McQueen clothes</title>
    <meta charset="utf-8">
    <meta type="description" content="My portfolio Website">

    <!--Our fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Roboto+Slab" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--Our styles-->
    <link rel="stylesheet" href="./styles/normalize.min.css">
    <link rel="stylesheet" href="./styles/style-clothes.css">
    <link rel="stylesheet" href="buy-clothes.html">
</head>
<body>

<header class="main-header">
    <div class="container clearfix">
        <div class="logo">
            <a href="#">Lightning McQueen</a>
        </div>

        <div class="nav-wrap">
            <nav class="main-menu" id="clothes">
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="index.html#history">History</a>
                    </li>
                    <li>
                        <a href="index.html#clothes1">Clothes</a>
                    </li>
                    <li>
                        <a href="#">Info</a>
                    </li>
                    <li>
                        <a href="#">Buy</a>
                    </li>
                    <li>
                        <a href="#">Clients</a>
                    </li>
                    <li>
                        <a href="index.html#contact">Contact</a>
                    </li>
                </ul>
            </nav>
        </div>

    </div>
</header>

   	<section class="portfolio">
   	  <div class="container clearfix">
        <div class="column78 column50">
          <img src="images/futbolka-1.png">
        </div>

        <div class="column78 column50">
          <h2><?= $item["Price"] ?><span>.</span> 49.99$</h2>
          <p>This svitshot with the image of the fastest and legendary cartoon rider - Lightning MacQueen.</p>
          <p>You can pay for your purchase in many ways. Starting from the replenishment from the phone, ending with replenishment with a bank card. To select the method of purchase, click on the "BUY"</p>
        <a class="more-link" href="">BUY  <i class="fa fa-arrow-right"></i></a>
        </div>
        </div>
      </div>
    </section>

</body>    