<?php
session_start();
require_once 'Dao.php';
$dao = new Dao();
//set values
$_SESSION['cannon-1-val'] = $_POST["can1"];
$_SESSION['cannon-2-val'] = $_POST["can2"];
$_SESSION['cannon-3-val'] = $_POST["can3"];
$_SESSION['cannon-4-val'] = $_POST["can4"];
$_SESSION['cannon-5-val'] = $_POST["can5"];
$_SESSION['cannon-6-val'] = $_POST["can6"];
$_SESSION['cannon-7-val'] = $_POST["can7"];

$_SESSION['arch-tow-1-val'] = $_POST["arch_tow_1"];
$_SESSION['arch-tow-2-val'] = $_POST["arch_tow_2"];
$_SESSION['arch-tow-3-val'] = $_POST["arch_tow_3"];
$_SESSION['arch-tow-4-val'] = $_POST["arch_tow_4"];
$_SESSION['arch-tow-5-val'] = $_POST["arch_tow_5"];
$_SESSION['arch-tow-6-val'] = $_POST["arch_tow_6"];
$_SESSION['arch-tow-7-val'] = $_POST["arch_tow_7"];
$_SESSION['arch-tow-8-val'] = $_POST["arch_tow_8"];

$_SESSION['wiz-tow-1-val'] = $_POST["wiz_tow_1"];
$_SESSION['wiz-tow-2-val'] = $_POST["wiz_tow_2"];
$_SESSION['wiz-tow-3-val'] = $_POST["wiz_tow_3"];
$_SESSION['wiz-tow-4-val'] = $_POST["wiz_tow_4"];
$_SESSION['wiz-tow-5-val'] = $_POST["wiz_tow_5"];

$_SESSION['mortar-1-val'] = $_POST["mor1"];
$_SESSION['mortar-2-val'] = $_POST["mor2"];
$_SESSION['mortar-3-val'] = $_POST["mor3"];
$_SESSION['mortar-4-val'] = $_POST["mor4"];

$_SESSION['air-def-1-val'] = $_POST["air_def1"];
$_SESSION['air-def-2-val'] = $_POST["air_def2"];
$_SESSION['air-def-3-val'] = $_POST["air_def3"];
$_SESSION['air-def-4-val'] = $_POST["air_def4"];

$_SESSION['air-sweep-1-val'] = $_POST["air_sweep1"];
$_SESSION['air-sweep-2-val'] = $_POST["air_sweep2"];

$_SESSION['hid-tes-1-val'] = $_POST["hid_tes1"];
$_SESSION['hid-tes-2-val'] = $_POST["hid_tes2"];
$_SESSION['hid-tes-3-val'] = $_POST["hid_tes3"];
$_SESSION['hid-tes-4-val'] = $_POST["hid_tes4"];

$_SESSION['bomb-tow-1-val'] = $_POST["bom_tow1"];
$_SESSION['bomb-tow-2-val'] = $_POST["bom_tow2"];

$_SESSION['xbow-1-val'] = $_POST["xbow1"];
$_SESSION['xbow-2-val'] = $_POST["xbow2"];
$_SESSION['xbow-3-val'] = $_POST["xbow3"];
$_SESSION['xbow-4-val'] = $_POST["xbow4"];

$_SESSION['inf-tow-1-val'] = $_POST["inf_tow1"];
$_SESSION['inf-tow-2-val'] = $_POST["inf_tow2"];

$_SESSION['eag-art-1-val'] = $_POST["eag_art1"];

$_SESSION['bombs-1-val'] = $_POST["bombs1"];
$_SESSION['bombs-2-val'] = $_POST["bombs2"];
$_SESSION['bombs-3-val'] = $_POST["bombs3"];
$_SESSION['bombs-4-val'] = $_POST["bombs4"];
$_SESSION['bombs-5-val'] = $_POST["bombs5"];
$_SESSION['bombs-6-val'] = $_POST["bombs6"];

$_SESSION['gia-bomb-1-val'] = $_POST["gia_bomb1"];
$_SESSION['gia-bomb-2-val'] = $_POST["gia_bomb2"];
$_SESSION['gia-bomb-3-val'] = $_POST["gia_bomb3"];
$_SESSION['gia-bomb-4-val'] = $_POST["gia_bomb4"];
$_SESSION['gia-bomb-5-val'] = $_POST["gia_bomb5"];

$_SESSION['air-bomb-1-val'] = $_POST["air_bomb1"];
$_SESSION['air-bomb-2-val'] = $_POST["air_bomb2"];
$_SESSION['air-bomb-3-val'] = $_POST["air_bomb3"];
$_SESSION['air-bomb-4-val'] = $_POST["air_bomb4"];
$_SESSION['air-bomb-5-val'] = $_POST["air_bomb5"];

$_SESSION['air-mine-1-val'] = $_POST["air_mine1"];
$_SESSION['air-mine-2-val'] = $_POST["air_mine2"];
$_SESSION['air-mine-3-val'] = $_POST["air_mine3"];
$_SESSION['air-mine-4-val'] = $_POST["air_mine4"];
$_SESSION['air-mine-5-val'] = $_POST["air_mine5"];

$_SESSION['spring-trap-1-val'] = $_POST["spring_trap1"];
$_SESSION['spring-trap-2-val'] = $_POST["spring_trap2"];
$_SESSION['spring-trap-3-val'] = $_POST["spring_trap3"];
$_SESSION['spring-trap-4-val'] = $_POST["spring_trap4"];
$_SESSION['spring-trap-5-val'] = $_POST["spring_trap5"];
$_SESSION['spring-trap-6-val'] = $_POST["spring_trap6"];

$_SESSION['skel-trap-1-val'] = $_POST["skel_trap1"];
$_SESSION['skel-trap-2-val'] = $_POST["skel_trap2"];
$_SESSION['skel-trap-3-val'] = $_POST["skel_trap3"];

//retrieve values from database then populate
$mortar1 = $dao->getMortarInfo($_SESSION['mortar-1-val']);
$mortar2 = $dao->getMortarInfo($_SESSION['mortar-2-val']);
$mortar3 = $dao->getMortarInfo($_SESSION['mortar-3-val']);
$mortar4 = $dao->getMortarInfo($_SESSION['mortar-4-val']);
$mortar_total_cost = 0; $mortar_total_time = 0;
$mortar_total_cost = $mortar1[0] + $mortar2[0] + $mortar3[0] + $mortar4[0];
$mortar_total_time = $mortar1[1] + $mortar2[1] + $mortar3[1] + $mortar4[1];

$cannon1 = $dao->getCannonInfo($_SESSION['cannon-1-val']);
$cannon2 = $dao->getCannonInfo($_SESSION['cannon-2-val']);
$cannon3 = $dao->getCannonInfo($_SESSION['cannon-3-val']);
$cannon4 = $dao->getCannonInfo($_SESSION['cannon-4-val']);
$cannon5 = $dao->getCannonInfo($_SESSION['cannon-5-val']);
$cannon6 = $dao->getCannonInfo($_SESSION['cannon-6-val']);
$cannon7 = $dao->getCannonInfo($_SESSION['cannon-7-val']);
$cannon_total_cost = 0; $cannon_total_time = 0;
$cannon_total_cost = $cannon1[0] + $cannon2[0] + $cannon3[0] + $cannon4[0] + $cannon5[0] + $cannon6[0] + $cannon7[0];
$cannon_total_time = $cannon1[1] + $cannon2[1] + $cannon3[1] + $cannon4[1] + $cannon5[1] + $cannon6[1] + $cannon7[1];

$archer_tow1 = $dao->getArcherTowerInfo($_SESSION['arch-tow-1-val']);
$archer_tow2 = $dao->getArcherTowerInfo($_SESSION['arch-tow-2-val']);
$archer_tow3 = $dao->getArcherTowerInfo($_SESSION['arch-tow-3-val']);
$archer_tow4 = $dao->getArcherTowerInfo($_SESSION['arch-tow-4-val']);
$archer_tow5 = $dao->getArcherTowerInfo($_SESSION['arch-tow-5-val']);
$archer_tow6 = $dao->getArcherTowerInfo($_SESSION['arch-tow-6-val']);
$archer_tow7 = $dao->getArcherTowerInfo($_SESSION['arch-tow-7-val']);
$archer_tow8 = $dao->getArcherTowerInfo($_SESSION['arch-tow-8-val']);
$archer_total_cost = 0; $archer_total_time = 0;
$archer_total_cost = $archer_tow1[0] + $archer_tow2[0] + $archer_tow3[0] + $archer_tow4[0] + $archer_tow5[0] + $archer_tow6[0] + $archer_tow7[0] + $archer_tow8[0];
$archer_total_time = $archer_tow1[1] + $archer_tow2[1] + $archer_tow3[1] + $archer_tow4[1] + $archer_tow5[1] + $archer_tow6[1] + $archer_tow7[1] + $archer_tow8[1];

$wizard1 = $dao->getWizTowerInfo($_SESSION['wiz-tow-1-val']);
$wizard2 = $dao->getWizTowerInfo($_SESSION['wiz-tow-2-val']);
$wizard3 = $dao->getWizTowerInfo($_SESSION['wiz-tow-3-val']);
$wizard4 = $dao->getWizTowerInfo($_SESSION['wiz-tow-4-val']);
$wizard5 = $dao->getWizTowerInfo($_SESSION['wiz-tow-5-val']);
$wizard_total_cost = 0; $wizard_total_time = 0;
$wizard_total_cost = $wizard1[0] + $wizard2[0] + $wizard3[0] + $wizard4[0] + $wizard5[0];
$wizard_total_time = $wizard1[1] + $wizard2[1] + $wizard3[1] + $wizard4[1] + $wizard5[1];

$air_def1 = $dao->getAirDefInfo($_SESSION['air-def-1-val']);
$air_def2 = $dao->getAirDefInfo($_SESSION['air-def-2-val']);
$air_def3 = $dao->getAirDefInfo($_SESSION['air-def-3-val']);
$air_def4 = $dao->getAirDefInfo($_SESSION['air-def-4-val']);
$air_def_total_cost = 0; $air_def_total_time = 0;
$air_def_total_cost = $air_def1[0] + $air_def2[0] + $air_def3[0] + $air_def4[0];
$air_def_total_time = $air_def1[1] + $air_def2[1] + $air_def3[1] + $air_def4[1];

$air_sweep1 = $dao->getAirSweepInfo($_SESSION['air-sweep-1-val']);
$air_sweep2 = $dao->getAirSweepInfo($_SESSION['air-sweep-2-val']);
$air_sweep_total_cost = 0; $air_sweep_total_time = 0;
$air_sweep_total_cost = $air_sweep1[0] + $air_sweep2[0];
$air_sweep_total_time = $air_sweep1[1] + $air_sweep2[1];

$hid_tes1 = $dao->getHiddenTeslaInfo($_SESSION['hid-tes-1-val']);
$hid_tes2 = $dao->getHiddenTeslaInfo($_SESSION['hid-tes-2-val']);
$hid_tes3 = $dao->getHiddenTeslaInfo($_SESSION['hid-tes-3-val']);
$hid_tes4 = $dao->getHiddenTeslaInfo($_SESSION['hid-tes-4-val']);
$hid_tes_total_cost = 0; $hid_tes_total_time = 0;
$hid_tes_total_cost = $hid_tes1[0] + $hid_tes2[0] + $hid_tes3[0] + $hid_tes4[0];
$hid_tes_total_time = $hid_tes1[1] + $hid_tes2[1] + $hid_tes3[1] + $hid_tes4[1];

$bomb_tow1 = $dao->getBombTowerInfo($_SESSION['bomb-tow-1-val']);
$bomb_tow2 = $dao->getBombTowerInfo($_SESSION['bomb-tow-2-val']);
$bomb_tow_total_cost = 0; $bomb_tow_total_time = 0;
$bomb_tow_total_cost = $bomb_tow1[0] + $bomb_tow2[0];
$bomb_tow_total_time = $bomb_tow1[1] + $bomb_tow2[1];

$xbow1 = $dao->getXbowInfo($_SESSION['xbow-1-val']);
$xbow2 = $dao->getXbowInfo($_SESSION['xbow-2-val']);
$xbow3 = $dao->getXbowInfo($_SESSION['xbow-3-val']);
$xbow4 = $dao->getXbowInfo($_SESSION['xbow-4-val']);
$xbow_total_cost = 0; $xbow_total_time = 0;
$xbow_total_cost = $xbow1[0] + $xbow2[0] + $xbow3[0] + $xbow4[0];
$xbow_total_time = $xbow1[1] + $xbow2[1] + $xbow3[1] + $xbow4[1];

$inf_tow1 = $dao->getInfernoTowerInfo($_SESSION['inf-tow-1-val']);
$inf_tow2 = $dao->getInfernoTowerInfo($_SESSION['inf-tow-2-val']);
$inf_tow_cost = 0; $inf_tow_time = 0;
$inf_tow_cost = $inf_tow1[0] + $inf_tow2[0];
$inf_tow_time = $inf_tow1[1] + $inf_tow2[1];

$eag_art1 = $dao->getEagleArtilleryInfo($_SESSION['eag-art-1-val']);
$eag_art_cost = 0; $eag_art_time = 0;
$eag_art_cost = $eag_art1[0];
$eag_art_time = $eag_art1[1];

$bombs1 = $dao->getBombsInfo($_SESSION['bombs-1-val']);
$bombs2 = $dao->getBombsInfo($_SESSION['bombs-2-val']);
$bombs3 = $dao->getBombsInfo($_SESSION['bombs-3-val']);
$bombs4 = $dao->getBombsInfo($_SESSION['bombs-4-val']);
$bombs5 = $dao->getBombsInfo($_SESSION['bombs-5-val']);
$bombs6 = $dao->getBombsInfo($_SESSION['bombs-6-val']);
$bombs_cost = 0; $bombs_time = 0;
$bombs_cost = $bombs1[0] + $bombs2[0] + $bombs3[0] + $bombs4[0] + $bombs5[0] + $bombs6[0];
$bombs_time = $bombs1[1] + $bombs2[1] + $bombs3[1] + $bombs4[1] + $bombs5[1] + $bombs6[1];

$gia_bom1 = $dao->getGiantBombInfo($_SESSION['gia-bomb-1-val']);
$gia_bom2 = $dao->getGiantBombInfo($_SESSION['gia-bomb-2-val']);
$gia_bom3 = $dao->getGiantBombInfo($_SESSION['gia-bomb-3-val']);
$gia_bom4 = $dao->getGiantBombInfo($_SESSION['gia-bomb-4-val']);
$gia_bom5 = $dao->getGiantBombInfo($_SESSION['gia-bomb-5-val']);
$gia_bom_cost = 0; $gia_bom_time = 0;
$gia_bom_cost = $gia_bom1[0] + $gia_bom2[0] + $gia_bom3[0] + $gia_bom4[0] + $gia_bom5[0];
$gia_bom_time = $gia_bom1[1] + $gia_bom2[1] + $gia_bom3[1] + $gia_bom4[1] + $gia_bom5[1];

$air_bomb1 = $dao->getAirBombInfo($_SESSION['air-bomb-1-val']);
$air_bomb2 = $dao->getAirBombInfo($_SESSION['air-bomb-2-val']);
$air_bomb3 = $dao->getAirBombInfo($_SESSION['air-bomb-3-val']);
$air_bomb4 = $dao->getAirBombInfo($_SESSION['air-bomb-4-val']);
$air_bomb5 = $dao->getAirBombInfo($_SESSION['air-bomb-5-val']);
$air_bomb_cost = 0; $air_bomb_time = 0;
$air_bomb_cost = $air_bomb1[0] + $air_bomb2[0] + $air_bomb3[0] + $air_bomb4[0] + $air_bomb5[0];
$air_bomb_time = $air_bomb1[1] + $air_bomb2[1] + $air_bomb3[1] + $air_bomb4[1] + $air_bomb5[1];

$air_mine1 = $dao->getSeekingMineInfo($_SESSION['air-mine-1-val']);
$air_mine2 = $dao->getSeekingMineInfo($_SESSION['air-mine-2-val']);
$air_mine3 = $dao->getSeekingMineInfo($_SESSION['air-mine-3-val']);
$air_mine4 = $dao->getSeekingMineInfo($_SESSION['air-mine-4-val']);
$air_mine5 = $dao->getSeekingMineInfo($_SESSION['air-mine-5-val']);
$air_mine_cost = 0; $air_mine_time = 0;
$air_mine_cost = $air_mine1[0] + $air_mine2[0] + $air_mine3[0] + $air_mine4[0] + $air_mine5[0];
$air_mine_time = $air_mine1[1] + $air_mine2[1] + $air_mine3[1] + $air_mine4[1] + $air_mine5[1];

$spring_trap1 = $dao->getSpringTrapInfo($_SESSION['spring-trap-1-val']);
$spring_trap2 = $dao->getSpringTrapInfo($_SESSION['spring-trap-2-val']);
$spring_trap3 = $dao->getSpringTrapInfo($_SESSION['spring-trap-3-val']);
$spring_trap4 = $dao->getSpringTrapInfo($_SESSION['spring-trap-4-val']);
$spring_trap5 = $dao->getSpringTrapInfo($_SESSION['spring-trap-5-val']);
$spring_trap6 = $dao->getSpringTrapInfo($_SESSION['spring-trap-6-val']);
$spring_trap_cost = 0; $spring_trap_time = 0;
$spring_trap_cost = $spring_trap1[0] + $spring_trap2[0] + $spring_trap3[0] + $spring_trap4[0] + $spring_trap5[0] + $spring_trap6[0];
$spring_trap_time = $spring_trap1[1] + $spring_trap2[1] + $spring_trap3[1] + $spring_trap4[1] + $spring_trap5[1] + $spring_trap6[1];

$skel_trap1 = $dao->getSkeletonTrapInfo($_SESSION['skel-trap-1-val']);
$skel_trap2 = $dao->getSkeletonTrapInfo($_SESSION['skel-trap-2-val']);
$skel_trap3 = $dao->getSkeletonTrapInfo($_SESSION['skel-trap-3-val']);
$skel_trap_cost = 0; $skel_trap_time = 0;
$skel_trap_cost = $skel_trap1[0] + $skel_trap2[0] + $skel_trap3[0];
$skel_trap_time = $skel_trap1[1] + $skel_trap2[1] + $skel_trap3[1];

$_SESSION['mortar_total_cost'] = $mortar_total_cost; $_SESSION['mortar_total_time'] = $mortar_total_time;
$_SESSION['archer_total_cost'] = $archer_total_cost ;  $_SESSION['archer_total_time'] = $archer_total_time ;
$_SESSION['cannon_total_cost'] = $cannon_total_cost ; $_SESSION['cannon_total_time'] = $cannon_total_time ;
$_SESSION['wizard_total_cost'] = $wizard_total_cost; $_SESSION['wizard_total_time'] = $wizard_total_time;
$_SESSION['air_def_total_cost'] = $air_def_total_cost; $_SESSION['air_def_total_time'] = $air_def_total_time;
$_SESSION['air_sweep_total_cost'] = $air_sweep_total_cost; $_SESSION['air_sweep_total_time'] = $air_sweep_total_time;
$_SESSION['eag_art_cost'] = $eag_art_cost; $_SESSION['eag_art_time'] = $eag_art_time;
$_SESSION['inf_tow_cost'] = $inf_tow_cost; $_SESSION['inf_tow_time'] = $inf_tow_time;
$_SESSION['bomb_tow_total_cost'] = $bomb_tow_total_cost; $_SESSION['bomb_tow_total_time'] = $bomb_tow_total_time;
$_SESSION['hid_tes_total_cost'] = $hid_tes_total_cost; $_SESSION['hid_tes_total_time'] = $hid_tes_total_time;
$_SESSION['xbow_total_cost'] = $xbow_total_cost; $_SESSION['xbow_total_time'] = $xbow_total_time;
$_SESSION['bombs_cost'] = $bombs_cost; $_SESSION['bombs_time'] = $bombs_time;
$_SESSION['gia_bom_cost'] = $gia_bom_cost; $_SESSION['gia_bom_time'] = $gia_bom_time;
$_SESSION['air_bomb_cost'] = $air_bomb_cost; $_SESSION['air_bomb_time'] = $air_bomb_time;
$_SESSION['air_mine_cost'] = $air_mine_cost; $_SESSION['air_mine_time'] = $air_mine_time;
$_SESSION['spring_trap_cost'] = $spring_trap_cost; $_SESSION['spring_trap_time'] = $spring_trap_time;
$_SESSION['skel_trap_cost'] = $skel_trap_cost; $_SESSION['skel_trap_time'] = $skel_trap_time;

/*   For testing
print_r('Mortar: '.$mortar_total_cost . '-----'. $mortar_total_time);?><br/><?php
print_r('Archer: '.$archer_total_cost . '-----'. $archer_total_time);?><br/><?php
print_r('cannon: '.$cannon_total_cost . '-----'. $cannon_total_time);?><br/><?php
print_r('wizard: '.$wizard_total_cost . '-----'. $wizard_total_time);?><br/><?php
print_r('air defense: '.$air_def_total_cost . '-----'. $air_def_total_time);?><br/><?php
print_r('air sweeper: '.$air_sweep_total_cost . '-----'. $air_sweep_total_time);?><br/><?php
print_r('eagle art: '.$eag_art_cost . '-----'. $eag_art_time);?><br/><?php
print_r('Inferno: '.$inf_tow_cost . '-----'. $inf_tow_time);?><br/><?php
print_r('Bomb tower: '.$bomb_tow_total_cost . '-----'. $bomb_tow_total_time);?><br/><?php
print_r('hidden tesla: '.$hid_tes_total_cost . '-----'. $hid_tes_total_time);?><br/><?php
print_r('xbow: '.$xbow_total_cost . '-----'. $xbow_total_time);?><br/><?php
print_r('bombs: '.$bombs_cost . '-----'. $bombs_time);?><br/><?php
print_r('giant bombs: '.$gia_bom_cost . '-----'. $gia_bom_time);?><br/><?php
print_r('air bombs: '.$air_bomb_cost . '-----'. $air_bomb_time);?><br/><?php
print_r('Seeking mIne: '.$air_mine_cost . '-----'. $air_mine_time);?><br/><?php
print_r('spring trap: '.$spring_trap_cost . '-----'. $spring_trap_time);?><br/><?php
print_r('skeleteon trap: '.$skel_trap_cost . '-----'. $skel_trap_time);?><br/><?php
*/


$_SESSION['overall-total-cost'] = $mortar_total_cost + $archer_total_cost + $cannon_total_cost + $wizard_total_cost
                                + $air_def_total_cost + $air_sweep_total_cost + $eag_art_cost + $inf_tow_cost + $bomb_tow_total_cost
                                + $hid_tes_total_cost + $xbow_total_cost + $bombs_cost + $gia_bom_cost + $air_bomb_cost 
                                + $air_mine_cost + $spring_trap_cost + $skel_trap_cost ;
$_SESSION['overall-total-time'] = $mortar_total_time + $archer_total_time + $cannon_total_time + $wizard_total_time 
                                + $air_def_total_time + $air_sweep_total_time + $eag_art_time + $inf_tow_time + $bomb_tow_total_time
                                + $hid_tes_total_time + $xbow_total_time + $bombs_time + $gia_bom_time + $air_bomb_time
                                + $air_mine_time + $spring_trap_time + $skel_trap_time;

header("Location: progress-tracker-overall.php");