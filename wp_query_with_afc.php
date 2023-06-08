<?php
$the_query = new WP_Query(
array(
    'meta_query'=>array(
        array(
            'key' => 'slider',
            'value' => false,
            'compare' => '!='
    
        )
    )
    )
    );
    
    ?>