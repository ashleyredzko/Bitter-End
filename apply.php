<?php
	require('header.php');
	require('highlight.php');
	require('sidebar.php');
?>
		<div class="col-md-9 be-news">

			<p class="news-title">Bitter End Application Form</p>

			<div class="news-content">
				<p>Filling out 34 questions to join a WoW guild is dumb, so we have 10 simple questions that give us all of the information we need. If your application is accepted we will add you on BattleNet and invite you to discord for a chat!</p>
			</div>

				<div class="container">

					<form class="app-form" action="/submit-app.php" method="post">

						<div class="form-group row">
							<label for="app-name" class=" col-form-label">Name</label>
								<input type="text" name="app-name" class="form-control" id="app-name" placeholder="">
					    </div>

					    <div class="form-group row">
							<label for="app-age" class="col-form-label">Age</label>
								<input type="text" name="app-age" class="form-control" id="app-age" placeholder="">
						</div>

					     <div class="form-group row">
							<label for="app-btag" class="col-form-label">BattleTag#</label>
								<input type="text" name="app-btag" class="form-control" id="app-btag" placeholder="">
						</div>

					    <hr>

					     <div class="form-group row">
							<label for="app-armory" class="col-form-label">Armory Link</label>
								<input type="text" name="app-armory" class="form-control" id="app-armory" placeholder="">
						</div>

						<div class="form-group row">
							<label for="app-ms" class="col-form-label">What's your main spec and points in weapon?</label>
								<input type="text" name="app-ms" class="form-control" id="app-ms" placeholder="">
						</div>

						<div class="form-group row">
							<label for="app-os" class="col-form-label">Do you have a raid ready offspec? Which one? How many points in your weapon?</label>
								<input type="text" name="app-os" class="form-control" id="app-oswep" placeholder="">
						</div>

						<div class="form-group row">
							<label for="app-logs" class="col-form-label">Please provide a link to your logs</label>
								<input type="text" name="app-logs" class="form-control" id="app-logs" placeholder="">
						</div>

						<hr>

						<div class="form-group row">
							<label for="app-specs" class="col-form-label">What are your pc specs?</label>
								<textarea rows ="4" type="text" name="app-specs" class="form-control" id="app-specs" placeholder=""></textarea>
						</div>

						<div class="form-group row">
							<label for="app-internet" class="col-form-label">How stable is your internet? Do you regularly have outages? Please be honest</label>
								<input type="text" name="app-internet" class="form-control" id="app-internet" placeholder="">
						</div>

						<div class="form-group row">
							<label for="app-ui" class="col-form-label">Please provide a link to a screenshot of your UI in a raid setting, preferably in combat</label>
								<input type="text" name="app-ui" class="form-control" id="app-ui" placeholder="">
						</div>

						<div class="form-group row app-submit">
							<button type="submit" class="btn btn-primary btn-block btn-lg">Submit</button>
						</div>

					</form>

				</div>

		</div>
	</div>
</div>

<?php
	require('footer.php');
?>