<?php $pageTitle = "404" ?>

<!DOCTYPE html>
<html>
    <?php include 'partials/head.php' ?>
    <body>
        <?php include 'partials/nav.php' ?>

        <div class="fullpage title">
            <div class="v-center">
                <div class="container t-center">
                    <div class="container container-sm">
                        <h1 class="animation slideUp">404 - <?php $trans->get('404.message'); ?></h1>
                    </div>
                </div>
            </div>
        </div>

        <?php include "partials/footer.php" ?>

    </body>
</html>