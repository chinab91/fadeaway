<script type="text/javascript" src="/script/requestJSON.js"></script>
<script type="text/javascript">
<?php 
    $js_topic_id = json_encode($topic['topic_id']);
    echo "var topic_id = ".$js_topic_id.";\n";
    $js_entries_id = array();
    $counter = 0;
    foreach($entries as $entry){
        $js_entries_id["$counter"] = $entry['entry_id'];
        $counter++;
    }
    $js_entries_id = json_encode($js_entries_id);
    echo "var entries_id = ".$js_entries_id.";\n";
?>
</script>
<div class = "wrapper">
<div class = "topic"><h1><?php echo $topic['topic'];?> _______</h1></div>

<div class = "box_frame" id = "pos0"><div class ="box_content" id = "boxContent0">
<b>Fill this</b>
</div></div>

<?php 
$counter = 1;
foreach ($entries as $entry){
echo "<div class = 'box_frame' id = 'pos$counter'"; 
$style = "style=\"background-color:rgb(".
        $entry['bground_R'].",".$entry['bground_G'].",".$entry['bground_B']
        ."); ";
$char_color = "color:rgb(".
        $entry['font_R'].",".$entry['font_G'].",".$entry['font_B']
        .");\">";//end style //end start div box_frame
echo $style.$char_color;
echo "<div class =\"box_content\" id = \"boxContent$counter\">\n";//div box_content
echo "<b>".$entry['content']."</b>\n";
echo "</div></div>\n";
$counter++;
}      
for($unfilled_box = $counter;$unfilled_box <= 11; $unfilled_box++){
echo "<div class = 'box_frame' id = 'pos$unfilled_box'>\n"; 
echo "<div class =\"box_content\" id = \"boxContent$counter\">\n";//div box_content
echo "</div></div>\n"; 
$counter++;
}

?>
</div>