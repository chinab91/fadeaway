<script type="text/javascript" src="/script/boxEffect.js"></script>
<script type="text/javascript" src="/script/requestJSON.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-40468262-1', 'fills-good.com');
  ga('send', 'pageview');

</script>
<div class ="overlay">
</div>

<div class="topUserBar" id="login">
    <?php echo validation_errors(); ?>
    <?php echo form_open('login/verify') ?>
    
    <input type="text" size="20" name="username" placeholder="Username"/>
    <input type="password" size="20" name="password" placeholder="Password"/>
    
    <input type="submit" name="submit" value="Login"/>
    </form>
</div>

<div class="topUserBar" id="register">
    <?php echo validation_errors(); ?>
    <?php echo form_open('register/verify') ?>
    <input type="text" size="20" name="username" placeholder="Username"/>
    <input type="text" size="20" name="email"  placeholder="Email"/>
    <input type="password" size="20" name="password" placeholder="Password"/>
    <input type="password" size="20" name="comfirm_password"  placeholder="Comfirm Password"/>
    <input type="submit" name="submit" value="Register"/>
    </form>
</div>

<div class = "wrapper">
    <div class = "home_wrapper">
    <h1>I think ......</h1>
    
    <div class = "userBox <?php if($username){echo 'remove';}?>"><a onclick="showRegister()">Register</a> / <a onclick="showLogin()">Login</a></div>

    <div class = "userBox <?php if(!$username){echo 'remove';}?>">
        <?php if($username){echo 'welcome '.$username."<br>".anchor("login/logout",'Click to Logout');}?> 
    </div>

    <div class ="home_frame" id ="pr" onclick="location.href='<?php echo site_url('topic/view/2')?>'">
        <div class="home_content">Pakatan Rakyat is _______</div>
    </div>
        
    <div class="home_frame" id ="umno" onclick="location.href='<?php echo site_url('topic/view/3')?>'">
        <div class="home_content">Barisan Nasional is _______</div>
    </div>

    </div>
</div>