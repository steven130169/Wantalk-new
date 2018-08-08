<?php defined( '_JEXEC' ) or die( 'Restricted access' );?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" 
   xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
<meta charset="utf-8">
<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- wantalk joomla 的css 與 js-->
<jdoc:include type="head" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/template.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/animation.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/javascript.js" type="text/javascript" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/common.js" type="text/javascript" />

<link rel="shortcut icon" href="con.ico" />
<!-- Bootstrap -->
<!-- 最新編譯和最佳化的 CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<!-- 選擇性佈景主題 -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="slick-1.6.0/slick/slick.css" />

<!-- jQuery (Bootstrap 所有外掛均需要使用) -->
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="slick-1.6.0/slick/slick.js"></script>
<!-- 最新編譯和最佳化的 JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="javascript.js"></script>
<script type="text/javascript" src="common.js"></script>
<meta name="google-site-verification" content="jQVNX0gqxinbte-zoZLK3NidVY4VG_KKXhBMQMYNGnA" />

<title>
    灣Talk｜Let's Take A Walk In Taiwan!
</title>
</head>

<body>
  <!--wantalk joomla modules-->
  <jdoc:include type="modules" name="menu" style="none" />
  <jdoc:include type="modules" name="navbar" />
  <jdoc:include type="modules" name="video" /> 
  <jdoc:include type="modules" name="mobilequote" /> 
  <jdoc:include type="modules" name="newarticle" /> 
  <jdoc:include type="modules" name="hotarticle" /> 
  <jdoc:include type="component" />
  <jdoc:include type="modules" name="footer" />
  
<!--     <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">
                    <img id="logo" src="images/logo.png" alt="Brand">
                </a>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <img src="images/list.png" id="list">
                </button>

              <div class="mobileSocial">
                    <a href="https://www.facebook.com/wantalk.tw/">
                        <i class="fa fa-facebook-official" aria-hidden="true"></i>
                    </a>
                    <a href="https://www.instagram.com/wantalk.com.tw/">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
            <div id="navbar" class="navbar-collapse collapse" aria-expanded="false" style="height: 1px;">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="togo.php">灣說好文</a>
                    </li>
                    <li>
                        <a href="personnews.php">品味在地</a>
                    </li>
                    <li>
                        <a href="experience.php">風格體驗</a>
                    </li>
                    <li>
                        <a href="aboutus.php">關於我們</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
 -->
  

    <!--首頁影片-->
  <div id="video">
      <video id="homevideo" autoplay="autoplay" loop="loop">
        <source src="index-video.mp4" type="video/mp4">
      </video>
      <div id="videoimg">
      <i class="fa fa-chevron-circle-down" aria-hidden="true"></i>
      </div>
 </div>


<!--手機quote-->
<div id="mobilequote">
  <div class="container">
    <header class="textcolor">
    <h1>Let's Take A Walk！</h1>
  </header>
      <div class="editor-block">
        <section class="cd-intro">
      <h1 class="cd-headline slide">
       <span>我們</span>
      <span class="cd-words-wrapper">
      <b class="is-visible">熱血瘋狂</b>
      <b>追隨初心</b>
      <b>不怕迷路</b>
      <b>勇往直前</b>
      <b>真誠展現</b>
      <b>勇敢探險</b>
      <b>尋找夢想</b>
      <b>擁抱台灣</b>
      <b>走出自己的路！</b>
    </span>
  </h1>
  </section>

    </div>
 </div>
</div>
<!--程式語言區塊-->
<script>
$(function(){
  var animationDelay = 2000;

  function hideWord($oldWord) {
    var $nextWord = $oldWord.next();
    if (!$nextWord.length) $nextWord = $oldWord.siblings().eq(0);

  	$oldWord.removeClass('is-visible').addClass('is-hidden');
  	$nextWord.removeClass('is-hidden').addClass('is-visible');

  	setTimeout(function(){ hideWord($nextWord) }, animationDelay);
  };

  $('.cd-headline').each(function(){
    var $headline = $(this).find('.is-visible');
    setTimeout(function(){
      hideWord($headline)
    }, animationDelay);
  });
});
</script>

<!--最新文章-->

<div class="topbg-bottom">
<div class="mainContain">
  <p class="h">
      最新文章
    </p>
  <div>
    <div class="newarticle row">
        <div class="p col-sm-4">
            <a href="../togo/localyilan.php">
             <img src="../images/in-yilan.jpg">
                    <div class="tc">
                      <div>
                        <p class="date">
                            2016/12/15
                        </p>
                        <p class="title">
                        灣Talk筆記：如果來不及體驗都市<br>錯綜，試著讓旅行變得簡單..
                        </p>
                        <p class="written">
                            Written by 張廷聿
                        </p>
                    </div>
                  </div>
                </a>
            </div>

            <div class="p2">&nbsp;</div>
            <div class="p col-sm-4">
              <a href="../theme/localmsmoutain.php">
                    <img src="images/in-agenla.jpg">
                    <div class="tc">
                    <div>
                        <p class="date">
                            2016/12/08
                        </p>
                        <p class="title">
                        灣人物：用雙腳見證台灣的美<br> - 李家誼
                        </p>
                        <p class="written">
                            Written by 李芮瑩
                        </p>
                    </div>
                    </div>
                </a>
            </div>
             <div class="p2">&nbsp;</div>
            <div class="p col-sm-4">
                <a href="/togo/localHellValley.php">
                    <img src="images/in-HellValley.jpg">
                    <div class="tc">
                    <div>
                        <p class="date">
                            2016/12/01
                        </p>
                        <p class="title">
                          女巫煮滾地獄的青水：<br>北投地熱谷
                        </p>
                        <p class="written">
                            Written by Yihong
                        </p>
                    </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <hr/>

    <div class="hotArticle">
    <p class="h">
            精選熱門文章
        </p>
        <div class="mainpic">
          <img src="images/hot-article.jpg" />
        <div class="content">
            <div class="title">
            灣Talk筆記：在銀河洞裡，有我們沒看過的銀河。
            </div>
            <div class="btn"><a href="../togo/localyinhedong.php">立刻觀看</a></div>
        </div>
        </div>


         <div class="newarticle row">
            <div class="p col-sm-4">
              <a href="/togo/localw2.php">
                    <img src="images/w2.jpg">
                    <div class="tc">
                    <div>
                        <p class="date">
                            2016/10/17
                        </p>
                        <p class="title">
                        灣Talk筆記：徜徉在瀑布下，<br>出發了就會很不一樣-雲森瀑布
                        </p>
                        <p class="written">
                            Written by wantalk
                        </p>
                    </div>
                    </div>
                </a>
            </div>
            <div class="p2">&nbsp;</div>
            <div class="p col-sm-4">
                <a href="/togo/localw1.php">
                    <img src="images/lakeimg.jpg">
                    <div class="tc">
                    <div>
                        <p class="date">
                            2016/10/02
                        </p>
                        <p class="title">
                        灣Talk筆記：用青色圍巾，<br>繞成你心裡的模樣。－千島湖
                        </p>
                        <p class="written">
                            Written by wantalk
                        </p>
                    </div>
                    </div>
                </a>
            </div>
             <div class="p2">&nbsp;</div>
            <div class="p col-sm-4">
                <a href="/theme/localtwentyfuture.php">
                    <img src="images/20.jpg">
                    <div class="tc">
                    <div>
                        <p class="date">
                          2016/11/11
                        </p>
                        <p class="title">
                          寫給20幾歲迷惘的你：<br>別急！放慢腳步給自己一個逗點假
                        </p>
                        <p class="written">
                            Written by Eunice
                        </p>
                    </div>
                    </div>
                </a>
            </div>
        </div>
    </div>



    </div>
    <div class="subtitle mobileslidetext"><h3>關於秘境，我們這樣說</h3></div>
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">


        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
        <div class="carousel-caption">
        <h3>關於秘境，我們這樣說</h3>
        <p>秘境不一定要是鮮為人知的景點，秘境 的定義不該是一把尺，只要我們能從過程中發現特別的欣賞角度，背上背包！ 帶上一顆熱血的心，踏上旅行的腳步吧。
        </p>

         </div>
            <div class="item active">
                <div>
                    <img src="images/aaa.jpg" alt="...">

                </div>
            </div>
            <div class="item">
                <div>
                    <img src="images/pppp.jpg" alt="...">

                </div>
            </div>
            <div class="item">
                <div>
                    <img src="images/rrr.jpg" alt="...">

                </div>
            </div>
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

    </div>
    <div class="subtitle mobileslidetext">
            <p>
            秘境不一定要是鮮為人知的景點，秘境 的定義不該是一把尺，只要我們能從過 程中發現特別的欣賞角度，背上背包！ 帶上一顆熱血的心，踏上旅行的腳步吧。
            </p>
    </div>
    <div id="partner">
        <p class="h">
          合作好朋友
        </p>

    </div>
    <div class="partnerArea">
        <img src="images/brand/logo.png">
    </div>
   <div class="mobileFooter">
   <div class="contain">
       <div style="position: absolute;width: 80%;">
          <a href="experience.php"> <div class="inline-block">&nbsp;</div></a>
            <a href="personnews.php"> <div class="inline-block">&nbsp;</div></a>
              <a href="togo.php"> <div class="inline-block">&nbsp;</div></a>
            <a href="aboutus.php"> <div class="inline-block">&nbsp;</div></a>
    </div>
       <img src="images/menuFooter/mobile-nav-.png">
   </div>
  </div>

  <footer class="footer">
        <div class="container">
        <div class="inline">
        <p>
          聯絡我們
            <a href="mailto:wantalk.tw@gmail.com">
              wantalk.tw@gmail.com
            </a>
                社群連結
            <a href="https://www.facebook.com/wantalk.tw/">
                 <i class="fa fa-facebook-official" aria-hidden="true"></i>
              </a>
              <a href="https://www.instagram.com/wantalk.com.tw/">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
                </p>
                <hr>
                <p class="findyou">
                  <a href="http://wantalk.com.tw/solicitarticle.php">
                    <i class="fa fa-paper-plane" aria-hidden="true"></i>投稿專區：給想成為灣說好文的你</a>
                </p>
           </div>
        </div>
        <div class="logo">
            <img src="images/footer.logo.png">
        </div>
    </footer>
    </div>
</body>

</html>
