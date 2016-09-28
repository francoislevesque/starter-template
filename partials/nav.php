<nav class="navbar navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button id="mobile-menu" type="button" class="navbar-toggle collapsed" >
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">
                LOGO
            </a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="applications.php" <?php echo ($pageTitle == "Applications") ? "class='active'" : '' ?>><?php echo $lang['pages.applications'] ?></a></li>
                <li><a href="opportunity.php" <?php echo ($pageTitle == "Opportunity") ? "class='active'" : '' ?>><?php echo $lang['pages.opportunity'] ?></a></li>
                <li><a href="technology.php" <?php echo ($pageTitle == "Technology") ? "class='active'" : '' ?>><?php echo $lang['pages.technology'] ?></a></li>
                <li><a href="contact.php" <?php echo ($pageTitle == "Contact") ? "class='active'" : '' ?>><?php echo $lang['pages.contact'] ?></a></li>
                <?php 
                if(isset($_SESSION['lang'])) : 
                    if($_SESSION['lang'] == 'en') : 
                    ?>
                    <li><a href="<?php echo strtolower($pageTitle) ?>.php?lang=fr">FR</a></li>
                    <?php else : ?>
                    <li><a href="<?php echo strtolower($pageTitle) ?>.php?lang=en">EN</a></li>
                <?php endif; else : ?>
                    <li><a href="<?php echo strtolower($pageTitle) ?>.php?lang=fr">FR</a></li>
                <?php endif ?>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>