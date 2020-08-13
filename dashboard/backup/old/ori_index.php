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

    if($_GET['in_date']==''){
        $indate = date("Y-m-d");
        $outdate = date("Y-m-d");
        $in_date = $indate." 00:00:00";
        $out_date = date("Y-m-d")." 23:59:59";
    }
    else if($_GET['out_date']!=''){
        $indate =$_GET['in_date'];
        $outdate =$_GET['out_date'];
        $in_date = $indate." 00:00:00";
        $out_date = $outdate." 23:59:59";
    }else if($_GET['out_date']==''){
        $in_date = $indate." 00:00:00";
        $out_date = $outdate." 23:59:59";
    }



    $sql = "SELECT employee.name_prefix_th,employee.first_name_th,employee.last_name_th,worktime.employee_id,worktime.in_time,worktime.out_time FROM hrservices.worktime INNER JOIN hrservices.employee ON worktime.employee_id = employee.id WHERE worktime.in_time >= '$in_date' AND worktime.out_time <= '$out_date'";
    //echo $sql;
    $result = $conn->query($sql);



?>
<head>
	<title>HR Worktime</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script src="dist/jquery.table2excel.js"></script>
    <meta charset="utf-8" />
    <title>HR</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script src="dist/jquery.table2excel.js"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link href="assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
    <link href="assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="assets/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/layouts/layout/css/themes/darkblue.min.css" rel="stylesheet" type="text/css" id="style_color" />
    <link href="assets/layouts/layout/css/custom.min.css" rel="stylesheet" type="text/css" />
    <!-- END THEME LAYOUT STYLES -->
    <!-- v5.8.2 -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <!--  -->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    <!--  -->
    <!-- <link rel="shortcut icon" href="favicon.ico" /> -->
    <link rel="shortcut icon" href="favicon.png" />
    <style type="text/css">
        .form .form-bordered .form-group>div {
            border-left: none; 
        }
    </style>
</head>
<!-- END HEAD -->
<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white page-full-width">
        <!-- BEGIN HEADER -->

        <!-- END HEADER -->
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container" style="margin-top: 0px;">
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN PORTLET-->
                            <div class="portlet light form-fit bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <span class="caption-subject font-red sbold uppercase">HR Worktime</span>
                                    </div>
                                </div>
                                <div class="portlet-body form">
                                    <!-- BEGIN FORM-->
                                    <form action="index.php" method="GET" class="form-horizontal form-bordered">
                                        <div class="form-body">
                                            <div class="form-group">
                                                <label class="col-md-2 control-label"> วันที่เริ่มต้น
                                                </label>
                                                <div class="col-md-3">
                                                    <div  class="input-group input-medium date date-picker" data-date-format="yyyy-mm-dd" data-date-end-date="0d">
                                                        <input id="in_date" name="in_date" type="text" class="form-control" readonly value="<?=$indate?>">
                                                        <span class="input-group-btn">
                                                            <button class="btn default" type="button">
                                                                <i class="fa fa-calendar"></i>
                                                            </button>
                                                        </span>
                                                    </div>
												</div>
                                                <!-- <div class="col-md-3">
                                                    <div class="input-group">
                                                        <input id="in_time" name="in_time" type="text" class="form-control timepicker timepicker-no-seconds">
                                                        <span class="input-group-btn">
                                                            <button class="btn default" type="button">
                                                                <i class="fa fa-clock-o"></i>
                                                            </button>
                                                        </span>
                                                    </div>
												</div> -->
												<label class="col-md-2 control-label"> วันที่สิ้นสุด
                                                </label>
                                                <div class="col-md-3">
                                                    <div id="out_date_calendar" class="input-group input-medium date date-picker" data-date-format="yyyy-mm-dd" data-date-end-date="0d">
                                                        <input  id="out_date" name="out_date" type="text" class="form-control" readonly value="<?=$outdate?>">
                                                        <span class="input-group-btn">
                                                            <button class="btn default" type="button">
                                                                <i class="fa fa-calendar"></i>
                                                            </button>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-md-1">
                                                    <input class="btn btn-info" type="submit" value="ค้นหารายชื่อ">
                                                </div>
                                            </div>
                                          	 
											<!-- <div class="form-group">
                                            <label class="col-md-2 control-label"> วันเวลาสิ้นสุด
                                                </label>
                                                <div class="col-md-3">
                                                    <div id="out_time" class="input-group input-medium date date-picker" data-date-format="yyyy-mm-dd">
                                                        <input  id="out_date" name="out_date" type="text" class="form-control" readonly>
                                                        <span class="input-group-btn">
                                                            <button class="btn default" type="button">
                                                                <i class="fa fa-calendar"></i>
                                                            </button>
                                                        </span>
                                                    </div>
                                                </div>
                                                 <div class="col-md-3">
                                                    <div class="input-group">
                                                        <input id="out_time" type="text" class="form-control timepicker timepicker-no-seconds">
                                                        <span class="input-group-btn">
                                                            <button class="btn default" type="button">
                                                                <i class="fa fa-clock-o"></i>
                                                            </button>
                                                        </span>
                                                    </div>
                                                </div> 
											</div> -->
											
										</div>
										
                                    </form>
                                    <!-- END FORM-->
                                </div>
                            </div>
                            <!-- END PORTLET-->
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->

                                <div class="portlet-body">
	                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
								<div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption font-dark">
                                        <i class="icon-settings font-dark"></i>
										<span class="caption-subject bold uppercase">ตารางรายชื่อ</span>
										<!-- <span id="msg"></span><span id="msgt"></span><span id="msgg"></span><span id="msggt"></span> -->
                                    </div>
                                    <div class="tools"> </div>
                                </div>
                                <div class="portlet-body">
                                    <table class="table table-striped table-bordered table-hover" id="sample_1">
                                        <thead>
											<tr>
                                                <td class="text-center">รหัสพนักงาน</td>
                                                <td class="text-center">ชื่อพนักงาน</td>
												<td class="text-center">วันที่เข้า</td>
												<td class="text-center"aria-sort="ascending">เวลาเข้า</td>
												<td class="text-center">วันที่ออก</td>
												<td class="text-center">เวลาออก</td>
											</tr>
										</thead>
										<tbody>
											<?php

												if ($result->num_rows > 0) {
													$i=1;
													while($row = $result->fetch_assoc()) {
                                                        
														$indate = date_create($row["in_time"]);
														$outdate = date_create($row["out_time"]);
														echo"<tr>";   
														echo "<td class='text-center'> " .$row["employee_id"]. " </<td><td> " . $row["name_prefix_th"].$row["first_name_th"]." ".$row["last_name_th"]. " </td><td class='text-center'> " .date_format($indate, 'd/m/Y'). " </td><td class='text-center'>".date_format($indate, 'H.i')."   น.</td><td class='text-center'> " .date_format($outdate, 'd/m/Y'). "</td><td class='text-center'>".date_format($outdate, 'H.i')." น.</td>";
                                                        echo"</tr>";
                                                        $i++;
													}
													
												} else {
													
												}
												$conn->close();
											?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
							<!-- END EXAMPLE TABLE PORTLET-->
							
</div>
</body>
<script>
	$(document).ready(function () {

            // $(function() { $("#in_time_calendar").datepicker({  maxDate: '0'}).val(); });

        // 	$("#in_date").change(function() {
        // 		var jsDate = $('#in_date').val();
        // 		$("#msg").text(jsDate);
        // 	});
        // 	$("#out_date").change(function() {
        // 		var jsDatee = $('#out_date').val();
        // 		$("#msgg").text(jsDatee);
        //     });
            
        // 	$("#in_time").change(function() {
        // 		var jsDatet = $('#in_time').val();
        // 		$("#msg_t").text(jsDatet);
        // 	});
        // 	$("#out_time").change(function() {
        // 		var jsDateet = $('#out_time').val();
        // 		$("#msgg_t").text(jsDateet);
        // 	});
	});
</script>
		<!-- BEGIN CORE PLUGINS -->
        <script src="assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="assets/global/scripts/datatable.js" type="text/javascript"></script>
        <script src="assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
        <script src="assets/global/plugins/moment.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="assets/pages/scripts/table-datatables-buttons.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="assets/pages/scripts/components-date-time-pickers.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
		<!--  -->
