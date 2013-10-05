<?php

echo<<<EOD
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="./js/transition.js"></script>
    <script src="./js/alert.js"></script>
    <script src="./js/modal.js"></script>
    <script src="./js/dropdown.js"></script>
    <script src="./js/scrollspy.js"></script>
    <script src="./js/tab.js"></script>
    <script src="./js/tooltip.js"></script>
    <script src="./js/popover.js"></script>
    <script src="./js/button.js"></script>
    <script src="./js/collapse.js"></script>
    <script src="./js/carousel.js"></script>
    <!--<script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-typeahead.js"></script>-->

    <script>
      !function ($) {
        $(function(){
          // carousel demo
          $('#myCarousel').carousel()
        })
      }(window.jQuery)
    </script>
    <script src="./js/holder.js"></script>
EOD;
?>
