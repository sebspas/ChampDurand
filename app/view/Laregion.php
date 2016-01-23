
    <script>
        jQuery(document).ready(function ($) {
            var options = {
                $AutoPlay: false,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlaySteps: 1,                                  //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
                $AutoPlayInterval: 4000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                               //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, default value is 1

                $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideDuration: 500,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $SlideSpacing: 5, 					                //[Optional] Space between each slide in pixels, default value is 0
                $DisplayPieces: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                $PlayOrientation: 2,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                $DragOrientation: 3,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

                $ThumbnailNavigatorOptions: {
                    $Class: $JssorThumbnailNavigator$,              //[Required] Class to create thumbnail navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always

                    $ActionMode: 1,                                 //[Optional] 0 None, 1 act by click, 2 act by mouse hover, 3 both, default value is 1
                    $AutoCenter: 3,                             //[Optional] Auto center thumbnail items in the thumbnail navigator container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 3
                    $Lanes: 1,                                      //[Optional] Specify lanes to arrange thumbnails, default value is 1
                    $SpacingX: 0,                                   //[Optional] Horizontal space between each thumbnail in pixel, default value is 0
                    $SpacingY: 0,                                   //[Optional] Vertical space between each thumbnail in pixel, default value is 0
                    $DisplayPieces: 5,                              //[Optional] Number of pieces to display, default value is 1
                    $ParkingPosition: 0,                            //[Optional] The offset position to park thumbnail
                    $Orientation: 2,                                //[Optional] Orientation to arrange thumbnails, 1 horizental, 2 vertical, default value is 1
                    $DisableDrag: true                              //[Optional] Disable drag or not, default value is false
                }
            };

            var jssor_slider3 = new $JssorSlider$("slider3_container", options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var parentWidth = jssor_slider3.$Elmt.parentNode.clientWidth;
                if (parentWidth) {
                    var sliderWidth = parentWidth;

                    //keep the slider width no more than 701
                    sliderWidth = Math.min(sliderWidth, 901);

                    jssor_slider3.$SetScaleWidth(sliderWidth);
                }
                else
                    window.setTimeout(ScaleSlider, 30);
            }

            ScaleSlider();

            if (!navigator.userAgent.match(/(iPhone|iPod|iPad|BlackBerry|IEMobile)/)) {
                $(window).bind('resize', ScaleSlider);
            }


            //if (navigator.userAgent.match(/(iPhone|iPod|iPad)/)) {
            //    $(window).bind("orientationchange", ScaleSlider);
            //}
            //responsive code end
        });
    </script>
	<div class="contenu" style="height: auto;overflow: hidden;">
	<p class="titre-chambre" style="float: bottom;text-align: left;margin-top: 35px;margin-left: 25px;line-height: 10px;font-size: 22px;color: rgb(52, 73, 94);">Les Marchés<br/>
					   ____________</p>
    <!-- Jssor Slider Begin -->
    <!-- You can move inline styles to css file or css block. -->
    <div id="slider3_container" style="position: relative; top: 15px; left: 15px; width: 650px; height: 250px; background: #fff; overflow: hidden; ">
        
        <!-- Slides Container -->
        <div u="slides" style="position: absolute; left: 99px; top: 0px; width: 570px; height: 250px; -webkit-filter: blur(0px); background-color: #fff; overflow: hidden;">
            <div>
                <div style="margin-left: 7px; overflow: hidden; color: #000;">
					<figure style="float: left; padding:0; margin:0; margin-left: 15px;">
						<a href="http://www.tulette.fr/"><img style="float: left; padding:0; margin:0" src="<?= Config::$path['images'] ?>marche-tulette.jpg" alt="Marché de Tulette a 11km"  /></a>
						<figcaption class="sous-titre-image">Marché de Tulette, à 11km</figcaption>
						
					</figure>
					<figure style="float: left; padding:0; margin:0; margin-left: 20px;">
						<a href="http://www.cavaillon.com/"><img style="float: left; padding:0; margin:0" src="<?= Config::$path['images'] ?>marche-cavaillon.jpg" alt="Marché de Tulette a 11km"  /></a>
						<figcaption class="sous-titre-image">Marché de Cavaillon, à 55km</figcaption>
					</figure>
				</div>
                <div u="thumb">Lundi</div>
            </div>
            <div>
                <div style="margin-left: 7px; overflow: hidden; color: #000;">
					<figure style="float: left; padding:0; margin:0; margin-left: 15px;">
						<a href="http://www.vaison-la-romaine.com/"><img style="float: left; padding:0; margin:0" src="<?= Config::$path['images'] ?>marché-vaison.jpg" alt="Marché de Tulette a 11km"  /></a>
						<figcaption class="sous-titre-image">Vaison-la-romaine, à 26 Km</figcaption>
						
					</figure>
					<figure style="float: left; padding:0; margin:0; margin-left: 20px;">
						<a href="http://www.ville-saintpaultroischateaux.fr/"><img style="float: left; padding:0; margin:0" src="<?= Config::$path['images'] ?>marche-stpaul.jpg" alt="Marché de Tulette a 11km"  /></a>
						<figcaption class="sous-titre-image">St-Paul-trois-Châteaux, à 15 km</figcaption>
					</figure>
				</div>
                <div u="thumb">Mardi</div>
            </div>
            <div>
                <div style="margin-left: 7px; overflow: hidden; color: #000;">
					<figure style="float: left; padding:0; margin:0; margin-left: 15px;">
						<a href="http://www.montelimar.fr/"><img style="float: left; padding:0; margin:0" src="<?= Config::$path['images'] ?>montelimar.jpg" alt="Marché de Tulette a 11km"  /></a>
						<figcaption class="sous-titre-image">Montélimar, à 42 km</figcaption>
						
					</figure>
					<figure style="float: left; padding:0; margin:0; margin-left: 20px;">
						<a href="http://www.buislesbaronnies.com/fr/"><img style="float: left; padding:0; margin:0" src="<?= Config::$path['images'] ?>buis.jpg" alt="Marché de Tulette a 11km"  /></a>
						<figcaption class="sous-titre-image">Buis les Barronies, à 50 km</figcaption>
					</figure>
				</div>
                <div u="thumb">Mercredi</div>
            </div>
            <div>
                <div style="margin-left: 7px; overflow: hidden; color: #000;">
					<figure style="float: left; padding:0; margin:0; margin-left: 15px;">
						<a href="http://www.ville-orange.fr/"><img style="float: left; padding:0; margin:0" src="<?= Config::$path['images'] ?>orange.jpg" alt="Marché de Tulette a 11km"  /></a>
						<figcaption class="sous-titre-image">Orange, à 17 km</figcaption>
						
					</figure>
					<figure style="float: left; padding:0; margin:0; margin-left: 20px;">
						<a href="http://www.nyons.com/"><img style="float: left; padding:0; margin:0" src="<?= Config::$path['images'] ?>nyons.jpg" alt="Marché de Tulette a 11km"  /></a>
						<figcaption class="sous-titre-image">Nyons, à 30 km</figcaption>
					</figure>
				</div>
                <div u="thumb">Jeudi</div>
            </div>
            <div>
                <div style="margin-left: 7px; overflow: hidden; color: #000;">
					<figure style="float: left; padding:0; margin:0; margin-left: 15px;">
						<a href="http://www.mairie-dieulefit.fr/"><img style="float: left; padding:0; margin:0" src="<?= Config::$path['images'] ?>dieulefit.jpg" alt="Marché de Tulette a 11km"  /></a>
						<figcaption class="sous-titre-image">Dieulefit, à 40 km</figcaption>
						
					</figure>
					<figure style="float: left; padding:0; margin:0; margin-left: 20px;">
						<a href="http://www.mairie-suze-la-rousse.fr/"><img style="float: left; padding:0; margin:0" src="<?= Config::$path['images'] ?>suze.jpg" alt="Marché de Tulette a 11km"  /></a>
						<figcaption class="sous-titre-image">Suze-la-rousse, à 1 km</figcaption>
					</figure>
				</div>
                <div u="thumb">Vendredi</div>
            </div>
            <div>
                <div style="margin-left: 7px; overflow: hidden; color: #000;">
					<figure style="float: left; padding:0; margin:0; margin-left: 15px;">
						<a href="http://www.sainte-cecile.org/"><img style="float: left; padding:0; margin:0" src="<?= Config::$path['images'] ?>stececile.jpg" alt="Marché de Tulette a 11km"  /></a>
						<figcaption class="sous-titre-image">Ste-Cécile-les-vignes, à 7 km</figcaption>
						
					</figure>
					<figure style="float: left; padding:0; margin:0; margin-left: 20px;">
						<a href="http://www.mairiepse.fr/"><img style="float: left; padding:0; margin:0" src="<?= Config::$path['images'] ?>pont.jpg" alt="Marché de Tulette a 11km"  /></a>
						<figcaption class="sous-titre-image">Pont-st-esprit, à 19 km</figcaption>
					</figure>
				</div>
                <div u="thumb">Samedi</div>
            </div>
            <div>
                <div style="margin-left: 7px; overflow: hidden; color: #000;">
					<figure style="float: left; padding:0; margin:0; margin-left: 15px;">
						<a href="http://www.nyons.com/"><img style="float: left; padding:0; margin:0" src="<?= Config::$path['images'] ?>nyons.jpg" alt="Marché de Tulette a 11km"  /></a>
						<figcaption class="sous-titre-image">Nyons, à 30 km</figcaption>
						
					</figure>
					<figure style="float: left; padding:0; margin:0; margin-left: 20px;">
						<a href="http://www.islesurlasorgue.fr/"><img style="float: left; padding:0; margin:0" src="<?= Config::$path['images'] ?>sorgue.jpg" alt="Marché de Tulette a 11km"  /></a>
						<figcaption class="sous-titre-image">Isle-sur-la-sorgue, à 40 km</figcaption>
					</figure>
				</div>
                <div u="thumb">Dimanche</div>
            </div>
        </div>

        <!-- ThumbnailNavigator Skin Begin -->
        <div u="thumbnavigator" class="jssort13" style="position: absolute; width: 100px; height: 150px; left: 0px; top: 0px;">
            <!-- Thumbnail Item Skin Begin -->
            <style>
                /* jssor slider thumbnail navigator skin 13 css */
                /*
                .jssort13 .p            (normal)
                .jssort13 .p:hover      (normal mouseover)
                .jssort13 .pav          (active)
                .jssort13 .pav:hover    (active mouseover)
                .jssort13 .pdn          (mousedown)
                */
                .jssort13 .w, .jssort13 .phv .w
                {
                	cursor: pointer;
                	position: absolute;
                	WIDTH: 98px;
                	HEIGHT: 29px;
                	border: 1px solid gray;
                	top: -1px;
                	left: 0px;
                }
                .jssort13 .pav .w, .jssort13 .pdn .w
                {
                	border-right: 1px solid #fff;
                }
                .jssort13 .c
                {
                    color: #000;
                    font-size:13px;             	
                }
                .jssort13 .p .c, .jssort13 .pav:hover .c
                {
                	background-color:rgb(189, 195, 199);
                }
                .jssort13 .pav .c, .jssort13 .p:hover .c, .jssort13 .phv .c
                {
                	background-color:#fff;
                }
            </style>
            <div u="slides" style="cursor: move; top:0px; left:0px; border-top: 1px solid gray;">
                <div u="prototype" class="p" style="POSITION: absolute; WIDTH: 100px; HEIGHT: 30px; TOP: 0; LEFT: 0; padding:0px;">
                    <div class=w><ThumbnailTemplate class="c" style=" WIDTH: 100%; HEIGHT: 100%; position:absolute; TOP: 0; LEFT: 0; line-height:28px; text-align:center;"></ThumbnailTemplate></div>
                </div>
            </div>
            <!-- Thumbnail Item Skin End -->
        </div>
        <!-- ThumbnailNavigator Skin End -->
    </div>
    <!-- Jssor Slider End -->
			<p style="float: left;margin-bottom: 15px;width: 730px;margin-left:130px;font-size: 15px;">			
			Pour plus d'information sur un marché ou sur les activité proposé par la ville de celui-ci, cliquez simplement sur l'image.
			</p>
	</div>