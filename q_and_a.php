
<!DOCTYPE html>
<html lang="ja">
  <?php include("./require/head.php");?>
  <body onload="initialize()">
    <?php $active_list['qanda'] = 'active'; ?>
  <?php include("./require/navbar.php");?>

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing" style="margin-top: 100px;">
      <!-- START THE FEATURETTES -->
          <div class="featurette_no_margin_top">        
              <img class="featurette-image pull-left" src="http://homepage3.nifty.com/yamato_cc/phot/sanctuary/pic00020.jpg">
              <h2 class="featurette-heading">Q&A</h2>
　　　       <p class="lead">
          <p>
            <?php include("./contents/q_and_a_txt.php");?>
          </p>
          </div>
      <?php include("./require/footer.php");?>
    </div><!-- /.container -->

    <?php include("./require/footer_js.php");?>
  </body>
</html>