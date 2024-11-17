 <?php
    $args = array(
         'post_type'         => 'deertests',
         'posts_per_page'    => -1,
         'post_status' => array('publish'),
         'order' => 'ASC',
    );  
    $query = new WP_Query( $args );
    ob_start();
    // The Loop can be used in between html to display the fields. Also get_post_meta can be replace to get_field
        while ( $query->have_posts() ) {
            $query->the_post();
            $startdate = get_post_meta(get_the_id(),"start_date",true);
            $enddate = get_post_meta(get_the_id(),"end_date",true);
            $description = get_post_meta(get_the_id(),"description",true);
            $cover = get_post_meta(get_the_id(),"cover",true);
            $application = get_post_meta(get_the_id(),"application",true);
        }
?>
