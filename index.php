<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Test project for interview</title>
     <?php wp_head(); ?>
</head>
<body>
     <div class="wrapper">
          <div class="container">
              <div class="page-header">
                  <h1>Panels with nav tabs.<span class="pull-right label label-default">:)</span></h1>
              </div>
              <div class="row">
              	<div class="col-md-6">
                      <div class="panel with-nav-tabs panel-default">
                          <div class="panel-heading">
                                  <ul class="nav nav-tabs">
                                      <?php $bs_tab_loop = new WP_Query( array( 'post_type' => 'tab', 'posts_per_page' => -1 ) ); ?>
                                      <?php 
                                      $counter = 0;
                                      while ( $bs_tab_loop->have_posts() ) : $bs_tab_loop->the_post(); 
                                          $counter++;
                                      ?>
                                      <li class="post-<?php the_ID(); ?> <?=($counter == 1) ? 'active' : ''?>"><a href="#post-<?php the_ID(); ?>" data-toggle="tab"><?php the_title();?></a></li>
                                      <?php endwhile; wp_reset_query(); ?>
                                  </ul>
                          </div>
                          <div class="panel-body">
                              <div class="tab-content">
                                          <?php
                                          $counter = 0;
                                          $bs_tab_loop = new WP_Query( array( 'post_type' => 'tab', 'posts_per_page' => -1 ) );
                                          while ( $bs_tab_loop->have_posts() ) : $bs_tab_loop->the_post(); 
                                              $counter++;
                                          ?>
                                  <div class="tab-pane fade in  <?=($counter == 1) ? 'active' : ''?>" id="post-<?php the_ID(); ?>">
                                        <?php the_content();?>
                                  </div>
                                   <?php endwhile; ?>

                              </div>
                          </div>
                      </div>
                  </div>
          	</div>
          </div>
     </div>
     <?php wp_footer(); ?>
</body>
</html>
