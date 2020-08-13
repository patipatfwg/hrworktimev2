<!-- BEGIN HEADER -->
<head>
	<title>HR Worktime</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	
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
    <script>
        $(document).ready(function(){
            if( localStorage.getItem('statusLocalStorage') === 'hr' )
            {
                const usernameLocalStorage = localStorage.getItem('usernameLocalStorage');
                const statusLocalStorage = localStorage.getItem('statusLocalStorage');
            }
            else
            {
                var url = '../';
                window.location.assign(url);
            }

            $("#LogoutBtn").click(function(){
                localStorage.removeItem("usernameLocalStorage");
                localStorage.removeItem("statusLocalStorage");
                window.location.replace("../");
            });
        });
    </script>
</head>
<!-- END HEADER -->
<?php
    if(isset($_GET['in_date'])){
        $in_date = $_GET['in_date'];
        $out_date = $_GET['out_date'];
    }else{
        $in_date = date("Y-m-d");
        $out_date = date("Y-m-d");
    }
?>
<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white page-full-width">
    <!-- BEGIN HEADER & CONTENT DIVIDER -->
    <div class="clearfix"> </div>
    <!-- END HEADER & CONTENT DIVIDER -->
    <!-- BEGIN CONTAINER -->
    <div class="page-container" style="margin-top: 0px;">
        <!-- BEGIN CONTENT -->
        <div class="page-content-wrapper">
            <!-- BEGIN CONTENT BODY -->
            <div class="page-content">

                    <!-- <div class="row">
                        <div class="col-md-6">
                            <div class="portlet light form-fit portlet-title">
                                <div class="caption">
                                    <span class="caption-subject sbold uppercase font-red"><h3>HR WORKTIME</h3></span>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <div class="row">
                        <div class="col-md-6">
                            <div class="portlet light form-fit portlet-title">
                                <span class="caption-subject sbold uppercase font-red"><h3>HR WORKTIME</h3></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portlet light form-fit portlet-title text-right">
                                <span class="caption-subject sbold uppercase font-red"><h3>Welcome </h3></span>
                                <button id="LogoutBtn" class="btn btn-warning" >Logout</button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- ROW SEARCH TOOLS-->
                    <div class="row">
                        <!-- BEGIN PORTLET-->
                        <div class="col-md-12">
                            <div class="portlet light form-fit bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-settings font-dark"></i><span class="caption-subject sbold uppercase">ค้นหาข้อมูล</span>
                                    </div>
                                </div>
                                <!-- BEGIN FORM-->
                                <div class="portlet-body">
                                    <form action="main.php" method="GET" class="form-horizontal form-bordered">
                                        <div class="form-body">
                                            <div class="form-group">
                                                <label class="col-md-2 control-label"> วันที่เริ่มต้น</label>
                                                <div class="col-md-3">
                                                    <div  class="input-group input-medium date date-picker" data-date-format="yyyy-mm-dd" data-date-end-date="0d">
                                                        <input id="in_date" name="in_date" type="text" class="form-control" readonly value="<?=$in_date?>">
                                                        <span class="input-group-btn">
                                                            <button class="btn default" type="button">
                                                                <i class="fa fa-calendar"></i>
                                                            </button>
                                                        </span>
                                                    </div>
												</div>
												<label class="col-md-2 control-label"> วันที่สิ้นสุด</label>
                                                <div class="col-md-3">
                                                    <div id="out_date_calendar" class="input-group input-medium date date-picker" data-date-format="yyyy-mm-dd" data-date-end-date="0d">
                                                        <input  id="out_date" name="out_date" type="text" class="form-control" readonly value="<?=$out_date?>">
                                                        <span class="input-group-btn">
                                                            <button class="btn default" type="button">
                                                                <i class="fa fa-calendar"></i>
                                                            </button>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <input class="btn btn-primary" type="submit" value="ค้นหารายชื่อ">
                                                </div>
                                            </div>
										</div>
                                    </form>
                                </div>
                                <!-- END FORM-->
                            </div>
                        </div>
                        <!-- END PORTLET-->
                    </div>
                    <!-- END ROW SEARCH TOOLS-->

                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet-body">
                                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                <div class="portlet light bordered">
                                    <div class="portlet-title">
                                        <div class="caption font-dark">
                                            <i class="icon-users font-dark"></i>
                                            <span class="caption-subject bold uppercase">ตารางรายชื่อ</span>
                                            <!-- <span id="msg"></span><span id="msgt"></span><span id="msgg"></span><span id="msggt"></span> -->
                                        </div>
                                        <div class="tools"> </div>
                                    </div>
                                    <div class="portlet-body">
                                        <table class="table table-striped table-bordered table-hover" data-source="data-source" id="sample_1">
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
                                                // $urlPROD = "http://freewillmdc.loginto.me/hrworktime/getJSON_getData.php?"."in_date=".$in_date."&"."out_date=".$out_date;
                                                $urlPROD = "http://freewillmdc.loginto.me/hrworktimev2/api/getJSON_getData.php?"."in_date=".$in_date."&"."out_date=".$out_date;
                                                $urlDEV = "http://127.0.0.1/hrworktimev2/api/getJSON_getData.php?"."in_date=".$in_date."&"."out_date=".$out_date;
                                                $json = file_get_contents($urlPROD);
                                                $results = json_decode($json,true);  
                                                foreach ($results as $key => $value) {
                                                    $a = $value["employee_id"];
                                                    $b = $value["name_prefix_th"].$value["first_name_th"]." ".$value["last_name_th"];
                                                    $cc = date_create($value["in_time"]);
                                                    $c = date_format($cc, 'd/m/Y');     
                                                    $d = date_format($cc, 'H.i');  
                                                    $ee = date_create($value["out_time"]);
                                                    $e = date_format($ee, 'd/m/Y'); 
                                                    $f = date_format($ee, 'H.i'); 
                                                    echo "<tr><td class='text-center'> " .$a. " <td> " .$b. " </td><td class='text-center'> " .$c. " </td><td class='text-center'>".$d."</td><td class='text-center'> " .$e. "</td><td class='text-center'>".$f."</td></tr>";   
                                                }
                                            ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- END EXAMPLE TABLE PORTLET-->
                            </div>
                            <!-- END EXAMPLE TABLE PORTLET-->
                        </div>
                    </div>
            </div>	
        </div>						
    </div>
</body>
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
