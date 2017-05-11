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
				<p>If you'd like to contact us for any reason you can use the form below. Also listed are the prices and times we run sales.</p>

				<p>
					<ul>
						<li>Sales are dealt with in gold. We do not accept any other form of currency.</li>
						<li>We require a 25% deposit to confirm your booking. The remainder is paid when the first boss dies.</li>
						<li>Showing up late or not at all forfeits your deposit.</li>
						<li>Mythic only: being unable to follow simple instructions and wiping the raid may see you kicked and your deposit forfeit. We will refund you for any missing bosses.</li>
						<li>We only sell Master Loot runs to 3 characters at a time (one per armor token), and we do not take more than 1 type of armor specialization. This prevents the majority of loot conflicts, however some slots (neck, back, rings and trinkets) will be handed out based on buyers main spec stat priority. We also only take 1 class per main secondary stat so buyers don't fight over crit gear. For example <a href="http://www.wowhead.com/item=140895/spellblades-gemmed-signet&bonus=3514">Spellblade's Gemmed Signet</a> would go to a Fire Mage over a Shadow Priest.</li>
					</ul>
				</p>
			</div>

			<table class="raid-sched">
					<tr>
						<th>Content</th>
						<th>Day</th>
						<th>Price</th>
					</tr>
					<tr>
						<td>H Nighthold ML Run</td>
						<td>Tuesday 18:30</td>
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

					<form class="ct-form" action="contact-success.php" method="post">

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