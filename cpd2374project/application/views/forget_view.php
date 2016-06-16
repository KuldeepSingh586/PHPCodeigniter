<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Forget Password</title>
		<link href='http://fonts.googleapis.com/css?family=Marcellus' rel='stylesheet' type='text/css'/>
        <link href = "<?php echo base_url().'forget.css'; ?>" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <header>
            <h1> CPD 2374 - Term Project</h1>
        </header> 

        <link rel="stylesheet" type="text/css" href = "<?php echo base_url() . 'forget.css'; ?>"  />
        </head>
        <body>
            <div>
                <h1 id="mainLine">Forget Password</h1>
                <?php echo validation_errors(); ?>
                <?php echo form_open('VerifyForget'); ?>
                <label for="username">Username:</label>
                <input type="text" size="20" id="username" name="username"/>
                <br><br>
                        <label for="hints">Hints:</label>
                        <input type="text" size="20" id="hints" name="hints"/>
                        <br/>
                        <input type="submit" value="forget" id="login"/>
                        </div>
                        </form>
                        </body>
                        </html>