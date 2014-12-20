<?php

$schedule_data=<<<EOD
4月
６日(日)
主日聖餐礼拝　長老按手・任職式  　長老会　　　　　　　
９日(水）
こばと新学期開始
１７日(木)
洗足木曜日特別聖餐礼拝　10:00  19:30
２０日(日)
復活祭　早天礼拝　復活祭主日聖餐礼拝　墓前礼拝　復活祭主日聖餐夕礼拝

5月
４日(日)
主日聖餐礼拝　長老会
１１日(日)
母の日主日礼拝　近藤勝彦牧師 近藤セミナー⑥(午後２時半～４時)

6月
１日(日)
主日聖餐礼拝　長老会
８日(日)
聖霊降臨日　創立５５周年記念主日聖餐礼拝　２大礼典執行　愛餐会  創立５５周年記念主日聖餐夕礼拝　花の日・子どもの日
１５日(日)
父の日主日礼拝

7月
６日(日)
主日聖餐礼拝　長老会
２４日(木)〜２６日(土)
教会学校幼児科、小学科　夏期学校
２６日(土)〜２７日(日)
教会学校中高科　夏期学校

8月
３日(日)
主日聖餐礼拝　
１９日(火)～２１日(木)
全国中学生・高校生・青年大会（教団主催）於　静岡・東山荘　　

9月
７日(日)
主日聖餐礼拝　長老会
１４日(日)
長寿者祝福式
２８日(日)
教会大掃除

10月
５日(日)
世界聖餐日　主日聖餐礼拝　長老会
１２日(日)
神学校日・伝道献身者奨励日　神学校日神学講座　
１２日(日)～１３日(月)
第８回青年交流キャンプ
１９日(日)
信徒伝道週間（立証 上田充香子）主日礼拝

11月
２日(日)
逝去者記念主日聖餐礼拝　墓前礼拝　長老会　主日聖餐夕礼拝　　
２３日(日)
収穫感謝礼拝
２９日(土)
クリスマス準備・アドベントクランツ作り
３０日(日)
アドベント第１主日

12月
７日(日)
待降節第一主日聖餐礼拝　長老会　　
２１日(日)
降誕祭主日聖餐礼拝　２大礼典執行　愛餐会　降誕祭主日聖餐夕礼拝
２４日(水)
イブ讃美礼拝

1月
１日(木)
新年礼拝
４日(日)
主日聖餐礼拝　長老会

2月
１日(日)
主日聖餐礼拝　長老会
３日・１０・１７日・２４日（火）
教会連合関西部会教会学校教師養成講座（於　大阪教会）
１１日(水)
教会連合関西部会教職・信徒研修会
１８日(水)
受難節(レント)に入る　～４月４日(土)

3月
１日(日)
主日聖餐礼拝　長老会
２９日(日)
棕櫚の主日・受難聖週　　　教会大掃除


EOD;

$img_exist_by_month=array('1'=>true,'11'=>true,'12'=>true,'3'=>true,4=>true,'7'=>true);
$tr_count=0;
$exploded_shcedule_datas=explode("\n",$schedule_data);
foreach($exploded_shcedule_datas as $exploded_shcedule_data){
  if(mb_strlen($exploded_shcedule_data)==1){
    $month=str_replace('月','',$first_line);
    $month=mb_convert_kana($month, "n", "UTF-8");
    $month=str_replace(' ','',$month);

    if( $month ==4 )
    {
      $schedule_table_str.=<<<EOD
      <tr>
        <td  class="table-border-solid-white-5" colspan=4 style="padding-left:18px;color:#fff;font-size:25px;font-weight:bold;background-color:#ED876E;">
        2014年
        </td>
      </tr>
EOD;
    }
    
    if( $month ==1 )
    {
      $schedule_table_str.=<<<EOD
      <tr>
        <td class="table-border-solid-white-5"  colspan=4 style="padding-left:18px;color:#fff;font-size:25px;font-weight:bold;background-color:#ED876E;">
        2015年
        </td>
      </tr>
EOD;
    }
    $schedule_table_str.=<<<EOD


  <tr>
   <td class="table-border-solid-white-5" style="background-color:#F7DFA0;color:#ED876E;font-size:25px;font-weight:bold;white-space: nowrap;text-align:center;" rowspan=$tr_count>$first_line</td>

EOD;
    $num=0;
    foreach($lines as $line){
      $schedule_table_str.=$line;   
      if($num==1){
        $img_tag="";
          $img_tag="<img src='./img/schedule/sche-$month.jpg'>";
        
        $schedule_table_str.=<<<EOD
   <td class="table-border-solid-white-5" style="background-color:#f9f9f9;text-align:center;vertical-align:middle;" rowspan=$tr_count>$img_tag</td>
  </tr>
EOD;
      }elseif($num%2){
        $schedule_table_str.="\n  </tr>";
      }
      $num++;
    }
    $lines=array();
    $line_count=0;
    $tr_count=0;
    continue;
  }else{
    $line_count++;
    if($line_count==1){
      $first_line=$exploded_shcedule_data;
      continue;
    }else{
      $line="   <td class='table-border-solid-white-5' style='font-size:20px;'>".$exploded_shcedule_data ."</td>";
    }
    if($line_count==2){
      $line=$line;
    }elseif($line_count%2){
//      $line.="\n  </tr>";
      $tr_count++;
    }else{
      $line="\n  <tr>\n".$line;
    }
    $lines[]=$line;
  }
}
echo<<<EOD
<table class="table table-striped table-border-solid-white-5">
$schedule_table_str
</table>
EOD;
//echo str_replace(array("\r\n","\r","\n"), "<br>\n", $str);
?>
