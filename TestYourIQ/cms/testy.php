<div class="contentbox3">

<div class="testtable"><?php print(_ADMINQUESTION); ?></div>
<div class="testtable"><?php print(_ADMINANSWERS); ?></div>
<div class="testtable2"><?php print(_ADMINCORRECTANSWER); ?></div>
<div class="testtable2"><?php print(_ADMINNUMBER); ?></div>

<div class="clear"></div>

<FORM method="post" action="upload_otazka.php" enctype="multipart/form-data">
<div class="testtable">
        <INPUT name="soubor" type="file">
        <INPUT type="hidden" name="odeslano" value="ano">
</div>

<div class="testtable">
       1A<INPUT name="soubor1" type="file"><BR>
       1B<INPUT name="soubor2" type="file"><BR>
       2A<INPUT name="soubor3" type="file"><BR>
       2B<INPUT name="soubor4" type="file"><BR>
       3A<INPUT name="soubor5" type="file"><BR>
       3B<INPUT name="soubor6" type="file"><BR>
       4A<INPUT name="soubor7" type="file"><BR>
       4B<INPUT name="soubor8" type="file"><BR>
       5A<INPUT name="soubor9" type="file"><BR>
       5B<INPUT name="soubor10" type="file"><BR>
       6A<INPUT name="soubor11" type="file"><BR>
       6B<INPUT name="soubor12" type="file"><BR>
</div>


<div class="testtable2">
<select name="odpoved">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
</select>
</div>


<div class="testtable2">
<select name="cislo">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
  <option value="11">11</option>
  <option value="12">12</option>
  <option value="13">13</option>
  <option value="14">14</option>
  <option value="15">15</option>
  <option value="16">16</option>
  <option value="17">17</option>
  <option value="18">18</option>
  <option value="19">19</option>
  <option value="20">20</option>
  <option value="21">21</option>
  <option value="22">22</option>
  <option value="23">23</option>
  <option value="24">24</option>
  <option value="25">25</option>
  <option value="26">26</option>
  <option value="27">27</option>
  <option value="28">28</option>
  <option value="29">29</option>
  <option value="30">30</option>  
</select>
</div>
<div class="clear"></div>
<div style="text-align:right"><input type="submit" name="PŘIDAT" id="PŘIDAT" value="PŘIDAT" /></div>
</FORM>



  <?php
  require_once "../db.php";

                        //bere si menu z databáze a vkládá pouze hrefy
									
						
						$query = MySQL_Query("SELECT * FROM `otazky` ORDER BY vzor") or die (mysql_error());
	
						
						//výpis menu
						echo "<div class=\"testtable3\"><strong>"._ADMINNO."</strong></div>";
						echo "<div class=\"testtable4\"><strong>"._ADMINTIME."</strong></div>";

						echo "<div class=\"testtable3\"><strong>"._ADMINANSWER."</strong></div>";
						echo "<div class=\"testtable5\"><strong>"._ADMINQUESTIONONE."</strong></div>";
						echo "<div class=\"testtable6\"><strong>"._ADMINANSWERSSSECOND."</strong></div>";
						echo "<div class=\"clear\" style=\"padding-bottom:30px;\"></div>";

						$Pocet=0;
						

		
			while($Vysledek = mysql_fetch_array($query)){
				$Pocet++;
				
						$id=$Vysledek['id'];
						$otazka=$Vysledek['otazka'];
						$autor=$Vysledek['autor'];
						$cas=$Vysledek['pridano'];
						$test=$Vysledek['vzor'];
						$odpoved=$Vysledek['odpoved'];
						
						$odpoved1A=$Vysledek['odpoved1A'];
						$odpoved1B=$Vysledek['odpoved1B'];
						
						$odpoved2A=$Vysledek['odpoved2A'];
						$odpoved2B=$Vysledek['odpoved2B'];
						
						$odpoved3A=$Vysledek['odpoved3A'];
						$odpoved3B=$Vysledek['odpoved3B'];
						
						$odpoved4A=$Vysledek['odpoved4A'];
						$odpoved4B=$Vysledek['odpoved4B'];
						
						$odpoved5A=$Vysledek['odpoved5A'];
						$odpoved5B=$Vysledek['odpoved5B'];
						
						$odpoved6A=$Vysledek['odpoved6A'];
						$odpoved6B=$Vysledek['odpoved6B'];
						
	
					
	$cas1=Date("d.m.Y H:i:s", $cas);
	
	echo "<div class=\"testtable3\">".$test."</div>";
	echo "<div class=\"testtable4\">".$cas1."</div>";
	
	echo "<div class=\"testtable3\">".$odpoved."</div>";
	
	
	echo "<div class=\"testtable5\"><img src=\"../upload/".$otazka.".jpg\" /></div>";
	
	echo "<div class=\"testtable6\"><table><tr><td>
	
	<table>
	<tr>
	<td width=\"20\">A</td>
	<td>
	<img src=\"../upload/".$odpoved1A.".jpg\" witch=\"85px\" height=\"65px\">
		</td>
	<td style=\"padding-right:5px;\">
	<img src=\"../upload/".$odpoved1B.".jpg\" witch=\"85px\" height=\"65px\">
	</td>
	</tr>

	<tr>
	<td>B</td>
	<td>
	<img src=\"../upload/".$odpoved2A.".jpg\" witch=\"85px\" height=\"65px\">
		</td>
	<td>
	<img src=\"../upload/".$odpoved2B.".jpg\" witch=\"85px\" height=\"65px\">
	</td>
	</tr>
	
	<tr>
	<td>C</td>
	<td>	
	<img src=\"../upload/".$odpoved3A.".jpg\" witch=\"85px\" height=\"65px\">
		</td>
	<td>
	<img src=\"../upload/".$odpoved3B.".jpg\" witch=\"85px\" height=\"65px\">
	</td>
	</tr>	
	
	</table>
	
	</td>";
	

echo "<td align=\"center\">
	
	<table>
	<tr>
	<td>D</td>
	<td>
	<img src=\"../upload/".$odpoved4A.".jpg\" witch=\"85px\" height=\"65px\">
	</td>
	<td>
	<img src=\"../upload/".$odpoved4B.".jpg\" witch=\"85px\" height=\"65px\">
	</td>
	</tr>

	<tr>
	<td>E</td>
	<td>
	<img src=\"../upload/".$odpoved5A.".jpg\" witch=\"85px\" height=\"65px\">
		</td>
	<td>
	<img src=\"../upload/".$odpoved5B.".jpg\" witch=\"85px\" height=\"65px\">
	</td>
	</tr>
	
	<tr>
	<td>F</td>
	<td>	
	<img src=\"../upload/".$odpoved6A.".jpg\" witch=\"85px\" height=\"65px\">
		</td>
	<td>
	<img src=\"../upload/".$odpoved6B.".jpg\" witch=\"85px\" height=\"65px\">
	</td>
	</tr>	
	
	</table>
	
	</td></tr></table></div><div class=\"clear\" style=\"padding-bottom:20px;\"></div>";

				

}

						 
						?>
                         
       
  
  </div>