<footer>
    <div class="container">
        <div class="top">
            <div class="row">
                <div class="col-md-6">
                    <div class="about">
                        <h3><?php echo $lang['footer.about'] ?></h3>
                        <p><?php echo $lang['footer.about.text'] ?></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="menu">
                                <h3><?php echo $lang['footer.pages'] ?></h3>
                                <a href="/"><?php echo $lang['pages.home'] ?></a>
                                <a href="/applications.php"><?php echo $lang['pages.applications'] ?></a>
                                <a href="/technology.php"><?php echo $lang['pages.technology'] ?></a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="menu">
                                <h3><?php echo $lang['footer.contact'] ?></h3>
                                <a href="mailto:scastonguay@nordresa.com"><?php echo $lang['footer.contact.send'] ?></a>
                                <a href="/contact.php"><?php echo $lang['footer.contact.page'] ?></a>
                                <a href="/about.php"><?php echo $lang['pages.about'] ?></a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="menu">
                                <h3><?php echo $lang['footer.legal'] ?></h3>
                                <a href="/terms.php"><?php echo $lang['footer.legal.terms'] ?></a>
                                <a href="/privacy.php"><?php echo $lang['footer.legal.privacy'] ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom">
            <div class="rights">
                © <?php echo date('Y') ?> Witify
            </div>
            <div class="author">
                <?php echo $lang['footer.proudly'] ?> <a href="http://witify.io">Witify</a>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="/vendor/bootstrap/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="/vendor/bootstrap/ie10-viewport-bug-workaround.js"></script>

<!-- Custom Javascript
================================================== -->
<script src="bower_components/slick-carousel/slick/slick.min.js"></script>
<script src="bower_components/PACE/pace.min.js"></script>
<script src="bower_components/seiyria-bootstrap-slider/dist/bootstrap-slider.js"></script>
<script src="node_modules/chart.js/dist/Chart.js"></script>
<script src="vendor/vuejs/vue.js"></script>
<script src="/js/main.js"></script>
