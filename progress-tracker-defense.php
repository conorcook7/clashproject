<?php
session_start();
require_once 'Dao.php';
$dao = new Dao();

if(!isset($_SESSION['user_id'])){
    header("Location: progress-tracker-home.php");
}

?>
<html>
  <head>
    <title>Defenses-Progress Tracker</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" type="text/css" href="navigation.css" />
    <link rel="stylesheet" type="text/css" href="progress.css" />
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href='http://fonts.googleapis.com/css?family=Actor' rel='stylesheet' type='text/css'>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

  </head>
  <body>
  <?php include_once 'banner.php';?>
  <?php $page = 'progress-tracker-home.php'; include_once 'navigation.php';
  
  ?>

    <div class="content">
        <div class = "progress-nav"> 
          <ul>
            <li class="progress-active"><a href="progress-tracker-defense.php">Defenses</a></li>
            <li><a href="progress-tracker-army.php">Army</a></li>
            <li><a href="progress-tracker-research.php">Research</a></li>
            <li><a href="progress-tracker-resources.php">Resources</a></li>
            <li><a href="progress-tracker-overall.php">Overall</a></li>
          </ul>
        </div>
        <h2 class="title">Set the levels of your current defensive buildings</h2>
        <form method="POST" action="progress-handler.php">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="script.js"></script>
            <div class="list">

                <h4> Cannons <img src="images/Defenses/Cannon15.png" alt="cannon level 15"></h4>
                <ul class ="cannon-list">
                    <li>
                        <label for="can1">Cannon #1</label>
                        <input id="can1" name="can1" type="range" min="0" max="15" step="1" onchange="canSlider()" 
                            <?php if(isset($_SESSION['cannon-1-val'])){
                                $can1 = $_SESSION['cannon-1-val'];?>
                                value= "<?php echo $can1;?>"
                                <?php }else{?> value="0"
                                <?php } ?>/>
                        <output id="canslide1"></output>
                    </li>
                    <li>
                        <label for="can2">Cannon #2</label>
                        <input id="can2" name="can2" type="range" min="0" max="15" step="1" onchange="canSlider()" 
                            <?php if(isset($_SESSION['cannon-2-val'])){
                                $can2 = $_SESSION['cannon-2-val'];?>
                                value= "<?php echo $can2;?>"
                                <?php }else{?> value="0"
                                <?php } ?>/>
                        <output id="canslide2"></output>
                    </li>
                    <li>
                        <label for="can3">Cannon #3</label>
                        <input id="can3" name="can3" type="range" min="0" max="15" step="1" onchange="canSlider()" 
                        <?php if(isset($_SESSION['cannon-3-val'])){
                                $can3 = $_SESSION['cannon-3-val'];?>
                                value= "<?php echo $can3;?>"
                                <?php }else{?> value="0"
                                <?php } ?>/>
                        <output id="canslide3"></output>
                    </li>
                    <li>
                        <label for="can4">Cannon #4</label>
                        <input id="can4" name="can4" type="range" min="0" max="15" step="1" onchange="canSlider()" 
                            <?php if(isset($_SESSION['cannon-4-val'])){
                                $can4 = $_SESSION['cannon-4-val'];?>
                                value= "<?php echo $can4;?>"
                                <?php }else{?> value="0"
                                <?php } ?>/>
                        <output id="canslide4"></output>
                    </li>
                    <li>
                        <label for="can5">Cannon #5</label>
                        <input id="can5" name="can5" type="range" min="0" max="15" step="1" onchange="canSlider()" 
                            <?php if(isset($_SESSION['cannon-5-val'])){
                                $can5 = $_SESSION['cannon-5-val'];?>
                                value= "<?php echo $can5;?>"
                                <?php }else{?> value="0"
                                <?php } ?>/>
                        <output id="canslide5"></output>
                    </li>
                    <li>
                        <label for="can6">Cannon #6</label>
                        <input id="can6" name="can6" type="range" min="0" max="15" step="1" onchange="canSlider()" 
                            <?php if(isset($_SESSION['cannon-6-val'])){
                                $can6 = $_SESSION['cannon-6-val'];?>
                                value= "<?php echo $can6;?>"
                                <?php }else{?> value="0"
                                <?php } ?>/>
                        <output id="canslide6"></output>
                    </li>
                    <li>
                        <label for="can7">Cannon #7</label>
                        <input id="can7" name="can7" type="range" min="0" max="15" step="1" onchange="canSlider()" 
                            <?php if(isset($_SESSION['cannon-7-val'])){
                                $can7 = $_SESSION['cannon-7-val'];?>
                                value= "<?php echo $can7;?>"
                                <?php }else{?> value="0"
                                <?php } ?>/>
                        <output id="canslide7"></output>
                    </li>
                </ul><br/>

                <h4> Archer Towers <img src="images/Defenses/Archer_Tower15.png" alt="archer tower level 15"></h4>
                <ul class ="archer-tower-list">
                    <li>
                        <label for="arch_tow_1">Archer Tower #1</label>
                        <input id="arch_tow_1" name="arch_tow_1" type="range" min="0" max="15" step="1" onchange="arch_tow_Slider()" 
                            <?php if(isset($_SESSION['arch-tow-1-val'])){
                                $arch1 = $_SESSION['arch-tow-1-val'];?>
                                value= "<?php echo $arch1;?>"
                                <?php }else{?> value="0"
                                <?php } ?>/>
                        <output id="arch_tow_slide1"></output>
                    </li>
                    <li>
                        <label for="arch_tow_2">Archer Tower #2</label>
                        <input id="arch_tow_2" name="arch_tow_2" type="range" min="0" max="15" step="1" onchange="arch_tow_Slider()" 
                            <?php if(isset($_SESSION['arch-tow-2-val'])){
                                $arch2 = $_SESSION['arch-tow-2-val'];?>
                                value= "<?php echo $arch2;?>"
                                <?php }else{?> value="0"
                                <?php } ?>/>
                        <output id="arch_tow_slide2"></output>
                    </li>
                    <li>
                        <label for="arch_tow_3">Archer Tower #3</label>
                        <input id="arch_tow_3" name="arch_tow_3" type="range" min="0" max="15" step="1" onchange="arch_tow_Slider()" 
                            <?php if(isset($_SESSION['arch-tow-3-val'])){
                                $arch3 = $_SESSION['arch-tow-3-val'];?>
                                value= "<?php echo $arch3;?>"
                                <?php }else{?> value="0"
                                <?php } ?>/>
                        <output id="arch_tow_slide3"></output>
                    </li>
                    <li>
                        <label for="arch_tow_4">Archer Tower #4</label>
                        <input id="arch_tow_4" name="arch_tow_4" type="range" min="0" max="15" step="1" onchange="arch_tow_Slider()" 
                            <?php if(isset($_SESSION['arch-tow-4-val'])){
                                $arch4 = $_SESSION['arch-tow-4-val'];?>
                                value= "<?php echo $arch4;?>"
                                <?php }else{?> value="0"
                                <?php } ?>/>
                        <output id="arch_tow_slide4"></output>
                    </li>
                    <li>
                        <label for="arch_tow_5">Archer Tower #5</label>
                        <input id="arch_tow_5" name="arch_tow_5" type="range" min="0" max="15" step="1" onchange="arch_tow_Slider()" 
                            <?php if(isset($_SESSION['arch-tow-5-val'])){
                                $arch5 = $_SESSION['arch-tow-5-val'];?>
                                value= "<?php echo $arch5;?>"
                                <?php }else{?> value="0"
                                <?php } ?>/>
                        <output id="arch_tow_slide5"></output>
                    </li>
                    <li>
                        <label for="arch_tow_6">Archer Tower #6</label>
                        <input id="arch_tow_6" name="arch_tow_6" type="range" min="0" max="15" step="1" onchange="arch_tow_Slider()" 
                            <?php if(isset($_SESSION['arch-tow-6-val'])){
                                $arch6 = $_SESSION['arch-tow-6-val'];?>
                                value= "<?php echo $arch6;?>"
                                <?php }else{?> value="0"
                                <?php } ?>/>
                        <output id="arch_tow_slide6"></output>
                    </li>
                    <li>
                        <label for="arch_tow_7">Archer Tower #7</label>
                        <input id="arch_tow_7" name="arch_tow_7" type="range" min="0" max="15" step="1" onchange="arch_tow_Slider()" 
                            <?php if(isset($_SESSION['arch-tow-7-val'])){
                                $arch7 = $_SESSION['arch-tow-7-val'];?>
                                value= "<?php echo $arch7;?>"
                                <?php }else{?> value="0"
                                <?php } ?>/>
                        <output id="arch_tow_slide7"></output>
                    </li>
                    <li>
                        <label for="arch_tow_8">Archer Tower #8</label>
                        <input id="arch_tow_8" name="arch_tow_8" type="range" min="0" max="15" step="1" onchange="arch_tow_Slider()" 
                            <?php if(isset($_SESSION['arch-tow-8-val'])){
                                $arch8 = $_SESSION['arch-tow-8-val'];?>
                                value= "<?php echo $arch8;?>"
                                <?php }else{?> value="0"
                                <?php } ?>/>
                        <output id="arch_tow_slide8"></output>
                    </li>
                </ul><br/>

                <h4> Wizard Towers <img src="images/Defenses/Wizard_Tower10.png" alt="wizard tower level 10"></h4>
                <ul class ="wizard-tower-list">
                    <li>
                        <label for="wiz_tow_1">Wizard Tower #1</label>
                        <input id="wiz_tow_1" name="wiz_tow_1" type="range" min="0" max="10" step="1" onchange="wiz_tow_Slider()" 
                            <?php if(isset($_SESSION['wiz-tow-1-val'])){
                                $wiz1 = $_SESSION['wiz-tow-1-val'];?>
                                value= "<?php echo $wiz1;?>"
                                <?php }else{?> value="0"
                                <?php } ?>/>
                        <output id="wiz_tow_slide1"></output>
                    </li>
                    <li>
                        <label for="wiz_tow_2">Wizard Tower #2</label>
                        <input id="wiz_tow_2" name="wiz_tow_2" type="range" min="0" max="10" step="1" onchange="wiz_tow_Slider()" 
                            <?php if(isset($_SESSION['wiz-tow-2-val'])){
                                $wiz2 = $_SESSION['wiz-tow-2-val'];?>
                                value= "<?php echo $wiz2;?>"
                                <?php }else{?> value="0"
                                <?php } ?>/>
                        <output id="wiz_tow_slide2"></output>
                    </li>
                    <li>
                        <label for="wiz_tow_3">Wizard Tower #3</label>
                        <input id="wiz_tow_3" name="wiz_tow_3" type="range" min="0" max="10" step="1" onchange="wiz_tow_Slider()" 
                            <?php if(isset($_SESSION['wiz-tow-3-val'])){
                                $wiz3 = $_SESSION['wiz-tow-3-val'];?>
                                value= "<?php echo $wiz3;?>"
                                <?php }else{?> value="0"
                                <?php } ?>/>
                        <output id="wiz_tow_slide3"></output>
                    </li>
                    <li>
                        <label for="wiz_tow_4">Wizard Tower #4</label>
                        <input id="wiz_tow_4" name="wiz_tow_4" type="range" min="0" max="10" step="1" onchange="wiz_tow_Slider()" 
                            <?php if(isset($_SESSION['wiz-tow-4-val'])){
                                $wiz4 = $_SESSION['wiz-tow-4-val'];?>
                                value= "<?php echo $wiz4;?>"
                                <?php }else{?> value="0"
                                <?php } ?>/>
                        <output id="wiz_tow_slide4"></output>
                    </li>
                    <li>
                        <label for="wiz_tow_5">Wizard Tower #5</label>
                        <input id="wiz_tow_5" name="wiz_tow_5" type="range" min="0" max="10" step="1" onchange="wiz_tow_Slider()" 
                            <?php if(isset($_SESSION['wiz-tow-5-val'])){
                                $wiz5 = $_SESSION['wiz-tow-5-val'];?>
                                value= "<?php echo $wiz5;?>"
                                <?php }else{?> value="0"
                                <?php } ?>/>
                        <output id="wiz_tow_slide5"></output>
                    </li>
                </ul><br/>

                <h4> Mortars <img src="images/Defenses/Mortar10.png" alt="mortar level 10"></h4>
                <ul class ="mortar-list">
                    <li>
                        <label for="mor1">Mortar #1</label>
                        <input id="mor1" name="mor1" type="range" min="0" max="10" step="1" onchange="mortar_Slider()" 
                            <?php if(isset($_SESSION['mortar-1-val'])){
                                $mor1 = $_SESSION['mortar-1-val'];?>
                                value= "<?php echo $mor1;?>"
                                <?php }else{?> value="0"
                                <?php } ?>/>
                        <output id="mort_slide1"></output>
                    </li>
                    <li>
                        <label for="mor2">Mortar #2</label>
                        <input id="mor2" name="mor2" type="range" min="0" max="10" step="1" onchange="mortar_Slider()" 
                            <?php if(isset($_SESSION['mortar-2-val'])){
                                $mor2 = $_SESSION['mortar-2-val'];?>
                                value= "<?php echo $mor2;?>"
                                <?php }else{?> value="0"
                                <?php } ?>/>
                        <output id="mort_slide2"></output>
                    </li>
                    <li>
                        <label for="mor3">Mortar #3</label>
                        <input id="mor3" name="mor3" type="range" min="0" max="10" step="1" onchange="mortar_Slider()" 
                        <?php if(isset($_SESSION['mortar-3-val'])){
                                $mor3 = $_SESSION['mortar-3-val'];?>
                                value= "<?php echo $mor3;?>"
                                <?php }else{?> value="0"
                                <?php } ?>/>
                        <output id="mort_slide3"></output>
                    </li>
                    <li>
                        <label for="mor4">Mortar #4</label>
                        <input id="mor4" name="mor4" type="range" min="0" max="10" step="1" onchange="mortar_Slider()" 
                        <?php if(isset($_SESSION['mortar-4-val'])){
                                $mor4 = $_SESSION['mortar-4-val'];?>
                                value= "<?php echo $mor4;?>"
                                <?php }else{?> value="0"
                                <?php } ?>/>
                        <output id="mort_slide4"></output>
                    </li>
                </ul><br/>

                <h4> Air Defenses <img src="images/Defenses/Air_Defense9.png" alt="air defense level 9"></h4>
                <ul class ="air-def-list">
                    <li>
                        <label for="air_def1">Air Defense #1</label>
                        <input id="air_def1" name="air_def1" type="range" min="0" max="9" step="1" onchange="air_def_Slider()" 
                        <?php if(isset($_SESSION['air-def-1-val'])){
                                $air_def1 = $_SESSION['air-def-1-val'];?>
                                value= "<?php echo $air_def1;?>"
                                <?php }else{?> value="0"
                                <?php } ?>/>
                        <output id="air_def_slide1"></output>
                    </li>
                    <li>
                        <label for="air_def2">Air Defense #2</label>
                        <input id="air_def2" name="air_def2" type="range" min="0" max="9" step="1" onchange="air_def_Slider()" 
                        <?php if(isset($_SESSION['air-def-2-val'])){
                                $air_def2 = $_SESSION['air-def-2-val'];?>
                                value= "<?php echo $air_def2;?>"
                                <?php }else{?> value="0"
                                <?php } ?>/>
                        <output id="air_def_slide2"></output>
                    </li>
                    <li>
                        <label for="air_def3">Air Defense #3</label>
                        <input id="air_def3" name="air_def3" type="range" min="0" max="9" step="1" onchange="air_def_Slider()" 
                        <?php if(isset($_SESSION['air-def-3-val'])){
                                $air_def3 = $_SESSION['air-def-3-val'];?>
                                value= "<?php echo $air_def3;?>"
                                <?php }else{?> value="0"
                                <?php } ?>/>
                        <output id="air_def_slide3"></output>
                    </li>
                    <li>
                        <label for="air_def4">Air Defense #4</label>
                        <input id="air_def4" name="air_def4" type="range" min="0" max="9" step="1" onchange="air_def_Slider()" 
                        <?php if(isset($_SESSION['air-def-4-val'])){
                                $air_def4 = $_SESSION['air-def-4-val'];?>
                                value= "<?php echo $air_def4;?>"
                                <?php }else{?> value="0"
                                <?php } ?>/>
                        <output id="air_def_slide4"></output>
                    </li>
                </ul><br/>

                <h4> Air Sweepers <img src="images/Defenses/Air_Sweeper7.png" alt="air sweeper level 7"></h4>
                <ul class ="air-sweep-list">
                    <li>
                        <label for="air_sweep1">Air Sweeper #1</label>
                        <input id="air_sweep1" name="air_sweep1" type="range" min="0" max="7" step="1" onchange="air_sweep_Slider()" 
                        <?php if(isset($_SESSION['air-sweep-1-val'])){
                                $air_swe1 = $_SESSION['air-sweep-1-val'];?>
                                value= "<?php echo $air_swe1;?>"
                                <?php }else{?> value="0"
                                <?php } ?>/>
                        <output id="air_sweep_slide1"></output>
                    </li>
                    <li>
                        <label for="air_sweep2">Air Sweeper #2</label>
                        <input id="air_sweep2" name="air_sweep2" type="range" min="0" max="7" step="1" onchange="air_sweep_Slider()" 
                        <?php if(isset($_SESSION['air-sweep-2-val'])){
                                $air_swe2 = $_SESSION['air-sweep-2-val'];?>
                                value= "<?php echo $air_swe2;?>"
                                <?php }else{?> value="0"
                                <?php } ?>/>
                        <output id="air_sweep_slide2"></output>
                    </li>
                </ul><br/>

                <h4> Hidden Teslas <img src="images/Defenses/Hidden_Tesla9.png" alt="Hidden tesla level 9"></h4>
                <ul class ="hid-tes-list">
                    <li>
                        <label for="hid_tes1">Hidden Tesla #1</label>
                        <input id="hid_tes1" name="hid_tes1" type="range" min="0" max="9" step="1" onchange="hid_tes_Slider()" 
                        <?php if(isset($_SESSION['hid-tes-1-val'])){
                                $tes1 = $_SESSION['hid-tes-1-val'];?>
                                value= "<?php echo $tes1;?>"
                                <?php }else{?> value="0"
                                <?php } ?>/>
                        <output id="hid_tes_slide1"></output>
                    </li>
                    <li>
                        <label for="hid_tes2">Hidden Tesla #2</label>
                        <input id="hid_tes2" name="hid_tes2" type="range" min="0" max="9" step="1" onchange="hid_tes_Slider()" 
                        <?php if(isset($_SESSION['hid-tes-2-val'])){
                                $tes2 = $_SESSION['hid-tes-2-val'];?>
                                value= "<?php echo $tes2;?>"
                                <?php }else{?> value="0"
                                <?php } ?>/>
                        <output id="hid_tes_slide2"></output>
                    </li>
                    <li>
                        <label for="hid_tes3">Hidden Tesla #3</label>
                        <input id="hid_tes3" name="hid_tes3" type="range" min="0" max="9" step="1" onchange="hid_tes_Slider()" 
                        <?php if(isset($_SESSION['hid-tes-3-val'])){
                                $tes3 = $_SESSION['hid-tes-3-val'];?>
                                value= "<?php echo $tes3;?>"
                                <?php }else{?> value="0"
                                <?php } ?>/>
                        <output id="hid_tes_slide3"></output>
                    </li>
                    <li>
                        <label for="hid_tes4">Hidden Tesla #4</label>
                        <input id="hid_tes4" name="hid_tes4" type="range" min="0" max="9" step="1" onchange="hid_tes_Slider()" 
                        <?php if(isset($_SESSION['hid-tes-4-val'])){
                                $tes4 = $_SESSION['hid-tes-4-val'];?>
                                value= "<?php echo $tes4;?>"
                                <?php }else{?> value="0"
                                <?php } ?>/>
                        <output id="hid_tes_slide4"></output>
                    </li>
                </ul><br/>
                
                <h4> Bomb Towers <img src="images/Defenses/Bomb_Tower6.png" alt="Bomb tower level 6"></h4>
                <ul class ="bomb-tower-list">
                    <li>
                        <label for="bom_tow1">Bomb Tower #1</label>
                        <input id="bom_tow1" name="bom_tow1" type="range" min="0" max="6" step="1" onchange="bom_tow_Slider()" 
                        <?php if(isset($_SESSION['bomb-tow-1-val'])){
                                $bom_tow1 = $_SESSION['bomb-tow-1-val'];?>
                                value= "<?php echo $bom_tow1;?>"
                                <?php }else{?> value="0"
                                <?php } ?>/>
                        <output id="bom_tow_slide1"></output>
                    </li>
                    <li>
                        <label for="bom_tow2">Bomb Tower #2</label>
                        <input id="bom_tow2" name="bom_tow2" type="range" min="0" max="6" step="1" onchange="bom_tow_Slider()" 
                        <?php if(isset($_SESSION['bomb-tow-2-val'])){
                                $bom_tow2 = $_SESSION['bomb-tow-2-val'];?>
                                value= "<?php echo $bom_tow2;?>"
                                <?php }else{?> value="0"
                                <?php } ?>/>
                        <output id="bom_tow_slide2"></output>
                    </li>
                </ul><br/>

                <h4> Xbows <img src="images/Defenses/Xbow_Ground5.png" alt="Xbow ground version level 5"></h4>
                <ul class ="xbow-list">
                    <li>
                        <label for="xbow1">Xbow #1</label>
                        <input id="xbow1" name="xbow1" type="range" min="0" max="5" step="1" onchange="xbow_Slider()" 
                        <?php if(isset($_SESSION['xbow-1-val'])){
                                $xbow1 = $_SESSION['xbow-1-val'];?>
                                value= "<?php echo $xbow1;?>"
                                <?php }else{?> value="0"
                                <?php } ?>/>
                        <output id="xbow_slide1"></output>
                    </li>
                    <li>
                        <label for="xbow2">Xbow #2</label>
                        <input id="xbow2" name="xbow2" type="range" min="0" max="5" step="1" onchange="xbow_Slider()" 
                        <?php if(isset($_SESSION['xbow-2-val'])){
                                $xbow2 = $_SESSION['xbow-2-val'];?>
                                value= "<?php echo $xbow2;?>"
                                <?php }else{?> value="0"
                                <?php } ?>/>
                        <output id="xbow_slide2"></output>
                    </li>
                    <li>
                        <label for="xbow3">Xbow #3</label>
                        <input id="xbow3" name="xbow3" type="range" min="0" max="5" step="1" onchange="xbow_Slider()" 
                        <?php if(isset($_SESSION['xbow-3-val'])){
                                $xbow3 = $_SESSION['xbow-3-val'];?>
                                value= "<?php echo $xbow3;?>"
                                <?php }else{?> value="0"
                                <?php } ?>/>
                        <output id="xbow_slide3"></output>
                    </li>
                    <li>
                        <label for="xbow4">Xbow #4</label>
                        <input id="xbow4" name="xbow4" type="range" min="0" max="5" step="1" onchange="xbow_Slider()" 
                        <?php if(isset($_SESSION['xbow-4-val'])){
                                $xbow4 = $_SESSION['xbow-4-val'];?>
                                value= "<?php echo $xbow4;?>"
                                <?php }else{?> value="0"
                                <?php } ?>/>
                        <output id="xbow_slide4"></output>
                    </li>
                </ul><br/>

                <h4> Inferno Towers <img src="images/Defenses/Inferno_Tower_Single5.png" alt="Inferno tower level 5"></h4>
                <ul class ="inferno-tower-list">
                    <li>
                        <label for="inf_tow1">Inferno Tower #1</label>
                        <input id="inf_tow1" name="inf_tow1" type="range" min="0" max="5" step="1" onchange="inf_tow_Slider()" 
                        <?php if(isset($_SESSION['inf-tow-1-val'])){
                                $inf_tow1 = $_SESSION['inf-tow-1-val'];?>
                                value= "<?php echo $inf_tow1;?>"
                                <?php }else{?> value="0"
                                <?php } ?>/>
                        <output id="inf_tow_slide1"></output>
                    </li>
                    <li>
                        <label for="inf_tow2">Inferno Tower #2</label>
                        <input id="inf_tow2" name="inf_tow2" type="range" min="0" max="5" step="1" onchange="inf_tow_Slider()" 
                        <?php if(isset($_SESSION['inf-tow-2-val'])){
                                $inf_tow2 = $_SESSION['inf-tow-2-val'];?>
                                value= "<?php echo $inf_tow2;?>"
                                <?php }else{?> value="0"
                                <?php } ?>/>
                        <output id="inf_tow_slide2"></output>
                    </li>
                </ul><br/>

                <h4> Eagle Artillery <img src="images/Defenses/Eagle_Artillery2.png" alt="Eagle artillery level 2"></h4>
                <ul class ="eagle-artillery-list">
                    <li>
                        <label for="eag_art1">Eagle Artillery #1</label>
                        <input id="eag_art1" name="eag_art1" type="range" min="0" max="2" step="1" onchange="eag_art_Slider()" 
                        <?php if(isset($_SESSION['eag-art-1-val'])){
                                $eag_art1 = $_SESSION['eag-art-1-val'];?>
                                value= "<?php echo $eag_art1;?>"
                                <?php }else{?> value="0"
                                <?php } ?>/>
                        <output id="eag_art_slide1"></output>
                    </li>
                </ul><br/>
                
                <h4> Bombs <img src="images/Traps/bomb_7.png" alt="bomb level 7"></h4>
                <ul class ="bombs-list">
                    <li>
                        <label for="bombs1">Bomb #1</label>
                        <input id="bombs1" name="bombs1" type="range" min="0" max="7" step="1" onchange="bombs_Slider()" 
                        <?php if(isset($_SESSION['bombs-1-val'])){
                                $bomb1 = $_SESSION['bombs-1-val'];?>
                                value= "<?php echo $bomb1;?>"
                                <?php }else{?> value="0"
                                <?php } ?>/>
                        <output id="bombs_slide1"></output>
                    </li>
                    <li>
                        <label for="bombs2">Bomb #2</label>
                        <input id="bombs2" name="bombs2" type="range" min="0" max="7" step="1" onchange="bombs_Slider()" 
                        <?php if(isset($_SESSION['bombs-2-val'])){
                                $bomb2 = $_SESSION['bombs-2-val'];?>
                                value= "<?php echo $bomb2;?>"
                                <?php }else{?> value="0"
                                <?php } ?>/>
                        <output id="bombs_slide2"></output>
                    </li>
                    <li>
                        <label for="bombs3">Bomb #3</label>
                        <input id="bombs3" name="bombs3" type="range" min="0" max="7" step="1" onchange="bombs_Slider()" 
                        <?php if(isset($_SESSION['bombs-3-val'])){
                                $bomb3 = $_SESSION['bombs-3-val'];?>
                                value= "<?php echo $bomb3;?>"
                                <?php }else{?> value="0"
                                <?php } ?>/>
                        <output id="bombs_slide3"></output>
                    </li>
                    <li>
                        <label for="bombs4">Bomb #4</label>
                        <input id="bombs4" name="bombs4" type="range" min="0" max="7" step="1" onchange="bombs_Slider()" 
                        <?php if(isset($_SESSION['bombs-4-val'])){
                                $bomb4 = $_SESSION['bombs-4-val'];?>
                                value= "<?php echo $bomb4;?>"
                                <?php }else{?> value="0"
                                <?php } ?>/>
                        <output id="bombs_slide4"></output>
                    </li>
                    <li>
                        <label for="bombs5">Bomb #5</label>
                        <input id="bombs5" name="bombs5" type="range" min="0" max="7" step="1" onchange="bombs_Slider()" 
                        <?php if(isset($_SESSION['bombs-5-val'])){
                                $bomb5 = $_SESSION['bombs-5-val'];?>
                                value= "<?php echo $bomb5;?>"
                                <?php }else{?> value="0"
                                <?php } ?>/>
                        <output id="bombs_slide5"></output>
                    </li>
                    <li>
                        <label for="bombs6">Bomb #6</label>
                        <input id="bombs6" name="bombs6" type="range" min="0" max="7" step="1" onchange="bombs_Slider()" 
                        <?php if(isset($_SESSION['bombs-6-val'])){
                                $bomb6 = $_SESSION['bombs-6-val'];?>
                                value= "<?php echo $bomb6;?>"
                                <?php }else{?> value="0"
                                <?php } ?>/>
                        <output id="bombs_slide6"></output>
                    </li>
                </ul><br/>

                <h4> Giant Bombs <img src="images/Traps/giant_bomb_5.png" alt="Giant bomb level 5"></h4>
                <ul class ="giant-bomb-list">
                    <li>
                        <label for="gia_bomb1">Giant Bomb #1</label>
                        <input id="gia_bomb1" name="gia_bomb1" type="range" min="0" max="5" step="1" onchange="gia_bomb_Slider()" 
                        <?php if(isset($_SESSION['gia-bomb-1-val'])){
                                $gia_bomb1 = $_SESSION['gia-bomb-1-val'];?>
                                value= "<?php echo $gia_bomb1;?>"
                                <?php }else{?> value="0"
                                <?php } ?>/>
                        <output id="gia_bomb_slide1"></output>
                    </li>
                    <li>
                        <label for="gia_bomb2">Giant Bomb #2</label>
                        <input id="gia_bomb2" name="gia_bomb2" type="range" min="0" max="5" step="1" onchange="gia_bomb_Slider()" 
                        <?php if(isset($_SESSION['gia-bomb-2-val'])){
                                $gia_bomb2 = $_SESSION['gia-bomb-2-val'];?>
                                value= "<?php echo $gia_bomb2;?>"
                                <?php }else{?> value="0"
                                <?php } ?>/>
                        <output id="gia_bomb_slide2"></output>
                    </li>
                    <li>
                        <label for="gia_bomb3">Giant Bomb #3</label>
                        <input id="gia_bomb3" name="gia_bomb3" type="range" min="0" max="5" step="1" onchange="gia_bomb_Slider()" 
                        <?php if(isset($_SESSION['gia-bomb-3-val'])){
                                $gia_bomb3 = $_SESSION['gia-bomb-3-val'];?>
                                value= "<?php echo $gia_bomb3;?>"
                                <?php }else{?> value="0"
                                <?php } ?>/>
                        <output id="gia_bomb_slide3"></output>
                    </li>
                    <li>
                        <label for="gia_bomb4">Giant Bomb #4</label>
                        <input id="gia_bomb4" name="gia_bomb4" type="range" min="0" max="5" step="1" onchange="gia_bomb_Slider()" 
                        <?php if(isset($_SESSION['gia-bomb-4-val'])){
                                $gia_bomb4 = $_SESSION['gia-bomb-4-val'];?>
                                value= "<?php echo $gia_bomb4;?>"
                                <?php }else{?> value="0"
                                <?php } ?>/>
                        <output id="gia_bomb_slide4"></output>
                    </li>
                    <li>
                        <label for="gia_bomb5">Giant Bomb #5</label>
                        <input id="gia_bomb5" name="gia_bomb5" type="range" min="0" max="5" step="1" onchange="gia_bomb_Slider()" 
                        <?php if(isset($_SESSION['gia-bomb-5-val'])){
                                $gia_bomb5 = $_SESSION['gia-bomb-5-val'];?>
                                value= "<?php echo $gia_bomb5;?>"
                                <?php }else{?> value="0"
                                <?php } ?>/>
                        <output id="gia_bomb_slide5"></output>
                    </li>
                </ul><br/>

                <h4> Air Bombs <img src="images/Traps/air_bomb_5.png" alt="Air bomb level 5"></h4>
                <ul class ="air-bomb-list">
                    <li>
                        <label for="air_bomb1">Air Bomb #1</label>
                        <input id="air_bomb1" name="air_bomb1" type="range" min="0" max="5" step="1" onchange="air_bomb_Slider()" 
                        <?php if(isset($_SESSION['air-bomb-1-val'])){
                                $air_bomb1 = $_SESSION['air-bomb-1-val'];?>
                                value= "<?php echo $air_bomb1;?>"
                                <?php }else{?> value="0"
                                <?php } ?>/>
                        <output id="air_bomb_slide1"></output>
                    </li>
                    <li>
                        <label for="air_bomb2">Air Bomb #2</label>
                        <input id="air_bomb2" name="air_bomb2" type="range" min="0" max="5" step="1" onchange="air_bomb_Slider()" 
                        <?php if(isset($_SESSION['air-bomb-2-val'])){
                                $air_bomb2 = $_SESSION['air-bomb-2-val'];?>
                                value= "<?php echo $air_bomb2;?>"
                                <?php }else{?> value="0"
                                <?php } ?>/>
                        <output id="air_bomb_slide2"></output>
                    </li>
                    <li>
                        <label for="air_bomb3">Air Bomb #3</label>
                        <input id="air_bomb3" name="air_bomb3" type="range" min="0" max="5" step="1" onchange="air_bomb_Slider()" 
                        <?php if(isset($_SESSION['air-bomb-3-val'])){
                                $air_bomb3 = $_SESSION['air-bomb-3-val'];?>
                                value= "<?php echo $air_bomb3;?>"
                                <?php }else{?> value="0"
                                <?php } ?>/>
                        <output id="air_bomb_slide3"></output>
                    </li>
                    <li>
                        <label for="air_bomb4">Air Bomb #4</label>
                        <input id="air_bomb4" name="air_bomb4" type="range" min="0" max="5" step="1" onchange="air_bomb_Slider()" 
                        <?php if(isset($_SESSION['air-bomb-4-val'])){
                                $air_bomb4 = $_SESSION['air-bomb-4-val'];?>
                                value= "<?php echo $air_bomb4;?>"
                                <?php }else{?> value="0"
                                <?php } ?>/>
                        <output id="air_bomb_slide4"></output>
                    </li>
                    <li>
                        <label for="air_bomb5">Air Bomb #5</label>
                        <input id="air_bomb5" name="air_bomb5" type="range" min="0" max="5" step="1" onchange="air_bomb_Slider()" 
                        <?php if(isset($_SESSION['air-bomb-5-val'])){
                                $air_bomb5 = $_SESSION['air-bomb-5-val'];?>
                                value= "<?php echo $air_bomb5;?>"
                                <?php }else{?> value="0"
                                <?php } ?>/>
                        <output id="air_bomb_slide5"></output>
                    </li>
                </ul><br/>

                <h4> Seeking Air Mine <img src="images/Traps/seeking_air_mine_3.png" alt="Seeking Air mine level 3"></h4>
                <ul class ="air-mine-list">
                    <li>
                        <label for="air_mine1">Seeking Air Mine #1</label>
                        <input id="air_mine1" name="air_mine1" type="range" min="0" max="3" step="1" onchange="air_mine_Slider()" 
                        <?php if(isset($_SESSION['air-mine-1-val'])){
                                $air_mine1 = $_SESSION['air-mine-1-val'];?>
                                value= "<?php echo $air_mine1;?>"
                                <?php }else{?> value="0"
                                <?php } ?>/>
                        <output id="air_mine_slide1"></output>
                    </li>
                    <li>
                        <label for="air_mine2">Seeking Air Mine #2</label>
                        <input id="air_mine2" name="air_mine2" type="range" min="0" max="3" step="1" onchange="air_mine_Slider()" 
                        <?php if(isset($_SESSION['air-mine-2-val'])){
                                $air_mine2 = $_SESSION['air-mine-2-val'];?>
                                value= "<?php echo $air_mine2;?>"
                                <?php }else{?> value="0"
                                <?php } ?>/>
                        <output id="air_mine_slide2"></output>
                    </li>
                    <li>
                        <label for="air_mine3">Seeking Air Mine #3</label>
                        <input id="air_mine3" name="air_mine3" type="range" min="0" max="3" step="1" onchange="air_mine_Slider()" 
                        <?php if(isset($_SESSION['air-mine-3-val'])){
                                $air_mine3 = $_SESSION['air-mine-3-val'];?>
                                value= "<?php echo $air_mine3;?>"
                                <?php }else{?> value="0"
                                <?php } ?>/>
                        <output id="air_mine_slide3"></output>
                    </li>
                    <li>
                        <label for="air_mine4">Seeking Air Mine #4</label>
                        <input id="air_mine4" name="air_mine4" type="range" min="0" max="3" step="1" onchange="air_mine_Slider()" 
                        <?php if(isset($_SESSION['air-mine-4-val'])){
                                $air_mine4 = $_SESSION['air-mine-4-val'];?>
                                value= "<?php echo $air_mine4;?>"
                                <?php }else{?> value="0"
                                <?php } ?>/>
                        <output id="air_mine_slide4"></output>
                    </li>
                    <li>
                        <label for="air_mine5">Seeking Air Mine #5</label>
                        <input id="air_mine5" name="air_mine5" type="range" min="0" max="3" step="1" onchange="air_mine_Slider()" 
                        <?php if(isset($_SESSION['air-mine-5-val'])){
                                $air_mine5 = $_SESSION['air-mine-5-val'];?>
                                value= "<?php echo $air_mine5;?>"
                                <?php }else{?> value="0"
                                <?php } ?>/>
                        <output id="air_mine_slide5"></output>
                    </li>
                </ul><br/>

                <h4> Spring Traps <img src="images/Traps/Spring_Trap5.png" alt="Spring trap level 5"></h4>
                <ul class ="spring-trap-list">
                    <li>
                        <label for="spring_trap1">Spring Trap #1</label>
                        <input id="spring_trap1" name="spring_trap1" type="range" min="0" max="5" step="1" onchange="spring_trap_Slider()" 
                        <?php if(isset($_SESSION['spring-trap-1-val'])){
                                $spring1 = $_SESSION['spring-trap-1-val'];?>
                                value= "<?php echo $spring1;?>"
                                <?php }else{?> value="0"
                                <?php } ?>/>
                        <output id="spring_trap_slide1"></output>
                    </li>
                    <li>
                        <label for="spring_trap2">Spring Trap #2</label>
                        <input id="spring_trap2" name="spring_trap2" type="range" min="0" max="5" step="1" onchange="spring_trap_Slider()" 
                        <?php if(isset($_SESSION['spring-trap-2-val'])){
                                $spring2 = $_SESSION['spring-trap-2-val'];?>
                                value= "<?php echo $spring2;?>"
                                <?php }else{?> value="0"
                                <?php } ?>/>
                        <output id="spring_trap_slide2"></output>
                    </li>
                    <li>
                        <label for="spring_trap3">Spring Trap #3</label>
                        <input id="spring_trap3" name="spring_trap3" type="range" min="0" max="5" step="1" onchange="spring_trap_Slider()" 
                        <?php if(isset($_SESSION['spring-trap-3-val'])){
                                $spring3 = $_SESSION['spring-trap-3-val'];?>
                                value= "<?php echo $spring3;?>"
                                <?php }else{?> value="0"
                                <?php } ?>/>
                        <output id="spring_trap_slide3"></output>
                    </li>
                    <li>
                        <label for="spring_trap4">Spring Trap #4</label>
                        <input id="spring_trap4" name="spring_trap4" type="range" min="0" max="5" step="1" onchange="spring_trap_Slider()" 
                        <?php if(isset($_SESSION['spring-trap-4-val'])){
                                $spring4 = $_SESSION['spring-trap-4-val'];?>
                                value= "<?php echo $spring4;?>"
                                <?php }else{?> value="0"
                                <?php } ?>/>
                        <output id="spring_trap_slide4"></output>
                    </li>                    
                    <li>
                        <label for="spring_trap5">Spring Trap #5</label>
                        <input id="spring_trap5" name="spring_trap5" type="range" min="0" max="5" step="1" onchange="spring_trap_Slider()" 
                        <?php if(isset($_SESSION['spring-trap-5-val'])){
                                $spring5 = $_SESSION['spring-trap-5-val'];?>
                                value= "<?php echo $spring5;?>"
                                <?php }else{?> value="0"
                                <?php } ?>/>
                        <output id="spring_trap_slide5"></output>
                    </li>
                    <li>
                        <label for="spring_trap6">Spring Trap #6</label>
                        <input id="spring_trap6" name="spring_trap6" type="range" min="0" max="5" step="1" onchange="spring_trap_Slider()" 
                        <?php if(isset($_SESSION['spring-trap-6-val'])){
                                $spring6 = $_SESSION['spring-trap-6-val'];?>
                                value= "<?php echo $spring6;?>"
                                <?php }else{?> value="0"
                                <?php } ?>/>
                        <output id="spring_trap_slide6"></output>
                    </li>
                </ul><br/>

                <h4> Skeleton Traps <img src="images/Traps/skeleton_trap_4.png" alt="skeleton trap level 4"></h4>
                <ul class ="skeleton-trap-list">
                    <li>
                        <label for="skel_trap1">Skeleton Trap #1</label>
                        <input id="skel_trap1" name="skel_trap1" type="range" min="0" max="4" step="1" onchange="skel_trap_Slider()" 
                        <?php if(isset($_SESSION['skel-trap-1-val'])){
                                $skel1 = $_SESSION['skel-trap-1-val'];?>
                                value= "<?php echo $skel1;?>"
                                <?php }else{?> value="0"
                                <?php } ?>/>
                        <output id="skel_trap_slide1"></output>
                    </li>
                    <li>
                        <label for="skel_trap2">Skeleton Trap #2</label>
                        <input id="skel_trap2" name="skel_trap2" type="range" min="0" max="4" step="1" onchange="skel_trap_Slider()" 
                        <?php if(isset($_SESSION['skel-trap-2-val'])){
                                $skel2 = $_SESSION['skel-trap-2-val'];?>
                                value= "<?php echo $skel2;?>"
                                <?php }else{?> value="0"
                                <?php } ?>/>
                        <output id="skel_trap_slide2"></output>
                    </li>
                    <li>
                        <label for="skel_trap3">Skeleton Trap #3</label>
                        <input id="skel_trap3" name="skel_trap3" type="range" min="0" max="4" step="1" onchange="skel_trap_Slider()" 
                        <?php if(isset($_SESSION['skel-trap-3-val'])){
                                $skel3 = $_SESSION['skel-trap-3-val'];?>
                                value= "<?php echo $skel3;?>"
                                <?php }else{?> value="0"
                                <?php } ?>/>
                        <output id="skel_trap_slide3"></output>
                    </li>
                </ul><br/>

                <!--
                <h4> Walls <img src="images/Defenses/Wall12.png" alt="wall level 12"></h4>
                <ul class ="wall-list">
                    <li>
                        <label><img src="images/Defenses/Wall1.png" alt="wall level 1">  Level 1 Amount: </label>
                        <input id="wall1" type="number" min="0" max="300" step="1" value="0" />
                    </li>
                    <li>
                        <label><img src="images/Defenses/Wall2.png" alt="wall level 2">  Level 2 Amount: </label>
                        <input id="wall2" type="number" min="0" max="300" step="1" value="0" />
                    </li>
                    <li>
                        <label><img src="images/Defenses/Wall3.png" alt="wall level 3">  Level 3 Amount: </label>
                        <input id="wall3" type="number" min="0" max="300" step="1" value="0" />
                    </li>
                    <li>
                        <label><img src="images/Defenses/Wall4.png" alt="wall level 4">  Level 4 Amount: </label>
                        <input id="wall4" type="number" min="0" max="300" step="1" value="0" />
                    </li>
                    <li>
                        <label><img src="images/Defenses/Wall5.png" alt="wall level 5">  Level 5 Amount: </label>
                        <input id="wall5" type="number" min="0" max="300" step="1" value="0" />
                    </li>
                    <li>
                        <label><img src="images/Defenses/Wall6.png" alt="wall level 6">  Level 6 Amount: </label>
                        <input id="wall6" type="number" min="0" max="300" step="1" value="0" />
                    </li>
                    <li>
                        <label><img src="images/Defenses/Wall7.png" alt="wall level 7">  Level 7 Amount: </label>
                        <input id="wall7" type="number" min="0" max="300" step="1" value="0" />
                    </li>
                    <li>
                        <label><img src="images/Defenses/Wall8.png" alt="wall level 8">  Level 8 Amount: </label>
                        <input id="wall8" type="number" min="0" max="300" step="1" value="0" />
                    </li>
                    <li>
                        <label><img src="images/Defenses/Wall9.png" alt="wall level 9">  Level 9 Amount: </label>
                        <input id="wall9" type="number" min="0" max="300" step="1" value="0" />
                    </li>
                    <li>
                        <label><img src="images/Defenses/Wall10.png" alt="wall level 10">  Level 10 Amount: </label>
                        <input id="wall10" type="number" min="0" max="300" step="1" value="0" />
                    </li>
                    <li>
                        <label><img src="images/Defenses/Wall11.png" alt="wall level 11">  Level 11 Amount: </label>
                        <input id="wall11" type="number" min="0" max="300" step="1" value="0" />
                    </li>
                    <li>
                        <label><img src="images/Defenses/Wall12.png" alt="wall level 12">  Level 12 Amount: </label>
                        <input id="wall12" type="number" min="0" max="300" step="1" value="0" />
                    </li>
                </ul><br/>  -->

                <input class="progress-submit" type="submit" value="Submit">
            </div> 
        </form>
    </div>

<?php include_once 'footer.php'; ?>
  </body>
</html>