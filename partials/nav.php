<nav class="navbar navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button id="mobile-menu" type="button" class="navbar-toggle collapsed" >
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/<?php echo $language; ?>/home">
                LOGO
            </a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="applications" <?php echo ($pageTitle == "Applications") ? "class='active'" : '' ?>><?php $trans->get('pages.applications') ?></a></li>
                <li><a href="opportunity" <?php echo ($pageTitle == "Opportunity") ? "class='active'" : '' ?>><?php $trans->get('pages.opportunity') ?></a></li>
                <li><a href="technology" <?php echo ($pageTitle == "Technology") ? "class='active'" : '' ?>><?php $trans->get('pages.technology') ?></a></li>
                <li><a href="contact" <?php echo ($pageTitle == "Contact") ? "class='active'" : '' ?>><?php $trans->get('pages.contact') ?></a></li>
                <?php 
                    if($language == 'en') :
                    ?>
                    <li><a href="/fr/<?php echo strtolower($pageTitle) ?>">FR</a></li>
                    <?php else : ?>
                    <li><a href="/en/<?php echo strtolower($pageTitle) ?>">EN</a></li>
                    <?php endif; ?>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>