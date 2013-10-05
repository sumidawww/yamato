<?php
if( $title_str!=""){
  $title_str.=" ";
}
echo<<<EOD
  <head>
    <meta charset="utf-8">
    <title>{$title_str}大和キリスト教会 (正しい聖餐・礼拝・伝道を重んじる教団の教会です。)日本基督教団</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico" type="image/x-icon" />  
    <link rel="shortcut icon" href="favicon.ico" >
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js" type="text/javascript"></script>
<script src="./js/scroll.js" type="text/javascript"></script>

<!--[if lte IE 8]>
    <script type="text/javascript" src="jquery.backgroundSize.js"></script>
    <script>
    jQuery(document).ready(function() {
        jQuery('div.test').css({backgroundSize: "cover"});
    });
    </script>
<![endif]-->
<!--[if lt IE 9]>
<script type="text/javascript" src="css3shadow.htc"></script>
<![endif]-->
    <!-- Le styles -->
    <link href="./css/yamato_bootstrap.css" rel="stylesheet">
    <link href="./css/bootstrap-responsive.css" rel="stylesheet">
    
    
    <link href="./css/yamato_bootstrap_original.css" rel="stylesheet" type="text/css" /> 
    <link href="./css/yamato.css" rel="stylesheet" type="text/css" />   
    <link rel="stylesheet" href="./css/font-awesome.min.css">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="./js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="../assets/ico/favicon.png">
  </head>
EOD;
?>
