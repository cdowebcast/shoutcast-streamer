<?php 
    session_start();
    if (!isset($_SESSION['userid'])):
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Hawkwynd Radio Request Line</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js?ver=1.3.2" type="text/javascript"></script>
    <script type="text/javascript" src="check.js"></script>
</head>
<body>
</div>
    <div id="page-wrap"> 
    	<div id="header"><h1>Hawkwynd Radio Requests</h1>
        </div>
    	<div id="section">
        	<form method="post" action="jumpin.php">
            	<label>Pick your Handle:</label>
                <div>
                	<input type="text" id="userid" name="userid" />
                    <input type="submit" value="Check" id="jumpin" />
            	</div>
            </form>
        </div>
        
        <div id="status">
        	<?php if (isset($_GET['error'])): ?>
        		<!-- Display error when returning with error URL param? -->
        	<?php endif;?>
        </div>
        
    </div>
    
</body>

</html>

<?php 
    else:
        require_once("chatrooms.php");
    endif; 
?>