<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
   <title>Welcome</title>
    <link href = "<?php echo base_url().'home.css'; ?>" rel="stylesheet" type="text/css" />
 </head>
 <body>
     <header>
            <h1> CPD 2374 - Term Project</h1>
        </header> 
     <div>
         
   <h1>Home</h1>
   <h2>Welcome <?php echo $username; ?>,
               <?php  echo $fname;?>
			   <?php  echo $lname;?>
               <?php  echo "";?>!</h2>
      <a href="home/logout" class="logout">Logout</a>
   </div>
 </body>
</html>