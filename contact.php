<?php
	require('header.php');
?>

<div class="container">
	<div class="row">
		<div class="col-md-12 highlight-panel highlight-img">
			<div class="highlight-wrap">
				<div class="highlight-title">
				Mythic Star Augur Etraeus Dead
				</div>
				<div class="highlight-desc">
				Rumor has it he saw stars...
				</div>
			</div>
		</div>
	</div>
</div>

<?php
	require('sidebar.php');
?>
		<div class="col-md-9 be-news">
		<p class="news-title">Something on your mind? Let us know.</p>
		<div class="news-content">
			<div class="col-md-6">
				<form class="contact">
					<div class="form-group">
						<label for="form-name">Your name</label>
						<input type="text" class="form-text" id="form-name" placeholder="Enter name">
					</div>
					<div class="form-group">
						<label for="form-btag">Your BTag</label>
						<input type="text" class="form-text" id="form-btag" placeholder="Enter BTag">
					</div>
					<div class="form-group">
						<label for="form-msg">Message</label>
						<textarea class="form-control" id="form-msg" rows="3" placeholder="Enter a message..."></textarea>
					</div>
					<button type="submit" class="btn btn-primary btn-md btn-block">Submit</button>
				</form>
			</div>
		</div>
		</div>
	</div>
</div>

<?php
	require('footer.php');
?>