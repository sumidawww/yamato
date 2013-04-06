<?php
$padding='padding:18px;font-size:20px;line-height:35px;';
$style="style=\"$padding\"";
$str=<<<EOD
<table class="table">
  <tr>
    <td colspan=2 style="font-size:25px;$padding">牧　師　　市川　忠彦　（いちかわ　ただひこ）</td>
  </tr>
  <tr>
    <td align="center" width="100px" $style><img src="./img/Tadahiko.jpg"></td><td $style>・1942年9月26日生<br>
・東京神学大学大学院神学研究科<br>
　博士前期課程修了<br>
・大和キリスト教会牧師　（主任担任教師）<br>
・歴任教会：遠州教会、掛川教会、袋井教会、大阪教会、長居教会</td>
  </tr>
 
  <tr>
    <td colspan=2 style="font-size:25px;$padding">牧　師　　市川　和恵　（いちかわ　かずえ）</td>
  </tr>
  <tr>
    <td $style><img src="./img/Kazue.jpg"></td>
    <td $style>
・1947年7月17日生<br>
・東京神学大学大学卒業<br>
・大和キリスト教会牧師　（担任教師）<br>
　（主務教会：教団・長居教会と兼務）<br>
・歴任教会：遠州教会、掛川教会、袋井教会、大阪教会、長居教会
  </td>
  </tr>
 
  <tr>
    <td colspan=2 style="font-size:25px;$padding">伝道師　　上山　耕平　（うえやま　こうへい）</td>
  </tr>
  <tr>
    <td $style><img src="./img/ueyama.jpg"></td>
    <td $style>
・1984年12月10日生<br>
・東京神学大学大学院神学研究科<br>
　博士前期課程修了<br>
・2012年4月　大和キリスト教会着任
  </td>
  </tr>
</table>
EOD;

//echo str_replace(array("\r\n","\r","\n"), "<br>\n", $str);
echo $str;
?>
