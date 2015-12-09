<?php
$player = $_REQUEST["player"];
$hs = file_get_contents("http://services.runescape.com/m=hiscore_oldschool/index_lite.ws?player=".$player);
$hs = explode("\n",$hs);
$skills = array("Overall","Attack","Defence","Strength","Constitution","Ranged","Prayer","Magic","Cooking","Woodcutting","Fletching","Fishing","Firemaking","Crafting","Smithing","Mining","Herblore","Agility","Thieving","Slayer","Farming","Runecrafting","Hunter","Construction");
$i = 0;

foreach($skills as $value){
    $hs[$i] = explode(",",$hs[$i]);
    $stats[$value]["rank"] = $hs[$i][0];
    $rank = $hs[$i][0];
    $stats[$value]["level"] = $hs[$i][1];
    $level = $hs[$i][1];
    $stats[$value]["xp"] = $hs[$i][2];
    $xp = $hs[$i][2];
    echo "<tr>
        <td>$value</td>
        <td>$rank</td>
        <td>$level</td>
        <td>$xp</td>
        </tr>";
    $i++;
}

?>