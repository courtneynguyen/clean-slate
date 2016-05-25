<?php
/*
Template Name Posts: Kitty Jump Template
*/
?>

<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/js/kitty_jump/public/styles.css"/>

<div class="container">
	<h1><?php the_title(); ?></h1>
	<div id="wrapper">
    <div id="start">
      <input id="" type="submit" class="butt butt-good go-to-instructions center-blk" value="Play Game!"/>
    </div>

    <div id="game-over" class="invisible">
      <h1 class="txt-center">GAME OVER</h1>
      <a class="butt butt-good lt-butt start-game" href="#">Play again?</a>
      <a id="main-menu" class="butt butt-exit rt-butt main-menu" href="#">Main Menu</a>s
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
            <img src="<?php echo get_template_directory_uri(); ?>/js/kitty_jump/public/images/kibble_O_lg.png"/>
            <img src="<?php echo get_template_directory_uri(); ?>/js/kitty_jump/public/images/kibble_X_lg.png"/>
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

<script language="javascript" src="<?php echo get_template_directory_uri(); ?>/js/kitty_jump/public/lib/jquery.min.js" type="text/javascript"></script>
<script language="javascript" type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/kitty_jump/public/js/keyCodes.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/kitty_jump/public/js/keyHandler.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/kitty_jump/public/js/powerbar.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/kitty_jump/public/js/main.js"></script>
<script type="text/javascript">
$(window).ready(function(){
	kitty_jump.playGame({
		'ROOT': '<?php echo get_template_directory_uri(); ?>/js/kitty_jump/public/'
	});
});
</script>
</div>
<?php get_footer(); ?>
