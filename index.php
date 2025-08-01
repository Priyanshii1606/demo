<?php
$brandName="Nextronic"
$tagline="Your Online Electronics Store";
define("COPYRIGHT_YEAR",2025);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?echo $brandName?></title>
    <link rel="stylesheet" href="Style.css">

</head>
<body>
    <header>
        <h1><?php echo $brandName;?></h1>
        <p class="tagline"><?php echo $tagline?></p>
    </header>

    <main>
        <h2>Welcome to <?php echo $brandName; ?>!</h2>
        <p>Discover the best electronics for your home and life.</p>
    </main>

    <footer>
        &copy;<?php echo COPYRIGHT_YEAR . " " . $brandName; ?>. All right
    </footer>
</body>
</html>