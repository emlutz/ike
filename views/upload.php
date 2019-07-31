<div class="upload">
  <form id="upload_btn" action="index.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="controller" value="feed">
    <input type="hidden" name="action" value="saveMemory">
    <input type="hidden" name="userId" value="<?=$this->user->id?>">

    <label for="title">Title</label>
    <input type="text" name="title" placeholder="Title">

    <label for="caption">Caption</label>
    <input type="text" name="caption" placeholder="Caption">

    <input type="file" name="path">
    <label>Choose A Memory</label>
    <input id="save" type="submit" value="Save">
  </form>
</div>