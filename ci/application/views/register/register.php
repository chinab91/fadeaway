<h1>todo register<h1>

    <?php echo validation_errors(); ?>
    <?php echo form_open('login/verify') ?>
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

    <input type="submit" name="submit" value="Register"/>
    </form>