<?php
/* I'm New
*****************************************/
function im_new() { 
	echo '
	<div class="im_new widget">
		<a href="' .  home_url() . '/welcome"><img src="' . get_template_directory_uri() . '/images/BluetoOrthodoxy.png"></a>
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

/* Eblast
*****************************************/
function eblast() { 
	echo '
	<div class="eblast widget">
		<a href="http://www.goarch.org/listsubscribe?l=PRESCOTTORTHODOX" target="_blank"><img src="' . get_template_directory_uri() . '/images/EBlast.png"></a>
	</div>
	';
}

/* Greek Diocese Logo
*****************************************/
function greek_logo() { 
	echo '
	<div class="greek_logo widget">
		<a href="http://www.goarch.org" target="_blank"><img src="' . get_template_directory_uri() . '/images/goarch_logo.png"></a>
	</div>
	';
}

/* Daily Scripture Readings
*****************************************/
function daily_scripture() { 
	echo '
	<div class="daily_scripture widget">
		<h3 class="widget-title">DAILY SCRIPTURE READINGS</h3>
		<script src="//www.gmodules.com/ig/ifr?url=http://onlinechapel.goarch.org/gadgets/goarch.xml&amp;up_maxSaints=5&amp;up_language=English&amp;up_showIcon=1&amp;up_showClip=0&amp;synd=open&amp;w=300&amp;h=425&amp;title=&amp;border=%23ffffff%7C3px%2C1px+solid+%23999999&amp;output=js"></script>
	</div>
	';
}

/* Journey to Orthodoxy
*****************************************/
function j20() { 
	echo '
	<div class="j20 widget">
		<a href="http://www.journeytoorthodoxy.com" target="_blank"><img src="' . get_template_directory_uri() . '/images/adJTO300.png"></a>
	</div>
	';
}

/* Liturgica
*****************************************/
function liturgica() { 
	echo '
	<div class="liturgica widget">
		<a href="http://www.liturgica.com" target="_blank"><img src="' . get_template_directory_uri() . '/images/liturgica.png"></a>
	</div>
	';
}

/* Fredricka Matthews-Green Salvation Video
*****************************************/
function green_video() { 
	echo '
	<div class="green_video widget">
		<h3 class="widget-title">THE ORTHODOX VIEW OF SALVATION</h3>
		<object width="480" height="385"><param name="movie" value="http://www.youtube.com/v/sAlCze3ZFjA&hl=en_US&fs=1&rel=0"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/sAlCze3ZFjA&hl=en_US&fs=1&rel=0" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="480" height="385"></embed></object>
	</div>
	';
}

function register_widgets() {
	register_sidebar_widget('I\'m New', 'im_new');
	register_sidebar_widget('Schedule', 'schedule');
	register_sidebar_widget('Eblast', 'eblast');
	register_sidebar_widget('Greek Diocese Logo', 'greek_logo');
	register_sidebar_widget('Daily Scripture Readings', 'daily_scripture');
	register_sidebar_widget('Journey to Orthodoxy', 'j20');
	register_sidebar_widget('Liturgica', 'liturgica');
	register_sidebar_widget('The Orthodox View Of Salvation In Christ', 'green_video');
}
add_action('widgets_init', 'register_widgets');
?>