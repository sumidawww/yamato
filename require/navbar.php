<?php
$part_list=array(
    'home',
    'church', 'church_history', 
    'teacher',
    'worship',
    'school',
    'kobato',
    'meeting',
    'schedule',
    'qanda',
    'construction'
    );

foreach($part_list as $key){
  if($active_list[$key] != 'active'){
    $active_list[$key]='disactive';
  }
}
echo<<<EOD
<a id="top"></a>
    <div class="navbar-wrapper">
      <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->

        <div class="navbar navbar-inverse navbar-fixed-top">
          <div class="navbar-inner">
                  <div class="container" style="width:100%;">
            <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <span class="brand">日本基督教団 大和キリスト教会 </span>
            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
            <div class="nav-collapse">
              <ul class="nav da-thumbs">
                <li class="{$active_list['home']}"><a href="index.html">ホーム</a></li>
                <li class="{$active_list['church']}"><a href="church.html">大和キリスト教会</a></li>
                <li class ="{$active_list['teacher']}"><a href="teacher.html">教師のご案内</a></li>
                <li class="{$active_list['worship']}">
                  <a href="worship.html">礼拝のご案内</a></li>         
                <li class="{$active_list['school']}">
                  <a href="school.html">教会学校のご案内</a></li>  
                <li class="{$active_list['kobato']}">
                  <a href="kobato.html">こばと</a></li>  
                <!-- Read about Bootstrap dropdowns at http://twitter.github.com/bootstrap/javascript.html#dropdowns -->
                <li class="{$active_list['meeting']}">
                  <a href="meeting.html">集会のご案内</a>
                </li>
                <li class="{$active_list['schedule']}"><a href="schedule.html">年間行事予定</a></li>
                <li class="{$active_list['qanda']}"><a href="qanda.html">Q&A</a></li>
                <li class="{$active_list['event']} dropdown">
                  <a href="" class="dropdown-toggle" data-toggle="dropdown">イベント<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="announcement.html">予告 (10/21更新)</a></li>
                    <li class="divider"></li>
                    <li><a href="achievement.html">記録(1/11更新)</a></li>
                  </ul>
                </li>                  
              </ul>
            </div><!--/.nav-collapse -->
          </div><!-- /.navbar-inner -->
          <div class="gradientBar"></div>
        </div><!-- /.navbar -->

      </div> <!-- /.container -->
    </div><!-- /.navbar-wrapper -->
EOD;
?>
