<?php 

  function tutebucket_search_filter( $query ) {
      if ( $query->is_search ) {
          $query->set( 'post_type', array('post','page') );
      }    return $query;
  }
  add_filter('pre_get_posts','tutebucket_search_filter');

?>
