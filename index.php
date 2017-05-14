<?php
	require('header.php');
	require('highlight.php');
	require('sidebar.php');
?>
		<div class="col-md-9 be-news">
			<?php 
				foreach ($news as $new_post) {
					$title = $new_post['title'];
					$author = $new_post['author'];
					$time = $new_post['time'];
					$body = $new_post['body'];

					echo "<p class=\"news-title\">$title</p>";
					echo "<p class=\"news-author-info\">Posted by: <span class=\"news-author\">$author</span> <span class=\"news-date\"><i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i> $time</span></p>";
					echo "<div class=\"news-content\"><p>$body</p></div>";
				}
			?>
			<!-- <p class="news-title">Star Augur Etraeus down!</p>
			<p class="news-author-info">Posted by: <span class="news-author">Pantheon</span> <span class="news-date"><i class="fa fa-clock-o" aria-hidden="true"></i> 8th May 2017</span>, <span class="news-time">05:19am</span></p>
			<div class="news-content">
				<p>Spicy jalapeno ham hock burgdoggen pork chop, short loin swine bacon jerky pig capicola sirloin pork loin. Landjaeger burgdoggen sausage, kevin tongue strip steak ham hock. Andouille pig sausage pork belly kevin swine filet mignon, alcatra brisket leberkas strip steak pastrami rump pork chop. Prosciutto shank leberkas strip steak picanha short loin ham shoulder salami beef pork belly frankfurter pastrami ball tip shankle.</p>
				<p>Picanha frankfurter sirloin drumstick, pork ground round landjaeger. Ham hock shank beef ribs, burgdoggen beef chicken biltong alcatra flank kevin ball tip doner. Sausage pork belly pork loin sirloin chuck boudin pastrami flank alcatra spare ribs. Corned beef biltong t-bone jowl frankfurter, shoulder turkey ground round rump bresaola landjaeger. Pastrami andouille jowl, ball tip salami biltong corned beef cow pork chop shoulder landjaeger turkey chuck cupim rump. Venison pancetta burgdoggen ribeye.</p>
				<p>Filet mignon cupim shank tail strip steak pork loin, spare ribs turducken ground round pancetta burgdoggen swine chuck pork. Cupim porchetta fatback pork chop frankfurter bresaola tongue beef ribs meatball turkey drumstick jerky tri-tip picanha burgdoggen. Leberkas short loin pancetta shoulder ball tip. Strip steak beef turkey, meatball landjaeger porchetta filet mignon shankle. Venison spare ribs sausage cow, bacon cupim burgdoggen pork chop frankfurter sirloin picanha. Meatloaf leberkas swine strip steak, pork chop sirloin jerky kielbasa burgdoggen ham hock tail capicola. Tri-tip venison andouille, beef ribs t-bone drumstick bresaola shankle short loin tenderloin pork loin.</p>
			</div> -->
		</div>
	</div>
</div>

<?php
	require('footer.php');
?>