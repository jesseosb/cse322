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
// $responseTable = "<div class='row'>
//         <div class='col-md-6'>
//           <table class='table'>
//             <thead>
//               <tr>
//                 <th>Skill</th>
//                 <th>Rank</th>
//                 <th>Level</th>
//                 <th>XP</th>
//               </tr>
//             </thead>
//             <tbody>
//               <tr>
//                 <td>Overall</td>
//                 <td><span id='hs00'></span></td>
//                 <td><span id='hs01'></span></td>
//                 <td><span id='hs02'></span></td>
//               </tr>
//               <tr>
//                 <td>Attack</td>
//                 <td><span id='hs10'></span></td>
//                 <td><span id='hs11'></span></td>
//                 <td><span id='hs12'></span></td>
//               </tr>
//               <tr>
//                 <td>Defence</td>
//                 <td><span id='hs20'></span></td>
//                 <td><span id='hs21'></span></td>
//                 <td><span id='hs22'></span></td>
//               </tr>
//             </tbody>
//           </table>
//         </div>
//       </div>";
// echo json_encode($stats);
// echo $responseTable;
?>