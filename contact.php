<?php
	require('header.php');
?>

<?php
	require('highlight.php');
?>

<?php
	require('sidebar.php');
?>
		<div class="col-md-9 be-news">

			<p class="news-title">Bitter End Contact</p>

			<div class="news-content">
				<p>If you'd like to contact us for any reason you can use the form below. Also listed are the prices and times we run sales. Note that all prices are in GOLD. We do not accept any other form of payment.</p>
			</div>

			<table class="raid-sched">
					<tr>
						<th>Raid</th>
						<th>Day</th>
						<th>Price</th>
					</tr>
					<tr>
						<td>H Nighthold ML Run</td>
						<td>Sunday 21:00</td>
						<td><img src="img/money-gold.gif" />500,000</td>
					</tr>
					<tr>
						<td>H Nighthold PL Run</td>
						<td>Sunday 21:00</td>
						<td><img src="img/money-gold.gif" />300,000</td>
					</tr>
					<tr>
						<td>M Nighthold ML Run</td>
						<td>TBD</td>
						<td><img src="img/money-gold.gif" />1,400,000</td>
					</tr>
					<tr>
						<td>Glory of the Legion Raider</td>
						<td>TBD</td>
						<td><img src="img/money-gold.gif" />TBD</td>
					</tr>
				</table>

				<p class="news-title">Contact Form</p>

				<div class="container">

					<form class="ct-form" action="#" method="post">

						<div class="form-group row">
							<label for="ct-name" class="col-form-label">Your name</label>
								<input type="text" class="form-control" id="ct-name" placeholder="">
						</div>

						<div class="form-group row">
							<label for="ct-btagemail" class="col-form-label">Method of contact (BTag, Email)</label>
								<input type="text" class="form-control" id="ct-btagemail" placeholder="">
						</div>

						<div class="form-group row">
							<label for="ct-about" class="col-form-label">What are you contacting us about?</label>
								<select class="form-control" id="ct-about">
									<option value="general">General Query</option>
									<option value="recruit">Recruitment</option>
									<option value="sales">Sales</option>
									<option value="other">Other</option>
								</select>
						</div>

						<div class="form-group row">
							<label for="ct-msg" class="col-form-label">Your message</label>
								<textarea rows="4" type="text" class="form-control" id="ct-msg" placeholder=""></textarea>
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