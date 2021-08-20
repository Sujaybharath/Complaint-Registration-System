<html>
<head>
<h1>COMPLAINT SECTIONS</h1>
<style>
h1{
text-align:center;
color:darkblue;
}
body{
background-size:cover;
}
td{
color:#black;
}
submit{
color:pink;}
input[type=date]{
    width: auto;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
    font-size:15px;
}
input[type=text]{
    width: auto;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline -block;
    border: 1px solid #ccc;
    box-sizing: border-box;
    font-size:15px;
}

    
.register{
width:auto;
padding: 10px 18px;
background-color:green
}
.block
{
width:auto;
padding: 15px 15px;
background-color:pink;
}


</style>
</head>
<body background="b.jpeg">
<form name="myForm" action="det.php" autocomplete="on" autofocus="on"
onsubmit="return Validate()" method="post">

<center>

<div>

<table border="0" cellpadding="3" cellspacing="0">

<tr>
        <td>
          <h3>USER ID:</h3>
        </td>
        <td>
            <input type="text" id="txtname" name="EmpId" required />
        </td>
    </tr>

<tr>
        <td>
          <h3> NAME:</h3>
        </td>
        <td>
            <input type="text" id="txtname" name="fname" required />
        </td>
    </tr>
	<tr>
        <td>
           <h3> PROBLEM ADDRESS:</h3>
        </td>
        <td>
            <input type="text" id="txtPassword" name="addr" required />
        </td>
    </tr>
    
	
    <tr>
        <td>
           <h3> CITY/VILLAGE :</h3>
        </td>
        <td>
            <input type="text" id="txtPassword" name="city" required />
        </td>
    </tr>
    
	<tr>
        <td>
          <h3>  DATE :</h3>
        </td>
        <td>
            <input type="date" id="txtConfirmPassword" name="dat" required />
        </td>
    </tr>
	<tr>
        <td>
          <h3>  MOBILE NUMBER:</h3>
        </td>
        <td>
            <input type="text" id="txtConfirmPassword" name="phone" pattern="[1-9]{1}[0-9]{9}"required />
        </td>
    </tr>
	<tr>
        <td>
            <h3>PINCODE :</h3>
        </td>
        <td>
            <input type="text" id="txtConfirmPassword" name="mail" required />
        </td>
    </tr>
	<tr>
        <td>
          <h3>  COMPLAINT SECTION :</h3>
        </td>
        <td>
            <select name="opt" > <option value="electricity"> ELECTRICITY</option> <option value="road">ROAD </option> </select>
        </td>
    </tr>
    <tr>
        <td>
		<h3>PROBLEM DESCRIPTION:</h3>
        </td>
        <td>
		

 <input type="text" name="Description" required /></td></tr>
 

	<tr><td></td><td>

  <input type="submit" class="register" align="center-right id="btnSubmit" name="submit" value="REGISTER" onclick="return Validate()"/>
        </td>
    </tr>

	</div>
	</center>
<table/>
<br>
<button class="block"><strong><a href="main.html">logout</a></strong></button>
</form>
<br>




<script type="text/javascript">
 function Validate() 
{
var x = document.forms["myForm"]["EmpId"].value;
    if (x == "") {
        alert("Name must be filled out");
        return false;
    }

	var x = document.forms["myForm"]["fname"].value;
    if (x == "") {
        alert("Name must be filled out");
        return false;
    }
	var x = document.forms["myForm"]["lname"].value;
    if (x == "") {
        alert("FIRSTNAMELASTNAMEName must be filled out");
        return false;
    }
	var x = document.forms["myForm"]["lastname"].value;
    if (x == "") {
        alert("Password must be filled");
        return false;
    }
	var x = document.forms["myForm"]["confirm"].value;
    if (x == "") {
        alert("confirmation must be filled");
        return false;
    }
	var x = document.forms["myForm"]["phone"].value;
    if (x== "") {
        alert("Mobileno must be filled out");
        return false;
    }
var x = document.forms["myForm"]["mail"].value;
    if (x== "") {
        alert("PINCODE must be filled out");
        return false;
    }
        
    }
</script>


</body>
 </html>
 <?php
 $con=mysqli_connect("localhost","root","","welfare");
 if($con)
 {}
 if(isset($_POST['submit']))
 {echo "success";
 $EmpId=$_POST['EmpId'];
 $name=$_POST['fname'];
 $address=$_POST['addr'];
 $dat=$_POST['dat'];
 $c=$_POST['city'];
 $m=$_POST['phone'];
 $pin=$_POST['mail'];
 $sec=$_POST['opt'];
 $pr=$_POST['Description'];
 $query=mysqli_query($con,"insert into details(EmpId,name,address,date,city,mobile,pincode,complaint,feedback)values('$EmpId','$name','$address','$dat','$c','$m','$pin','$sec','$pr')");
 }
 ?>