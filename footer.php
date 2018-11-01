</main>

<footer>

    <div class="copyright">

        <?php echo get_field('copyright_text'); ?>

    </div>

</footer>

<?php wp_footer(); ?> 

<?php if (is_page( 'Home' ) || is_page( 'online-founds-shop' )) : ?>
<div class="script-footer">

    <div class="container">

        <script language="javascript" type="text/javascript" src="https://service.nfs-netfonds.de/info/hinweis.js?bereich=2;gb=1;"></script>

        <div>Powered by: <a href="https://ideeatogo.com/" title="IDeea to go">IDeea to go</a>

    </div>

</div>
<?php endif; ?>

</body>

</html>