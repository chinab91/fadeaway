<?php echo '<p>Fills Good!';?>
<p><?php 

    if($this->session->userdata('last_page')){
        echo anchor($this->session->userdata('last_page'),'< < Go back to home');
    }else{
        echo anchor('home','< < Go back to home');
    }
?>