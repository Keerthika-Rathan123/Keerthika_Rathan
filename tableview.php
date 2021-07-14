<!DOCTYPE html>
<html lang="en" dir='ltr'>
<head>
	<meta charset="utf-8">

	
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
	
table,th,td{
	border: 1px ;
	width: 180px;
	text-align: center;
	padding: 5px;
	font-family: sans-serif;
	background: linear-gradient(to right,gray,lightgray);
	border-radius: 0px;
	transition: all .5s ease-in-out;
	color: Black;
	font-weight: bold;
	margin-right: auto;
	margin-right: auto;
	table-layout: fixed;

}
td:hover{
	background: aliceblue;

}
label,span,h2{
  text-shadow: 1px 1px 5px rgba(0,0,0,0.3);
}
.button-hover{
  left: 38%;
  position: relative;
  min-width:230px;
  margin:1em;
  padding: 0.3em;
  background: linear-gradient(to right,#56ccf2,#2f80ed)
  border:0;
  cursor:pointer;
  border-radius: 20px;
}
.button-hover::before,
.button-hover::after{
  content:'';
  position: absolute;
  left: 0;
  right:0;
  top:0;
  bottom: 0;
  background: linear-gradient(to right,#56ccf2,#2f80ed);
  border-radius: 20px;
  transition: all .5s ease-in-out;
}
.button-hover:hover::before{
  filter:blur(5px);
}
.button-hover:hover::after{
  filter:blur(15px);
}
.button-hover:hover{
  animation: hue 3s linear infinite;
}
@keyframes hue{
  0%{
    filter: hue-rotate(0deg);
  }
  100%{
    filter: hue-rotate(100deg);
  }
}
.button-hover span{
  position: relative;
  z-index: 3;
  display: block;
  padding: 1.0em;
  font-family: 'italic',sans-serif;
  font-size: 1.0em;
  font-weight: bold;
  color:#fff;
  text-transform: uppercase;
  background-color: #2c2e36;
  border-radius: 10em;
}


</style>
<body style="color: AntiqueWhite; font-family: Italic" bgcolor="Black">
	<h2 style="font-family: Italic; color:AntiqueWhite;"><center>VIEW STUDENT DETAILS &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</center></h2>
	 <div class="main">
    	<div class="register">
    		<form action="" method="POST">
    			
    			
    		</form>
    		<table>
    			<tr>
            <th>Event</th>
    				<th>Name</th>
    				<th>Roll Number</th>
    				<th>Department</th>
    				<th>Section</th>
    				<th>Domain</th>
    				<th>College/Company Name</th>
    			</tr> <br>
    		
    			<?php
    			$connection=mysqli_connect("localhost","root","");
    			$db=mysqli_select_db($connection,"projectdetails");

    			if(isset($_POST["submit"]))
    			{

    				$Roll_Number=$_POST["Roll_Number"];

    				$query="SELECT Name, Roll_Number, Department, Section,paper, college FROM paperpro WHERE Roll_Number='$Roll_Number' ";
    				$query_run=mysqli_query($connection,$query);

    				while($row=mysqli_fetch_array($query_run))
    				{
                       ?>
                       <tr>
                        <td><?php echo "Project/Paper Presentation";?></td>
                       	<td><?php echo $row['Name'];?></td>
                       	<td><?php echo $row['Roll_Number'];?></td>
                       	<td><?php echo $row['Department'] ;?></td>
                       	<td><?php echo $row['Section'];?></td>
                       	<td><?php echo $row['paper'];?></td>
                       	<td><?php echo $row['college'];?></td>
                       </tr>
                       <?php
    				}
    			}
    		?>
    		<?php
    			$connection1=mysqli_connect("localhost","root","");
    			$db1=mysqli_select_db($connection1,"projectdetails");

    			if(isset($_POST["submit"]))
    			{
    				$Roll_Number=$_POST["Roll_Number"];

    				$query1="SELECT Name, Roll_Number, Department, Section,paper, college FROM technicaldetails WHERE Roll_Number='$Roll_Number' ";
    				$query_run1=mysqli_query($connection1,$query1);

    				while($row1=mysqli_fetch_array($query_run1))
    				{
                       ?>
                       <tr>
                        <td><?php echo "Technical Event";?></td>
                       	<td><?php echo $row1['Name'];?></td>
                       	<td><?php echo $row1['Roll_Number'];?></td>
                       	<td><?php echo $row1['Department'];?></td>
                       	<td><?php echo $row1['Section'];?></td>
                       	<td><?php echo $row1['paper'];?></td>
                       	<td><?php echo $row1['college'];?></td>
                       </tr>
                       <?php
    				}
    			}
    		?>
    		<?php
    			$connection2=mysqli_connect("localhost","root","");
    			$db2=mysqli_select_db($connection2,"projectdetails");

    			if(isset($_POST["submit"]))
    			{
    				$Roll_Number=$_POST["Roll_Number"];

    				$query2="SELECT Name, Roll_Number, Department, Section,paper, college FROM workshopdetails WHERE Roll_Number='$Roll_Number' ";
    				$query_run2=mysqli_query($connection2,$query2);

    				while($row2=mysqli_fetch_array($query_run2))
    				{
                       ?>
                       <tr>
                        <td><?php echo "Workshop";?></td>
                       	<td><?php echo $row2['Name'];?></td>
                       	<td><?php echo $row2['Roll_Number'];?></td>
                       	<td><?php echo $row2['Department'];?></td>
                       	<td><?php echo $row2['Section'];?></td>
                       	<td><?php echo $row2['paper'];?></td>
                       	<td><?php echo $row2['college'];?></td>
                       </tr>
                       <?php
    				}
    			}
    		?>
    		<?php
    			$connection3=mysqli_connect("localhost","root","");
    			$db3=mysqli_select_db($connection3,"projectdetails");

    			if(isset($_POST["submit"]))
    			{
    				$Roll_Number=$_POST["Roll_Number"];

    				$query3="SELECT Name, Roll_Number, Department, Section,paper, college FROM interndetails WHERE Roll_Number='$Roll_Number' ";
    				$query_run3=mysqli_query($connection3,$query3);

    				while($row3=mysqli_fetch_array($query_run3))
    				{
                       ?>
                       <tr>
                        <td><?php echo "Internship/In-plant";?></td>
                       	<td><?php echo $row3['Name'];?></td>
                       	<td><?php echo $row3['Roll_Number'];?></td>
                       	<td><?php echo $row3['Department'];?></td>
                       	<td><?php echo $row3['Section'];?></td>
                       	<td><?php echo $row3['paper'];?></td>
                       	<td><?php echo $row3['college'];?></td>
                       </tr>
                       <?php
    				}
    			}
    		?>
    		<?php
    			$connection4=mysqli_connect("localhost","root","");
    			$db4=mysqli_select_db($connection4,"projectdetails");

    			if(isset($_POST["submit"]))
    			{
    				$Roll_Number=$_POST["Roll_Number"];

    				$query4="SELECT Name, Roll_Number, Department, Section,paper, college FROM otherdetails WHERE Roll_Number='$Roll_Number' ";
    				$query_run4=mysqli_query($connection4,$query4);

    				while($row4=mysqli_fetch_array($query_run4))
    				{
                       ?>
                       <tr>
                        <td><?php echo "Other Event";?></td>
                       	<td><?php echo $row4['Name'];?></td>
                       	<td><?php echo $row4['Roll_Number'];?></td>
                       	<td><?php echo $row4['Department'];?></td>
                       	<td><?php echo $row4['Section'];?></td>
                       	<td><?php echo $row4['paper'];?></td>
                       	<td><?php echo $row4['college'];?></td>
                       </tr>
                       <?php
    				}
    			}
    		?>

    		</table>
        <a href="viewdetails.php">
           <button type="submit" name="goback" value="goback" class="button-hover">
            <span>Go Back</span>
        </button></a>
    	</div>
    </div>

</body>

</html>