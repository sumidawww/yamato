<?php $part = $_REQUEST['part'];?>
<?php
if(is_null($part)){
  $part='construction';
}
$part_list=array(
    'home',
    'church',
    'teacher',
    'worship',
    'school',
    'meeting',
    'schedule',
    'qanda',
    'construction'
    );
$part_titles=array(
    'home'=>"ホーム",
    'church'=>"私たちの教会",
    'teacher'=>"教師のご案内",
    'worship'=>"礼拝のご案内",
    'school'=>"教会学校へのご案内",
    'meeting'=>"集会へのご案内",
    'schedule'=>"年間行事予定",
    'qanda'=>"Q&A",
    'construction'=>'工事中'
    );
$rand=sprintf("%04d",rand()%126);
$part_imgs=array(
    'home'=>"ホーム",
    'church'=>"./img/church/img0011.jpg",
    'teacher'=>"./img/church/img0012.jpg",
    'worship'=>"./img/church/img0003.jpg",
    'school'=>"./img/church/img0004.jpg",
    'meeting'=>"./img/church/img0005.jpg",
    'schedule'=>"./img/church/img0026.jpg",
    'qanda'=>"./img/church/img0007.jpg",
    'construction'=>"./img/church/img{$rand}.jpg"
    );
$img_path=$part_imgs[$part];
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
              <img class="featurette-image" src="<?php echo $img_path ?>">
            </div>
              <h2 class="featurette-heading" style="margin-top:30px;"><?php  echo $part_titles[$part] ?></h2>
　　　       <p class="lead">
          <p>
            <?php include("./contents/{$part}.php");?>
          </p>
          </div>

    </div><!-- /.container -->
    <?php include("./require/footer.php");?>
    <?php include("./require/footer_js.php");?>
  </body>
</html>