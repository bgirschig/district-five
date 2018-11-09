<?php
  if ($page->layout_select->title == 'one column') {
    $columnClassName = "twelve";
    $columnCount = 1;
  } else if ($page->layout_select->title == 'two columns') {
    $columnClassName = "six";
    $columnCount = 2;
  } else if ($page->layout_select->title == 'three columns') {
    $columnClassName = "four";
    $columnCount = 3;
  } else if ($page->layout_select->title == 'four columns') {
    $columnClassName = "three";
    $columnCount = 4;
  } else {
    $columnClassName = "six";
    $columnCount = 2;
  }

  $concerts = $pages->get('/')->concerts->getArray();
  $now = getdate();

  // filter array with date_range_selector
  switch ($page->date_range_selector->title) {
    case 'all':
      // don't filter if date_range_selector is 'all'
      break;
    case 'today':
      $concerts = array_filter($concerts, function($concert) use ($now){
        $date = getdate((int)$concert->getUnformatted('date'));
        return ($now['year'] == $date['year'] && $now['yday'] == $date['yday']);
      });
      break;
    case 'future':
      $concerts = array_filter($concerts, function($concert) use ($now){
        $date = getdate((int)$concert->getUnformatted('date'));
        return ($date[0] > $now[0]);
      });
      break;
    case 'past':
      $concerts = array_filter($concerts, function($concert) use ($now){
        $date = getdate((int)$concert->getUnformatted('date'));
        return ($date[0] < $now[0]);
      });
      break;
    default:
      // don't filter by default
      break;
  }
  
  $itemsPerColumn = (int) ceil(count($concerts) / $columnCount);
  $concerts = array_chunk($concerts, $itemsPerColumn);
?>

<div class="row">
    <div class="twelve columns" style="background-color:#999999;">
        <div class="mid-width" style="max-width: 960px; margin: 0 auto;">
            <h2><?=$page->title?></h2>
        </div>
    </div>
</div>

<div class="row concertlist-block">
    <div class="mid-width" style="align-items:stretch; max-width: 960px; margin: 0 auto;">    
      <?php for ($columnIdx=0; $columnIdx < $columnCount; $columnIdx++): ?>
        <div class="<?=$columnClassName?> column">
          <?php foreach ($concerts[$columnIdx] as $concertIdx => $concert): ?>
            <div class="concert">
              <div class="datetime"><?=$concert->date?></div>
              <div class="details">
                <?=implode(' • ', array_filter([$concert->venue, $concert->city, $concert->simple_description]))?>
              </div>
            </div>
          <?php endforeach ?>
        </div>
      <?php endfor ?>
    </div>
</div>