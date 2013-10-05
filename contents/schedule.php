<?php
$str=<<<EOD
<table class="table-striped table-bordered">
  <tr>
    <td colspan=3>
    2013年
    </td>
  </tr>
  <tr>
    <td rowspan=3>
     4月
     </td>
     <td>
     7日（日）
    </td>
    <td>
    主日聖餐礼拝、長老按手・任職式、長老会
    </td>
  </tr>
  <tr>
    <td>
     10日（水）
    </td>
    <td>
    こばと新学期開始
    </td>
  </tr>
  <tr>
    <td>
     28日（日）
    </td>
    <td>
    定期教会総会
    </td>
  </tr>
  </table>
  
EOD;

$schedule_data=<<<EOD
4月
&nbsp;&nbsp;7日(日)
主日聖餐礼拝、長老按手・任職式、長老会
10日(水)
こばと新学期開始
28日(日)
定期教会総会

5月
&nbsp;&nbsp;3日(金)～4日(土)
大阪教区総会(於:大阪女学院)
&nbsp;&nbsp;5日(日)
主日聖餐礼拝、長老会
&nbsp;&nbsp;9日(木)
昇天日
12日(日)
母の日、森祐理コンサート<br>(13時30分会場　14時開始)
19日(日)
聖霊降臨日、創立54周年記念主日聖餐礼拝、二大礼典執行、愛餐会
27日(月)
教会連合関西部会総会(於:茨城東教会)

6月
&nbsp;&nbsp;2日(日)
主日聖餐礼拝、長老会
&nbsp;&nbsp;9日(日)
花の日・子どもの日
16日(日)
父の日
24日(月)
東京神学大学主催<br>「講演と音楽の夕べ」　(於:大阪教会)

7月
&nbsp;&nbsp;7日(日)
主日聖餐礼拝、長老会
14日(日)
主日礼拝説教:近藤勝彦牧師<br>近藤勝彦牧師による「信徒神学セミナー①」(14時～15時30分)
日程調整中
夏季学校(アメリカ・サラン教会青年伝道チームを迎えて)

8月
&nbsp;&nbsp;4日(日)
主日聖餐礼拝

9月
&nbsp;&nbsp;1日(日)
主日聖餐礼拝、長老会
&nbsp;&nbsp;8日(日)
主日礼拝説教:近藤勝彦牧師<br>近藤勝彦牧師による「信徒神学セミナー②」(14時～15時30分)
15日(日)
長寿者祝福式、大阪女学院ハンドベル奉仕(予定)
16日(月)～17日(火)
教会連合関西部会　教職・役員研修会(於:パナソニック・リゾート大阪)
29日(日)
教会大掃除

10月
&nbsp;&nbsp;6日(日)
世界聖餐日、主日聖餐礼拝、長老会
13日(日)
神学校日・伝道献身者奨励日、神学校日神学講座
13日(日)～14日(月)
第７回青年交流キャンプ
31日(木)
宗教改革記念日

11月
&nbsp;&nbsp;3日(日)
逝去者記念主日聖餐礼拝、墓前礼拝、長老会
10日(日)
主日礼拝説教:近藤勝彦牧師<br>近藤勝彦牧師による「信徒神学セミナー③」(14時～15時30分)
24日(日)
収穫感謝礼拝
28日(木)
収穫感謝祭
30日(日)
アドベントクランツ作り

12月
&nbsp;&nbsp;1日(日)～24日(日)
待降(アドベント)
&nbsp;&nbsp;1日(日)
待降節第一主日聖餐礼拝、長老会
22日(日)
降誕祭主日聖餐礼拝、二大礼典執行、愛餐会
25日(水)
降誕日

1月
&nbsp;&nbsp;1日(水)
新年礼拝
&nbsp;&nbsp;5日(日)
主日聖餐礼拝、長老会
12日(日)
主日礼拝説教:近藤勝彦牧師<br>近藤勝彦牧師による「信徒神学セミナー④」(14時～15時30分)
26日(日)
教会総会

2月
&nbsp;&nbsp;2日(日)
主日聖餐礼拝、長老会
&nbsp;&nbsp;4日(火)
教会連合関西部会　教会学校教師養成講座①(於:大阪教会)
11日(火)
教会連合関西部会　教職・信徒研修会(於:大和キリスト教会)
18日(火)
教会連合関西部会　教会学校教師養成講座②(於:大阪教会)
25日(火)
教会連合関西部会　教会学校教師養成講座③(於:大阪教会)

3月
&nbsp;&nbsp;2日(日)
主日聖餐礼拝、長老会
&nbsp;&nbsp;5日(水)～<br>4月19日(土)
受難節(レント)
&nbsp;&nbsp;9日(日)
主日礼拝説教:近藤勝彦牧師<br>近藤勝彦牧師による「信徒神学セミナー⑤」(14時～15時30分)
30日
教会大掃除


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
        2013年
        </td>
      </tr>
EOD;
    }
    
    if( $month ==1 )
    {
      $schedule_table_str.=<<<EOD
      <tr>
        <td class="table-border-solid-white-5"  colspan=4 style="padding-left:18px;color:#fff;font-size:25px;font-weight:bold;background-color:#ED876E;">
        2014年
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
