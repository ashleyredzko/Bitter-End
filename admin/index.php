<?php
	require('aheader.php');
?>

<?php
	require('set_vars.php');
?>

		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<p class="news-title text-center">Set Recruitment Status</p>
					<table class="set-recruit">
						<tr>
							<th>Class</th>
							<th>Status</th>
							<th>Set</th>
						</tr>
						<tr>
							<td class="class-dk-bg">Death Knight</td>
							<td><input type="text" placeholder="<?php echo $rec_stat_dk ?>"></td>
							<td><button>Ok</button></td>
						</tr>
						<tr>
							<td class="class-dh-bg">Demon Hunter</td>
							<td><input type="text" placeholder="<?php echo $rec_stat_dh ?>"></td>
							<td><button>Ok</button></td>
						</tr>
						<tr>
							<td class="class-druid-bg">Druid</td>
							<td><input type="text" placeholder="<?php echo $rec_stat_druid ?>"></td>
							<td><button>Ok</button></td>
						</tr>
						<tr>
							<td class="class-hunter-bg">Hunter</td>
							<td><input type="text" placeholder="<?php echo $rec_stat_hunter ?>"></td>
							<td><button>Ok</button></td>
						</tr>
						<tr>
							<td class="class-mage-bg">Mage</td>
							<td><input type="text" placeholder="<?php echo $rec_stat_mage ?>"></td>
							<td><button>Ok</button></td>
						</tr>
						<tr>
							<td class="class-monk-bg">Monk</td>
							<td><input type="text" placeholder="<?php echo $rec_stat_monk ?>"></td>
							<td><button>Ok</button></td>
						</tr>
						<tr>
							<td class="class-paladin-bg">Paladin</td>
							<td><input type="text" placeholder="<?php echo $rec_stat_paladin ?>"></td>
							<td><button>Ok</button></td>
						</tr>
						<tr>
							<td class="class-priest-bg">Priest</td>
							<td><input type="text" placeholder="<?php echo $rec_stat_priest ?>"></td>
							<td><button>Ok</button></td>
						</tr>
						<tr>
							<td class="class-rogue-bg">Rogue</td>
							<td><input type="text" placeholder="<?php echo $rec_stat_rogue ?>"></td>
							<td><button>Ok</button></td>
						</tr>
						<tr>
							<td class="class-shaman-bg">Shaman</td>
							<td><input type="text" placeholder="<?php echo $rec_stat_shaman ?>"></td>
							<td><button>Ok</button></td>
						</tr>
						<tr>
							<td class="class-warlock-bg">Warlock</td>
							<td><input type="text" placeholder="<?php echo $rec_stat_warlock ?>"></td>
							<td><button>Ok</button></td>
						</tr>
						<tr>
							<td class="class-warrior-bg">Warrior</td>
							<td><input type="text" placeholder="<?php echo $rec_stat_warrior ?>"></td>
							<td><button>Ok</button></td>
						</tr>
					</table>
				</div>
				<div class="col-md-4">
					<p class="news-title text-center">Post News</p>
					<form class="new-news">
						<div class="form-group row">
							<label for="news-title" class="col-form-label">News Title</label>
								<input type="text" class="form-control" id="news-title" placeholder="">
						</div>
						<div class="form-group row">
							<label for="news-name" class="col-form-label">Your Name?</label>
								<input type="text" class="form-control" id="news-name" placeholder="">
						</div>
						<div class="form-group row">
							<label for="news-img" class="col-form-label">Image name</label>
								<input type="text" class="form-control" id="news-img" placeholder="">
						</div>
						<div class="form-group row">
							<label for="news-body" class="col-form-label">News Body</label>
								<textarea rows="4" type="text" class="form-control" id="news-body" placeholder=""></textarea>
						</div>
						<div class="form-group row news-submit">
							<button type="submit" class="btn btn-primary btn-block btn-sm">Submit</button>
						</div>
					</form>
				</div>
				<div class="col-md-4">
					<p class="news-title text-center">Update Progression</p>
					<div class="form-group row">
						<label for="select-raid" class="col-form-label">Select Raid</label>
							<select class="form-control" id="select-raid">
								<!-- <option value="raid-tos">Tomb of Sargeras</option> -->
								<option value="raid-nh">Nighthold</option>
								<option value="raid-tov">Trial of Valor</option>
								<option value="raid-en">Emerald Nightmare</option>
							</select>
					</div>
				</div>
			</div>
		</div>
		<div class="container-flex"
			<div class="row">
				<div class="col-md-12">
					<p class="news-title text-center">Applications</p>
					<!-- <table class="table applications">
						<tr>
							<th>#</th>
							<th>Date</th>
							<th>Name</th>
							<th>Age</th>
							<th>BTag</th>
							<th>Armory</th>
							<th>MS</th>
							<th>OS</th>
							<th>Logs</th>
							<th>PC Specs</th>
							<th>Speedtest</th>
							<th>UI</th>
						</tr>
					</table> -->

					<?php
						$dbserver = "";
					    $dbuser = "";
					    $dbpass = "";
					    $dbname = "";

						$conn = new mysqli("$dbserver", "$dbuser", "$dbpass", "$dbname");

						if ($conn->connect_error) {
							die("Connection failed: " . $conn->connect_error);
						};

						$result = mysqli_query($conn,"SELECT * FROM be_applications ORDER BY id DESC");

						echo "<table class='table applications'>
						<tr>
						<th>#</th>
						<th>Date</th>
						<th>Name</th>
						<th>Age</th>
						<th>BTag</th>
						<th>Armory</th>
						<th>MS</th>
						<th>OS</th>
						<th>Logs</th>
						<th>PC Specs</th>
						<th>Speedtest</th>
						<th>UI</th>
						</tr>";

						while($row = mysqli_fetch_array($result))
						{
						echo "<tr>";
						echo "<td>" . $row['id'] . "</td>";
						echo "<td>" . $row['date'] . "</td>";
						echo "<td>" . $row['name'] . "</td>";
						echo "<td>" . $row['age'] . "</td>";
						echo "<td>" . $row['btag'] . "</td>";
						echo "<td><a href='" . $row['armory'] . "'>x</a></td>";
						echo "<td>" . $row['ms'] . "</td>";
						echo "<td>" . $row['os'] . "</td>";
						echo "<td><a href='" . $row['logs'] . "'>x</a></td>";
						echo "<td>" . $row['pcspecs'] . "</td>";
						echo "<td><a href='" . $row['speed'] . "'>x</a></td>";
						echo "<td><a href='" . $row['ui'] . "'>x</a></td>";
						echo "</tr>";
						}
						echo "</table>";

						mysqli_close($conn);
					?>

				</div>
			</div>

		</div>

	</div>
</div>

<?php
	require('../footer.php');
?>