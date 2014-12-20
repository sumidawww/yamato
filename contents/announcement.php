<?php
$str=<<<EOD
<div class="margin-left-20 font-30-bold list-line-heght-200">
  <ul style="list-style-type:none;">
    <li>
      <div class="left-border border-color-passionpink ">
       秋の教会バザー
      </div>
      <div style="line-height:25px;font-size:21px">
          秋の一日をご家族皆さまでお楽しみください。<br>
          2014年11月3日(月・祝)<br>
          午前10時～午後1時<br>
          <div style="text-indent:2em">
            <a href="./img/poster/bazaa2014.pdf">
              <img src="./img/poster/bazaa2014.png">
            </a>
          </div>
     </div>
    </li>
  </ul>
</div>

<div style="margin-top:150px;"> </div>
EOD;

//echo str_replace(array("\r\n","\r","\n"), "<br>\n", $str);
echo $str;
?>
