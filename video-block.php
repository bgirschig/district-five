<?php
  $video_url = $page->video_url;


  // extract info from url
  $parts = parse_url($video_url);
  parse_str($parts['query'], $query);
  
  // default values
  $embed_url = $video_url;
  $ratio = 1.7;

  if ($parts["host"] == "www.youtube.com") {
    $oembed_url = "https://www.youtube.com/oembed?url=$video_url";
    $data = json_decode(file_get_contents($oembed_url));
    $ratio = $data->width / $data->height;
    $iframeConfig = 'allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"';
    $embed_url = "https://www.youtube.com/embed/".$query["v"];
  } else if ($parts["host"] == "vimeo.com") {
    $oembed_url = "https://vimeo.com/api/oembed.json?url=$video_url";
    $data = json_decode(file_get_contents($oembed_url));
    $ratio = $data->width / $data->height;
    $video_id = substr($parts["path"], 1);
    $embed_url = "https://player.vimeo.com/video/".$video_id;
  }
  $ratio_padding = 1/$ratio * 100;
?>

<div class="row video-block">
  <div class="mid-width" style="max-width: 960px; margin: 0 auto;">
    <div class="aspect-ratio" style="padding-bottom:<?=$ratio_padding?>%">
      <iframe src="<?=$embed_url?>" frameborder="0" <?=$iframeConfig?> webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
    </div>
  </div>
</div>

<!-- <div class="row video-block">
  <div class="mid-width" style="max-width: 960px; margin: 0 auto;">
  </div>
</div> -->