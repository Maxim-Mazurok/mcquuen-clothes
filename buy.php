<?php
$products = [
    "Lightning McQueen" => [
        "Image" => "images/futbolka-1.png",
        "Price" => 24.99,
        "Title" => "Lightninng McQueen",
        "Description" => "This svitshot with the image of the fastest and legendary cartoon rider - Lightning McQueen.<br>
		You can pay for your purchase in many ways. Starting from the replenishment from the phone, ending with replenishment with a bank card. To select the method of purchase, click on the 'BUY'"
    ],
    "I need speed" => [
        "Image" => "images/futbolka-2.png",
        "Price" => 24.99,
        "Title" => "I need speed",
        "Description" => "This svitshot with the image of the fastest and legendary cartoon rider - Lightning McQueen.<br>
        You can pay for your purchase in many ways. Starting from the replenishment from the phone, ending with replenishment with a bank card. To select the method of purchase, click on the 'BUY'"
    ],
    "Big speed" => [
        "Image" => "images/futbolka-3.png",
        "Price" => 24.99,
        "Title" => "Big speed",
        "Description" => "This svitshot with the image of the fastest and legendary cartoon rider - Lightning McQueen.<br>
        You can pay for your purchase in many ways. Starting from the replenishment from the phone, ending with replenishment with a bank card. To select the method of purchase, click on the 'BUY'"
    ],
    "I'm so fast" => [
        "Image" => "images/futbolka-4.png",
        "Price" => 24.99,
        "Title" => "I'm so fast",
        "Description" => "This svitshot with the image of the fastest and legendary cartoon rider - Lightning McQueen.<br>
        You can pay for your purchase in many ways. Starting from the replenishment from the phone, ending with replenishment with a bank card. To select the method of purchase, click on the 'BUY'"
    ],
    "Lightning McQueen №2" => [
        "Image" => "images/futbolka-5.png",
        "Price" => 24.99,
        "Title" => "Lightning McQueen №2",
        "Description" => "This svitshot with the image of the fastest and legendary cartoon rider - Lightning McQueen.<br>
        You can pay for your purchase in many ways. Starting from the replenishment from the phone, ending with replenishment with a bank card. To select the method of purchase, click on the 'BUY'"
    ],
    "I love this clothes" => [
        "Image" => "images/futbolka-6.png",
        "Price" => 24.99,
        "Title" => "I love this clothes",
        "Description" => "This svitshot with the image of the fastest and legendary cartoon rider - Lightning McQueen.<br>
        You can pay for your purchase in many ways. Starting from the replenishment from the phone, ending with replenishment with a bank card. To select the method of purchase, click on the 'BUY'"
    ],
    "McQueen" => [
        "Image" => "images/futbolka-7.png",
        "Price" => 24.99,
        "Title" => "McQueen",
        "Description" => "This svitshot with the image of the fastest and legendary cartoon rider - Lightning McQueen.<br>
        You can pay for your purchase in many ways. Starting from the replenishment from the phone, ending with replenishment with a bank card. To select the method of purchase, click on the 'BUY'"
    ],
    "Lightning" => [
        "Image" => "images/futbolka-8.png",
        "Price" => 24.99,
        "Title" => "Lightning",
        "Description" => "This svitshot with the image of the fastest and legendary cartoon rider - Lightning McQueen.<br>
        You can pay for your purchase in many ways. Starting from the replenishment from the phone, ending with replenishment with a bank card. To select the method of purchase, click on the 'BUY'"
    ],
    "I'm fast" => [
        "Image" => "images/futbolka-9.png",
        "Price" => 24.99,
        "Title" => "I'm fast",
        "Description" => "This svitshot with the image of the fastest and legendary cartoon rider - Lightning McQueen.<br>
        You can pay for your purchase in many ways. Starting from the replenishment from the phone, ending with replenishment with a bank card. To select the method of purchase, click on the 'BUY'"
    ],
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
                        <a href="index.html#clothes1">Info</a>
                    </li>
                    <li>
                        <a href="buy.html">Buy</a>
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
            <img src="<?= $item["Image"] ?>">
        </div>

        <div class="column78 column50">
            <h2><?= $item["Title"] ?><span>.</span> <?= $item{"Price"} ?>$ </h2>
            <p>This svitshot with the image of the fastest and legendary cartoon rider - Lightning McQueen.</p>
            <p>You can pay for your purchase in many ways. Starting from the replenishment from the phone, ending with
                replenishment with a bank card.</p>
            <h2>To order goods, call the number - +380668978532<br>
                                                  +380935679314</h2>
        </div>
    </div>
</section>

</body>    