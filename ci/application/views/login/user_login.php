<h2>Login</h2><br/>

<?php echo validation_errors(); ?>
<?php echo form_open('login/verify') ?>
<label for="username">Username: </label>
<input type="text" size="20" name="username"/>
<label for="password">Password: </label>
<input type="password" size="20" name="password"/>
<input type="submit" name="submit" value="Login"/>
</form>
