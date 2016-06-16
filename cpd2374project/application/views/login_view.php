<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title> Login with CodeIgniter</title>
        <link href = "<?php echo base_url().'mainPage.css'; ?>" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <header>
            <h1> CPD 2374 - Term Project(Login Page)</h1>
        </header>  
        <div>  
        
               
                  <?php echo form_open('verifylogin'); ?>
                <section>
                       <?php echo validation_errors(); ?>
                    <label for="username" class="userfield">Username:</label>
                    <input type="text"  id="username" name="username" required/><br>
                    <label for="password" id="passwordfield" > Password:</label>&nbsp;
                    <input type="password"  id="password" name="password" required/><br><br>
                <figure id="capField">
                     <p><?php echo 'Submit the word you see below:'; ?><br></p>
                     <?php echo $image; ?><br><br>
                             </figure>
                             <label for="captcha" id="captcha" > Captcha:</label>
                     <?php echo '<input type="text" name="captcha" value="" required/>'; ?><br>
                
                      <input type="checkbox" id="remember" value="Remember me">&nbsp;Remember me</input>  <br/>&nbsp;
                      <input type="submit" value="Login" class="login"/>
                      <?php echo form_close(); ?><br><br>
                      <a href="index.php/forget" id="forget">Forget your password?</a>&nbsp;&nbsp;
                      <a href="index.php/register_ctrl" id="register" name="register">New Registration </a>
                      
                      
                      
                </section>
                 
           </div>
        </body>
         </html>