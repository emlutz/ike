<div class="buckets">
  <?php
  foreach($this->arrBuckets as $bucket){
    ?>
    <div class="card">
      <img class="card-img-top" src="assets/<?=$bucket->strIcon?>" alt="bucket icon">
      <h4><?=$bucket->strTitle?></h4>
    </div>
    <?php
  }
  ?>
</div>