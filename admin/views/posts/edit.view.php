<?php require_once(ADMIN_PATH . 'views/inc/header.php'); ?>

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <?= success('success') ?>
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Edit Post</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="<?= adminUrl('update-post') ?>" method="POST" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group">
                                <input type="hidden" class="form-control" name="id" value="<?= $row['id'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Title</label>
                                <input type="text" class="form-control" name="title" placeholder="Title" value="<?= $row['title'] ?>">
                                <?= error('title') ?>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Content</label>
                                <textarea rows="5" class="form-control" name="content" placeholder="content"><?= $row['content'] ?></textarea>
                                <?= error('content') ?>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">File input</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="file">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php require_once(ADMIN_PATH . 'views/inc/footer.php'); ?>