<?php

echo "<a href=index.php>list</a>";

$lists = array(
    'achievement',
    'church',
    'construction',
    'kobato',
    'meeting',
    'qanda',
    'schedule',
    'school',
    'teacher',
    'worship', 
);
foreach($lists as $list)
{
  echo "<a href=contents.php?part={$list}>list</a>";
}