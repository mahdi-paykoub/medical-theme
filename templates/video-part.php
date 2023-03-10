<?php
$video_embed_id = get_post_meta($post->ID, 'video_embed_id', true);
$video_embed = get_post_meta($post->ID, 'video_embed_source', true);
if (empty($video_embed_id)):
    ?>
    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large_size_for_single'); ?>"
      width="100%"   class="border-radios-10 object-cover main-img-c" alt="<?php echo get_the_title(); ?>"
         title="<?php echo get_the_title(); ?>">
<?php
else:
    ?>
    <div id="<?php echo $video_embed_id; ?>">
        <script type="text/JavaScript"
                src="<?php echo $video_embed; ?>"></script>
    </div>
<?php
endif;
?>
