<h1>Register</h1>

    <?php echo validation_errors(); ?>
    <?php echo form_open('register/verify') ?>
    <label for="username">Username: </label>

    <input type="text" size="20" name="username" value ="Username" 
           onfocus="if(this.value==this.defaultValue)this.value='';" 
           onblur="if(this.value=='')this.value=this.defaultValue;"
           /><br/>

    <label for="email">Email: </label>

    <input type="text" size="20" name="email" value ="Email" 
           onfocus="if(this.value==this.defaultValue)this.value='';" 
           onblur="if(this.value=='')this.value=this.defaultValue;"
           /><br/>

    <label for="password">Password: </label>
    <input type="password" size="20" name="password"
           /><br/>
    
    <label for="comfirm_password">Confirm Password: </label>
    <input type="password" size="20" name="comfirm_password"
           /><br/>

    <input type="submit" name="submit" value="Register"/>
    </form>