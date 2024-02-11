<?php
$link = mysqli_connect("localhost", "root", "", "");
mysqli_select_db( $link,"world");

$country=$_GET["country"];
$city_id=$_GET["city_id"];
$country_idd=$_GET["country_idd"];
$ids=$_GET["ids"];
$stateddid='statedd';
$stateddid2= $stateddid.$ids;



if (($country!="") and (($country!="Select Country")))
{
if (($ids == 0) or ($ids == 100)){
$result = mysqli_query($link,"select * FROM countries WHERE name = '$country'") or die( mysqli_error($link));}
if (($ids != 0)and ($ids != 100)){
$result = mysqli_query($link,"select * FROM countries WHERE native = '$country'") or die( mysqli_error($link));}
while ($row=mysqli_fetch_array($result)) {
    $res2 = $row['id'];
}

$res=mysqli_query($link,"select * from states where country_id=$res2");
echo "<select id=$stateddid2 name=$stateddid2 onchange='change_state($ids)'>";
echo "<option>"; echo "Select"; echo "</option>";
while($row=mysqli_fetch_array($res))
{
$name = $row["name"];
$name = str_replace(' ', '_', $name);
echo "<option selected>"; echo $row["name"];	 echo "</option>";
}
echo "</select>";
}
else{
echo "<select>";
echo "<option selected>"; echo "Select"; echo "</option>";




echo "</select>";
}







?>