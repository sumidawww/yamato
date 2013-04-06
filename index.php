
<!DOCTYPE html>
<html lang="ja">
  <?php include("./require/head.php");?>
  <body onload="initialize()">
  <?php $active_list['home']='active'; ?>
  <?php include("./require/navbar.php");?>
    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">
        <div class="item active">
          <img src="./img/church1.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1></h1>
              <p class="lead" style="text-shadow: 1px 1px 3px #000;">すべて重荷を負うて苦労している者は、<br>
                わたしのもとにきなさい。<br>
                あなたがたを休ませてあげよう。</p>
              <p style='text-align:right;text-shadow: 1px 1px 3px #000'>マタイによる福音書 11：28</p>

            </div>
          </div>
        </div>
        <div class="item">
          <img src="./img/church2.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>招きのことば</h1>
              <p class="lead" style="font-size:20px;text-shadow: 1px 1px 3px #000;">
あなたは知らないのか、聞いたことはないのか。<br>
主は、とこしえにいます神<br>
地の果てに及ぶ　全てのものの造り主。<br>
倦むことなく、疲れることなく　その英知は究めがたい。<br>
疲れた者に　力を与え<br>
勢いを失っている者に大きな力を与える。</p>
<p style='text-align:right;text-shadow: 1px 1px 3px #000'>イザヤ書 第４０章２８～２９節</p>

            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div><!-- /.carousel -->


    <div class="container marketing">
      <div class="featurette_no_margin_top">        
        <h2 class="featurette-heading">大和キリスト教会の所在地</h2>
        <p class="lead">
〒631-0016 奈良市学園朝日町5番15号（駐車場あり）<br>
TEL:0742-45-0523<br>
FAX:0742-44-3828</p>
        <div style="padding:10px;border: 1px solid #E8E8E8;text-align:center;">
          <div id="map_canvas" style=" height: 297px;"></div> 
        </div>  
      </div>
                  
    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->


      <!-- START THE FEATURETTES -->


      <hr class="featurette-divider">

      <div class="featurette_no_margin_top">
        <img class="featurette-image pull-right" src="http://homepage3.nifty.com/yamato_cc/phot/sanctuary/pic00020.jpg">
        <h2 class="featurette-heading">主日礼拝<br> <span class="muted">Lord's Day worship</span></h2>
        <p class="lead">
毎週日曜日 午前１０時２５分～１２時<br>
<br>
聖　 書：<br>
新共同訳聖書（旧約・新約）を用います。<br>
<br>
讃美歌：<br>
教団発行「第二編付讃美歌」を用います。<br>
<br>
説　 教：<br>
市川忠彦 主任牧師、市川和恵 牧師<br>
上山耕平 伝道師<br>
<br>
聖餐式：<br>
毎月第一主日の礼拝の中で行います。<br>
（他にイースター、ペンテコステ、クリスマスの各主日にも行います）<br>
<br>
【夕礼拝のご案内】<br>
毎主日の午後７時～約１時間　（於 小礼拝堂）<br>
礼拝の内容と聖餐式は朝の主日礼拝に準じます。</p>
      </div>

      <!-- /END THE FEATURETTES -->


      <?php include("./require/footer.php");?>
    </div><!-- /.container -->
    <?php include("./require/footer_js.php");?>
  </body>
</html>