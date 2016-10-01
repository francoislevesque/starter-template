<footer>
    <div class="container">
        <div class="top">
            <div class="row">
                <div class="col-md-6">
                    <div class="about">
                        <h3><?php $trans->get('footer.about') ?></h3>
                        <p><?php $trans->get('footer.about.text') ?></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="menu">
                                <h3><?php $trans->get('footer.pages') ?></h3>
                                <a href="/"><?php $trans->get('pages.home') ?></a>
                                <a href="/applications.php"><?php $trans->get('pages.applications') ?></a>
                                <a href="/technology.php"><?php $trans->get('pages.technology') ?></a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="menu">
                                <h3><?php $trans->get('footer.contact') ?></h3>
                                <a href="mailto:scastonguay@nordresa.com"><?php $trans->get('footer.contact.send') ?></a>
                                <a href="/contact.php"><?php $trans->get('footer.contact.page') ?></a>
                                <a href="/about.php"><?php $trans->get('pages.about') ?></a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="menu">
                                <h3><?php $trans->get('footer.legal') ?></h3>
                                <a href="/terms.php"><?php $trans->get('footer.legal.terms') ?></a>
                                <a href="/privacy.php"><?php $trans->get('footer.legal.privacy') ?></a>
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
                <?php $trans->get('footer.proudly') ?> <a href="http://witify.io">Witify</a>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="/bower_components/jquery/dist/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="/bower_components/bootstrap-sass/assets/javascripts/bootstrap.min.js"></script>

<!-- Custom Javascript
================================================== -->
<script src="/bower_components/slick-carousel/slick/slick.min.js"></script>
<script src="/bower_components/PACE/pace.min.js"></script>
<script src="/bower_components/chart.js/dist/Chart.min.js"></script>
<script src="/bower_components/vue/dist/vue.min.js"></script>
<script src="/js/main.js"></script>
