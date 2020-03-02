## temp1 - getting all the post and when clicking on the post we are redirect to the single post 
```php
// index.php
<?php
while (have_posts()) {
    the_post(); ?>
    <h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
    <?php the_content() ?>
    <hr>
<?php }
?>

// single.php
<?php
while (have_posts()) {
    the_post(); ?>
    <h2><?php the_title(); ?></h2>
    <?php the_content() ?>

<?php }
?>
```