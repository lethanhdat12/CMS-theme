<footer>
    <div id="footer">
        <div id="overlay"></div>
        <div class="container">
        <div class="footer-widgets">
            <?php if (is_active_sidebar('sidebar-footer')): ?>
                    <div class="row">
                    <?php dynamic_sidebar('sidebar-footer'); ?>
                    </div>
            <?php endif; ?>
        </div>
        </div>
    </div>
</footer>