<?php
/*
Template Name Posts: Projects
*/
?>



<?php get_header(); ?>
<style>
#wrapper{
	position:relative;
	margin: 0 auto;

}

#game{
	background:url('<?php echo get_template_directory_uri(); ?>/js/kitty_jump/public/images/kitty_bg.jpg');
	display:block;
	position:absolute;
	z-index:1;
	/*background-size: cover;*/
}

#start,#game-over,#pause{
	background: none repeat scroll 0% 0% rgba(255,255,255, 0.8);
	position: absolute;
	z-index:2;
	color:black;
}

#start{
	color:black;


}

#start p, #start ol{
	padding: 10px 40px;
}

#game-over{
	visibility:hidden;
}

#pause{
	visibility: hidden;
}

.butt{

	padding: 11px 23px;
	text-decoration: none;
	color: black;

	font-size: 16px;
}

.butt-good{
	background: rgb(86, 209, 204);
	border: 1px solid rgb(4, 180, 173);
}

.butt-exit{
	background: rgb(238, 117, 117);
	border: 1px solid rgb(187, 58, 58);
}

.invisible{
	visibility: hidden !important;
}

.visible{
	visibility: visible !important;
}
.wrapper-hr{
	padding: 50px 76px 0px 90px;
}
.wrapper-xs{
	padding: 0 190px;
}
.rt-butt{
	right: 130px;
	position: absolute;
}
.lt-butt{
	position: absolute;
	left: 130px;
}
.txt-center{
	text-align: center;
}
.center-blk {
	margin: 0 auto;
	display: block;
}
.wd-100{
	width:100px;
}
p{
	font-size:16px;
}
.float-lt{
	float:left;
}
.float-rt{
	float:right;
}

</style>
<div class="fluid-container">
	<h1><?php the_title(); ?></h1>
	<div id="wrapper">

		<div id="start">
			<h1 class="txt-center">Kitty Jump!</h1>
			<div class="">
				<div class="">
					<h3>This is you:</h3>
					<img src="<?php echo get_template_directory_uri(); ?>/js/kitty_jump/public/images/kitty.png" />
					<p class="float-rt">
						You have 9 lives: <img src="<?php echo get_template_directory_uri(); ?>/js/kitty_jump/public/images/life.png" />x9
					</p>
				</div>
				<div class="">
					<div class="">
						<h3>Eat kibbles:</h3>
						<img src="<?php echo get_template_directory_uri(); ?>/js/kitty_jump/public/images/kibble_O_lg.png"/><img src="<?php echo get_template_directory_uri(); ?>/js/kitty_jump/public/images/kibble_X_lg.png"/>
						<p class="float-rt">
							AVOID hitting kibbles... You will lose points!
						</p>
					</div>
					<div class="">
						<h3>Do <span class="bold">NOT</span> eat candy:</h3>

						<img class="wd-100" src="<?php echo get_template_directory_uri(); ?>/js/kitty_jump/public/images/candy.png"/>
					</div>
				</div>
				<div class="">
					Press P to pause
				</div>
			</div>
			<input id="" type="submit" class="butt butt-good start-game center-blk" value="Play Game!"/>
		</div>

		<div id="game-over">
			<h1 class="txt-center">GAME OVER</h1>
			<a class="butt butt-good lt-butt start-game" href="#">Play again?</a><a id="main-menu" class="butt butt-exit rt-butt" href="#">Main Menu</a>
		</div>


		<div id="pause">
			<h1 class="txt-center">PAUSED</h1>
			<h3 class="txt-center">Press 'O' To Continue</h3></div>

			<audio loop="true"></audio>
			<canvas id="game"></canvas>
		</div>
		<button id="mute">MUTE</button>

		<script language="javascript" src="<?php echo get_template_directory_uri(); ?>/js/kitty_jump/public/js/jquery.min.js" type="text/javascript"></script>
		<script language="javascript" src="<?php echo get_template_directory_uri(); ?>/js/kitty_jump/public/js/jquery.hotkeys.js" type="text/javascript"></script>
		<script language="javascript" src="<?php echo get_template_directory_uri(); ?>/js/kitty_jump/public/js/key_status.js" type="text/javascript"></script>
		<script language="javascript" src="<?php echo get_template_directory_uri(); ?>/js/kitty_jump/public/js/util.js" type="text/javascript"></script>
		<script language="javascript" src="<?php echo get_template_directory_uri(); ?>/js/kitty_jump/public/js/sprite.js" type="text/javascript"></script>
		<!-- <script language="javascript" src="js/sound.js" ></script> -->
		<script language="javascript" type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/kitty_jump/public/js/main.js"></script>
		<script type="text/javascript">
		$(window).ready(function(){
			kitty_jump.playGame({
				'ROOT': '<?php echo get_template_directory_uri(); ?>'
			});
		});
		</script>
	</div>
	<?php get_footer(); ?>
