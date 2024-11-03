<?php require_once(ADMIN_PATH . 'views/inc/header.php'); ?>

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">All Posts</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <?= success('success') ?>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Content</th>
                                    <th style="width: 40px">Edit</th>
                                    <th style="width: 40px">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                foreach ($posts as $post) : ?>
                                    <tr>
                                        <td><?= $i++ ?></td>
                                        <td><img src="<?= BASE_URL . 'admin/uploads/' . $post['image'] ?>" alt="<?= $post['title'] ?>" width="100px"></td>
                                        <td><?= $post['title'] ?></td>
                                        <td><?= $post['content'] ?></td>
                                        <td>
                                            <a href="<?= adminUrl('edit-post&id=' . $post['id']) ?>" class="btn btn-primary btn-sm">
                                                <i class="fas fa-edit"></i>
                                        </td>
                                        <td>
                                            <a href="<?= adminUrl('delete-post&id=' . $post['id']) ?>" class="btn btn-danger btn-sm">
                                                <i class="fas fa-trash"></i>
                                        </td>

                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                    <!-- <div class="card-footer clearfix">
                        <ul class="pagination pagination-sm m-0 float-right">
                            <li class="page-item"><a class="page-link" href="#">«</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">»</a></li>
                        </ul>
                    </div> -->
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