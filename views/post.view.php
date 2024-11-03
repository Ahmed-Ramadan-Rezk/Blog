<?php require_once('inc/header.php'); ?>
<?php require_once('inc/banner.php'); ?>
<!-- Main Content-->
<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
            <!-- Post preview-->
            <div class="post-preview">
                <h2 class="post-title"><?= $post['title'] ?></h2>
                <h3 class="post-subtitle"><?= $post['content'] ?></h3>
                <p class="post-meta">
                    Posted by
                    <a href="#!">Start Bootstrap</a>
                    on <?= date('F j, Y', strtotime($post['created_at'])) ?>
                </p>
            </div>
        </div>
    </div>
</div>
<?php require_once('inc/footer.php'); ?>