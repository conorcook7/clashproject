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
    <title>Overall-Progress Tracker</title>
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
  $cost_total = $_SESSION['overall-total-cost'];
  $time_total = $_SESSION['overall-total-time'];?>
    <div class="content">
        <div class = "progress-nav"> 
          <ul>
            <li><a href="progress-tracker-defense.php">Defenses</a></li>
            <li><a href="progress-tracker-army.php">Army</a></li>
            <li><a href="progress-tracker-research.php">Research</a></li>
            <li><a href="progress-tracker-resources.php">Resources</a></li>
            <li class="progress-active"><a href="progress-tracker-overall.php">Overall</a></li>
          </ul>
        </div>
        <h2>These are your results (5 Builders)!</h2>
        <div></div>
        <div>

      <?php if(isset($_SESSION['overall-total-cost'])){
         $mortar_total_cost = $_SESSION['mortar_total_cost']; $mortar_total_time = ($_SESSION['mortar_total_time'] /5)/24;
         $archer_total_cost = $_SESSION['archer_total_cost']; $archer_total_time = ($_SESSION['archer_total_time']/5)/24;
         $cannon_total_cost = $_SESSION['cannon_total_cost']; $cannon_total_time = ($_SESSION['cannon_total_time']/5)/24;
         $wizard_total_cost = $_SESSION['wizard_total_cost']; $wizard_total_time = ($_SESSION['wizard_total_time']/5)/24;
         $air_def_total_cost = $_SESSION['air_def_total_cost']; $air_def_total_time = ($_SESSION['air_def_total_time']/5)/24;
         $air_sweep_total_cost = $_SESSION['air_sweep_total_cost']; $air_sweep_total_time = ($_SESSION['air_sweep_total_time']/5)/24;
         $eag_art_cost = $_SESSION['eag_art_cost']; $eag_art_time = ($_SESSION['eag_art_time']/5)/24;
         $inf_tow_cost = $_SESSION['inf_tow_cost']; $inf_tow_time = ($_SESSION['inf_tow_time']/5)/24;
         $bomb_tow_total_cost = $_SESSION['bomb_tow_total_cost']; $bomb_tow_total_time = ($_SESSION['bomb_tow_total_time']/5)/24;
         $hid_tes_total_cost = $_SESSION['hid_tes_total_cost']; $hid_tes_total_time = ($_SESSION['hid_tes_total_time']/5)/24;
         $xbow_total_cost = $_SESSION['xbow_total_cost']; $xbow_total_time = ($_SESSION['xbow_total_time']/5)/24;
         $bombs_cost = $_SESSION['bombs_cost']; $bombs_time = ($_SESSION['bombs_time']/5)/24;
         $gia_bom_cost = $_SESSION['gia_bom_cost']; $gia_bom_time = ($_SESSION['gia_bom_time']/5)/24;
         $air_bomb_cost = $_SESSION['air_bomb_cost']; $air_bomb_time = ($_SESSION['air_bomb_time']/5)/24;
         $air_mine_cost = $_SESSION['air_mine_cost']; $air_mine_time = ($_SESSION['air_mine_time']/5)/24;  
         $spring_trap_cost = $_SESSION['spring_trap_cost']; $spring_trap_time = ($_SESSION['spring_trap_time']/5)/24;
         $skel_trap_cost = $_SESSION['skel_trap_cost']; $skel_trap_time = ($_SESSION['skel_trap_time']/5)/24;
         $overall_cost = $_SESSION['overall-total-cost']; $overall_time = ($_SESSION['overall-total-time']/5)/24;

         $overall_cost = $mortar_total_cost + $archer_total_cost + $cannon_total_cost + $wizard_total_cost
         + $air_def_total_cost + $air_sweep_total_cost + $eag_art_cost + $inf_tow_cost + $bomb_tow_total_cost
         + $hid_tes_total_cost + $xbow_total_cost + $bombs_cost + $gia_bom_cost + $air_bomb_cost 
         + $air_mine_cost + $spring_trap_cost + $skel_trap_cost + 1;
         $overall_time = $mortar_total_time + $archer_total_time + $cannon_total_time + $wizard_total_time 
         + $air_def_total_time + $air_sweep_total_time + $eag_art_time + $inf_tow_time + $bomb_tow_total_time
         + $hid_tes_total_time + $xbow_total_time + $bombs_time + $gia_bom_time + $air_bomb_time
         + $air_mine_time + $spring_trap_time + $skel_trap_time;


        ?>
        <table class="table">
        	<tbody>
	  	      <tr>
		  	      <td>Buildings </td>
			        <td width="20%">Cost (Gold)</td>
			        <td>Time (Days)</td>
		        </tr>
		        <tr>
			        <td>Cannons</td>
			        <td> <?php print_r($cannon_total_cost);?></td>
			        <td> <?php print_r($cannon_total_time);?></td>
		        </tr>
		        <tr>
		        	<td>Archer Towers</td>
			        <td><?php print_r($archer_total_cost);?> </td>
		        	<td> <?php print_r($archer_total_time);?></td>
		        </tr>
		        <tr>
	        		<td>Wizard Towers</td>
	        		<td> <?php print_r($wizard_total_cost);?></td>
	        		<td> <?php print_r($wizard_total_time);?></td>
	        	</tr>
	        	<tr>
		        	<td>Mortars</td>
		        	<td><?php print_r($mortar_total_cost);?></td>
		        	<td><?php print_r($mortar_total_time);?> </td>
		        </tr>
		        <tr>
	        		<td>Air Defenses</td>
			        <td> <?php print_r($air_def_total_cost);?></td>
			        <td> <?php print_r($air_def_total_time);?></td>
		        </tr>
		        <tr>
		        	<td> Air Sweepers</td>
			        <td> <?php print_r($air_sweep_total_cost);?></td>
		        	<td> <?php print_r($air_sweep_total_time);?></td>
	        	</tr>
	        	<tr>
		        	<td>Eagle Artillery</td>
		        	<td> <?php print_r($eag_art_cost);?></td>
		        	<td><?php print_r($eag_art_time);?> </td>
	        	</tr>
	        	<tr>
	        		<td>Xbows</td>
		        	<td> <?php print_r($xbow_total_cost);?></td>
	        		<td><?php print_r($xbow_total_time);?> </td>
	        	</tr>
	        	<tr>
		        	<td>Inferno Towers</td>
		        	<td> <?php print_r($inf_tow_cost);?></td>
			        <td> <?php print_r($inf_tow_time);?></td>
            </tr>
            <tr>
		        	<td>Bomb Tower</td>
		        	<td> <?php print_r($bomb_tow_total_cost);?></td>
			        <td> <?php print_r($bomb_tow_total_time);?></td>
            </tr>
            <tr>
		        	<td>Hidden Tesla</td>
		        	<td> <?php print_r($hid_tes_total_cost);?></td>
			        <td><?php print_r($hid_tes_total_time);?> </td>
            </tr>
            <tr>
		        	<td>Bombs</td>
		        	<td> <?php print_r($bombs_cost);?></td>
			        <td> <?php print_r($bombs_time);?></td>
            </tr>
            <tr>
		        	<td>Giant Bombs</td>
		        	<td> <?php print_r($gia_bom_cost);?></td>
			        <td> <?php print_r($gia_bom_time);?></td>
            </tr>
            <tr>
		        	<td>Air Bombs</td>
		        	<td> <?php print_r($air_bomb_cost);?></td>
			        <td><?php print_r($air_bomb_time);?> </td>
            </tr>
            <tr>
		        	<td>Seeking Air Mines</td>
		        	<td> <?php print_r($air_mine_cost);?></td>
			        <td> <?php print_r($air_mine_time);?></td>
            </tr>
            <tr>
		        	<td>Spring Traps</td>
		        	<td> <?php print_r($spring_trap_cost);?></td>
			        <td><?php print_r($spring_trap_time);?> </td>
            </tr>
            <tr>
		        	<td>Skeleton Traps</td>
		        	<td><?php print_r($skel_trap_cost);?> </td>
			        <td><?php print_r($skel_trap_time);?> </td>
		        </tr>
      	</tbody>
         </table><br/>
           <table class="table" >
	          <tbody>
		          <tr>
			          <td>Total Gold Cost Left </td>
			          <td> Total Time Left in Days</td>
		          </tr>
		          <tr>
		          	<td> <?php print_r($overall_cost);?></td>
			          <td> <?php print_r($overall_time);?></td>
		          </tr>
	          </tbody>
          </table>

      <?php }?>

          
    
        </div>
    </div>

<?php include_once 'footer.php'; ?>
  </body>
</html>