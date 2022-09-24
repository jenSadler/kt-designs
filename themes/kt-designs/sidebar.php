<div class="sidebar">
    <div class="spacer"></div>
    <div class="sidebar-content">
    <?php if( is_active_sidebar( 'sidebar-text-widget' ) ) : ?>
        <div class="sidebar-text-widget">
		<?php dynamic_sidebar( 'sidebar-text-widget' ); ?>
    </div>
    <div class="sidebar-image-widget">
        <?php dynamic_sidebar( 'sidebar-image-widget' ); ?>
    </div>
    </div>
<?php endif; ?>
</div>