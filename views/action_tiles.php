<div class="actions">
  <?php
  foreach($this->arrConnections as $connection){
    ?>
    <div class="card">
      <img class="card-img-top" src="assets/<?=$connection->strImg?>" alt="connection image">
      <h4><?=$connection->strTitle?></h4>
      <div class="act_btn">
        <a href=""></a>
        <a href=""></a>
      </div>
    </div>
    <?php
  }
  ?>
</div>