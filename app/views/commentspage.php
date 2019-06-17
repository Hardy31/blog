<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

//echo ' app view users page';

?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Main content -->
    <section class="content container-fluid">

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Админ-панель</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                                title="Collapse">
                            <i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                            <i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    <div class="">
                        <div class="box-header">
                            <h2 class="box-title">Все комментарии</h2>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">

                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>id_comment</th>
                                    <th>id_user</th>
                                    <th>id_post</th>
                                    <th>content_comment</th>
                                    <th>tag_show</th>
                                    <th>id_comment_parent</th>


                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <?php foreach ($comments as $comment) :?>
                                        <tr>
                                            <td><?=$comment['id_comment']?></td>
                                            <td><?=$comment['id_user']?></td>
                                            <td><?=$comment['id_post']?></td>
                                            <td><?=$comment['content_comment']?></td>
                                            <td><?=$comment['tag_show']?></td>
                                            <td><?=$comment['id_comment_parent']?></td>









                                        </tr>

                                    <?php endforeach;?>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>id_comment</th>
                                    <th>id_user</th>
                                    <th>id_post</th>
                                    <th>content_comment</th>
                                    <th>tag_show</th>
                                    <th>id_comment_parent</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    По вопросам к главному администратору.
                </div>
                <!-- /.box-footer-->
            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

























