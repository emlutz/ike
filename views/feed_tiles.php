<div class="feed">
  <?php
  if($this->memory == null) {
  ?>
    <p>WELCOME TUTORIAL</p>
  <?php
  } else {
    foreach($this->memory as $mem){
      ?>
      <div class="card">
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