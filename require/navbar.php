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
                <li class="active"><a href="./index.php">ホーム</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">大和キリスト教会<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="./contents_test.html">私たちの教団(日本基督教団)</a></li>
                    <li><a href="#">私たちの信仰(信仰告白)</a></li>
                    <li><a href="#">私たちの歩み</a></li>
                  </ul>
                </li>
                <li><a href="#">教師のご案内</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">礼拝のご案内<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">主日礼拝</a></li>
                    <li><a href="#">夕礼拝</a></li>
                  </ul>
                </li>             
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">教会学校のご案内<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">こばと</a></li>
                    <li><a href="#">小学科</a></li>
                    <li><a href="#">中高科</a></li>
                    <li><a href="#">成人科</a></li>
                  </ul>
                </li>        
                <!-- Read about Bootstrap dropdowns at http://twitter.github.com/bootstrap/javascript.html#dropdowns -->
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">集会のご案内 <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">早天黙想礼拝</a></li>
                    <li><a href="#">祈祷会</a></li>
                    <li><a href="#">家庭集会</a></li>
                  </ul>
                </li>
                <li><a href="#">年間行事予定</a></li>
                <li><a href="q_and_a.php">Q&A</a></li>
              </ul>
            </div><!--/.nav-collapse -->
          </div><!-- /.navbar-inner -->
        </div><!-- /.navbar -->

      </div> <!-- /.container -->
    </div><!-- /.navbar-wrapper -->
EOD;
?>
