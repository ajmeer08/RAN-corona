<?php
  session_start();
  if (isset($_SESSION['username'])&&$_SESSION['username']!=""){
  }
  else
  {
    header("Location:../index2.php");
  }
$username=$_SESSION['username'];
$userid = $_SESSION['user_Id'];

?>


<html>    
    <head>    
        <title>updation Form</title>    
		<style>
		body {
  background-image: url("/coronaran/images/1.jpg");
  background-color: Red;
  height: 500px;
  background-position: 1008*67;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

		</style>
		
		
		
    </head>    
    <body style="background-color:powderblue;">    
        <link href = "r.css" type = "text/css" rel = "stylesheet" />
	
		
                        <p style="float:right;"><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></p>
                
           
		
		
		
		<h2 color="white">update Today's record</h2>    
        <form name = "form1" action='modified.php' method = 'POST' enctype = "multipart/form-data" >    
            <div class = "container">
				<div class = "form_group">    
                    <label>Periyar:</label>    
                    <input type = "number" name = "periyar" value = "" required />    
                </div>
                <div class = "form_group">    
                    <label>Arapalayam:</label>    
                    <input type = "number" name = "arapalayam" value = "" required />    
                </div>    
                <div class = "form_group">    
                    <label>Matuthavani:	</label>
					<input type = "number" name = "matuthavani" value = "" required />
                </div>
				<div class = "form_group">    
                    <label>Koripalayam:</label>    
                    <input type = "number" name = "koripalayam" value = "" required />    
                </div>
				<div class = "form_group">    
                    <label>Therkuvasal: </label>    
                    <input type = "number" name = "therkuvasal" value = ""  required />    
                </div>
				<div class = "form_group">    
                    <label>Thiruparankunram: </label>    
                    <input type = "number" name = "thiruparankunram" value = ""  required />    
                </div>
				
				<div class = "form_group">    
                    <label>New cases: </label>    
                    <input type = "number" name = "new_cases" value = ""  required />    
                </div>
				
				<div class = "form_group">    
                    <label>New Recovery: </label>    
                    <input type = "number" name = "new_recovery" value = ""  required />    
                </div>
				
				<div class = "form_group">    
                    <label>New Dead: </label>    
                    <input type = "Number" name = "new_dead" value = ""  required />    
                </div>
				
				<div class = "form_group">    
                    <input type = "submit" value = "submit"/>    
                </div>
				<div class = "form_group">    
                    <input type = "reset" value = "reset"/>    
                </div>
				    
                   
              
            </div>    
        </form>    
    </body>    
</html>    