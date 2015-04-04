<?php

$schedule_data=<<<EOD
3月
28日(土)～4月25日(土)
各土曜日午後５時～７時１５分　特別キリスト教入門講座
29日(日)
新長老按手・任職式

4月
2日(木)
洗足木曜日特別聖餐礼拝　10:00, 19:30
5日(日)
復活祭　早天礼拝　復活祭主日聖餐礼拝　墓前礼拝　復活祭主日聖餐夕礼拝
8日(水）
こばと 春学期始業日
25日(日)
定期教会総会

5月
3日(日)
主日聖餐礼拝　長老会
？
大阪教区総会(於　大阪女学院)
10日(日)
母の日主日礼拝
24日(日)
聖霊降臨日　創立５６周年記念主日聖餐礼拝　２大礼典執行 愛餐会 創立５６周年記念主日聖餐夕礼拝
30日(土)
こばと ファミリーデイ

6月
7日(日)
主日聖餐礼拝　長老会
14日(日)
花の日・子どもの日－子ども祝福
21日(日)
父の日主日礼拝
？
伝道礼拝
28日(日)
教会信徒研修会①「伝道と信仰継承」市川忠彦牧師他発題者

7月
5日(日)
主日聖餐礼拝　長老会
？
夏季学校(サラン教会青年伝道チームを迎える)
15日(水)
こばと 春学期終業日

8月
2日(日)
主日聖餐礼拝　
？
夏季学校(サラン教会青年伝道チームを迎える)
30日(日)
第二回　讃美大会

9月
2日(水)
こばと 秋学期始業日
6日(日)
主日聖餐礼拝　長老会
13日(日)
長寿者祝福式　大阪女学院ハンドベル奉仕？
21日(月)
教会連合関西部会教会奉仕者セミナー
26日(土)～10月24日(土)
各土曜日午後５時～７時１５分 特別キリスト教入門講座
27日(日)
教会大掃除

10月
4日(日)
世界聖餐日　主日聖餐礼拝　長老会
11日(日)～12日(月)
第９回近畿青年交流キャンプ　　
11日(日)
神学校日神学講座
18日(日)
信徒伝道週間（立証　　　　　）主日礼拝

11月
1日(日)
逝去者記念主日聖餐礼拝　墓前礼拝　長老会 主日聖餐夕礼拝　　
3日(火・祝）
バザー？
8日(日)
神学校日・伝道献身者奨励日　　　 　
22日(日)
収穫感謝礼拝
28日(土)
クリスマス準備・アドベントクランツ作り
29日(日)
アドベント第１主日

12月
6日(日)
待降節第一主日聖餐礼拝　長老会　　
12日(土)
こばと クリスマス祝会
16日(水)
こばと 秋学期終業日
20日(日)
降誕祭主日聖餐礼拝　２大礼典執行　愛餐会 降誕祭主日聖餐夕礼拝
23日(水・祝)
教会学校クリスマス？
24日(木)
イブ讃美礼拝
27日(日)
歳晩礼拝

1月
1日(金)
新年礼拝
3日(日)
主日聖餐礼拝　
10日(日)
長老会
13日(土)
こばと 冬学期始業日
23日(土)
こばと おもちつき
24日(日)
教会信徒研修会②「新しい牧師をお迎えするにあたって」 市川忠彦牧師他発題者
31日(日)
臨時教会総会

2月
7日(日)
主日聖餐礼拝　長老会
2日・9・16日・23日（火）　　
教会連合関西部会教会学校教師養成講座 （於　大阪教会）
11日(水)
教会連合関西部会教職・信徒研修会
10日(水)
受難節(レント)に入る　～３月２６日(土)

3月
6日(日)
主日聖餐礼拝　長老会
？
福音主義教会連合関西部会中高生修養会
16日(水)
こばと 冬学期終業日
20日(日)
棕櫚の主日・受難聖週・２０１６年度新長老按手・任職式　教会大掃除
27日(日)
復活祭（イースター）早天礼拝　主日聖餐礼拝　墓前礼拝　主日聖餐夕礼拝


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
        2015年
        </td>
      </tr>
EOD;
    }
    
    if( $month ==1 )
    {
      $schedule_table_str.=<<<EOD
      <tr>
        <td class="table-border-solid-white-5"  colspan=4 style="padding-left:18px;color:#fff;font-size:25px;font-weight:bold;background-color:#ED876E;">
        2016年
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
