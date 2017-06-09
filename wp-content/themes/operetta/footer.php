
<div class="main_footer">
    <div class="footer_copyrights">
        <?php if (ale_get_option('copyrights')) : ?>
            <p class="right"><?php echo ale_option('copyrights'); ?></p>
        <?php else: ?>
            <p class="right">&copy; <?php _e('2017 ALL RIGHTS RESERVED', 'aletheme')?></p>
        <?php endif; ?>
    </div>
</div>

    <!-- Scripts -->
    <?php wp_footer(); ?>
</body>
</html>