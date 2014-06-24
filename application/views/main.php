<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>IT-SOCCER</title>

    <!--meta options-->
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, maximum-scale=1" />

    <!--script-->
    <script src="http://code.jquery.com/jquery-2.0.3.js" type="text/javascript"></script>
    <script src="js/basic.js"></script>

    <!--style-->
    <link href="css/basic.css" rel="stylesheet" />
    <link href="css/detail.css" rel="stylesheet" />
    <link href="css/mobile.css" rel="stylesheet" />
    <link href="css/respective.css" rel="stylesheet" />
</head>
<body>
    <div id="wrap" class="container">
        <div id="mobile_nav"></div>
        <header>
            <a id="logo" href="main.html">
            </a>
            <div id="login">
                <ul id="login_list">
                    <li><span>ID</span><input /></li>
                    <li><span>PW</span><input type="password"/></li>
                    <li><button id="login_button">LOGIN</button></li>
                </ul>
            </div>
        </header>

        <div id="body">
            <nav id="navigation" class="span_2">
                <ul id="gnb">
                    <li><a href="main.html">HOME</a></li>
                    <li><a href="#">NOTICE</a></li>
                    <li><a href="#">SCHEDULE</a></li>
                    <li><a href="#">ALBUM</a></li>
                    <li><a href="#">POST</a></li>
                    <li><a href="#">MEMBER</a></li>
                    <li><a href="https://www.facebook.com/groups/281305711918025/">FACEBOOK</a></li>
                </ul>
            </nav>
            <div id="container" class="span_10">
                <ul id="first_c">
                    <li class="back"><section id="notice" class="span_7"><button class="icon_more"></button></section></li>
                    <li><section id="emblem"> <!--class="span_2"--></section></li>
                </ul>

                <ul id="second_c">
                    <li class="back"><section id="schedule" class="span_2"><div class="test"></div><button class="icon_more"></button></section></li>
                    <li class="back"><section id="board" class="span_2"><div class="test"></div><button class="icon_more"></button></section></li>
                    <li class="back"><section id="photo" class="span_2"><div class="test"><h2>PHOTO ZONE</h2></div><button class="icon_more"></button></section></li>
                    <li class="back"><section id="etc" class="span_2"><div class="test"><h2>PHOTO ZONE</h2></div><button class="icon_more"></button></section></li>
                </ul>
            </div>
        </div>
        <footer class="span_10"><h1>FOOTER</h1></footer>
    </div>
</body>
</html>
