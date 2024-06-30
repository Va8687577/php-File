<?php
    
    include('connection.php');
    $catname=$_POST['catname'];
    
    if(isset($_POST['submit'])){
    
        if($catname==''){
            $error="please enter catname";
        }
    
        elseif(is_numeric($catname)){
            $error="catname must be string";
            
        }
    
        else{
            $Q="INSERT INTO categorytbl(catname) VALUES('$catname')";
            mysqli_query($con,$Q);
    }
	}
?>
<html>
    <head>
        <title>Registration</title>
    </head>
    <body>
        <form method="post">
            <label>Name:</label>
            <input type="text" name="catname" value= "<?php echo $catname;?>" <br />
            <input type="submit"  name="submit" value="Submit"> <br>
        </form>
    </body> 
</html>

