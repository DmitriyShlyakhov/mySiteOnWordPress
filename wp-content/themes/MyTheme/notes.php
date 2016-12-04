<? if (have_posts()) : query_posts('p=11');
    while (have_posts()) : the_post(); ?>
        <? the_title(); ?>
        <? the_content(); ?>
        <? the_post_thumbnail(array(100, 100)); ?>

    <? endwhile; endif;
wp_reset_query(); ?>

<?
$tags = get_tags();
if ($tags)
    foreach($tags as $tag){
        echo ' ' . $tag->name;
    }
?>
