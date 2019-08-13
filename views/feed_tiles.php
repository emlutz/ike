<div class="feed">
  <?php
  if($this->memory == null) {
  ?>
    <div class="tutorial">
      <i id="can" class="far fa-times-circle"></i>
      <img src="assets/tutorial.png" alt="tutorial">
    </div>
  <?php
  } else {
    ?>
    <h2>FEED</h2>
    <?php
    foreach($this->memory as $mem){
      ?>
      <div class="card feed_card">
        <img class="card-img-top" src="assets/<?=$mem["path"]?>" alt="thumbnail">
        <div class="details">
          <h4><?=$mem["title"]?></h4>
          <p><?=$mem["caption"]?></p>
        </div>
        <div class="actions">
          <a href=""></a>
          <a href=""></a>
        </div>
      </div>
      <?php
    }
  }
  ?>
</div>