<!DOCTYPE html>
<html lang="en">
	<?php include($config->paths->templates."utils/head.php");?>
	
  <body class="home page page-id-2 page-template-default" style="">
    <?php if($page->editable()):?>
    <a class="editLink" href='<?=$page->editURL?>'>Edit</a>
    <?php endif;?>

    <div id="content" class="site-content">
      <?php include('resources/d4-logo.svg'); ?>

      <div class="container">
        <?php
          $children = $pages->get("/")->children;
          for ($i=0; $i < $children->count; $i++) { 
            echo $children[$i]->render();
          }
        ?>
      </div>
    </div>

    <script src="<?=$config->urls->templates;?>scripts/jquery.min.js"></script>
    <script src="<?=$config->urls->templates;?>scripts/script.js"></script>    
    <script src="<?=$config->urls->templates;?>scripts/TweenMax.min.js"></script>

    <script>
        $(document).ready(function () {
            var container = $('#starter-balls, #Ebene_28, #Ebene_27, #Ebene_Takt');
            var tl = new TimelineMax({});

            var tl = new TimelineLite({
                paused: true,
                onComplete: function () {
                    this.restart()
                }
            });

            tl.add(TweenLite.to('#Ebene_Takt', 1.3, { x: 50, }))
            tl.add(TweenLite.to('#Ebene_Takt', 1.3, { x: 0, }))

            container.hover(function () { tl.restart(); },
                function () { tl.reverse(); }
            );
        });           
    </script>

    <script>
        $(document).ready(function () {
            var container = $('#starter-balls, #Ebene_28, #Ebene_27, #Ebene_Takt');
            var tl = new TimelineMax({});

            var tl = new TimelineLite({
                paused: true,
                onComplete: function () {
                    this.restart()
                }
            });

            tl.add(TweenLite.to('#Ebene_28, #Ebene_27', 1, {
                x: 100,
            }))

            tl.add(TweenLite.to('#Ebene_28, #Ebene_27', 1, {
                x: 0,
            }))

            container.hover(function () { tl.restart(); },
                function () { tl.reverse(); }
            );
        });           
    </script>

    <script>
        $(document).ready(function () {
            var container = $('#starter, #Ebene_9, #Ebene_8');
            var tl = new TimelineMax({});

            var tl = new TimelineLite({
                paused: true,
                onComplete: function () {
                    this.restart()
                }
            });

            tl.add(TweenLite.to('#Ebene_8', 1.5, {
                rotation: 360,
                transformOrigin: '-20% -50%',
            }))

            container.hover(function () { tl.restart(); },
                function () { tl.reverse(); }
            );
        });           
    </script>


    <script>
        $(document).ready(function () {
            var container = $('#starter-balls, #Ebene_6');
            var tl = new TimelineMax({ paused: true, });
            ts = new TimelineMax({ paused: true, });

            tl.add(
                TweenMax.to('#Ebene_13, #Ebene_14, #Ebene_16, #Ebene_15,#Ebene_17', 0.5, {
                    scale: 0.9,
                    transformOrigin: '50% 50%', repeat: -1, yoyo: true
                })
            );

            container.hover(
                function () { tl.restart(); },
                function () { tl.reverse(1); }
            );
        });           
    </script>

    <script>
        $(document).ready(function () {
            var container = $('#starter, #Ebene_11, #Ebene_10, #Ebene_4, #Ebene_3');
            var tl = new TimelineMax({});

            var tl = new TimelineLite({
                paused: true,
                onComplete: function () {
                    this.restart()
                }
            });

            tl.add(TweenLite.to('#Ebene_10', 1, {
                rotation: 10,
                transformOrigin: '0% 100%',
            }))

            tl.add(TweenLite.to('#Ebene_10', 1, {
                rotation: 0,
                transformOrigin: '0% 100%',
            }))

            container.hover(function () { tl.restart(); },
                function () { tl.reverse(); }
            );
        });           
    </script>

    <script>
        $(document).ready(function () {
            var container = $('#starter, #Ebene_11, #Ebene_10, #Ebene_4, #Ebene_3');
            var tl = new TimelineMax({});

            var tl = new TimelineLite({
                paused: true,
                onComplete: function () {
                    this.restart()
                }
            });

            tl.add(TweenLite.to('#Ebene_11', 1, {
                rotation: 10,
                transformOrigin: '50% 0%',
            }))

            tl.add(TweenLite.to('#Ebene_11', 1, {
                rotation: 0,
                transformOrigin: '50% 0%',
            }))

            container.hover(function () { tl.restart(); },
                function () { tl.reverse(); }
            );
        });           
    </script>

    <script>
        $(document).ready(function () {
            var container = $('#starter, #Ebene_11, #Ebene_10, #Ebene_4, #Ebene_3');
            var tl = new TimelineMax({});

            var tl = new TimelineLite({
                paused: true,
                onComplete: function () {
                    this.restart()
                }
            });

            tl.add(TweenLite.to('#Ebene_11', 1, {
                rotation: 10,
                transformOrigin: '50% 0%',
            }))


            tl.add(TweenLite.to('#Ebene_11', 1, {
                rotation: 0,
                transformOrigin: '50% 0%',
            }))

            container.hover(function () { tl.restart(); },
                function () { tl.reverse(); }
            );
        });           
    </script>

    <script>
        $(document).ready(function () {
            var container = $('#starter, #Ebene_11, #Ebene_10, #Ebene_4, #Ebene_3');
            var tl = new TimelineMax({});

            var tl = new TimelineLite({
                paused: true,
                onComplete: function () {
                    this.restart()
                }
            });

            tl.add(TweenLite.to('#Ebene_4', 1, { x: 50, }))
            tl.add(TweenLite.to('#Ebene_4', 1, { x: 0, }))

            container.hover(function () { tl.restart(); },
                function () { tl.reverse(); }
            );
        });           
    </script>

    <script>
        $(document).ready(function () {
            var container = $('#starter, #Ebene_11, #Ebene_10, #Ebene_4, #Ebene_3'),
                tl = new TimelineMax({});
            var tl = new TimelineLite({
                paused: true,
                onComplete: function () {
                    this.restart()
                }
            });

            tl.add(TweenLite.to('#Ebene_3', 1, { x: 50, }))
            tl.add(TweenLite.to('#Ebene_3', 1, { x: 0, }))

            container.hover(function () { tl.restart(); },
                function () { tl.reverse(); }
            );
        });           
    </script>

    <script>
        var beepThree = $("#beep-three")[0];

        $('#starter-balls, #Ebene_28, #Ebene_27, #Ebene_Takt ').mouseover(function () {
            beepThree.play();
        }).mouseout(function () {
            beepThree.pause();
        });
    </script>

    <script>
        var beepOne = $("#beep-one")[0];

        $('#starter, #Ebene_11, #Ebene_10, #Ebene_4, #Ebene_3').mouseover(function () {
            beepOne.play();
        }).mouseout(function () {
            beepOne.pause();
        });

        document.addEventListener('touchstart', function () {
            document.getElementsByTagName('audio')[0].play();
            document.getElementsByTagName('audio')[0].pause();
        });
    </script>

    <script type="text/javascript" src="<?=$config->urls->templates;?>scripts/skip-link-focus-fix.js"></script>
    <script type="text/javascript">
        /* <![CDATA[ */
        var screenReaderText = { "expand": "Untermen\u00fc anzeigen", "collapse": "Untermen\u00fc verbergen" };
        /* ]]> */
    </script>
    <script type="text/javascript" src="<?=$config->urls->templates;?>scripts/functions.js"></script>
    <script type="text/javascript" src="<?=$config->urls->templates;?>scripts/wp-embed.min.js"></script>
  </body>
</html>