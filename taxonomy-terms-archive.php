<?php
/*
*author : shahala anjum
*fetch all terms within a mentioned taxonomy
*/
?>
<div class="inner-content-area product-list-sec">
        <div class="text-area">
            <?php
            $taxonomyname = 'your_taxonomy_name' ;
            $terms = get_terms( $taxonomyname, array(
                'hide_empty' => false,
                
            ) ); ?>
            <!-- the taxonomy archive section -->
            <div class="text-center product-clik">
            <?php
            foreach ( $terms as $term ) { 
                $term_url = get_term_link( $term ); ?>
                <a class="product-img" href="<?php echo $term_url;  ?>" title="<?php echo $term->name ; ?>">

                    <img src="<?php the_field('featured_image', $term->taxonomy . '_' . $term->term_id); ?>">
                </a>
                <?php
                // echo $term->name . '<br>'  ; 
                // echo $term->slug .'<br>';
                // echo get_term_link( $term ). '<br>';
                } 
            ?>
            
            </div>
            <!-- end category archive section-->

        </div>
</div>
