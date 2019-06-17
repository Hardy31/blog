
<div class="kotha-default-content">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
            <div class="box-header">
              <h2 class="box-title">Creat Comment</h2>
            </div>
                    <form action="" method="post">



                        <div class="form-group">
                            <label for="exampleInput">id_comment</label>
                            <input type="text" class="form-control" id="exampleInput" name="id_comment">
                        </div>

                        <div class="form-group">
                            <label for="exampleInput">id_user</label>
                            <input type="text" class="form-control" id="exampleInput" name="id_user" value="<?=$_SESSION['auth_user_id'];?>">
                        </div>

                        <div class="form-group">
                            <label for="exampleInput">id_post </label>
                            <input type="text" class="form-control" id="exampleInput" name="id_post"value="<?=$id_post;?> ">
                        </div>

                        <div class="form-group">
                            <label for="exampleInput">content_comment</label>
                            <input type="text" class="form-control" id="exampleInput" name="content_comment">
                        </div>

                        <div class="form-group">
                            <label for="exampleInput">tag_show</label>
                            <input type="text" class="form-control" id="exampleInput" name="tag_show"value="1">
                        </div>

                        <div class="form-group">
                            <label for="exampleInput">id_comment_parent</label>
                            <input type="text" class="form-control" id="exampleInput" name="id_comment_parent"value="0">
                        </div>








                      <div class="form-group">
                        <button class="btn btn-success" type="submit">Login</button>
                      </div>
                    </form>

          </div></div></div></div>
