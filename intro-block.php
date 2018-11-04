<!-- first, prepare some data -->
<?php
  $files = array();
  foreach($page->audio_files as $name => $pagefile) {
    array_push($files, $pagefile);
  }
?>

<!-- title block -->
<div class="row">
  <div class="twelve columns" style="background-color:#999999;">
    <div class="mid-width" style="max-width: 960px; margin: 0 auto;">
      <span>
        <h1><?=$page->title;?></h1>
      </span>
    </div>
  </div>
</div>

<!-- interactive svg -->
<div class="row">
  <div class="twelve columns" style="background-color:black;">    
    <audio id="beep-three" loop="true" preload="auto">
      <source src="<?=$files[0]->url;?>">
    </audio>
    <audio id="beep-one" loop="true" preload="auto">
      <source src="<?=$files[1]->url;?>">
    </audio>
    <div class="mid-width" style="max-width: 960px; margin: 0 auto;">
      <?php include('resources/main-graphic.svg')?>
    </div>
  </div>
</div>