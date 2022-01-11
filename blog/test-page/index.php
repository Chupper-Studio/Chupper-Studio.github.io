<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="mobile_style.css">
</head>
<body>
<nav>
        <li class="home_button active"><a href="#">Home</a></li>
            <ul class="nav_links">
                <li><a class="menu-button" href="/contact/index.php">Contact</a></li>
                <li><a class="menu-button" href="/blog/index.php">Blog</a></li>
                
                <li>
                    <a href="#">More</a>
                    <ul class="sub_menu">
                    <li><a class="menu-button" href="/color/index.php">/color</a></li>
                    <li><a class="menu-button" href="/test-page/index.php">/test-page</a></li>    
                </ul>
                </li>
                
            </ul>
            <div class="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
        </nav>
        <div class="content">
            <h1 class="title">About Me</h1>

            <?php
            $p1 = fopen('content/p1.txt', 'r');
            $a = 1;
            while(!feof($p1)){
                $line = fgets($p1);
                    echo "<p>$line</p>";
                $a++;
            }

            fclose($p1);
            fclose($p2);
            ?>
 

        </div>
</body>
</html>