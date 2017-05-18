<?php
	require('admin/set_vars.php');
?>

<div class="container">
	<div class="row">
		<div class="col-md-3 flex-last flex-md-first be-sidebar">
			<p class="sidebar-section"></span>Recruitment</p>
			<button type="button" class="btn btn-success btn-sm btn-block"><a class="link" href="/recruitment.php">I'm Interested!</a></button>
			<div class="side-recruitment">
				<p>We recruit for immediate positions and don't believe in recruiting for a bench. If your application is successful you will see considerable raid time.</p>

				<table class="recruit-table">
					<?php 
						foreach ($recruitment as $classStatus) {
							$class = $classStatus['class'];
							$status = $classStatus['status'];
							$name = $classStatus['name'];

							if ($status != NULL && $status != '') {
								echo "<tr class=\"status-$class\">";
								echo "<td class=\"class-$class\"><img src=\"img/class_icons/class-$class.jpg\" /> $name</td>";
								echo "<td class=\"rec-need-$class pull-right\">$status</td>";
								echo "</tr>";
							}
						}
					?>
				</table>
			</div>
			<p class="sidebar-section"></span>Progression</p>
			<button type="button" class="btn btn-primary btn-sm btn-block"><a href="https://www.wowprogress.com/guild/us/illidan/Bitter+End" target="_blank">WoWProgress</a></button>
			<button type="button" class="btn btn-warning btn-sm btn-block"><a href="https://www.warcraftlogs.com/guilds/234108" target="_blank">Warcraft Logs</a></button>
			<div class="side-progression">

				<button data-toggle="collapse" data-target="#prog-nh" class="prog-nh-btn"><span>The Nighthold</span></button>

					<div id="prog-nh" class="collapse in">
						<div class="prog-col-content">
							<table class="prog-table">
								<tr>
									<td>Skorpyron</td>
									<td class="pull-right kill-status">Mythic</td>
								</tr>
								<tr>
									<td>Chronomatic Anomaly</td>
									<td class="pull-right kill-status">Mythic</td>
								</tr>
								<tr>
									<td>Trilliax</td>
									<td class="pull-right kill-status">Mythic</td>
								</tr>
								<tr>
									<td>Spellblade Aluriel</td>
									<td class="pull-right kill-status">Mythic</td>
								</tr>
								<tr>
									<td>Tichondrius</td>
									<td class="pull-right kill-status">Mythic</td>
								</tr>
								<tr>
									<td>Krosus</td>
									<td class="pull-right kill-status">Mythic</td>
								</tr>
								<tr>
									<td>High Botanist Tel'arn</td>
									<td class="pull-right kill-status">Mythic</td>
								</tr>
								<tr>
									<td>Star Augur Etraeus</td>
									<td class="pull-right kill-status">Mythic</td>
								</tr>
								<tr>
									<td>Grand Magistrix Elisande</td>
									<td class="pull-right kill-status">Mythic</td>
								</tr>
								<tr>
									<td>Gul'dan</td>
									<td class="pull-right kill-status">Heroic</td>
								</tr>
							</table>
						</div>
					</div>

				<button data-toggle="collapse" data-target="#prog-tov" class="prog-tov-btn"><span>Trial of Valor</span></button>

					<div id="prog-tov" class="collapse">
						<div class="prog-col-content">
							<table class="prog-table">
								<tr>
									<td>Odyn</td>
									<td class="pull-right kill-status">Mythic</td>
								</tr>
								<tr>
									<td>Guarm</td>
									<td class="pull-right kill-status">Mythic</td>
								</tr>
								<tr>
									<td>Helya</td>
									<td class="pull-right kill-status">Heroic</td>
								</tr>
							</table>
						</div>
					</div>

				<button data-toggle="collapse" data-target="#prog-en" class="prog-en-btn"><span>Emerald Nightmare</span></button>

					<div id="prog-en" class="collapse">
						<div class="prog-col-content">
							<table class="prog-table">
								<tr>
									<td>Nythendra</td>
									<td class="pull-right kill-status">Mythic</td>
								</tr>
								<tr>
									<td>Il'gynoth, Heart of Corruption</td>
									<td class="pull-right kill-status">Mythic</td>
								</tr>
								<tr>
									<td>Elerethe Renferal</td>
									<td class="pull-right kill-status">Mythic</td>
								</tr>
								<tr>
									<td>Ursoc</td>
									<td class="pull-right kill-status">Mythic</td>
								</tr>
								<tr>
									<td>Dragons of Nightmare</td>
									<td class="pull-right kill-status">Mythic</td>
								</tr>
								<tr>
									<td>Cenarius</td>
									<td class="pull-right kill-status">Mythic</td
								></tr>
								<tr>
									<td>Xavius</td>
									<td class="pull-right kill-status">Mythic</td>
								</tr>
							</table>
						</div>
					</div>
				
			</div>
		</div>