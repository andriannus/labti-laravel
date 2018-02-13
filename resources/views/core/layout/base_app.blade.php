<!DOCTYPE HTML>
<html>
	<head>
		<title>
			@yield('title')
		</title>
		<link href="{{ asset('css/style.css') }}" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/fav-icon.jpg') }}" />
		<script type="application/x-javascript">
		addEventListener("load", function() { 
			setTimeout(hideURLbar, 0);
		}, false);
		function hideURLbar(){ 
			window.scrollTo(0,1); 
		}
		</script>
		</script>
		<!--webfonts-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
		<!--webfonts-->
		<!-- Global CSS for the page and tiles -->
		<link rel="stylesheet" href="{{ asset('css/main.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('font-awesome/css/font-awesome.min.css') }}">
		<!--Global CSS for the page and tiles -->
		<!--start-click-drop-down-menu-->
		<script src="{{ asset('js/jquery.min.js') }}"></script>
		<!--start-dropdown-->
		<script type="text/javascript">
			var $ = jQuery.noConflict();
				$(function() {
					$('#activator').click(function(){
						$('#box').animate({'top':'0px'},500);
					});
					$('#boxclose').click(function(){
					$('#box').animate({'top':'-700px'},500);
					});
				});
				$(document).ready(function(){
				//Hide (Collapse) the toggle containers on load
				$(".toggle_container").hide(); 
				//Switch the "Open" and "Close" state per click then slide up/down (depending on open/close state)
				$(".trigger").click(function(){
					$(this).toggleClass("active").next().slideToggle("slow");
						return false; //Prevent the browser jump to the link anchor
				});
									
			});
		</script>
		<!--//End-dropdown-->
		<!--//End-click-drop-down-menu-->
	</head>
	<body>
		<!--start-wrap-->
			<!--start-header-->
			@include('core.navigation.default')
		<!--//End-header-->
		<!--start-content-->
			@yield('content')
		<!--//End-content-->
		<!--wookmark-scripts-->

		<script src="{{ asset('js/jquery.imagesloaded.js') }}"></script>
		<script src="{{ asset('js/jquery.wookmark.js') }}"></script>
		<script type="text/javascript">
			(function ($){
				var $tiles = $('#tiles'),
				$handler = $('li', $tiles),
				$main = $('#main'),
				$window = $(window),
				$document = $(document),
				options = {
					autoResize: true, // This will auto-update the layout when the browser window is resized.
					container: $main, // Optional, used for some extra CSS styling
					offset: 20, // Optional, the distance between grid items
					itemWidth:280 // Optional, the width of a grid item
				};
				/**
				* Reinitializes the wookmark handler after all images have loaded
				*/
				function applyLayout() {
					$tiles.imagesLoaded(function() {
						// Destroy the old handler
						if ($handler.wookmarkInstance) {
							$handler.wookmarkInstance.clear();
						}

						// Create a new layout handler.
						$handler = $('li', $tiles);
						$handler.wookmark(options);
					});
				}
				
				// Call the layout function for the first time
				applyLayout();

				// Capture scroll event.
				$window.bind('scroll.wookmark', onScroll);
			})(jQuery);
		</script>
		<!--//wookmark-scripts-->
		<!--start-footer-->
		<div class="footer">
			<p>Copyright &copy; <?php echo date('Y'); ?> - Design by <a href="http://w3layouts.com/">W3layouts</a></p>
		</div>
		<!--//End-footer-->
		<!--//End-wrap-->
	</body>
</html>