<?php
$padding='vertical-align:middle;font-size:20px;line-height:35px;padding-left:30px;';
$style="style=\"$padding\"";
$str=<<<EOD
<table class="table radius table-borderless">
  <tr class="border-top-dashed left-border border-color-flat-lightblue">
    <td colspan=2 style="font-size:25px;$padding">牧　師　　市川　忠彦　（いちかわ　ただひこ）</td>
  </tr>
  <tr class=" border-top-dashed border-color-flat-lightblue">
    <td align="center" width="100px" $style>
      <img src="./img/Tadahiko.jpg">
    </td>
    <td $style>
1942年9月26日生<br>
東京神学大学大学院神学研究科　博士前期課程修了<br>
大和キリスト教会牧師　（主任担任教師）<br>
歴任教会：遠州教会、掛川教会、袋井教会、大阪教会、長居教会<br>
    </td>
  </tr>
 
  <tr class="border-top-dashed left-border border-color-flat-lightblue">
    <td colspan=2 style="font-size:25px;$padding">牧　師　　市川　和恵　（いちかわ　かずえ）</td>
  </tr>
  <tr class="border-top-dashed border-color-flat-lightblue">
    <td $style>
      <img src="./img/Kazue.jpg">
    </td>
    <td $style>
1947年7月17日生<br>
東京神学大学卒業<br>
大和キリスト教会牧師　（担任教師）<br>
歴任教会：遠州教会、掛川教会、袋井教会、大阪教会、長居教会<br>
    </td>
  </tr>
 
  <tr class="border-top-dashed border-color-flat-lightblue left-border">
    <td colspan=2 style="font-size:25px;$padding">伝道師　　上山　耕平　（うえやま　こうへい）</td>
  </tr>
  <tr class="border-top-dashed border-color-flat-lightblue">
    <td $style>
      <img src="./img/ueyama.jpg">
    </td>
    <td $style>
1984年12月10日生<br>
東京神学大学大学院神学研究科　博士前期課程修了<br>
2012年4月　大和キリスト教会着任<br>
  </td>
  </tr>
</table>
EOD;

//echo str_replace(array("\r\n","\r","\n"), "<br>\n", $str);
echo $str;
?>
