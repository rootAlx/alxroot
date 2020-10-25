<?php

if (have_posts()):
	while(have_posts()): the_post();
		$titulo    = get_the_title();
		$conteudo =  get_the_content();
		$url_post  = get_the_permalink();
		$date      = get_the_date();
		$time      = get_the_time();
		$output ="

		";

		echo $output;
		echo "<p class=''>$conteudo</p>";
	endwhile;

endif;


?>