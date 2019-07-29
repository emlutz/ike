<div class="grid">
  <?php
  foreach($this->arrMemories as $memory){
    ?>
    <div class="card">
      <img class="card-img-top" src="assets/<?=$bucket->strImage?>" alt="">
    </div>
    <?php
  }
  ?>
</div>