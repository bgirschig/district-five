<div class="row">
  <div class="twelve columns" style="background-color:#999999;">
    <div class="mid-width" style="max-width: 960px; margin: 0 auto;">
      <h2><?=$page->title?></h2>
    </div>
  </div>
</div>

<div class="row">
  <div class="twelve columns" style="background-color:black;">
    <div class="mid-width" style="max-width: 960px; margin: 0 auto;">
      <ul class="col-names border">
        <li>
					
				<ul class="names">
						<?php foreach ($page->instrumentists as $key => $instrumentist):?>
							<li>
								<svg id="cicle-initial" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
									xml:space="preserve" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
									viewBox="0 0 500 500">
									<g id="UrTavla">
										<circle style="" cx="250" cy="250" r="245">
										</circle>
										<text x="50%" y="50%" text-anchor="middle" dy=".3em"><?=$instrumentist->instrumentist_type?></text>
									</g>
								</svg>
							</li>
						<?php endforeach ?>
          </ul>
          <ul class="names">
						<?php foreach ($page->instrumentists as $key => $instrumentist):
							$parts = explode(' ', $instrumentist->instrumentist_name); ?>
							<svg id="small-name" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
								xml:space="preserve" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
								viewBox="0 0 500 500">
								<g id="UrTavla" class="small-name">
									<circle style="" cx="250" cy="250" r="245">
									</circle>
									<text x="50%" y="50%" text-anchor="middle" dy=".3em">
										<?php foreach ($parts as $part_key => $part):
											$y = $part_key*1.1-0.3; ?>
											<tspan x="50%" y="50%" dy="<?=$y?>em"><?=$part?></tspan>
										<?php endforeach ?>
									</text>
								</g>
							</svg>
						<?php endforeach ?>
					</ul>
					
          <ul class="external-link">
            <li class="dot-small">
              <a href="<?=$page->links[0]->link_url?>"
								target="_blank" class="shake shake-slow" style="text-transform:uppercase; font-size:1em;">
								<?=$page->links[0]->link_title?>
							</a>
            </li>
          </ul>
        </li>
			</ul>
      <ul class="col-names">
        <li>
          <ul class="band-image">
            <img src="<?=$page->image->url?>"
              alt="Mountain View">
          </ul>
        </li>
      </ul>
    </div>
  </div>
</div>