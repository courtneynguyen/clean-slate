<?php
/*
Template Name Posts: Kitty Jump Template
*/
?>

<?php get_header(); ?>
<style>
#wrapper{
	position: relative;
	margin: 0 auto;
	font-family: 'Caveat Brush';
}
#game{
	background: url('<?php echo get_template_directory_uri(); ?>/js/kitty_jump/public/images/kitty_bg.jpg');
	display: block;
	position: absolute;
	z-index: 1;
}
#start,#game-over,#pause{
	background: none repeat scroll 0% 0% rgba(255,255,255, 0.8);
	position: absolute;
	z-index: 2;
	color: black;
}
#start{
	color:black;
	background: url('<?php echo get_template_directory_uri(); ?>/js/kitty_jump/public/images/kitty_start.jpg');
	background-size: cover;
	background-position: 0% 93%;
}
#start input {
	position: absolute;
	bottom: 14.1rem;
	left: 0;
	right: 0;
	height: 60px;
	width: 130px;
	color: white;
	font-size: 2.5rem;
	padding: 1.0rem;
	background: #47BE55;
	border: none;
}
#start p, #start ol{
	padding: 10px 40px;
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
	display: none;
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
#mute {
	z-index: 10;
	position: absolute;
	top: 1.0rem;
	right: 1.0rem;
}
#instructions {
	background: url('<?php echo get_template_directory_uri(); ?>/js/kitty_jump/public/images/kitty_carpet.jpg');
	min-height: 550px;
}
.instructions h1 {
	padding: 65px 0 30px 0;
	text-align: center;
}
.instructions {
	padding: 15px;
	width: 300px;
	margin: 0 auto;
	text-align: center;
}
.instructions > div{
	text-align: left;
}
.instructions .row {
	padding-bottom: 30px;
}
</style>
<div class="container">
	<h1><?php the_title(); ?></h1>
	<div id="wrapper">
		<div id="start">
			<input id="" type="submit" class="butt butt-good go-to-instructions center-blk" value="Play Game!"/>
		</div>

		<div id="game-over" class="invisible">
			<h1 class="txt-center">GAME OVER</h1>
			<a class="butt butt-good lt-butt start-game" href="#">Play again?</a>
			<a id="main-menu" class="butt butt-exit rt-butt main-menu" href="#">Main Menu</a>
		</div>

		<div id="instructions" class="invisible">
			<div class="instructions">
				<h1>Instructions</h1>
				<div class="row">
					<div class="float-lt">
						<h3>This is you:</h3>
						<img src="<?php echo get_template_directory_uri(); ?>/js/kitty_jump/public/images/kitty_cat.png" />
						<img src="<?php echo get_template_directory_uri(); ?>/js/kitty_jump/public/images/life.png" />x9
					</div>
					<div class="float-rt">
						<h3>Do not eat candy:</h3>
						<img class="wd-100" src="<?php echo get_template_directory_uri(); ?>/js/kitty_jump/public/images/candy.png"/>
					</div>
				</div>
				<div class="row">
					<div class="float-lt">
						<h3>Eat kibbles:</h3>
						<img src="<?php echo get_template_directory_uri(); ?>/js/kitty_jump/public/images/kibble_O_lg.png"/><img src="<?php echo get_template_directory_uri(); ?>/js/kitty_jump/public/images/kibble_X_lg.png"/>
					</div>
					<div class="float-rt">
						Press P to pause
					</div>
				</div>
				<button class="butt butt-good start-game">Play!</button>
				<button class="butt butt-exit main-menu">Back</button>
			</div>
		</div>


		<div id="pause" class="invisible">
			<h1 class="txt-center">PAUSED</h1>
			<h3 class="txt-center">Press 'O' To Continue</h3>
		</div>
		<audio loop="true"></audio>
		<canvas id="game" class="invisible"></canvas>
		<button id="mute">MUTE</button>
	</div>
</div>

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
