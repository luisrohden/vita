<?php
$data=get_field('news',get_the_ID());
// the query
$the_query = new WP_Query( array(
      'posts_per_page' => 5,
 )); 
if ( $the_query->have_posts() ):
    while ( $the_query->have_posts() ){
        $the_query->the_post();
        $slides[] = '
        <div class="blockNews">
            <div class="blockNews_image">
                <a href=" '. get_permalink() . '">
                    ' . get_the_post_thumbnail() . '
                </a>
            </div>
            <div class="blockNews_title">
                <a href=" '. get_permalink() . '">
                    ' . get_the_title() . '
                </a>
            </div>
        </div>
        ';
    }
    wp_reset_postdata();
    $args=[
        'autoplay' => false,
        'type'=> 'content',
        'content'=> $slides,
        'perView' => 3,
        'pagination' => true
    ];
    
    ?>
    <section id="news">
        <div class="container">
            <h2 class="h2">
                <?php echo $data['title'];?>
            </h2>
            <div class="subtitle">
                <?php echo $data['subtitle'];?>
            </div>
            <?php echo showSwiper($args); ?>
            
        </div>
    </section>
    <?php
endif;