
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
              <h2 class="box-title">Изменить запись</h2>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="col-md-6">
                    <form action="" method="post" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Заголовок</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="title" value="<?=$data['post']['title']?>">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Категория</label>
                        <!-- <input type="text" class="form-control" id="exampleInputEmail1" name="category"> -->
                        <select name="category_id" class="form-control" size="1" value="<?=$data['post']['content']?>">
                      <?php foreach ($data['categories'] as $category):?>
                        <?php if ($category['category']===$data['post']['category']):?>
                        <option selected="<?=$category['id']?>" value="<?=$category['id']?>"><?=ucfirst($category['category'])?></option>
                        <?php continue; endif;?>
                        <option value="<?=$category['id']?>"><?=ucfirst($category['category'])?></option>
                      <?php endforeach;?>
                        </select>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Текст статьи</label>
                        <textarea id="mytextarea" name="content"><?=$data['post']['content']?></textarea>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Изображение для статьи</label><br>
                        <img src="/public/images/<?=$data['post']['image']?>" alt="" width="300" class="mb-3">
                          <!-- <div class="checkbox mb-3">
                          <label>
                            <input type="checkbox" name="delImage" value="YES"> Удалить картинку
                          </label>
                        </div> -->
                        <br><label for="exampleInputEmail1">Или выберите новое изображение</label>
                        <input type="file" name="image">
                      </div>

                      <div class="form-group">
                        <button class="btn btn-success" type="submit">Добавить</button>
                      </div>
                    </form>
                </div>
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
