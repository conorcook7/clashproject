<?php
session_start();
require_once 'Dao.php';
$dao = new Dao();

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
  <?php $page = 'progress-tracker-home.php'; include_once 'navigation.php';?>
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
        <h3>Set the levels of your current defensive buildings</h3>
        <form method="POST" name="defense-form" action="">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="script.js"></script>
            <div class="list">
                <h4> Cannons <img src="images/Defenses/Cannon15.png" alt="cannon level 15"></h4>
                <ul class ="cannon-list">
                    <li>
                        <label>Cannon #1</label>
                        <input id="can1" type="range" min="0" max="15" step="1" onchange="canSlider()" value="0" />
                        <output id="canslide1"></output>
                    </li>
                    <li>
                        <label>Cannon #2</label>
                        <input id="can2" type="range" min="0" max="15" step="1" onchange="canSlider()" value="0" />
                        <output id="canslide2"></output>
                    </li>
                    <li>
                        <label>Cannon #3</label>
                        <input id="can3" type="range" min="0" max="15" step="1" onchange="canSlider()" value="0" />
                        <output id="canslide3"></output>
                    </li>
                    <li>
                        <label>Cannon #4</label>
                        <input id="can4" type="range" min="0" max="15" step="1" onchange="canSlider()" value="0" />
                        <output id="canslide4"></output>
                    </li>
                    <li>
                        <label>Cannon #5</label>
                        <input id="can5" type="range" min="0" max="15" step="1" onchange="canSlider()" value="0" />
                        <output id="canslide5"></output>
                    </li>
                    <li>
                        <label>Cannon #6</label>
                        <input id="can6" type="range" min="0" max="15" step="1" onchange="canSlider()" value="0" />
                        <output id="canslide6"></output>
                    </li>
                    <li>
                        <label>Cannon #7</label>
                        <input id="can7" type="range" min="0" max="15" step="1" onchange="canSlider()" value="0" />
                        <output id="canslide7"></output>
                    </li>
                </ul><br/>

                <h4> Archer Towers <img src="images/Defenses/Archer_Tower15.png" alt="archer tower level 15"></h4>
                <ul class ="archer-tower-list">
                    <li>
                        <label>Archer Tower #1</label>
                        <input id="arch_tow_1" type="range" min="0" max="15" step="1" onchange="arch_tow_Slider()" value="0" />
                        <output id="arch_tow_slide1"></output>
                    </li>
                    <li>
                        <label>Archer Tower #2</label>
                        <input id="arch_tow_2" type="range" min="0" max="15" step="1" onchange="arch_tow_Slider()" value="0" />
                        <output id="arch_tow_slide2"></output>
                    </li>
                    <li>
                        <label>Archer Tower #3</label>
                        <input id="arch_tow_3" type="range" min="0" max="15" step="1" onchange="arch_tow_Slider()" value="0" />
                        <output id="arch_tow_slide3"></output>
                    </li>
                    <li>
                        <label>Archer Tower #4</label>
                        <input id="arch_tow_4" type="range" min="0" max="15" step="1" onchange="arch_tow_Slider()" value="0" />
                        <output id="arch_tow_slide4"></output>
                    </li>
                    <li>
                        <label>Archer Tower #5</label>
                        <input id="arch_tow_5" type="range" min="0" max="15" step="1" onchange="arch_tow_Slider()" value="0" />
                        <output id="arch_tow_slide5"></output>
                    </li>
                    <li>
                        <label>Archer Tower #6</label>
                        <input id="arch_tow_6" type="range" min="0" max="15" step="1" onchange="arch_tow_Slider()" value="0" />
                        <output id="arch_tow_slide6"></output>
                    </li>
                    <li>
                        <label>Archer Tower #7</label>
                        <input id="arch_tow_7" type="range" min="0" max="15" step="1" onchange="arch_tow_Slider()" value="0" />
                        <output id="arch_tow_slide7"></output>
                    </li>
                    <li>
                        <label>Archer Tower #8</label>
                        <input id="arch_tow_8" type="range" min="0" max="15" step="1" onchange="arch_tow_Slider()" value="0" />
                        <output id="arch_tow_slide8"></output>
                    </li>
                </ul><br/>

                <h4> Wizard Towers <img src="images/Defenses/Wizard_Tower10.png" alt="wizard tower level 10"></h4>
                <ul class ="wizard-tower-list">
                    <li>
                        <label>Wizard Tower #1</label>
                        <input id="wiz_tow_1" type="range" min="0" max="10" step="1" onchange="wiz_tow_Slider()" value="0" />
                        <output id="wiz_tow_slide1"></output>
                    </li>
                    <li>
                        <label>Wizard Tower #2</label>
                        <input id="wiz_tow_2" type="range" min="0" max="10" step="1" onchange="wiz_tow_Slider()" value="0" />
                        <output id="wiz_tow_slide2"></output>
                    </li>
                    <li>
                        <label>Wizard Tower #3</label>
                        <input id="wiz_tow_3" type="range" min="0" max="10" step="1" onchange="wiz_tow_Slider()" value="0" />
                        <output id="wiz_tow_slide3"></output>
                    </li>
                    <li>
                        <label>Wizard Tower #4</label>
                        <input id="wiz_tow_4" type="range" min="0" max="10" step="1" onchange="wiz_tow_Slider()" value="0" />
                        <output id="wiz_tow_slide4"></output>
                    </li>
                    <li>
                        <label>Wizard Tower #5</label>
                        <input id="wiz_tow_5" type="range" min="0" max="10" step="1" onchange="wiz_tow_Slider()" value="0" />
                        <output id="wiz_tow_slide5"></output>
                    </li>
                </ul><br/>

                <h4> Mortars <img src="images/Defenses/Mortar10.png" alt="mortar level 10"></h4>
                <ul class ="mortar-list">
                    <li>
                        <label>Mortar #1</label>
                        <input id="mor1" type="range" min="0" max="10" step="1" onchange="mortar_Slider()" value="0" />
                        <output id="mort_slide1"></output>
                    </li>
                    <li>
                        <label>Mortar #2</label>
                        <input id="mor2" type="range" min="0" max="10" step="1" onchange="mortar_Slider()" value="0" />
                        <output id="mort_slide2"></output>
                    </li>
                    <li>
                        <label>Mortar #3</label>
                        <input id="mor3" type="range" min="0" max="10" step="1" onchange="mortar_Slider()" value="0" />
                        <output id="mort_slide3"></output>
                    </li>
                    <li>
                        <label>Mortar #4</label>
                        <input id="mor4" type="range" min="0" max="10" step="1" onchange="mortar_Slider()" value="0" />
                        <output id="mort_slide4"></output>
                    </li>
                </ul><br/>

                <h4> Air Defenses <img src="images/Defenses/Air_Defense9.png" alt="air defense level 9"></h4>
                <ul class ="air-def-list">
                    <li>
                        <label>Air Defense #1</label>
                        <input id="air_def1" type="range" min="0" max="9" step="1" onchange="air_def_Slider()" value="0" />
                        <output id="air_def_slide1"></output>
                    </li>
                    <li>
                        <label>Air Defense #2</label>
                        <input id="air_def2" type="range" min="0" max="9" step="1" onchange="air_def_Slider()" value="0" />
                        <output id="air_def_slide2"></output>
                    </li>
                    <li>
                        <label>Air Defense #3</label>
                        <input id="air_def3" type="range" min="0" max="9" step="1" onchange="air_def_Slider()" value="0" />
                        <output id="air_def_slide3"></output>
                    </li>
                    <li>
                        <label>Air Defense #4</label>
                        <input id="air_def4" type="range" min="0" max="9" step="1" onchange="air_def_Slider()" value="0" />
                        <output id="air_def_slide4"></output>
                    </li>
                </ul><br/>

                <h4> Air Sweepers <img src="images/Defenses/Air_Sweeper7.png" alt="air sweeper level 7"></h4>
                <ul class ="air-sweep-list">
                    <li>
                        <label>Air Sweeper #1</label>
                        <input id="air_sweep1" type="range" min="0" max="7" step="1" onchange="air_sweep_Slider()" value="0" />
                        <output id="air_sweep_slide1"></output>
                    </li>
                    <li>
                        <label>Air Sweeper #2</label>
                        <input id="air_sweep2" type="range" min="0" max="7" step="1" onchange="air_sweep_Slider()" value="0" />
                        <output id="air_sweep_slide2"></output>
                    </li>
                </ul><br/>

                <h4> Hidden Teslas <img src="images/Defenses/Hidden_Tesla9.png" alt="Hidden tesla level 9"></h4>
                <ul class ="hid-tes-list">
                    <li>
                        <label>Hidden Tesla #1</label>
                        <input id="hid_tes1" type="range" min="0" max="9" step="1" onchange="hid_tes_Slider()" value="0" />
                        <output id="hid_tes_slide1"></output>
                    </li>
                    <li>
                        <label>Hidden Tesla #2</label>
                        <input id="hid_tes2" type="range" min="0" max="9" step="1" onchange="hid_tes_Slider()" value="0" />
                        <output id="hid_tes_slide2"></output>
                    </li>
                    <li>
                        <label>Hidden Tesla #3</label>
                        <input id="hid_tes3" type="range" min="0" max="9" step="1" onchange="hid_tes_Slider()" value="0" />
                        <output id="hid_tes_slide3"></output>
                    </li>
                    <li>
                        <label>Hidden Tesla #4</label>
                        <input id="hid_tes4" type="range" min="0" max="9" step="1" onchange="hid_tes_Slider()" value="0" />
                        <output id="hid_tes_slide4"></output>
                    </li>
                </ul><br/>
                
                <h4> Bomb Towers <img src="images/Defenses/Bomb_Tower6.png" alt="Bomb tower level 6"></h4>
                <ul class ="bomb-tower-list">
                    <li>
                        <label>Bomb Tower #1</label>
                        <input id="bom_tow1" type="range" min="0" max="6" step="1" onchange="bom_tow_Slider()" value="0" />
                        <output id="bom_tow_slide1"></output>
                    </li>
                    <li>
                        <label>Bomb Tower #2</label>
                        <input id="bom_tow2" type="range" min="0" max="6" step="1" onchange="bom_tow_Slider()" value="0" />
                        <output id="bom_tow_slide2"></output>
                    </li>
                </ul><br/>

                <h4> Xbows <img src="images/Defenses/Xbow_Ground5.png" alt="Xbow ground version level 5"></h4>
                <ul class ="xbow-list">
                    <li>
                        <label>Xbow #1</label>
                        <input id="xbow1" type="range" min="0" max="5" step="1" onchange="xbow_Slider()" value="0" />
                        <output id="xbow_slide1"></output>
                    </li>
                    <li>
                        <label>Xbow #2</label>
                        <input id="xbow2" type="range" min="0" max="5" step="1" onchange="xbow_Slider()" value="0" />
                        <output id="xbow_slide2"></output>
                    </li>
                    <li>
                        <label>Xbow #3</label>
                        <input id="xbow3" type="range" min="0" max="5" step="1" onchange="xbow_Slider()" value="0" />
                        <output id="xbow_slide3"></output>
                    </li>
                    <li>
                        <label>Xbow #4</label>
                        <input id="xbow4" type="range" min="0" max="5" step="1" onchange="xbow_Slider()" value="0" />
                        <output id="xbow_slide4"></output>
                    </li>
                </ul><br/>

                <h4> Inferno Towers <img src="images/Defenses/Inferno_Tower_Single5.png" alt="Inferno tower level 5"></h4>
                <ul class ="inferno-tower-list">
                    <li>
                        <label>Inferno Tower #1</label>
                        <input id="inf_tow1" type="range" min="0" max="5" step="1" onchange="inf_tow_Slider()" value="0" />
                        <output id="inf_tow_slide1"></output>
                    </li>
                    <li>
                        <label>Inferno Tower #2</label>
                        <input id="inf_tow2" type="range" min="0" max="5" step="1" onchange="inf_tow_Slider()" value="0" />
                        <output id="inf_tow_slide2"></output>
                    </li>
                </ul><br/>

                <h4> Eagle Artillery <img src="images/Defenses/Eagle_Artillery2.png" alt="Eagle artillery level 2"></h4>
                <ul class ="eagle-artillery-list">
                    <li>
                        <label>Eagle Artillery #1</label>
                        <input id="eag_art1" type="range" min="0" max="2" step="1" onchange="eag_art_Slider()" value="0" />
                        <output id="eag_art_slide1"></output>
                    </li>
                </ul><br/>
                
                <h4> Bombs <img src="images/Traps/bomb_7.png" alt="bomb level 7"></h4>
                <ul class ="bombs-list">
                    <li>
                        <label>Bomb #1</label>
                        <input id="bombs1" type="range" min="0" max="7" step="1" onchange="bombs_Slider()" value="0" />
                        <output id="bombs_slide1"></output>
                    </li>
                    <li>
                        <label>Bomb #2</label>
                        <input id="bombs2" type="range" min="0" max="7" step="1" onchange="bombs_Slider()" value="0" />
                        <output id="bombs_slide2"></output>
                    </li>
                    <li>
                        <label>Bomb #3</label>
                        <input id="bombs3" type="range" min="0" max="7" step="1" onchange="bombs_Slider()" value="0" />
                        <output id="bombs_slide3"></output>
                    </li>
                    <li>
                        <label>Bomb #4</label>
                        <input id="bombs4" type="range" min="0" max="7" step="1" onchange="bombs_Slider()" value="0" />
                        <output id="bombs_slide4"></output>
                    </li>
                    <li>
                        <label>Bomb #5</label>
                        <input id="bombs5" type="range" min="0" max="7" step="1" onchange="bombs_Slider()" value="0" />
                        <output id="bombs_slide5"></output>
                    </li>
                    <li>
                        <label>Bomb #6</label>
                        <input id="bombs6" type="range" min="0" max="7" step="1" onchange="bombs_Slider()" value="0" />
                        <output id="bombs_slide6"></output>
                    </li>
                </ul><br/>

                <h4> Giant Bombs <img src="images/Traps/giant_bomb_5.png" alt="Giant bomb level 5"></h4>
                <ul class ="giant-bomb-list">
                    <li>
                        <label>Giant Bomb #1</label>
                        <input id="gia_bomb1" type="range" min="0" max="5" step="1" onchange="gia_bomb_Slider()" value="0" />
                        <output id="gia_bomb_slide1"></output>
                    </li>
                    <li>
                        <label>Giant Bomb #2</label>
                        <input id="gia_bomb2" type="range" min="0" max="5" step="1" onchange="gia_bomb_Slider()" value="0" />
                        <output id="gia_bomb_slide2"></output>
                    </li>
                    <li>
                        <label>Giant Bomb #3</label>
                        <input id="gia_bomb3" type="range" min="0" max="5" step="1" onchange="gia_bomb_Slider()" value="0" />
                        <output id="gia_bomb_slide3"></output>
                    </li>
                    <li>
                        <label>Giant Bomb #4</label>
                        <input id="gia_bomb4" type="range" min="0" max="5" step="1" onchange="gia_bomb_Slider()" value="0" />
                        <output id="gia_bomb_slide4"></output>
                    </li>
                    <li>
                        <label>Giant Bomb #5</label>
                        <input id="gia_bomb5" type="range" min="0" max="5" step="1" onchange="gia_bomb_Slider()" value="0" />
                        <output id="gia_bomb_slide5"></output>
                    </li>
                </ul><br/>

                <h4> Air Bombs <img src="images/Traps/air_bomb_5.png" alt="Air bomb level 5"></h4>
                <ul class ="air-bomb-list">
                    <li>
                        <label>Air Bomb #1</label>
                        <input id="air_bomb1" type="range" min="0" max="5" step="1" onchange="air_bomb_Slider()" value="0" />
                        <output id="air_bomb_slide1"></output>
                    </li>
                    <li>
                        <label>Air Bomb #2</label>
                        <input id="air_bomb2" type="range" min="0" max="5" step="1" onchange="air_bomb_Slider()" value="0" />
                        <output id="air_bomb_slide2"></output>
                    </li>
                    <li>
                        <label>Air Bomb #3</label>
                        <input id="air_bomb3" type="range" min="0" max="5" step="1" onchange="air_bomb_Slider()" value="0" />
                        <output id="air_bomb_slide3"></output>
                    </li>
                    <li>
                        <label>Air Bomb #4</label>
                        <input id="air_bomb4" type="range" min="0" max="5" step="1" onchange="air_bomb_Slider()" value="0" />
                        <output id="air_bomb_slide4"></output>
                    </li>
                    <li>
                        <label>Air Bomb #5</label>
                        <input id="air_bomb5" type="range" min="0" max="5" step="1" onchange="air_bomb_Slider()" value="0" />
                        <output id="air_bomb_slide5"></output>
                    </li>
                </ul><br/>

                <h4> Seeking Air Mine <img src="images/Traps/seeking_air_mine_3.png" alt="Seeking Air mine level 3"></h4>
                <ul class ="air-mine-list">
                    <li>
                        <label>Seeking Air Mine #1</label>
                        <input id="air_mine1" type="range" min="0" max="3" step="1" onchange="air_mine_Slider()" value="0" />
                        <output id="air_mine_slide1"></output>
                    </li>
                    <li>
                        <label>Seeking Air Mine #2</label>
                        <input id="air_mine2" type="range" min="0" max="3" step="1" onchange="air_mine_Slider()" value="0" />
                        <output id="air_mine_slide2"></output>
                    </li>
                    <li>
                        <label>Seeking Air Mine #3</label>
                        <input id="air_mine3" type="range" min="0" max="3" step="1" onchange="air_mine_Slider()" value="0" />
                        <output id="air_mine_slide3"></output>
                    </li>
                    <li>
                        <label>Seeking Air Mine #4</label>
                        <input id="air_mine4" type="range" min="0" max="3" step="1" onchange="air_mine_Slider()" value="0" />
                        <output id="air_mine_slide4"></output>
                    </li>
                    <li>
                        <label>Seeking Air Mine #5</label>
                        <input id="air_mine5" type="range" min="0" max="3" step="1" onchange="air_mine_Slider()" value="0" />
                        <output id="air_mine_slide5"></output>
                    </li>
                </ul><br/>

                <h4> Spring Traps <img src="images/Traps/Spring_Trap5.png" alt="Spring trap level 5"></h4>
                <ul class ="spring-trap-list">
                    <li>
                        <label>Spring Trap #1</label>
                        <input id="spring_trap1" type="range" min="0" max="5" step="1" onchange="spring_trap_Slider()" value="0" />
                        <output id="spring_trap_slide1"></output>
                    </li>
                    <li>
                        <label>Spring Trap #2</label>
                        <input id="spring_trap2" type="range" min="0" max="5" step="1" onchange="spring_trap_Slider()" value="0" />
                        <output id="spring_trap_slide2"></output>
                    </li>
                    <li>
                        <label>Spring Trap #3</label>
                        <input id="spring_trap3" type="range" min="0" max="5" step="1" onchange="spring_trap_Slider()" value="0" />
                        <output id="spring_trap_slide3"></output>
                    </li>
                    <li>
                        <label>Spring Trap #4</label>
                        <input id="spring_trap4" type="range" min="0" max="5" step="1" onchange="spring_trap_Slider()" value="0" />
                        <output id="spring_trap_slide4"></output>
                    </li>                    
                    <li>
                        <label>Spring Trap #5</label>
                        <input id="spring_trap5" type="range" min="0" max="5" step="1" onchange="spring_trap_Slider()" value="0" />
                        <output id="spring_trap_slide5"></output>
                    </li>
                    <li>
                        <label>Spring Trap #6</label>
                        <input id="spring_trap6" type="range" min="0" max="5" step="1" onchange="spring_trap_Slider()" value="0" />
                        <output id="spring_trap_slide6"></output>
                    </li>
                </ul><br/>

                <h4> Skeleton Traps <img src="images/Traps/skeleton_trap_4.png" alt="skeleton trap level 4"></h4>
                <ul class ="skeleton-trap-list">
                    <li>
                        <label>Skeleton Trap #1</label>
                        <input id="skel_trap1" type="range" min="0" max="4" step="1" onchange="skel_trap_Slider()" value="0" />
                        <output id="skel_trap_slide1"></output>
                    </li>
                    <li>
                        <label>Skeleton Trap #2</label>
                        <input id="skel_trap2" type="range" min="0" max="4" step="1" onchange="skel_trap_Slider()" value="0" />
                        <output id="skel_trap_slide2"></output>
                    </li>
                    <li>
                        <label>Skeleton Trap #3</label>
                        <input id="skel_trap3" type="range" min="0" max="4" step="1" onchange="skel_trap_Slider()" value="0" />
                        <output id="skel_trap_slide3"></output>
                    </li>
                </ul><br/>

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
                </ul><br/>
            </div> 
        </form>
    </div>

<?php include_once 'footer.php'; ?>
  </body>
</html>