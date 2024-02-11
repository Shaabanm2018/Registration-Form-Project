<?php


$link = mysqli_connect("localhost", "root", "", "");


mysqli_select_db( $link,"world");

$link2 = mysqli_connect("localhost", "root", "", "");


mysqli_select_db( $link2,"date");

?>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
<style>
body{
width: 75%;
margin:0 auto;

}
#title{
text-align:center;
}
.collapsible {
  background-color: #343a40;
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: center;
  outline: none;
  font-size: 20px;
  font-family: "Times New Roman", Times, serif;
  
}

.position{
	text-align: center;
	font-size: 20px;
	font-family: "Times New Roman", Times, serif;
}

.active, .collapsible:hover {
  background-color: #777;
}

.content {
  padding: 0 18px;
  display: none;
  overflow: hidden;
  
}

.multiselect {
  width: 200px;
}

.selectBox {
  position: relative;
}

.selectBox select {
  width: 100%;
  font-weight: bold;
}

.overSelect {
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
}

#checkboxes {
  display: none;
  border: 1px #dadada solid;
}

#checkboxes label {
  display: block;
}

#checkboxes label:hover {
  background-color: #1e90ff;
}
input[type=text],input[type=date], select {
  width: 300px;
  padding: 12px 20px;
  margin: 5px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
#sports{
display: none;
}

#dynamic_field{
	

}

#nature{
display: none;
}
#culture{
display: none;
}

.pluse{
width: 10%;
}
.position_right{
	width: 500px;

}

.add{
	
	display: block;

  border: none;
  background-color: white;
  padding: 14px 28px;
  font-size: 46px;
  cursor: pointer;
  text-align: center;
}

.btn_remove{
		display: block;

  border: none;
  background-color: white;
  padding: 14px 28px;
  font-size: 46px;
  cursor: pointer;
  text-align: center;
	
}

.position_left{
	width: 500px;
	padding-left: 30px;

}
tr.spaceUnder>td {
  padding-bottom: 1em;
}

tr.spaceUnder2>td {
  padding-bottom: 2em;
}

table, th, td {
 
  text-align: right;
}
.labels{
	
padding-right: 10px;
	
}
input ,select{
 
  border-top-style: hidden;
  border-right-style: hidden;
  border-left-style: hidden;
  border-bottom-style: groove;
  background-color: #eee;
  height: 40px;
}
.main_form{
	margin-top: 30px;
}
#submit_row{
	padding-left: 45.5%;
}

.metadata1{
	width: 520px;
}
.metadata2{
	width: 520px;
}
.inputs{

	text-align: left;
}
select { text-align: left;
display:block; }

.metadata1{
	margin-top: 25px;
}

#hoppy2{
	padding-left: 160px;
}

.position_row{
	
	text-align:center;
}

.position{
	padding-top: 100px;
background-image: linear-gradient(#42A1EC, #0070C9);
  border: 1px solid #0077CC;
  border-radius: 4px;
  box-sizing: border-box;
  color: #FFFFFF;
  cursor: pointer;
  direction: ltr;
 
  font-family: "SF Pro Text","SF Pro Icons","AOS Icons","Helvetica Neue",Helvetica,Arial,sans-serif;
  font-size: 17px;
  font-weight: 400;
  letter-spacing: -.022em;
  line-height: 1.47059;
  min-width: 30px;
  overflow: visible;
  padding: 4px 15px;
  
  text-align: center;
  vertical-align: baseline;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  white-space: nowrap;
}




#submit {
  background-image: linear-gradient(#42A1EC, #0070C9);
  border: 1px solid #0077CC;
  border-radius: 4px;
  box-sizing: border-box;
  color: #FFFFFF;
  cursor: pointer;
  direction: ltr;
 
  font-family: "SF Pro Text","SF Pro Icons","AOS Icons","Helvetica Neue",Helvetica,Arial,sans-serif;
  font-size: 17px;
  font-weight: 400;
  letter-spacing: -.022em;
  line-height: 1.47059;
  min-width: 30px;
  overflow: visible;
  padding: 4px 15px;
  text-align: center;
  vertical-align: baseline;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  white-space: nowrap;
}

#submit:disabled {
  cursor: default;
  opacity: .3;
}

#submit:hover {
  background-image: linear-gradient(#51A9EE, #147BCD);
  border-color: #1482D0;
  text-decoration: none;
}

#submit:active {
  background-image: linear-gradient(#3D94D9, #0067B9);
  border-color: #006DBC;
  outline: none;
}

#submit:focus {
  box-shadow: rgba(131, 192, 253, 0.5) 0 0 0 3px;
  outline: none;
}
.second_right{
	padding-top: 15px;
}
#dynamic_field{
	margin-top: 45px;
}

.multiselect{
	text-align: left;
}

.multiselect label {
  display: block;
  padding-left: 15px;
  text-indent: -15px;
  padding-top: 5px;
  padding-bottom: 5px;
 
 
}
.multiselect input {

  width: 13px;
  height: 13px;
  padding: 0;
  margin:0;
  margin-left: 5px;
  margin-right: 5px;
  vertical-align: bottom;
  position: relative;
  top: -1px;
  *overflow: hidden;
}
</style>
</head>
<body>


<form action="main.php" method="post" class="main_form">

<h2 id="title"> Registeration </h2>
<button type="button" class="collapsible">Metadata</button>
<table class="content" id="meta_data" class = "m">

<tr>

<td>


<table class="metadata1">
<tr class="spaceUnder"><td class="labels"> First Name: </td><td class="inputs"> <input  type="text" name="first_name" placeholder="Enter First Name"> </td></tr>
<tr class="spaceUnder"><td class="labels">  <label for="last_name"> Last Name: </label> </td><td class="inputs"> <input type="text" name="last_name"  placeholder="Enter Third Name"> </td></tr>
<tr class="spaceUnder"><td class="labels">   <label>Gender:</label> </td> <td>
  <select id="gender" class="inputs2" name="gender">
  <option value="type">Select Gender</option>
    <option value="Male">Male</option>
    <option value="Female">Female</option>
    <option value="Unisex">Unisex</option>
   <option value="Unknown">Unknown</option>
  </select> </td></tr>

<tr class="spaceUnder"><td class="labels">  <label for="state">State of Residence: </label>  </td> <td> <div id="state100" > <select name='statedd100'> <option>Select State</option> </select></div></td>   </tr>


<tr class="spaceUnder">
<td class="labels">
  <label for="cars">Hoppy Type:</label> </td> <td>
  <select id="source5" name="source5">
  <option value="type">Select Type</option>
    <option value="sports">Sports</option>
    <option value="nature">Nature</option>
    <option value="culture">Culture</option>
   
  </select>

</td>
</tr>
</table>
</td>
<td>
<table class="metadata2">
<tr class="spaceUnder"><td class="labels"> Middle Name: </td><td class="inputs"> <input type="text" name="middle_name" placeholder="Enter Middle Name"> </td></tr>
<tr class="spaceUnder"><td class="labels">  <label for="other_name"> Other Names: </label> </td><td class="inputs"> <input type="text" name="other_name" placeholder="Enter Forth Name"> </td></tr>
<tr class="spaceUnder"><td class="labels">  <label for="country">Country of Residence: </label> </td><td> <select id ="countrydd100" name='country_of_residence' onchange="change_country(100)"> <option>Select Country</option> <?php $res = mysqli_query($link,"select * from countries");while($row=mysqli_fetch_array($res)){?><option><?php echo $row[1]; ?> </option> <?php } ?> </select> </td></tr>
<tr class="spaceUnder"><td class="labels">  <label for="city">City of Residence: </label>  </td> <td> <div id="city100"> <select name='citydd100'> <option>Select City</option> </select></div> </td>   </tr>
<tr> <td class="labels"> Date of Birth: </td><td class="inputs"> <input type="date" name="date_of_birth"> </td> </tr>
</table>
</td>
</tr>
<tr id="hoppy" colspan="5">
<td id="hoppy2">
<table>
<tr class="spaceUnder" >
<td>
<div class="multiselect">
    <div class="selectBox" onclick="showCheckboxes()">
      <select>
        <option>Hobbies:</option>
      </select>
      <div class="overSelect"></div>
    </div>
    <div id="checkboxes">
	<div id = "sports"><label for="football" ><input type="checkbox" id="football" name="sports[]" value="Football" />Football</label>
	<label for="baseball" ><input type="checkbox" id="baseball" name="sports[]" value="Baseball" />Baseball</label>
	<label for="swimming"><input type="checkbox" id="swimming" name="sports[]" value="Swimming" />Swimming</label>
	<label for="tennis"><input type="checkbox" id="tennis" name="sports[]" value="Tennis" />Tennis</label> </div>
	<div id = "nature"><label for="travling" ><input type="checkbox" id="travling" name="nature[]" value="Travling" />Travling</label>
	<label for="dancing" ><input type="checkbox" id="dancing" name="nature[]" value="Dancing" />Dancing</label>
	<label for="sleeping"><input type="checkbox" id="sleeping" name="nature[]" value="Sleeping" />Sleeping</label>
	</div>
	<div id = "culture"><label for="reading" ><input type="checkbox" id="reading" name="culture[]" value="Reading" />Reading</label>
	<label for="writting" ><input type="checkbox" id="writting" name="culture[]" value="Writting" />Writting</label>
	<label for="listening"><input type="checkbox" id="listening" name="culture[]" value="Listening" />Listening</label>
	</div>
	</div>
    </div>
  </div>
</td>
<td>
</td>
</tr>
</table>
</td>
</tr>
</table>

<button type="button" class="collapsible">Positions</button>
<table class="content" id="dynamic_field">
<tr class="spaceUnder2"> <td colspan="5" class="position_row" > <label class="position"> Position 1 </label> </td> </tr>
<tr>

<td>
<table CELLSPACING=0 CELLPADDING=0 class="position_right">

<tr class="spaceUnder"><td class="labels"> Position Name: </td><td class="inputs" > <input type="text"  placeholder="Enter Position Name" name="position_name0" > </td></tr>
<tr class="spaceUnder"> <td class="labels"><label for="cars">Company Type:</label> </td> <td><select name="company_type0"><option value="company_type">Select Company Type</option><option value="sports">Private</option><option value="nature">Public</option><option value="culture">Government</option></select></td> </tr>
<tr class="spaceUnder"><td class="labels"><label>Sub-Industry:</label> </td> <td><select name="sub_industry0"><option>Select Type</option><option >Type 1</option><option>Type 2</option><option>Type 2</option></select></td></tr>
<tr class="spaceUnder"><td class="labels">  <label for="country">Country: </label> </td><td> <select id ="countrydd0" name="country0" onchange="change_country(0)"> <option>Select Country</option> <?php $res = mysqli_query($link,"select * from countries");while($row=mysqli_fetch_array($res)){?><option><?php echo $row[1]; ?> </option> <?php } ?> </select> </td></tr>
<tr class="spaceUnder"><td class="labels">  <label for="base_income"> Base Income: </label> </td><td class="inputs"> <input type="text" placeholder="Enter Base Income" name="base_income0" > </td></tr>
<tr class="spaceUnder"><td class="labels">  <label for="other_income"> Other Income: </label> </td><td class="inputs"> <input type="text" name="other_income0" placeholder="Enter Other Income"> </td></tr>
<tr class="spaceUnder"><td class="labels"> Starting Date: </td><td class="inputs"> <input type="date" name="starting_date0"> </td></tr>
<tr > <td class="labels">  <label> </label> </td> <td id="a_position"> <table> <tr><td class="inputs"> <input type="checkbox" id="myCheck" name="active_position0" value="Active Position" onclick="onCheck(checkbox=this,'date0');"></td> <td> Active Position </td> </tr> </table> </td></tr>
<tr > <td class="labels">  <label> </label> </td><td id="p_position"> <table> <tr>  <td class="inputs"> <input  type="checkbox" name="primary_position0" value="Primary Position" id="c";></td> <td> Primary Position? </td></tr> </table> </td>  </tr>
</table>
</td>

<td>
<table class="position_left">
<tr class="spaceUnder"><td class="labels"> Company Name: </td><td class="inputs"> <input type="text" name="company_name0" placeholder="Enter Company Name" > </td></tr>
<tr class="spaceUnder"><td class="labels"> <label>Industry:</label> </td> <td><select id="source" name="industry0"><option>Select Type</option><option >Type 1</option><option>Type 2</option><option>Type 2</option></select></td></tr>

<tr class="spaceUnder"><td class="labels">  <label for="sales"> Sales: </label> </td><td class="inputs"> <input type="text" placeholder="Enter Sales" name="sales0" > </td></tr>
<tr class="spaceUnder"><td class="labels">  <label for="state">State: </label>  </td> <td> <div id="state0" > <select name ="statedd0"> <option>Select State</option> </select></div></td>   </tr>

<tr class="spaceUnder"><td class="labels">  <label for="city">City: </label>  </td> <td> <div id="city0"> <select name='citydd0'> <option>Select City</option> </select></div> </td>   </tr>
<tr class="spaceUnder"><td class="labels">  <label for="bonus_income"> Bonus Income: </label> </td><td class="inputs"> <input type="text" placeholder="Enter Bonus Income" name="bonus_income0" > </td></tr>

<tr class="spaceUnder"><td class="labels">  <label for="stock_income"> Stock Income: </label> </td><td class="inputs"> <input type="text" placeholder="Enter Stock Income" name="stock_income0" > </td></tr>

<tr class="spaceUnder"><td class="labels"> Ending Date: </td><td class="inputs"> <input type="date"  name="ending_date0" value="EnrollDate" id='date0' onchange="checkDate(this);"> </td></tr>
<tr class="spaceUnder"> <td> <table> <tr>  <td class="inputs"> </td> <td> </td></tr> </table> </td> <td > <table> <tr><td class="inputs"></td> <td> </td> </tr> </table> </td></tr>
</table>

</td>
<td class="pluse"> <button type="button" name="add" id="add" class="add">+</button> </td></tr>
<tr id="submits"> <td colspan="5" id="submit_row" class="inputs"> <input id="submit" name = "submit" type="submit" value="Submit"> </td> </tr>
</table>

<input type="hidden" id="position_list_size" value="1" name="position_list_size">
</form>

<?php

if (isset($_POST['submit'])){
	
$size = $_POST['position_list_size'];
$size = (int)$size;

$first_name = $_POST["first_name"];
$middle_name = $_POST["middle_name"];
$last_name = $_POST["last_name"];
$other_name = $_POST["other_name"];
$state_of_residence = $_POST["statedd100"];
$country_of_residence = $_POST["country_of_residence"];
$city_of_residence = $_POST["citydd100"];
$gender = $_POST["gender"];
$date_of_birth = $_POST["date_of_birth"];
$chk_sports = "";
$chk_nature = "";
$chk_culture = "";
if(isset($_POST['sports'])){
$sports = $_POST['sports'];
foreach($sports as $sportscheckbox){
	$chk_sports .=$sportscheckbox.",";}
}
if(isset($_POST['nature'])){
$nature = $_POST['nature'];
foreach($nature as $naturecheckbox){
	$chk_nature .=$naturecheckbox.",";}
}


if(isset($_POST['culture'])){
$culture = $_POST['culture'];
foreach($culture as $culturecheckbox){
	$chk_culture .=$culturecheckbox.",";}
}




$dbconnect = mysqli_connect('localhost', 'root','','mwdb');






if ($first_name == ''){
	echo '<script>alert("First name Can\'t be null")</script>';
}
else if($last_name == ''){
	echo '<script>alert("Last name can\'t be null")</script>';
}
else {
	
	
	if($state_of_residence == 'Select State'){
		$state_of_residence = '';	

	}
	if($country_of_residence == 'Select Country'){
		$country_of_residence = '';
	}
	if($city_of_residence == 'Select City'){
		$city_of_residence = '';
	}
	if($gender == 'type'){
		$gender = ''; 
	}
	
	$id= $first_name.' '.$last_name;
	$sql = "insert into profile(id,first_name,middle_name,last_name,other_name,gender,country_of_residence,
		state_of_residence,city_of_residence,date_of_birth) values('$id','$first_name','$middle_name','$last_name' ,'$other_name','$gender','$country_of_residence', '$state_of_residence','$city_of_residence','$date_of_birth')";
	
	
	$run1 = mysqli_query($dbconnect, $sql);
	if ($chk_sports != ""){
	$sql3 = "insert into hoppies(id,profile_id,type,hoppies)  values('','$id','Sport','$chk_sports')";
	$run3 = mysqli_query($dbconnect, $sql3);
	}
	if ($chk_nature != ""){
	$sql4 = "insert into hoppies(id,profile_id,type,hoppies)  values('','$id','Nature','$chk_nature')";
	$run4 = mysqli_query($dbconnect, $sql4);
	}
	if ($chk_culture != ""){
	$sql5 = "insert into hoppies(id,profile_id,type,hoppies)  values('','$id','Culture','$chk_culture')";
	$run5 = mysqli_query($dbconnect, $sql5);
	}
	$status = True;
	for ($x = 0; $x <= $size; $x++) {
		if ($x != 1){
$position_name = $_POST["position_name".strval($x)];
$company_type = $_POST["company_type".strval($x)];
$sub_industry = $_POST["sub_industry".strval($x)];
$country = $_POST["country".strval($x)];
$city = $_POST["citydd".strval($x)];
$state = $_POST["statedd".strval($x)];
$base_income = $_POST["base_income".strval($x)];
$other_income = $_POST["other_income".strval($x)];
$starting_date = $_POST["starting_date".strval($x)];
$company_name = $_POST["company_name".strval($x)];
$industry = $_POST["industry".strval($x)];
$sales = $_POST["sales".strval($x)];
$bonus_income = $_POST["bonus_income".strval($x)];
$stock_income = $_POST["stock_income".strval($x)];
if (isset($_POST['ending_date'])){
$ending_date = $_POST["ending_date".strval($x)];}
else{
	$ending_date = '0000-00-00';
}
if (isset($_POST['active_position'.strval($x)])){
$active_position = $_POST["active_position".strval($x)];}
else{
	
	$active_position = "not inserted";
}
if (isset($_POST['primary_position'.strval($x)])){
$primary_position = $_POST["primary_position".strval($x)];}
else{$primary_position = "";}


if(($city == 'Select')or($city =='Select City')){
		$city = ''; 
	}
	if(($state == 'Select')or($state =='Select State')){
		$state = ''; 
	}
	if($country == 'Select Country'){
		$country = ''; 
	}
	
	if($sub_industry == 'Select Type'){
		$sub_industry = ''; 
	}
	if($industry	== 'Select Type'){
		$industry = ''; 
	}
	if($company_type	== 'company_type'){
		$company_type = ''; 
	}
	
	$sql2 = "INSERT INTO position (id, profile_id,position_name, company_name, company_type, industry, sub_industry, sales, country, state, city,
	base_income, bonus_income, stock_income, other_income, starting_date, ending_date, active_position, primary_position)
	VALUES ('', '$id', '$position_name', '$company_name', '$company_type', '$industry', '$sub_industry', '$sales', '$country',
	'$state', '$city', '$stock_income', '$bonus_income', '$stock_income', '$other_income', '$starting_date', '$ending_date', '$active_position ', '$primary_position')";
	$run2 = mysqli_query($dbconnect, $sql2);
	if($run2 == False){
		$status = False;
		}}
}

	if($status == True){
		echo '<script>alert("Submession succeeded")</script>';
	}
	else{
		$sql3 = "DELETE FROM profile WHERE id = '$id'";
		$run2 = mysqli_query($dbconnect, $sql3);
		
		$sql3 = "DELETE FROM position WHERE profile_id = '$id'";
		$run2 = mysqli_query($dbconnect, $sql3);
	}
}

}


?>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>

<script type = "text/javascript">
function onCheck(checkbox,date_id) {
  var dateElement = document.getElementById(date_id);
 
  
  dateElement.disabled = checkbox.checked;
  if (checkbox.checked) {
    dateElement.value = new Date().toISOString().substr(0, 10);
    dateElement.valueAsDate = null
  }
  else
    dateElement.value = '';
}

function onCheck2(checkbox,date_id) {
	
  var dateElement = date_id;

  dateElement.disabled = checkbox.checked;
  if (checkbox.checked) {
    //dateElement.value = new Date().toISOString().substr(0, 10);
    dateElement.valueAsDate = '';
  }
  else
    dateElement.value = '';
}



function change_state( mm)
{

	var country_id = "countrydd"+mm;
	var country = document.getElementById(country_id).value;
	var state_id = "statedd"+mm;
	var state_div_id = "state"+mm;

	var city_id = "city"+mm;

	
	var xmlhttp= new XMLHttpRequest();
	var state = document.getElementById(state_id).value;
	console.log(state);
	xmlhttp.open("GET","ajax2.php?state="+document.getElementById(state_id).value+"&ids="+mm,false);
	xmlhttp.send(null);

	document.getElementById(city_id).innerHTML=xmlhttp.responseText;
}

</script>

<script>  
var num=1; 
position_list = []
position_list.push('0')
 $(document).ready(function(){  
       

	 
      $('#add').click(function(){ 
	
	
           num++;


		   var j = num;
		   j = j.toString();
		   position_list.push(j)
		   console.log(position_list);
		   var state = "state"+j;
		   var countrydd = "countrydd"+j;
		   var city = "city"+j;
		   var date_id = "date"+j;
		   var myCheck = "myCheck"+j;
	
	
		   var button_id2 = $(this).attr("id");   
           $('#submits').remove();
		  
		   
           $('#dynamic_field').append('<tr id="position_number'+num+'" class="spaceUnder2"> <td colspan="5" class="position_row"> <label class="position"> Position '+num+' </label></td> </tr>'+
		   
		   '<tr id="position'+num+'"> <td> <table class="second_right"> <tr class="spaceUnder"><td class="labels"> Position Name: </td><td > <input type="text" name="position_name'+num+'" placeholder="Enter Position Name">'+
		   
		   
		   '</td></tr> <tr class="spaceUnder"> <td class="labels"><label for="cars">Company Type:</label> </td> <td><select name="company_type'+num+'"><option value="company_type">Select Company Type</option>'+
		   '<option value="sports">Private</option><option value="nature">Public</option><option value="culture">Government</option></select></td> </tr>' + '<tr class="spaceUnder"><td class="labels"><label>Sub Industry:</label> </td> <td><select id="source" name="sub_industry'+num+'"><option>Select Type</option><option >Type 1</option><option>Type 2</option><option>Type 2</option></select></td></tr>'+
		   '<tr class="spaceUnder"><td class="labels">  <label for="country">Country: </label> </td><td>  <select id ='+countrydd+ ' name = "country'+num+'" onchange="change_country('+j+')"> '+
		   '<option>Select Country</option> <?php $res = mysqli_query($link,"select * from countries"); while($row=mysqli_fetch_array($res)) { ?> <option> <?php echo $row[10]; ?> '+
		   '</option> <?php } ?> </select>   </td></tr>  <tr class="spaceUnder"><td class="labels">  <label for="base_income"> Base Income: </label> </td><td> <input type="text" name="base_income'+num+'" placeholder="Enter Base Income" > </td></tr> '+
		   '<tr class="spaceUnder"><td class="labels">  <label for="other_income"> Other Income: </label> </td><td> <input type="text" name="other_income'+num+'" placeholder="Enter Other Income" > </td></tr>  <tr><td> Starting Date: </td><td> <input type="date" name="starting_date'+num+'"> </td></tr>'+
		   '<tr > <td class="labels">  <label> </label> </td> <td id="a_position2"> <table> <tr><td class="inputs"> <input type="checkbox" id="c" name="active_position'+num+'" value="Active Position onclick="onCheck2(this,date='+date_id+');"></td> <td> Active Position </td> </tr> </table> </td></tr>'+
		   '<tr > <td class="labels">  <label> </label> </td> <td id="p_position"> <table> <tr><td class="inputs"> <input type="checkbox" id="c" name="primary_position'+num+'" value="Primary Position;"></td> <td> Primary Position? </td> </tr> </table> </td> </tr>'+
		   ' </table> </td> <td>'+


		   '<table> <tr class="spaceUnder"><td class="labels"> Company Name: </td><td> <input type="text" name="company_name'+num+'" placeholder="Enter Company Name"> </td></tr> <tr class="spaceUnder"><td class="labels"><label>Industry:</label> </td> <td><select id="source" name="industry'+num+'"><option>Select Type</option><option >Type 1</option><option>Type 2</option><option>Type 2</option></select></td></tr> <tr class="spaceUnder"><td> '+
		   '<label for="sales"> Sales: </label> </td><td> <input type="text" name="sales'+num+'" placeholder="Enter Sales"> </td></tr> <tr class="spaceUnder"><td class="labels">  <label for="state">State: </label> '+
		   '</td> <td> <div id='+state+'> <select name = "statedd'+num+'"> <option>Select State</option> </select></div></td>   </tr> <tr class="spaceUnder"><td class="labels">  <label for="city">City: </label>  </td> <td> <div id='+city+'> <select name = "citydd'+num+'"> <option>Select City</option> '+
		   '</select></div> </td></tr> <tr class="spaceUnder"><td class="labels">  <label for="bonus_income"> Bonus Income: </label> </td><td> <input type="text" name="bonus_income'+num+'" placeholder="Bouns Income"> </td></tr>'+
		   '<tr class="spaceUnder"><td class="labels">  <label for="stock_income"> Stock Income: </label> </td><td> <input type="text" name="stock_income'+num+'" placeholder="Enter Stock income" > </td></tr> <tr><td> Ending Date: </td><td> <input type="date" name="ending_date'+num+'" value="EnrollDate" id='+date_id+' onchange="checkDate(this);"> </td></tr> <tr class="spaceUnder"> <td> <table> <tr>  <td class="inputs"> </td> <td> </td></tr> </table> </td> <td > <table> <tr><td class="inputs"></td> <td> </td> </tr> </table> </td></tr>'+
		   '</table> </td>  <td class="pluse"> <button type="button" name="minus" id="btn_remove" class="btn btn-danger btn_remove">x</button> </td>  </tr> <tr id="submits"> <td colspan="5" id="submit_row" class="inputs"> <input id="submit" name = "submit" type="submit" value="Submit"> </td> </tr>');  
      
	  document.getElementById("position_list_size").value = position_list.length;
	  });  

      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#position'+num+'').remove();  
		   
		   var button_id2 = $(this).attr("id");   
           $('#position_number'+num+'').remove(); 


		   indexi = num.toString();
		   const index = position_list.indexOf(indexi);
			if (index > -1) {
			  position_list.splice(index, 1); // 2nd parameter means remove one item only
			}
		   


		   num = num - 1;
		   document.getElementById("position_list_size").value = position_list.length;
      });  

 });  
 </script>

<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}

var expanded = false;
function change_country2(id) {

id = "statedd"+id

}
function showCheckboxes() {
  var checkboxes = document.getElementById("checkboxes");
  if (!expanded) {
    checkboxes.style.display = "block";
    expanded = true;
  } else {
    checkboxes.style.display = "none";
    expanded = false;
  }
}

function change_country(m)
{

	var country_id = "countrydd"+m;
	var state_id = "statedd"+m;
	var city_id = "city"+m;
	var state_div_id = "state"+m;

	var xmlhttp= new XMLHttpRequest();

	var country = document.getElementById(country_id).value
	

	xmlhttp.open("GET","ajax.php?country="+country+"&city_id="+city_id+"&ids="+m+"&country_idd="+country_id,false);
	xmlhttp.send(null);
	
	document.getElementById(state_div_id).innerHTML=xmlhttp.responseText;
	
	var xmlhttp2= new XMLHttpRequest();

	xmlhttp2.open("GET","ajax2.php?state="+document.getElementById(state_id).value+"&ids="+m,false);
	xmlhttp2.send(null);

	document.getElementById(city_id).innerHTML=xmlhttp2.responseText;
	var state = document.getElementById(state_id).value

	
}


$(document).on('ready', function () {
      
	  
	  
	  
    $("#source5").on('change', function () {
        var el = $(this);
        if (el.val() === "sports") {
			document.getElementById("nature").style.display = "none";
			document.getElementById("culture").style.display = "none";
           document.getElementById("sports").style.display = "block";
        } else if (el.val() === "nature") {
		document.getElementById("sports").style.display = "none";
			 document.getElementById("culture").style.display = "none";
			document.getElementById("nature").style.display = "block";
             
        }
		else if (el.val() === "culture") {
		document.getElementById("sports").style.display = "none";
			 document.getElementById("nature").style.display = "none";
			document.getElementById("culture").style.display = "block";
             
        }
		
		else if (el.val() === "type") {
		document.getElementById("sports").style.display = "none";
			 document.getElementById("nature").style.display = "none";
			document.getElementById("culture").style.display = "none";
             
        }
    });

});


</script>

</body>
</html>