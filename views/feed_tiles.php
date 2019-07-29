<div class="feed">
  <?php
  foreach($this->arrFeed as $feed){
    ?>
    <div class="card">
      <img class="card-img-top" src="assets/<?=$feed->strImg?>" alt="thumbnail">
      <div class="details">
        <h4><?=$feed->strTitle?></h4>
        <p><?=$feed->strDescription?></p>
      </div>
      <div class="actions">
        <a href=""></a>
        <a href=""></a>
      </div>
    </div>
    <?php
  }
  ?>
</div>