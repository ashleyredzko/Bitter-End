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
					echo "<div class=\"news-content\">$body</div>";
				}
			?>
		</div>
	</div>
</div>

<?php
	require('footer.php');
?>