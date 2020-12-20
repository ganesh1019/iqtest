<div class="contentbox3">
<?php
	$query = MySQL_Query("SELECT * FROM `vysledky` ORDER BY time desc") or die (mysql_error());
			
	
			echo "<table class=\"resultable\">";
				
						echo "<tr style=\"font-weight:bold;\">";
						
						echo "<td valign=\"bottom\" bgcolor=\"#ededed\">"._ADMINID."</td>";
						echo "<td valign=\"bottom\" width=\"90\">"._ADMINTESTID."</td>";
						echo "<td valign=\"bottom\" width=\"115\" bgcolor=\"#ededed\">"._ADMINSTART."</td>";
						echo "<td valign=\"bottom\" width=\"115\">"._ADMINEND."</td>";
				
						echo "<td valign=\"bottom\" width=\"17\" bgcolor=\"#ededed\" align=\"center\">1</td>";
						echo "<td valign=\"bottom\" width=\"17\" align=\"center\">2</td>";
						echo "<td valign=\"bottom\" width=\"17\" bgcolor=\"#ededed\" align=\"center\">3</td>";
						echo "<td valign=\"bottom\" width=\"17\" align=\"center\">4</td>";
						echo "<td valign=\"bottom\" width=\"17\" bgcolor=\"#ededed\" align=\"center\">5</td>";
						
						echo "<td valign=\"bottom\" width=\"17\" align=\"center\">6</td>";
						echo "<td valign=\"bottom\" width=\"17\" bgcolor=\"#ededed\" align=\"center\">7</td>";
						echo "<td valign=\"bottom\" width=\"17\" align=\"center\">8</td>";
						echo "<td valign=\"bottom\" width=\"17\" bgcolor=\"#ededed\" align=\"center\">9</td>";
						echo "<td valign=\"bottom\" width=\"17\" align=\"center\">10</td>";
						
						echo "<td valign=\"bottom\" width=\"17\" bgcolor=\"#ededed\" align=\"center\">11</td>";
						echo "<td valign=\"bottom\" width=\"17\" align=\"center\">12</td>";
						echo "<td valign=\"bottom\" width=\"17\" bgcolor=\"#ededed\" align=\"center\">13</td>";
						echo "<td valign=\"bottom\" width=\"17\" align=\"center\">14</td>";
						echo "<td valign=\"bottom\" width=\"17\" bgcolor=\"#ededed\" align=\"center\">15</td>";
						
						echo "<td valign=\"bottom\" width=\"17\" align=\"center\">16</td>";
						echo "<td valign=\"bottom\" width=\"17\" bgcolor=\"#ededed\" align=\"center\">17</td>";
						echo "<td valign=\"bottom\" width=\"17\" align=\"center\">18</td>";
						echo "<td valign=\"bottom\" width=\"17\" bgcolor=\"#ededed\" align=\"center\">19</td>";
						echo "<td valign=\"bottom\" width=\"17\" align=\"center\">20</td>";
						
						echo "<td valign=\"bottom\" width=\"17\" bgcolor=\"#ededed\" align=\"center\">21</td>";
						echo "<td valign=\"bottom\" width=\"17\" align=\"center\">22</td>";
						echo "<td valign=\"bottom\" width=\"17\" bgcolor=\"#ededed\" align=\"center\">23</td>";
						echo "<td valign=\"bottom\" width=\"17\" align=\"center\">24</td>";
						echo "<td valign=\"bottom\" width=\"17\" bgcolor=\"#ededed\" align=\"center\">25</td>";	
						
						echo "<td valign=\"bottom\" width=\"17\" align=\"center\">26</td>";
						echo "<td valign=\"bottom\" width=\"17\" bgcolor=\"#ededed\" align=\"center\">27</td>";
						echo "<td valign=\"bottom\" width=\"17\" align=\"center\">28</td>";
						echo "<td valign=\"bottom\" width=\"17\" bgcolor=\"#ededed\" align=\"center\">29</td>";
						echo "<td valign=\"bottom\" width=\"17\" align=\"center\">30</td>";		
						
						
						echo "<td valign=\"bottom\" width=\"17\" bgcolor=\"#ededed\">"._ADMINIQ."</td>";
						echo "<td valign=\"bottom\" width=\"25\">"._PAY."</td>";
						echo "<td valign=\"bottom\" width=\"17\" bgcolor=\"#ededed\" align=\"center\">"._ADMINDEL."</td>";	
							
							
								
								
							
			
							
						echo "</tr>";
						
			$Pocet=0;
			$vyzvednute=0;
			$nevyzvednute=0;			
						
			while($Vysledek = mysql_fetch_array($query)){
				$Pocet++;
				

$TIME = StrFTime("%d/%m/%Y %H:%M:%S", $Vysledek['TIME']);
if ($Vysledek['TIMEEND']!="0"){
$TIMEEND = StrFTime("%d/%m/%Y %H:%M:%S", $Vysledek['TIMEEND']);}
else {
$TIMEEND= "---";
}
if ($Vysledek['paypal']!="0"){
 $paypalum = "yes";
 }
else {
 $paypalum = "no";
}
if($Vysledek['SMS']>0){
	$SMS = StrFTime("%d/%m/%Y %H:%M:%S", $Vysledek['SMS']);
	$vyzvednute=$vyzvednute+1;
	}
	else
	{
	$SMS="neodeslána";	
	$nevyzvednute=$nevyzvednute+1;
		}

				echo '
				            <tr>
						
							<td bgcolor="#ededed">'.$Vysledek['ID'].'</td>
							<td>'.$Vysledek['KOD'].'</td>
							<td bgcolor="#ededed">'.$TIME.'</td>
							<td>'.$TIMEEND.'</td>
							
							';
							if ($Vysledek['odpoved1']>0){
							echo '<td bgcolor="#ededed" align="center">';	}
							else
							{echo "<td bgcolor=\"#ededed\" align=\"center\">";};	
							echo '
							'.$Vysledek['odpoved1'].'</td>
							
							';
							if ($Vysledek['odpoved2']>0){
							echo '<td align="center">';	}
							else
							{echo "<td>";};	
							echo '
							'.$Vysledek['odpoved2'].'</td>
							
							';
							if ($Vysledek['odpoved3']>0){
							echo '<td bgcolor="#ededed" align="center">';	}
							else
							{echo "<td bgcolor=\"#ededed\" align=\"center\">";};	
							echo '
							'.$Vysledek['odpoved3'].'</td>
							
							';
							if ($Vysledek['odpoved4']>0){
							echo '<td align="center">';	}
							else
							{echo "<td>";};	
							echo '
							'.$Vysledek['odpoved4'].'</td>
							
							';
							if ($Vysledek['odpoved5']>0){
							echo '<td bgcolor="#ededed" align="center">';	}
							else
							{echo "<td bgcolor=\"#ededed\" align=\"center\">";};	
							echo '
							'.$Vysledek['odpoved5'].'</td>
							
							';
							if ($Vysledek['odpoved6']>0){
							echo '<td align="center">';	}
							else
							{echo "<td>";};	
							echo '
							'.$Vysledek['odpoved6'].'</td>
							
							';
							if ($Vysledek['odpoved7']>0){
							echo '<td bgcolor="#ededed" align="center">';	}
							else
							{echo "<td bgcolor=\"#ededed\" align=\"center\">";};	
							echo '
							'.$Vysledek['odpoved7'].'</td>
							
							';
							if ($Vysledek['odpoved8']>0){
							echo '<td align="center">';	}
							else
							{echo "<td>";};	
							echo '
							'.$Vysledek['odpoved8'].'</td>
							
							';
							if ($Vysledek['odpoved9']>0){
							echo '<td bgcolor="#ededed" align="center">';	}
							else
							{echo "<td bgcolor=\"#ededed\" align=\"center\">";};	
							echo '
							'.$Vysledek['odpoved9'].'</td>
							
							';
							if ($Vysledek['odpoved10']>0){
							echo '<td align="center">';	}
							else
							{echo "<td>";};	
							echo '
							'.$Vysledek['odpoved10'].'</td>
							
							
							
							';
							if ($Vysledek['odpoved11']>0){
							echo '<td bgcolor="#ededed" align="center">';	}
							else
							{echo "<td bgcolor=\"#ededed\" align=\"center\">";};	
							echo '
							'.$Vysledek['odpoved11'].'</td>
							
							';
							if ($Vysledek['odpoved12']>0){
							echo '<td align="center">';	}
							else
							{echo "<td>";};	
							echo '
							'.$Vysledek['odpoved12'].'</td>
							
							';
							if ($Vysledek['odpoved13']>0){
							echo '<td bgcolor="#ededed" align="center">';	}
							else
							{echo "<td bgcolor=\"#ededed\" align=\"center\">";};	
							echo '
							'.$Vysledek['odpoved13'].'</td>
							
							';
							if ($Vysledek['odpoved14']>0){
							echo '<td align="center">';	}
							else
							{echo "<td>";};	
							echo '
							'.$Vysledek['odpoved14'].'</td>
							
							';
							if ($Vysledek['odpoved15']>0){
							echo '<td bgcolor="#ededed" align="center">';	}
							else
							{echo "<td bgcolor=\"#ededed\" align=\"center\">";};	
							echo '
							'.$Vysledek['odpoved15'].'</td>
							
							
							';
							if ($Vysledek['odpoved16']>0){
							echo '<td align="center">';	}
							else
							{echo "<td>";};	
							echo '
							'.$Vysledek['odpoved16'].'</td>
							
							';
							if ($Vysledek['odpoved17']>0){
							echo '<td bgcolor="#ededed" align="center">';	}
							else
							{echo "<td bgcolor=\"#ededed\" align=\"center\">";};	
							echo '
							'.$Vysledek['odpoved17'].'</td>
							
							';
							if ($Vysledek['odpoved18']>0){
							echo '<td align="center">';	}
							else
							{echo "<td>";};	
							echo '
							'.$Vysledek['odpoved18'].'</td>
							
							';
							if ($Vysledek['odpoved19']>0){
							echo '<td bgcolor="#ededed" align="center">';	}
							else
							{echo "<td bgcolor=\"#ededed\" align=\"center\">";};	
							echo '
							'.$Vysledek['odpoved19'].'</td>
							
							';
							if ($Vysledek['odpoved20']>0){
							echo '<td align="center">';	}
							else
							{echo "<td>";};	
							echo '
							'.$Vysledek['odpoved20'].'</td>
							
							
							
							
							
							
							';
							if ($Vysledek['odpoved21']>0){
							echo '<td bgcolor="#ededed" align="center">';	}
							else
							{echo "<td bgcolor=\"#ededed\" align=\"center\">";};	
							echo '
							'.$Vysledek['odpoved21'].'</td>
							
							';
							if ($Vysledek['odpoved22']>0){
							echo '<td align="center">';	}
							else
							{echo "<td>";};	
							echo '
							'.$Vysledek['odpoved22'].'</td>
							
							';
							if ($Vysledek['odpoved23']>0){
							echo '<td bgcolor="#ededed" align="center">';	}
							else
							{echo "<td bgcolor=\"#ededed\" align=\"center\">";};	
							echo '
							'.$Vysledek['odpoved23'].'</td>
							
							';
							if ($Vysledek['odpoved24']>0){
							echo '<td align="center">';	}
							else
							{echo "<td>";};	
							echo '
							'.$Vysledek['odpoved24'].'</td>
							
							';
							if ($Vysledek['odpoved25']>0){
							echo '<td bgcolor="#ededed" align="center">';	}
							else
							{echo "<td bgcolor=\"#ededed\" align=\"center\">";};	
							echo '
							'.$Vysledek['odpoved25'].'</td>
							
							
							
							';
							if ($Vysledek['odpoved26']>0){
							echo '<td align="center">';	}
							else
							{echo "<td>";};	
							echo '
							'.$Vysledek['odpoved26'].'</td>
							
							';
							if ($Vysledek['odpoved27']>0){
							echo '<td bgcolor="#ededed" align="center">';	}
							else
							{echo "<td bgcolor=\"#ededed\" align=\"center\">";};	
							echo '
							'.$Vysledek['odpoved27'].'</td>
							
							';
							if ($Vysledek['odpoved28']>0){
							echo '<td align="center">';	}
							else
							{echo "<td>";};	
							echo '
							'.$Vysledek['odpoved28'].'</td>
							
							';
							if ($Vysledek['odpoved29']>0){
							echo '<td bgcolor="#ededed" align="center">';	}
							else
							{echo "<td bgcolor=\"#ededed\" align=\"center\">";};	
							echo '
							'.$Vysledek['odpoved29'].'</td>
							
							';
							if ($Vysledek['odpoved30']>0){
							echo '<td align="center">';	}
							else
							{echo "<td>";};	
							echo '
							'.$Vysledek['odpoved30'].'</td>
							
							
							
							<td bgcolor="#ededed">'.$Vysledek['IQ'].'</td>
							<td>'.$paypalum.'</td>
							<td bgcolor="#ededed" align="center"><a href="delete.php?ID='.$Vysledek['ID'].'" title="'._ADMINDELETE.'">X</a></td>
							
							
							
			</tr>';
			};
		echo "</table>";
		
		
		
		
	?>
	</div>