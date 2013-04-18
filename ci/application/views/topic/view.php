<script type="text/javascript" src="/script/boxEffect.js"></script>
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

<div class ="overlay">
</div>

<div class="topUserBar" id="login">
    <?php echo validation_errors(); ?>
    <?php echo form_open('login/verify') ?>
    <label for="username">Username: </label>

    <input type="text" size="20" name="username" value ="Username" 
           onfocus="if(this.value==this.defaultValue)this.value='';" 
           onblur="if(this.value=='')this.value=this.defaultValue;"
           />

    <label for="password">Password: </label>
    <input type="password" size="20" name="password"
           value ="Password" 
           onfocus="if(this.value==this.defaultValue)this.value='';" 
           onblur="if(this.value=='')this.value=this.defaultValue;"
           />
    
    <input type="submit" name="submit" value="Login"/>
    </form>
</div>

<div class="topUserBar" id="register">
    <?php echo validation_errors(); ?>
    <?php echo form_open('register/verify') ?>
    <label for="username">Username: </label>

    <input type="text" size="20" name="username" value ="Username" 
           onfocus="if(this.value==this.defaultValue)this.value='';" 
           onblur="if(this.value=='')this.value=this.defaultValue;"
           />

    <label for="email">Email: </label>

    <input type="text" size="20" name="email" value ="Email" 
           onfocus="if(this.value==this.defaultValue)this.value='';" 
           onblur="if(this.value=='')this.value=this.defaultValue;"
           />

    <label for="password">Password: </label>
    <input type="password" size="20" name="password"
           value ="Password" 
           onfocus="if(this.value==this.defaultValue)this.value='';" 
           onblur="if(this.value=='')this.value=this.defaultValue;"
           />
    
    <label for="comfirm_password">Confirm Password: </label>
    <input type="password" size="20" name="comfirm_password"
           />
    <input type="submit" name="submit" value="Register"/>
    </form>
</div>

<div class = "wrapper">
<div class = "topic"><h1><?php echo $topic;?> _______</h1></div>




<div class = "userBox <?php if($username){echo 'remove';}?>"><a onclick="showRegister()">Register</a> / <a onclick="showLogin()">Login</a></div>

<div class = "userBox <?php if(!$username){echo 'remove';}?>">
    <?php if($username){echo 'welcome '.$username."<br>".anchor("login/logout",'Click to Logout');}?> 
</div>

<div class = "box_frame" id = "pos0" onclick="location.href='<?php echo site_url("topic/fills/$topic_id");?>'" style =" cursor: pointer;"><div class ="box_content" id = "boxContent0">
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