<script type="text/javascript" src="/script/fills.js"></script>
<div class ="wrapper">
    <h1><?php echo $topic?> _____</h1>
    <div class = "box_frame" id = "pos0" style =" cursor: pointer;"><div class ="box_content" id = "boxContent0">
            <b>Fill this</b>
        </div></div>
    <div style =" z-index: 2;">
    <?php echo validation_errors(); ?>
    <?php echo form_open('topic/fill_add') ?>
    <label for="text">Content</label><br />
    <textarea name="text" id="inputContent">Fill this</textarea><br />
        <input type="hidden" name="bground_R" id="bg_R" value ="0"/>
        <input type="hidden" name="bground_G" id="bg_G" value ="0"/>
        <input type="hidden" name="bground_B" id="bg_B" value ="0"/>
        <input type="hidden" name="font_R" id="font_R" value ="0"/>
        <input type="hidden" name="font_G" id="font_G" value ="0"/>
        <input type="hidden" name="font_B" id="font_B" value ="0"/>
        <input type="hidden" name="topic_id" id="topic_id" value ="<?php echo $topic_id?>"/>
    <input type="submit" name="submit" value="Fills new content" /> <br />
</form>
</div>
</div>

