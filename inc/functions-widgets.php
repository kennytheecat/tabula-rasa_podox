<?php
/* I'm New
*****************************************/
function im_new() { 
	echo '
	<div class="im_new widget">
		<a href="' .  home_url() . '/welcome">';
		//<img src="' . get_template_directory_uri() . '/images/BluetoOrthodoxy.png">
		echo '<span></span>
		</a>
	</div>
	';
}

/* Schedule
*****************************************/
function schedule() { 
	echo '
	<div class="schedule widget">
		<h3 class="widget-title">Sunday Schedule of Services</h3>
		<p class="headline">10am Divine Liturgy</p>
		<p class="text">See the <a href="' .  home_url() . '/calendar/">Calendar</a> for a complete schedule</p>
	</div>
	';
}

/* Greek Diocese Logo
*****************************************/
function greek_logo() { 
	echo '
	<div class="greek_logo widget">
		<a href="http://www.goarch.org" target="_blank">';
		//<img src="' . get_template_directory_uri() . '/images/goarch_logo.png">
		echo '<span></span>
		</a>
	</div>
	';
}

/* Daily Scripture Readings
*****************************************/
function online_chapel() { 
	echo '
	<div class="online_chapel widget">
		<a href="http://www.goarch.org/chapel/" target="_blank">
		<span></span>
		</a>
	</div>
	';
}

/* Journey to Orthodoxy
*****************************************/
function j20() { 
	echo '
	<div class="j20 widget">
		<a href="http://www.journeytoorthodoxy.com" target="_blank">';
		//<img src="' . get_template_directory_uri() . '/images/adJTO300.png">
		echo '<span></span>
		</a>
	</div>
	';
}

/* Salvation Video
*****************************************/
function salvation_video() { 
	echo '
	<div class="salvation_video widget">
		<h3 class="widget-title">THE ORTHODOX VIEW OF SALVATION</h3>
		<iframe width="420" height="315" src="//www.youtube.com/embed/WosgwLekgn8" frameborder="0" allowfullscreen></iframe>
	</div>
	';
}

function register_widgets() {
	register_sidebar_widget('I\'m New', 'im_new');
	register_sidebar_widget('Schedule', 'schedule');
	register_sidebar_widget('Greek Diocese Logo', 'greek_logo');
	register_sidebar_widget('Online Chapel', 'online_chapel');
	register_sidebar_widget('Journey to Orthodoxy', 'j20');
	register_sidebar_widget('The Orthodox View Of Salvation In Christ', 'salvation_video');
}
add_action('widgets_init', 'register_widgets');
?>