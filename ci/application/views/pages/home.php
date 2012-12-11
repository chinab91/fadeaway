<?php
$defaultHome = array(
	'topic' => 'Home',
	'box1' => 'box 1',
	'box2' => 'box 2',
	'box3' => 'box 3',
	'box4' => 'box 4',
	'box5' => 'box 5'
)
?>
<div class = "wrapper">
<h1><?php echo $defaultHome['topic']?> is _______</h1>

<div class = "box_frame" id = "pos1"><div class ="boxContent">
<b><?php echo $defaultHome['box1']?></b>
</div></div>

<div class = "box_frame" id = "pos2"><div class ="boxContent">
<b><?php echo $defaultHome['box2']?></b>
</div></div>

<div class = "box_frame" id = "pos3"><div class ="boxContent">
<b><?php echo $defaultHome['box3']?></b>
</div></div>

<div class = "box_frame" id = "pos4"><div class ="boxContent">
<b><?php echo $defaultHome['box4']?></b>
</div></div>

<div class = "box_frame" id = "pos5"><div class ="boxContent">
<b><?php echo $defaultHome['box5']?></b>
</div></div>
</div>