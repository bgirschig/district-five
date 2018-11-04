<?php
  $columnCount = $page->free_texts->count;
  if ($columnCount == 1) {
    $columnClassName = "twelve";
  } else if ($columnCount == 2) {
    $columnClassName = "six";
  } else if ($columnCount == 3) {
    $columnClassName = "four";
  } else {
    $columnClassName = "three";
  }
?>

<div class="row">
    <div class="twelve columns" style="background-color:#999999;">
        <div class="mid-width" style="max-width: 960px; margin: 0 auto;">
            <h2><?=$page->title?></h2>
        </div>
    </div>
</div>

<div class="row generic-block">
    <div class="mid-width" style="align-items:stretch; max-width: 960px; margin: 0 auto;">
        <?php foreach ($page->free_texts as $key => $free_text):?>
          <div class="<?=$columnClassName?> column">
            <?=$free_text->free_text?>
          </div>
        <?php endforeach ?>
    </div>
</div>