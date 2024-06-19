<?php
/**
 * Template Name: All news
 */
get_header();
?>
<main class="middle">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h1 class="text-center my-2">Новости</h1>
            </div>
        </div>
        <div class="row" style="padding: 0px 12px 0px 12px">
            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = [
                'post_type' => 'post',  
                'posts_per_page' => -1
            ];

            $the_query = new WP_Query($args);

            if ($the_query->have_posts()) :
                while ($the_query->have_posts()) : $the_query->the_post();
                    echo '<div class="card p-0 mb-2">';
            ?>
                    <div class="row g-0">
                        <div class="col-2">
                            <?php
                            if (has_post_thumbnail()) {
                                echo '<img src="' . get_the_post_thumbnail_url() . '" class="img-fluid rounded-start" alt="..." style="height: 250px;">';
                            }
                            ?>
                        </div>
                        <div class="col-10 h-auto">
                            <div class="card-body h-100">
                                <?php
                                echo '<h5 class="card-title">' . get_the_title() . '</h5>';
                                $trimmed_content = wp_trim_words(get_the_content(), 100, '...');
                                echo '<p class="card-text">' . $trimmed_content . '</p>';
                                ?>
                                <a href="<?php the_permalink(); ?>" class="btn btn-primary">Читать далее</a>
                            </div>
                        </div>
                    </div>
                <?php
                    echo '</div>';
                endwhile;
                ?>
            <?php
                wp_reset_postdata();
            else :
                echo '<p>Записей не найдено</p>';
            endif;
            ?>
        </div>
    </div>
    </div>
</main>
<?php
get_footer();
?>