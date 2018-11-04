<!-- first, prepare some data -->
<?php
$className = (($page->links->count == 1) ? "twelve columns" : "one-half column dot");
$style_variant = $page->style_variant->title;
$title_tag = $style_variant == "big" ? "h2" : "h5 style='margin-left:15px;'";
?>

<!-- Links block. Can accept One or two links -->
<div class="row">
  <div class="mid-width" style="max-width: 960px; margin: 0 auto;">
    <?php foreach ($page->links as $key => $link):?>
      <?php
        $link_target = $link->link_url;
        if (strpos($link_target, '@') !== false) $link_target = "mailto:$link_target";
      ?>
      <div class="<?=$className;?>">
        <<?=$title_tag;?>>
          <a class="shake shake-slow" href="<?=$link_target?>" target="_blank"><?=$link->link_title?></a>
        </<?=$title_tag;?>>
      </div>
    <?php endforeach;?>
  </div>
</div>