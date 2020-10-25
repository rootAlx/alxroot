<?php 

if (get_post_meta( $post->ID,'postNaHome', true) =="1"){

//get_the_post_thumbnail('medium_large ',array( 1700, 1700,  'class' => 'activator responsive-img' ) );
	echo "<article class='col s12 l12 xl12'>";
	if (get_post_meta( $post->ID,'positionPost', true)==1){
		
		echo "<article class='col s12 l12 xl12 postRight'>";
//echo "<div class='parallax-container'>";

		echo "<div class=' center cardT' style=' float:left;'>";
		echo "<div class='cardfonteP' style=''>";
		echo "<h4 class='center' style='color: ".$corIcone."'><i class=' ".get_post_meta( $post->ID,'postIcon', true )." fa-lg'> </i> </h4>";
		echo " <span class='card-title flow-text'> ".get_the_title()." </span>";
		echo "<div class='cardTfonte'>";
		echo "<p class='flow-text'> ".get_the_excerpt()."</p>";
//echo "</div>";
		echo "</div>";
		echo "</div>";
		echo "</div>";

		echo "<div class='cardT' style=' float:right;'>";
		echo "<div class='' style=''>";
		the_post_thumbnail('large ',array( 1700, 1700,  'class' => 'activator responsive-img' ) );
		echo "</div>";
		echo "</div>";
		echo "</article>";

		
	}else{ 

		echo "<article class='col s12 l12 xl12 postLeft'>";

		echo "<div class='cardT ' style=' float:left;'>";
		echo "<div class='' style=''>";
		the_post_thumbnail('medium_large ',array( 1700, 1700,  'class' => 'activator responsive-img' ) );
		echo "</div>";
		echo "</div>";
		echo "<div class=' center cardT' style=' float:right;'>";
		echo "<div class='cardfonteP' style=' '>";
		echo "<h4 class='center' style='color: ".$corIcone."'><i class=' ".get_post_meta( $post->ID,'postIcon', true )." fa-lg'> </i> </h4>";

		echo " <span class='card-title flow-text'> ".get_the_title()." </span>";
		echo "<div class='cardTfonte'>";
		echo "<p class='flow-text '> ".get_the_excerpt()."</p>";
		echo "</div>";
		echo "</div>";
		echo "</div>";
		echo "</article>";












	}
}
?>


