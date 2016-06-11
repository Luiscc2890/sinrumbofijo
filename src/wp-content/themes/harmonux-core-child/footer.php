<?php
//if sidebar is large-1 the left side
if (check_position_of_component('sidebar', 'left'))
	get_sidebar();

?>

    <footer id="main-footer" class="main-footer">
        <div id="footer-bottom">
            <div class="row">
                <div class="large-16 columns footer-navigation">
                    <p>Powered by <a href="http://www.berriart.com"> Berriart</a> | 2007-2016 | <a href="http://creativecommons.org/licenses/by-nc-sa/3.0/" rel="license">Licencia Contenido CC BY NC SA</a> | <a href="https://github.com/artberri/sinrumbofijo">Código en Github</a>
                    </p>
                </div>
            </div>
            <div class="footer-claim">
                <div class="row">
                    <div class="large-16 columns ">
                        <p>Only free software was used and no kitties were harmed in the making of this website.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>
