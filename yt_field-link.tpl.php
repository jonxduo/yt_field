<div class="yt_field">
	<div style="float:left">
		<?php if($content['thumbnail']) echo $content['thumbnail']; ?>
	</div>
	<?php 
		if($content['title']) echo '<h2>'.$content['title'].'</h2>';
		if($content['desc']) echo $content['desc'].'<br/>'; 
		echo $content['link'];
	?>
</div>