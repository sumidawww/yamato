<?php
echo<<<EOD
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
            <a class="brand" href="./index.php">日本基督教団 大和キリスト教会 </a>
            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
            <div class="nav-collapse">
              <ul class="nav">
                <li class="{$active_list['home']}"><a href="./index.php">ホーム</a></li>
                <li class="{$active_list['church']} dropdown">
                  <a href="contents.php" class="dropdown-toggle" data-toggle="dropdown">大和キリスト教会<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="contents.php">私たちの教団(日本基督教団)</a></li>
                    <li><a href="contents.php">私たちの信仰(信仰告白)</a></li>
                    <li><a href="contents.php">私たちの歩み</a></li>
                  </ul>
                </li>
                <li class ="{$active_list['teacher']}"><a href="contents.php?part=teacher">教師のご案内</a></li>
                <li class="{$active_list['worship']} dropdown">
                  <a href="contents.php" class="dropdown-toggle" data-toggle="dropdown">礼拝のご案内<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="contents.php">主日礼拝</a></li>
                    <li><a href="contents.php">夕礼拝</a></li>
                  </ul>
                </li>             
                <li class="{$active_list['school']} dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">教会学校のご案内<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="contents.php?part=school">こばと</a></li>
                    <li><a href="contents.php?part=school">小学科</a></li>
                    <li><a href="contents.php?part=school">中高科</a></li>
                    <li><a href="contents.php?part=school">成人科</a></li>
                  </ul>
                </li>        
                <!-- Read about Bootstrap dropdowns at http://twitter.github.com/bootstrap/javascript.html#dropdowns -->
                <li class="{$active_list['meeting']}">
                  <a href="contents.php?part=meeting">集会のご案内</a>
                </li>
                <li class="{$active_list['schedule']}"><a href="contents.php?part=schedule">年間行事予定</a></li>
                <li class="{$active_list['qanda']}"><a href="contents.php?part=qanda">Q&A</a></li>
              </ul>
            </div><!--/.nav-collapse -->
          </div><!-- /.navbar-inner -->
        </div><!-- /.navbar -->

      </div> <!-- /.container -->
    </div><!-- /.navbar-wrapper -->
EOD;
?>
