<?php
function over_form($stat){	echo "<form name='overs' action=$stat.'_match.php' method='get'>
							<tr><td>Overs 
								<select name='over_start'>";
								
									for($i=0;$i<=50;$i++)
									{
										echo "<option value=".$i.">".$i."</option>";
									}
								echo "</select> . <select name='ball_start'>";
									for($i=0;$i<=5;$i++)
									{
										echo "<option value=".$i.">".$i."</option>";
									}
								echo "</select> &nbsp;&nbsp;to&nbsp;&nbsp; <select name='over_end'> ";
									for($i=50;$i>=0;$i--)
									{
										echo "<option value=".$i.">".$i."</option>";
									}
								echo "</select> . <select name='ball_end'>";
									for($i=0;$i<=5;$i++)
									{
										echo "<option value=".$i.">".$i."</option>";
									}
							
							echo 	"</select>
							</td></tr>&nbsp;&nbsp;
							<input type='submit' value='query'>
							</form>";
}

over_form('runs');
?>