<!DOCTYPE html>
<html lang="zh">

<head>
    <!--content="width=device-width, initial-scale=1.0"自動調整設備尺寸-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drink.Tea</title>
    <meta name="description" content="">
    <meta name="keywords" content=""><!--header的CSS-->
    <link href="/commons/header/fonts/FontAwesome/font-awesome.css" rel="stylesheet">
    <link href="/commons/header/css/bootstrap.min.css" rel="stylesheet">
    <link href="/commons/header/css/animate.css" rel="stylesheet">
    <link href="/commons/header/css/bootsnav.css" rel="stylesheet">
    <link href="/commons/header/css/overwrite.css" rel="stylesheet">
    <link href="/commons/header/css/style.css" rel="stylesheet">
    <link href="/commons/header/skins/color.css" rel="stylesheet">
    <style type="text/css">
        @import url(http://fonts.googleapis.com/earlyaccess/cwtexhei.css);
    </style>

    <link rel="stylesheet" type="text/css" href="/commons/gototop/css/style.css"><!--footer的CSS-->
    <link rel="stylesheet" type="text/css" href="/commons/footer/css/footer.css">
    <!-- 每頁title的CSS-->
    <link rel="stylesheet" type="text/css" href="/commons/else/css/title.css">
    <!-- Tab的CSS-->
    @if (Request::is("news/*", "news"))
    <link href="/css/news/tab.css" rel="stylesheet">
    <!-- News內頁的CSS-->
    <link href="/css/news/news_detail.css" rel="stylesheet"><!--ScrollWatch滾動淡入-->
    @endif
    <style>
        .fade_in {
            opacity: 0;
            transition: opacity 2s;
        }

        .fade_in.scroll-watch-in-view {
            opacity: 1;
        }
    </style>
</head>

<body>
    <!-- Start Navigation-->
    <nav class="navbar navbar-default bootsnav">
        <!-- Start Top Search-->
        <div class="top-search">
            <div class="container">
                <div class="input-group"><span class="input-group-addon"><i class="fa fa-search"></i></span>
                    <input type="text" placeholder="Search Products" class="form-control"><span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                </div>
            </div>
        </div>
        <!-- End Top Search-->
        <div class="container">
            <!-- Start Atribute Navigation-->
            <div class="attr-nav lang_bar">
                <ul>
                    <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                </ul>
            </div>
            <div class="navbar-header">
                <button type="button" data-toggle="collapse" data-target="#navbar-menu" class="navbar-toggle"><i class="fa fa-bars"></i></button>
                <a href="/" class="navbar-brand">
                    <img src="/commons/header/img/brand/logo.svg" alt="" class="logo">
                </a>
            </div>
            
            <div id="navbar-menu" class="collapse navbar-collapse">
                <ul data-in="fadeInDown" data-out="fadeOutUp" class="nav navbar-nav navbar-right">
                    <li><a href="/about">
                            <span class="nav_img">
                                <img src="/commons/header/img/i-con/icon_about.svg" alt="">
                            </span>
                            <p class="nav_p">關於</p>
                        </a></li>
                    <li><a href="/news">
                            <span class="nav_img">
                                <img src="/commons/header/img/i-con/news_icon.svg" alt="">
                            </span>
                            <p class="nav_p">最新消息</p>
                        </a></li>
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                            <span class="nav_img">
                                <img src="/commons/header/img/i-con/icon_product.svg" alt="">
                            </span>
                            <p class="nav_p">好茶</p>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="productlist_1.html">四角茶包</a></li>
                            <li><a href="productlist_2.html">原葉茶包</a></li>
                            <li><a href="productlist_3.html">嚴選茶葉</a></li>
                        </ul>
                    </li>
                    <li><a href="/knowl">
                            <span class="nav_img">
                                <img src="/commons/header/img/i-con/icon_knowl.svg" alt="">
                            </span>
                            <p class="nav_p">品茶知識</p>
                        </a></li>
                    <li><a href="/contact">
                            <span class="nav_img">
                                <img src="/commons/header/img/i-con/icon_contact.svg" alt="">
                            </span>
                            <p class="nav_p">聯絡我們</p>
                        </a></li>
                </ul>
                <ul class="lang_bar">
                    <li class="lang"><a href="#">中文/</a></li>
                    <li class="lang"><a href="#">En/</a></li>
                    <li class="lang"><a href="#">日本語</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse-->
        </div>
    </nav>
    <!-- End Navigation-->
    @yield("content")

    <div class="footer">
        <div class="icon">
            <ul>
                <li><a href="#"><img src="/commons/footer/img/icon_fb.svg"></a></li>
                <li><a href="#"><img src="/commons/footer/img/icon_line.svg"></a></li>
                <li><a href="#"><img src="/commons/footer/img/icon_ig.svg"></a></li>
                <li><a href="#"><img src="/commons/footer/img/icon_twitter.svg"></a></li>
            </ul>
        </div>
        <div class="nav">
            <ul>
                <li><a href="/about">關於</a></li>
                <li><a href="/news">最新消息</a></li>
                <li><a href="/product">好茶</a></li>
                <li><a href="/knowl">品茶知識</a></li>
                <li><a href="/contact">聯絡我們</a></li>
            </ul>
        </div>
        <div class="logo"><a href="/"><img src="/commons/footer/img/logo.svg" alt=""></a></div>
        <div class="info">
            <div class="line"><a href="" target="_blank">A . </a><br> <a href="tel:+">T . +</a><br> F . +<br></div>
        </div>
        <div class="copyright"><a href="/copyright">智慧財產權聲明</a> © 2024 . All Rights Reserved</div>
    </div>
    <!-- Scroll to Top button selector-->
    <div><a class="to-top"><img src="/commons/gototop/img/gototop.svg" alt=""></a></div>
    <!--header的JS-->
    <script>
        window.jQuery || document.write('<script src="/commons/header/js/jquery-1.11.0.min.js "><\/script>')
    </script>
    <script src="/commons/header/js/bootstrap.min.js "></script>
    <script src="/commons/header/js/bootsnav_2.js "></script>
    <!--GotoTop的JS-->
    <script src="/commons/gototop/js/jquery.toTop.min.js"></script>
    <script>
        jQuery(function($) {
            // Plugin activation (basic)
            // $('.to-top').toTop();
            // Plugin activation with options
            $('.to-top').toTop({
                //options with default values
                autohide: true, //boolean 'true' or 'false'
                offset: 250, //numeric value (as pixels) for scrolling length from top to hide automatically
                speed: 650, //numeric value (as mili-seconds) for duration
                right: 20, //numeric value (as pixels) for position from right
                bottom: 60 //numeric value (as pixels) for position from bottom
            });
        });
    </script>
  
    <!-- ScrollWatch滾動淡入-->
    <script src="/js/about/ScrollWatch-1.2.0.js"></script>
    <script>
        (function() {
            var swInstance = new ScrollWatch({});
        })();
    </script>
    <!-- Tab的JS-->
    @if (Request::is("news/*", "news"))
    <script type="text/javascript">
        $(function() {
            var _showTab = 1;
            var $defaultLi = $('ul.tabs li').eq(_showTab).addClass('active');
            $($defaultLi.find('a').attr('href')).siblings().hide();
            $('ul.tabs li').click(function() {
                var $this = $(this),
                    _clickTab = $this.find('a').attr('href');
                $this.addClass('active').siblings('.active').removeClass('active');
                $(_clickTab).stop(false, true).fadeIn().siblings().hide();
                return false;
            }).find('a').focus(function() {
                this.blur();
            });
        });
    </script>
    @endif
</body>

</html>