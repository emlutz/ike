
<div class="container">
  <div class="row">
    <div class="card upload col-sm-12">
      <form id="upload_btn" action="index.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="controller" value="feed">
        <input type="hidden" name="action" value="saveMemory">
        <input type="hidden" name="userId" value="<?=$this->user->id?>">
        <i id="shut" class="far fa-times-circle"></i>
        
        <label for="file-uploads"class="custom-file-uploads">
        <i class="fas fa-hand-holding-heart"></i><p>Upload A Memory</p>
        </label>
        <input id="file-uploads" type="file" name="path" >

        <label for="title">Title</label>
        <input type="text" name="title" placeholder="Title">

        <label for="caption">Caption</label>
        <input type="text" name="caption" placeholder="Caption">

        <input id="save" class=" waves-effect waves-light" type="submit" value="Save">
      </form>
    </div>
  </div>
</div>