<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<h2>Selectbox</h2>
<?php 




// $url = "http://127.0.0.1/busAPI/public/api/bus/GET/province/";

// $contents = file_get_contents($url);
// $contents = utf8_encode($contents);

// $results = json_decode($contents,true); 

echo "Box1";

echo "<select>";
foreach ($results as $key => $value) {

    $a = $value["province_id"];

    echo "<option value=$a>".$value["province_name_en"]."</option>";
}
echo "</select>";

echo "Box2";

$results2 = json_decode($contents); 

echo "<select>";
foreach($results2 as $key => $value) {
    
    $a = $value->province_id;

    echo "<option value=$a>".$value->province_name_en."</option>";
}
echo "</select>";

?>
<!--  -->
<hr>
<?php
$url = "http://localhost/fwgAPI/api/bus/v1/prefix";

$contents = file_get_contents($url);
$contents = utf8_encode($contents);
$results = json_decode($contents,true); 

echo "Box3";

echo "<select>";
foreach ($results as $key => $value) {

    $a = $value["prefix_id"];

    echo "<option value=$a>".$value["prefix_title"]."</option>";
}
echo "</select>";

?>

<hr>
<?php
$url = "http://127.0.0.1/hr/phpAPI/Worktime/read.php";

$contents = file_get_contents($url);
// $contents = utf8_encode($contents);
$contents = utf8_decode($contents);

$results = json_decode($contents,true); 

echo "testtest:";

foreach ($results as $key => $value) {

    echo $value[0]["employee_id"];
}

?>

<hr>
<h2>Delete btn</h2>
<button id="btn" onclick="delete_item('3')" >DEL3</button>
<button id="btn" onclick="delete_item('4')" >DEL4</button>
<button id="btn" onclick="delete_item('5')" >DEL5</button>
<hr>
<!--     car_license:<br><input type="text" name="car_license"><br>
    car_title:<br><input type="text" name="car_title"><br>
    users_username:<br><input type="text" name="users_username"><br>
 -->

<form action="http://127.0.0.1/hr/phpAPI/Worktime/read.php" method=POST>
    car_license:<br><input type="text" name="car_license" value="xyz-123"><br>
    car_title:<br><input type="text" name="car_title" value="Nissan"><br>
    users_username:<br><input type="text" name="idcard" value="1100400220500"><br>
 	<input type="submit" value="Submit">
 </form>
 <br>
 <form action="http://localhost/fwgAPI/api/bus/v1/users" method=POST>
    username:<br><input type="text" name="idcard"><br>
    isActive:<br><input type="text" name="users_isActive"><br>

 	<input type="submit" value="Submit">
 </form>
 <br>
 <?php
 $url = "http://localhost/fwgAPI/api/bus/v1/prefix";

 $contents = file_get_contents($url);
 $contents = utf8_encode($contents);
 $results = json_decode($contents,true);
 ?>
 <hr>
 <br>
 <h2>INSERT Profile</h2>
 <br>
 <form action="http://127.0.0.1/hr/phpAPI/Worktime/read.php" method=POST>

    prefix:<br>
    <?php
    echo "<select name='prefix_id'>";
        foreach ($results as $key => $value) {

            $a = $value[0]["employee_id"];

            echo "<option value=$a>".$a."</option>";
        }
    echo "</select>";
    ?>
    <br>
    name:<br><input type="text" name="profile_firstname" value="ABC"><br>
    lastname:<br><input type="text" name="profile_lastname" value="DEF"><br>
    roles_id:<br><input type="text" name="roles_id" value="1"><br>
    users_username:<br><input type="text" name="idcard" value="1100400220900"><br>

 	<input type="submit" value="Submit">
 </form>
<?php
 $url = "http://localhost/fwgAPI/api/bus/v1/profile/1100400220100";
 $contents = file_get_contents($url);
 $contents = utf8_encode($contents);
 $results_t = json_decode($contents,true); 
?>
 <br>
 <h2>UPDATE Profile</h2>
 <br>
 <form action="http://127.0.0.1/fwgAPI/api/bus/v1/profile/<?php echo $results_t["profile_id"]; ?>" method="post">
<?php
    echo "prefix:<br><select name='prefix_id'>";
    echo "<option value=".$results_t["prefix_id"].">".$results_t["prefix_id"]."</option>";
    echo "</select>";
?>
    <br>
    name:<br><input type="text" name="profile_firstname" value="<?php echo $results_t["profile_firstname"]; ?>"><br>
    lastname:<br><input type="text" name="profile_lastname" value="<?php echo $results_t["profile_lastname"]; ?>"><br>
    roles_id:<br><input type="text" name="roles_id" value="<?php echo $results_t["roles_id"]; ?>"><br>
    <input type="hidden" name="_method" value="PUT">
 	<input type="submit" value="Submit">
 </form>
 <br>
<hr>
 <form action="http://localhost/fwgAPI/test" method=POST>
    name:<br><input type="text" name="name" value="ccc"><br>
 	<input type="submit" value="Submit">
 </form>
 <br>
 <h2>PUT Test</h2>
 <?php
 $url = "http://127.0.0.1/fwgAPI/test/2";
 $contents = file_get_contents($url);
 $contents = utf8_encode($contents);
 $results_test = json_decode($contents,true); 
 ?>
 <br>
 <form action="http://localhost/fwgAPI/test/<?php echo $results_test["id"]; ?>" method="post">
    name:<br><input type="text" name="name" value="<?php echo $results_test["name"]; ?> "><br>
    <input type="hidden" name="_method" value="PUT">
 	<input type="submit" value="Submit">
 </form>
 <br>
<?php
// Input

?>
<!--  -->
<script>
// DELETE API
function delete_item(a) {
    var id = a;
    jQuery.ajax({
        url: 'http://54.169.97.57/fwgAPI/test/' + id,
        type: 'DELETE',
        success: function(data) {
  
        }
    });
}
// 
// 
</script>
