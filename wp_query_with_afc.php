<?php 
$the_query = new WP_Query(
  array(
  'meta_query'=>array(
    array(
      'key' => 'pro-post',
      'value' => "1",
      
    )
  
  )
  )
  );

  if ($the_query->have_posts()) {
      while ($the_query->have_posts()) {
		$the_query->the_post();
		?>


<?php 
          
      }
          ?>
