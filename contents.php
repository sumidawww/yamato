<?php $part = $_REQUEST['part'];?>
<?php
if(is_null($part)){
  $part='construction';
}
//$part_list=array(
//    'home',
//    'church', 'church_history', 
//    'teacher',
//    'worship',
//    'school',
//    'kobato',
//    'meeting',
//    'schedule',
//    'qanda',
//    'construction'
//    );
$part_titles=array(
    'home'=>"ホーム",
    'church'=>"私たちの教会", 'church_history' => 'わたしたちの歩み', 
    'teacher'=>"教師のご案内",
    'worship'=>"礼拝のご案内",
    'school'=>"教会学校へのご案内",
    'kobato'=>"こばと",
    'meeting'=>"集会のご案内",
    'schedule'=>"年間行事予定",
    'qanda'=>"Q&A",
    'announcement'=>"予告",
    'achievement'=>"記録",
    'construction'=>'工事中'
    );
$rand=sprintf("%04d",rand()%126);
$part_imgs=array(
    'home'=>"ホーム",
//    'church'=>"./img/selected/selected13.jpg", 'church_history' => "./img/church/img0031.jpg",
//    'teacher'=>"./img/church/img0012.jpg",
    'worship'=>"./img/church/img0028.jpg",
//    'school'=>"./img/selected/selected23.jpg",
//    'meeting'=>"./img/church/img0005.jpg",
//    'schedule'=>"./img/church/img0026.jpg",
//    'qanda'=>"./img/church/img0007.jpg",
    'construction'=>"./img/church/img{$rand}.jpg",
    'kobato' => './img/selected/kobato01.jpg'
    );
$img_path=$part_imgs[$part];
$title_str=$part_titles[$part];
?>
<!DOCTYPE html>
<html lang="ja">
  <?php include("./require/head.php");?>
  <body>
    <?php 
    if($part=='church_history'){
        $active_part='church';
    }else{
      $active_part=$part;
    }
    ?>
  <?php $active_list[$active_part] = 'active'; ?>
  <?php include("./require/navbar.php");?>

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing radius" style="margin-top: 130px;line-height:35px;">
      <!-- START THE FEATURETTES -->
          <div class="featurette_no_margin_top">
            <h2 class="featurette-heading left-border" style=" margin-bottom:30px;"><?php  echo $part_titles[$part] ?></h2>
            <?php if($img_path){?>
            <div style="text-align:center;margin:0 auto;width:100%;">
              <img style="margin-left:40px;" class="width450 pull-right" src="<?php echo $img_path ?>">
            </div>
            <?php } ?>
          <p>
            <?php include("./contents/{$part}.php");?>
          </p>
          </div>
    </div><!-- /.container -->
    <?php include("./require/footer.php");?>
    <?php include("./require/footer_js.php");?>
  </body>
</html>