<?php
	require('../header.php');
	require('set_vars.php');
	require('functions.php');
?>

		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<p class="news-title text-center">Set Recruitment Status</p>
					<form action="/admin/update-recruitment.php" method="post">
						<table class="set-recruit">
							<tr>
								<th>Class</th>
								<th>Status</th>
								<th></th>
							</tr>
							<?php
								foreach ($recruitment as $classStatus) {
									$class = $classStatus['class'];
									$status = $classStatus['status'];
									$name = $classStatus['name'];

									echo "<tr>";
									echo "<td class=\"class-$class-bg\">$name</td>";
									echo "<td><input class=\"form-control\" type=\"text\" name=\"$class-recruitment\" value=\"$status\" /></td>";
									echo "</tr>";
								}
							?>
							<tr>
								<td colspan="2"><button class="btn btn-block btn-primary" type="submit">Update Recruitment</button></td>
							</tr>
						</table>
					</form>
				</div>
				<div class="col-md-4">
					<p class="news-title text-center">Post News</p>
					<form class="new-news" action="/admin/submit-news.php" method="post">
						<div class="form-group">
							<label for="news-title" class="col-form-label">News Title</label>
								<input type="text" name="news-title" class="form-control" id="news-title" placeholder="">
						</div>
						<div class="form-group">
							<label for="news-name" class="col-form-label">Your Name?</label>
								<input type="text" name="news-name" class="form-control" id="news-name" placeholder="">
						</div>
						<div class="form-group">
							<label for="news-body" class="col-form-label">News Body</label>
								<textarea rows="4" type="text" name="news-body" class="form-control" id="news-body" placeholder="Use HTML code. Wrap paragraphs in <p></p> tags."></textarea>
						</div>
						<div class="form-group news-submit">
							<button type="submit" class="btn btn-primary btn-block btn-sm">Post news!</button>
						</div>
					</form>
				</div>
				<div class="col-md-4">
					<p class="news-title text-center">Update Progression</p>
					<div class="form-group">
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
		<div class="container-flex">
			<div class="row">
				<div class="col-md-12">
					<p class="news-title text-center">Contact Centre (newest first)</p>
					<?php
						$conn = new mysqli("$dbserver", "$dbuser", "$dbpass", "$dbname");

						if ($conn->connect_error) {
							die("Connection failed: " . $conn->connect_error);
						};

						$result = mysqli_query($conn,"SELECT * FROM be_contact ORDER BY id DESC");

						echo "<table class='table applications'>
						<tr>
						<th>#</th>
						<th>Date</th>
						<th>Name</th>
						<th>Reply To</th>
						<th>Regarding</th>
						<th>Message</th>
						</tr>";

						while($row = mysqli_fetch_array($result))
						{
						echo "<tr>";
						echo "<td>" . $row['id'] . "</td>";
						echo "<td>" . $row['date'] . "</td>";
						echo "<td>" . $row['name'] . "</td>";
						echo "<td>" . $row['email'] . "</td>";
						echo "<td>" . $row['about'] . "</td>";
						echo "<td>" . $row['msg'] . "</td>";
						echo "</tr>";
						}
						echo "</table>";

						$conn->close()
					?>

				</div>
			</div>
		<div class="container-flex">
			<div class="row">
				<div class="col-md-12">
					<p class="news-title text-center">Applications (newest first)</p>
					<?php
						$conn = new mysqli("$dbserver", "$dbuser", "$dbpass", "$dbname");

						if ($conn->connect_error) {
							die("Connection failed: " . $conn->connect_error);
						};

						$result = $conn->query("SELECT * FROM be_applications ORDER BY id DESC");

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

						while($row = $result->fetch_array())
						{
						echo "<tr>";
						echo "<td>" . $row['id'] . "</td>";
						echo "<td>" . $row['date'] . "</td>";
						echo "<td>" . $row['name'] . "</td>";
						echo "<td>" . $row['age'] . "</td>";
						echo "<td>" . $row['btag'] . "</td>";
						echo "<td><a href='//" . $row['armory'] . "'><i class='fa fa-external-link' aria-hidden='true'></i></a></td>";
						echo "<td>" . $row['ms'] . "</td>";
						echo "<td>" . $row['os'] . "</td>";
						echo "<td><a href='//" . $row['logs'] . "'><i class='fa fa-external-link' aria-hidden='true'></i></a></td>";
						echo "<td>" . $row['pcspecs'] . "</td>";
						echo "<td><a href='//" . $row['speed'] . "'><i class='fa fa-external-link' aria-hidden='true'></i></a></td>";
						echo "<td><a href='//" . $row['ui'] . "'><i class='fa fa-external-link' aria-hidden='true'></i></a></td>";
						echo "</tr>";
						}
						echo "</table>";

						$conn->close()
					?>

				</div>
			</div>

		</div>

	</div>
</div>

<?php
	require('../footer.php');
?>