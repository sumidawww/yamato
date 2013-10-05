<?php

function getQAColumnImageRight($str,$img_path)
{
  $column=<<<EOD
  <tr>
    <td>
    <div class="qanda lead">
      <ul>
      $str
       </ul>
       </div>
    </td>
    <td style="text-align:center;">
    <div class="radius">
      <img src="$img_path" style="width:320px">
        </div>
    </td>
  </tr>
EOD;
  return $column;
}

function getQAColumnImageLeft($str,$img_path)
{
  $column=<<<EOD
  <tr>
    <td style="text-align:center;">
    <div class="radius">
      <img src="$img_path" style="width:320px">
        </div>
    </td>
    <td>
    <div class="qanda lead">
      <ul>
      $str
       </ul>
       </div>
    </td>
       </div>
  </tr>
EOD;
  return $column;
}

$_q="<span class='left-border border-color-yellow color-yellow' style='font-weight:bold'>Q</span><br>";
$_a="<span class='left-border border-color-red color-red' style='font-weight:bold'>A</span><br>";
$str=<<<EOD
<table class="table table-borderless middle">
EOD;
$qa=" 
        <li>{$_q}キリスト教は何を信じているのですか？</li>
        <li>{$_a}神が私達を愛し、そのひとり子キリスト(救い主)を私達の救いのために世に遣わして下さったことです。そして、キリストの十字架と復活により罪人の私達を救いに入れて下さったことを信じています。</li>
        ";
$img_path="./img/church/img0028.jpg";
$str .= getQAColumnImageRight($qa,$img_path);

$qa=" 
      <li>{$_q}礼拝とは何ですか？</li>
      <li>{$_a}神の愛の言葉を聴き神を拝する(拝む)ことです。そこでは、神が招きと神の言葉（聖書朗読・説教）と私達の応答(讃美・献金)があります。</li>
      ";
$img_path="./img/selected/selected25.jpg";
$str .= getQAColumnImageLeft($qa,$img_path);

$qa=" 
<li>{$_q}洗礼とは何ですか？</li>
<li>{$_a}キリストの十字架と復活が私の罪のための神の恵みの出来事だと信じる人が、神の前で罪を告白し、その罪を洗い流してくださるイエス・キリストの死と復活にあずかります。洗礼を通して私達は神の子どもとされます。</li>
      ";
$img_path="./img/church/img0042.jpg";
$str .= getQAColumnImageRight($qa,$img_path);

$qa=" 
<li>{$_q}聖餐とは何ですか？</li>
<li>{$_a}十字架と復活の恵みに、神の家族としての罪赦された者が与る食卓です。そこで私達が戴くパンと杯(ぶどう酒かぶどう汁)を通して、主は御自分の体と血を与えて下さいます。<br>※聖餐は、幼児洗礼を受けた後に信仰告白（堅信礼）をされた方、もしくは信仰告白をして洗礼を受けられた方のみが与り得るものです。従って当教会では、未受洗者の配餐は認めておりません。</li>
     ";
$img_path="./img/selected/selected24.jpg";
$str .= getQAColumnImageLeft($qa,$img_path);

$qa=" 
<li>{$_q}礼拝は初めてなのですが、何か準備は必要ですか？</li>
<li>{$_a}特別な準備は必要ありません。礼拝で使う聖書・讃美歌は貸出ておりますので、お持ちでない方は、受付でお申し出ください。</li>
     ";
$img_path="./img/church/img0077.jpg";
$str .= getQAColumnImageRight($qa,$img_path);

$qa=" 
<li>{$_q}どのような服装で行けばいいのでしょうか？</li>
<li>{$_a}普段着で構いません。</li>
     ";
$img_path="./img/0515/IMGP0375.jpg";
$str .= getQAColumnImageLeft($qa,$img_path);

$qa=" 
<li>{$_q}礼拝や集会の費用はかかるのですか？</li>
<li>{$_a}入場料・受講料といった費用を請求することはありません。礼拝の中で、献金がありますが、義務ではありません。</li>
     ";
$img_path="./img/0515/P1060755.jpg";
$str .= getQAColumnImageRight($qa,$img_path);

$qa=" 
<li>{$_q}献金とは何ですか？</li>
<li>{$_a}神様から頂いている恵みに感謝しつつ、その恵みを神様にお返しすることです。 献金は、神様の体である教会の為に、また神様が教会を通して働かれる業の為に用いられます。</li>
     ";
$img_path="./img/0515/P1060752.jpg";
$str .= getQAColumnImageLeft($qa,$img_path);

$qa=" 
<li>{$_q}小さな子どもを連れて行けますか？</li>
<li>{$_a}はい。礼拝堂後ろに親子室がありますので、子どもと一緒に礼拝に出席することが可能です。</li>
     ";
$img_path="./img/0515/P1060150.jpg";
$str .= getQAColumnImageRight($qa,$img_path);

$qa=" 
<li>{$_q}牧師とはいつ面談できますか？</li>
<li>{$_a}電話でお問い合わせください。</li>
     ";
$img_path="./img/0515/DSC03465.jpg";
$str .= getQAColumnImageLeft($qa,$img_path);

$qa=" 
<li>{$_q}車で行きたいのですが、駐車場はありますか？</li>
<li>{$_a}あります。身体の不自由な方には専用の駐車エリア（４台分）もあります。ご利用の方は、あらかじめ連絡をくだされば、スムーズかと思います。</li>
     ";
$img_path="./img/church/park.jpg";
$str .= getQAColumnImageRight($qa,$img_path);

$str.=<<<EOD
</table>
EOD;

//echo str_replace(array("\r\n","\r","\n"), "<br>\n", $str);
echo $str;
?>
