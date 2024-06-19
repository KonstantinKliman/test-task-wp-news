<?php
get_header();
?>

<main>

<?php
if ( have_posts() ) :
    while ( have_posts() ) : the_post();
?>
<div class="container-fluid">
    <div class="content">
        <h1 class="text-center my-2"><?php the_title(); // Вывод заголовка статьи ?></h1>
        
        <?php
        // Получаем содержимое статьи
        $content = get_the_content();
        
        // Используем PHP DOM для парсинга контента и извлечения изображений
        $dom = new DOMDocument();
        @$dom->loadHTML(mb_convert_encoding($content, 'HTML-ENTITIES', 'UTF-8'));
        
        // Получаем все теги <img> из контента
        $images = $dom->getElementsByTagName('img');
        
        // Выводим каждое изображение
        foreach ($images as $image) {
            $src = $image->getAttribute('src');
            $alt = $image->getAttribute('alt');
            echo '<img src="' . esc_url($src) . '" alt="' . esc_attr($alt) . '">';
        }
        ?>
        
        <div class="post-content d-flex align-items-center flex-column">
            <?php the_content(); // Вывод содержимого статьи ?>
        </div>
    </div>
</div>
<?php
    endwhile;
endif;
?>

</main>

<?php
get_footer();
?>
