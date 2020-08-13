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
    <link rel="shortcut icon" href="favicon.ico" />
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
                                    <form action="index.php" class="form-horizontal form-bordered">
                                        <div class="form-body">
                                            <div class="form-group">
                                                <label class="col-md-2 control-label"> วันเวลาเริ่มต้น
                                                </label>
                                                <div class="col-md-3">
                                                    <div  class="input-group input-medium date date-picker" data-date-format="yyyy-mm-dd">
                                                        <input id="in_time_calendar" type="text" class="form-control" readonly>
                                                        <span class="input-group-btn">
                                                            <button class="btn default" type="button">
                                                                <i class="fa fa-calendar"></i>
                                                            </button>
                                                        </span>
                                                    </div>
												</div>
                                                <!-- <div class="col-md-3">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control timepicker timepicker-no-seconds">
                                                        <span class="input-group-btn">
                                                            <button class="btn default" type="button">
                                                                <i class="fa fa-clock-o"></i>
                                                            </button>
                                                        </span>
                                                    </div>
												</div> -->
												<label class="col-md-2 control-label"> วันเวลาสิ้นสุด
                                                </label>
                                                <div class="col-md-3">
                                                    <div id="out_time" class="input-group input-medium date date-picker" data-date-format="yyyy-mm-dd">
                                                        <input  id="out_time_calendar" type="text" class="form-control" readonly>
                                                        <span class="input-group-btn">
                                                            <button class="btn default" type="button">
                                                                <i class="fa fa-calendar"></i>
                                                            </button>
                                                        </span>
                                                    </div>
                                                </div>	
                                            </div>
                                          	<!--  
											<div class="form-group">
                                                <label class="col-md-2 control-label"> วันเวลาสิ้นสุด
                                                </label>
                                                <div class="col-md-3">
                                                    <div class="input-group input-medium date date-picker" data-date-format="dd-mm-yyyy">
                                                        <input type="text" class="form-control" readonly>
                                                        <span class="input-group-btn">
                                                            <button class="btn default" type="button">
                                                                <i class="fa fa-calendar"></i>
                                                            </button>
                                                        </span>
                                                    </div>
                                                </div>
                                                 <div class="col-md-3">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control timepicker timepicker-no-seconds">
                                                        <span class="input-group-btn">
                                                            <button class="btn default" type="button">
                                                                <i class="fa fa-clock-o"></i>
                                                            </button>
                                                        </span>
                                                    </div>
                                                </div> 
											</div>
											-->
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
										<span id="msg"></span><span id="msgg"></span>
                                    </div>
                                    <div class="tools"> </div>
                                </div>
                                <div class="portlet-body">
                                    <table class="table table-striped table-bordered table-hover" id="sample_1">
                                        <thead>
											<tr>
                                                <td>ชื่อ นามสกุล</td>
												<td>รหัสพนักงาน</td>
												<td>วันที่เข้า</td>
												<td>เวลาเข้า</td>
												<td>วันที่ออก</td>
												<td>เวลาออก</td>
											</tr>
										</thead>
										<tbody>
											<?php

                                                $url = "http://127.0.0.1/hr/phpAPI/Worktime/read.php";
                                                $contents = file_get_contents($url);
                                                $contents = utf8_encode($contents);
                                                $results = json_decode($contents,true); 

                                                foreach ($results as $key => $value) {

                                                    echo $value["employee_id"];
                                                }

                                    
                                                    // foreach ($results as $key => $value) {

													// 	 $indate = date_create($value["in_time"]);
													// 	 $outdate = date_create($value["out_time"]);	
													// 	 echo" <tr>  
                                                    //            <td> " . $value[0]["employee_id"]. " </td>
                                                    //            <td> " . $value[0]["name_prefix_th"]."". $value[0]["first_name_th"]." ".$value[0]["last_name_th"]. " </td>
                                                    //            <td> " .date_format($indate, 'd/m/Y'). " </td>
                                                    //            <td> " .date_format($indate, 'H.i')."   น.</td>
                                                    //            <td> " .date_format($outdate, 'd/m/Y'). "</>
                                                    //            <td> " .date_format($outdate, 'H.i')." น.</td>
                                                    //            </tr>";
                                                               
                                                    // }
													
			
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
		$("#in_time_calendar").change(function() {
			var jsDate = $('#in_time_calendar').val();
			$("#msg").text(jsDate);
		});
		$("#out_time_calendar").change(function() {
			var jsDatee = $('#out_time_calendar').val();
			$("#msgg").text(jsDatee);
		});
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
