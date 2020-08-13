<head>
	<title>HR Worktime</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script src="../dist/jquery.table2excel.js"></script>
</head>

<body><hr>
	<form action="index.php">
		<input type="input" name="anum" value="<?php echo date('Y-m-d'); ?>">
		<br>
		<input type="submit">
	</form>
<hr>
<table class="table2excel table2excel_with_colors" data-tableName="ตารางเวลา">
	<tr>
		<td>รหัสพนักงาน</td>
		<td>วันที่เข้า</td>
		<td>เวลาเข้า</td>
		<td>วันที่ออก</td>
		<td>เวลาออก</td>
	</tr>
<?php
$servername = "52.163.82.249:1178";
$username = "promptadm";
$password = "chee#Mai5";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error."<hr>");
} 

if(empty($_GET["anum"])){
	$a = 5;
}else{
	$a = $_GET["anum"];	
}

$dd = "in_time=".$GET["anum"];

$sql = "SELECT * FROM hrservices.worktime LIMIT 10";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
		$indate = date_create($row["in_time"]);
		$outdate = date_create($row["out_time"]);
		
        echo"<tr>";   
        echo "<td> " . $row["employee_id"]. " </td><td> " .date_format($indate, 'd/m/Y'). " </td><td>".date_format($indate, 'H.i')."   น.</td><td> " .date_format($outdate, 'd/m/Y'). "</td><td>".date_format($outdate, 'H.i')." น.</td>";
        echo"</tr>";
    }
    
} else {
    echo "ไม่มีรายการ";
}
$conn->close();
echo"</table>";
?>
<button class="exportToExcel">Export to XLS</button>
</body>
		<script>
			$(function() {
				$(".exportToExcel").click(function(e){
					var table = $(this).prev('.table2excel');
					if(table && table.length){
						var preserveColors = (table.hasClass('table2excel_with_colors') ? true : false);
						$(table).table2excel({
							exclude: ".noExl",
							name: "Excel Document Name",
							filename: "myFileName" + new Date().toISOString().replace(/[\-\:\.]/g, "") + ".xls",
							fileext: ".xls",
							exclude_img: true,
							exclude_links: true,
							exclude_inputs: true,
							preserveColors: preserveColors
						});
					}
				});
				
			});
		</script>
