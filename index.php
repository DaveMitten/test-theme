<?php

get_header();

if (have_posts()) {
  while (have_posts()) {
    the_post();
    the_title('<h2><a href=<? php the_permalink(); ?>', '</a></h2>' );
    the_content();


  }

} else {
  echo "<p>No content here, mate!</p>";
}
get_footer();
