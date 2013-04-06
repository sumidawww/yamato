<?php $part = $_REQUEST['part'];?>
<?php
$part_list=array(
    'home',
    'church',
    'teacher',
    'worship',
    'school',
    'meeting',
    'schedule',
    'qanda',
    );
$part_titles=array(
    'home'=>"Q&A",
    'church'=>"Q&A",
    'teacher'=>"Q&A",
    'worship'=>"Q&A",
    'school'=>"大和キリスト教会教会学校へのおさそい",
    'meeting'=>"Q&A",
    'schedule'=>"Q&A",
    'qanda'=>"Q&A",
    );
?>
<!DOCTYPE html>
<html lang="ja">
  <?php include("./require/head.php");?>
  <body onload="initialize()">
    <?php $active_list[$part] = 'active'; ?>
  <?php include("./require/navbar.php");?>

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing" style="margin-top: 100px;">
      <!-- START THE FEATURETTES -->
          <div class="featurette_no_margin_top">
            <div style="text-align:center;margin:0 auto;width:100%;">
              <img class="featurette-image" src="http://homepage3.nifty.com/yamato_cc/phot/sanctuary/pic00020.jpg">
            </div>
              <h2 class="featurette-heading"><?php  echo $part_titles[$part] ?></h2>
　　　       <p class="lead">
          <p>
            <?php include("./contents/{$part}.php");?>
          </p>
          </div>
      <?php include("./require/footer.php");?>
    </div><!-- /.container -->

    <?php include("./require/footer_js.php");?>
  </body>
</html>