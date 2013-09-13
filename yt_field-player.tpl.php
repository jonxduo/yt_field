<div class="yt_field">

	<?php 
	debug($content);
		if($content['title']) echo '<h2>'.$content['title'].'</h2>';;
		if($content['player']) echo $content['player'];
		if($content['desc']) echo $content['desc']; 
	?>
</div>