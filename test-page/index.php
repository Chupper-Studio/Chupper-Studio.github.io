<?php
session_start();
// Đặt biến ngôn ngữ
if(isset($_GET['lang']) && !empty($_GET['lang'])){
 $_SESSION['lang'] = $_GET['lang'];
 if(isset($_SESSION['lang']) && $_SESSION['lang'] != $_GET['lang']){
  echo "<script type='text/javascript'> location.reload(); </script>";
 }
}
// Chèn vào tệp tin ngôn ngữ, ngôn ngữ mặc định là tiếng Anh
if(isset($_SESSION['lang'])){
 include "../assets/languages/lang_".$_SESSION['lang'].".php";
}else{
 include "../assets/languages/lang_en.php";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/c2002390b5.js" crossorigin="anonymous"></script>    <script src="/assets/script/createId.js" defer></script>
    <script src="/assets/script/functions.js" defer></script>
    <script src="/assets/script/createId.js" defer></script>
    <title><?=_HOME?></title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="mobile_style.css">
</head>
<body>
<!-- <iframe src="../loading/index.php" id='iframe'></iframe> -->
<nav>
        <li class="home_button active"><a href="#"><?= _HOME ?></a></li>
            <ul class="nav_links">
                <li><a class="menu-button" href="/contact/index.php"><?= _CONTACT ?></a></li>
                <li><a class="menu-button" href="/blog/index.php">Blog</a></li>
                
                <li>
                    <a href="#"><?= _MORE ?></a>
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
        <!-- START: TABLE OF CONTENTS SCRIPT  -->
        <script>
            var ToC="<nav role='navigation' class='table-of-contents> +<h2>On this page:</h2>+<ul>";
            $(".content h2").each(function(){
                var id=$(this).attr("id");
                var text=$(this).text();
                newLine="<li><a href='#"+id+"'>"+text+"</a></li>";
                ToC+=newLine;
            });
            ToC+="</ul></nav>";

            $(".content").prepend(ToC);
        </script>
        <!-- END: TABLE OF CONTENTS SCRIPT -->
        <div class="content">
            <h1 class="title">title</h1>
            <h2>About Me</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia optio aliquid perspiciatis qui, ipsum eum architecto ipsa non accusamus tempore iste cupiditate consequatur ex nihil quasi autem suscipit repellat ea fugit? Maxime at necessitatibus fuga ea cupiditate nostrum error consectetur, veniam delectus dolor libero neque iusto officia veritatis dolorem corrupti. Molestias, maxime nihil autem ea est libero optio facere animi nam accusantium, soluta ullam culpa totam esse atque sit ab eaque! Ipsum expedita ad quis amet fuga enim ullam aperiam culpa voluptate, officiis vero magnam suscipit quasi veniam! Officia voluptatem debitis veritatis molestiae exercitationem aspernatur eos rerum distinctio officiis sapiente!</p>
            <h2>Contact</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, nam. Hic, explicabo corrupti magni impedit assumenda repellat suscipit magnam cumque tempora eum, doloremque officiis delectus animi possimus labore quibusdam ratione nostrum facilis nulla ex rem? Impedit, a. Quidem, eaque aspernatur, reprehenderit, voluptatem fuga doloremque asperiores consequuntur enim maxime nemo animi.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, nam. Hic, explicabo corrupti magni impedit assumenda repellat suscipit magnam cumque tempora eum, doloremque officiis delectus animi possimus labore quibusdam ratione nostrum facilis nulla ex rem? Impedit, a. Quidem, eaque aspernatur, reprehenderit, voluptatem fuga doloremque asperiores consequuntur enim maxime nemo animi.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, nam. Hic, explicabo corrupti magni impedit assumenda repellat suscipit magnam cumque tempora eum, doloremque officiis delectus animi possimus labore quibusdam ratione nostrum facilis nulla ex rem? Impedit, a. Quidem, eaque aspernatur, reprehenderit, voluptatem fuga doloremque asperiores consequuntur enim maxime nemo animi.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, nam. Hic, explicabo corrupti magni impedit assumenda repellat suscipit magnam cumque tempora eum, doloremque officiis delectus animi possimus labore quibusdam ratione nostrum facilis nulla ex rem? Impedit, a. Quidem, eaque aspernatur, reprehenderit, voluptatem fuga doloremque asperiores consequuntur enim maxime nemo animi.</p>
            <h2>Lorem, ipsum.</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum, quas?</p>
            <h2>Lorem, ipsum dolor.</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, quo! Aperiam, quidem asperiores ratione commodi earum repudiandae accusantium excepturi libero, dicta officia fuga consequuntur pariatur fugiat neque quaerat quod optio eius suscipit? Ducimus mollitia rerum ipsum id modi non reprehenderit?</p>
        </div>

        <footer>
 </form>
            <div class="container">
            <div class="about">
                <h2><?= _ABOUT_US_TITLE ?></h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore est architecto odio cumque mollitia soluta necessitatibus aperiam, assumenda quas? Nam commodi magnam alias fugiat expedita?</p>
             <ul class="social-icon">
                 <li><a href="https://example.com/facebook"><i class="fa-brands fa-facebook-f" aria-hidden="true"></i></a></li>
                 <li><a href="https://example.com/twitter"><i class="fa-brands fa-twitter"></i></a></li>
                 <li><a href="https://example.com/instagram"><i class="fa-brands fa-instagram"></i></a></li>
                 <li><a href="https://example.com/youtube"><i class="fa-brands fa-youtube"></i></a></li>
             </ul>
            </div>
            <div class="links">
                <h2><?= _LINKS ?></h2>
                <ul>
                 <li><a href="#"><?= _HOME?></a></li>
                 <li><a href="#"><?= _ABOUT_US_TITLE?></a></li>
                 <li><a href="#">Thông Tin Liên Lạc</a></li>
                 <li><a href="#">Dịch Vụ</a></li>
                 <li><a href="#">Điều Kiện Chính Sách</a></li>
             </ul>
            </div>
            <div class="contact">
                <h2><?= _CONTACT ?></h2>            
             <ul class="info">
                 <li>
                     <span><i class="fa fa-map-marker"></i></span>
                     <span><?=_ADDRESS?></span>
                 </li>
                 <li>
                     <span><i class="fa fa-phone"></i></span>
                     <a href="#">+84 123 456 789</a>
                 </li>
            </div>
        </div>
        <div class="lang_form" style="width: max-content;float: right;margin-bottom: 0px;">
            <form method="get" action="" id="form_lang" style="width: max-content;">
            <i class="fas fa-globe" aria-hidden="true"></i>
            <?=_SELECT_LANGUAGE?>: <select name='lang' onchange='changeLang();' >
            <option value='en' <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'en'){ echo "selected"; } ?> >English</option>
            <option value='vi' <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'vi'){ echo "selected"; } ?> >Vietnamese</option>
  </select>
            </form>
        </div>

            <p class="copyright"style="text-align: center"><?=_COPYRIGHT?></p>            
    </footer>

</body>
</html>