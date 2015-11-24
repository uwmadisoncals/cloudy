<?php

// Disable unwanted wordpress auto formating
function my_formatter($content) {
	$new_content = '';
	$pattern_full = '{(\[noformat\].*?\[/noformat\])}is';
	$pattern_contents = '{\[noformat\](.*?)\[/noformat\]}is';
	$pieces = preg_split($pattern_full, $content, -1, PREG_SPLIT_DELIM_CAPTURE);
	foreach ($pieces as $piece) {
		if (preg_match($pattern_contents, $piece, $matches)) {
			$new_content .= $matches[1];
		} else {
			$new_content .= wptexturize(wpautop($piece));
		}
	}
	return $new_content;
}
remove_filter('the_content', 'wpautop');
remove_filter('the_content', 'wptexturize');
add_filter('the_content', 'my_formatter', 99);

// Toggle

function toggle( $atts, $content = null ) {
	extract(shortcode_atts(array(
		'title'		=> '',
	), $atts));
	$out .= '<h5 class="toggle">' .$title. '</h5>';
	$out .= '<div class="toggle-content">';
	$out .= do_shortcode($content);
	$out .= '</div>';
	return $out; }
add_shortcode('toggle', 'toggle');

// Tabs 1-10

function Tabs( $atts, $content = null ) {
	extract(shortcode_atts(array(
		'tab1'	=> '',
		'tab2'	=> '',
		'tab3'	=> '',
		'tab4'	=> '',
		'tab5'	=> '',
		'tab6'	=> '',
		'tab7'	=> '',
		'tab8'	=> '',
		'tab9'	=> '',
		'tab10'	=> '',
	), $atts));
	if ($tab1<>"") { $t1 = "<li><a href=\"#tab1\">".$tab1."</a></li>"; }
	if ($tab2<>"") { $t2 = "<li><a href=\"#tab2\">".$tab2."</a></li>"; }
	if ($tab3<>"") { $t3 = "<li><a href=\"#tab3\">".$tab3."</a></li>"; }
	if ($tab4<>"") { $t4 = "<li><a href=\"#tab4\">".$tab4."</a></li>"; }
	if ($tab5<>"") { $t5 = "<li><a href=\"#tab5\">".$tab5."</a></li>"; }
	if ($tab6<>"") { $t6 = "<li><a href=\"#tab6\">".$tab6."</a></li>"; }
	if ($tab7<>"") { $t7 = "<li><a href=\"#tab7\">".$tab7."</a></li>"; }
	if ($tab8<>"") { $t8 = "<li><a href=\"#tab8\">".$tab8."</a></li>"; }
	if ($tab9<>"") { $t9 = "<li><a href=\"#tab9\">".$tab9."</a></li>"; }
	if ($tab10<>"") { $t10 = "<li><a href=\"#tab10\">".$tab10."</a></li>"; }
	$out = "
		<div id=\"tabs\">
		<ul>
			".$t1."".$t2."".$t3."".$t4."".$t5."".$t6."".$t7."".$t8."".$t9."".$t10."
		</ul>
				".do_shortcode($content)."
		</div>
	";
	return $out; }
add_shortcode('tabs', 'Tabs');

// Slides 1-10

function Slide1( $atts, $content = null ) {
	$out = "<div id=\"tab1\">".do_shortcode($content)."</div>"; return $out; }
add_shortcode('slide1', 'Slide1');

function Slide2( $atts, $content = null ) {
	$out = "<div id=\"tab2\">".do_shortcode($content)."</div>"; return $out; }
add_shortcode('slide2', 'Slide2');

function Slide3( $atts, $content = null ) {
	$out = "<div id=\"tab3\">".do_shortcode($content)."</div>"; return $out; }
add_shortcode('slide3', 'Slide3');

function Slide4( $atts, $content = null ) {
	$out = "<div id=\"tab4\">".do_shortcode($content)."</div>"; return $out; }
add_shortcode('slide4', 'Slide4');

function Slide5( $atts, $content = null ) {
	$out = "<div id=\"tab5\">".do_shortcode($content)."</div>"; return $out; }
add_shortcode('slide5', 'Slide5');

function Slide6( $atts, $content = null ) {
	$out = "<div id=\"tab6\">".do_shortcode($content)."</div>"; return $out; }
add_shortcode('slide6', 'Slide6');

function Slide7( $atts, $content = null ) {
	$out = "<div id=\"tab7\">".do_shortcode($content)."</div>"; return $out; }
add_shortcode('slide7', 'Slide7');

function Slide8( $atts, $content = null ) {
	$out = "<div id=\"tab8\">".do_shortcode($content)."</div>"; return $out; }
add_shortcode('slide8', 'Slide8');

function Slide9( $atts, $content = null ) {
	$out = "<div id=\"tab9\">".do_shortcode($content)."</div>"; return $out; }
add_shortcode('slide9', 'Slide9');

function Slide10( $atts, $content = null ) {
	$out = "<div id=\"tab10\">".do_shortcode($content)."</div>"; return $out; }
add_shortcode('slide10', 'Slide10');


// Intro, Code, Clear, Divider

function Intro($atts, $content = null ) {
	return '<p class="intro">' .do_shortcode($content). '</p>';
}
add_shortcode("intro", "Intro");

function Code($atts, $content = null ) {
	return '<pre>' . htmlspecialchars($content) . '</pre>';
}
add_shortcode("code", "Code");

function Clear() {
	return '<div class="clear"></div>';
}
add_shortcode("clear", "Clear");

function Divider() {
	return '<div class="hr"></div>';
}
add_shortcode("divider", "Divider");

// Images

function ImgLeft($atts, $content = null ) {
	return '<img src="'.$content.'" class="left-frame" alt="" />';
}
add_shortcode("img-left", "ImgLeft");

function ImgRight($atts, $content = null ) {
	return '<img src="'.$content.'" class="right-frame" alt="" />';
}
add_shortcode("img-right", "ImgRight");

function ImgCenter($atts, $content = null ) {
	return '<img src="'.$content.'" class="frame-center" alt="" />';
}
add_shortcode("img-center", "ImgCenter");

// Boxes

function InfoBox($atts, $content = null ) {
	return '<div class="info-box">' .do_shortcode($content). '<span class="close">x</span></div>';
}
add_shortcode("info", "InfoBox");

function WarningBox($atts, $content = null ) {
	return '<div class="warning-box">' .do_shortcode($content). '<span class="close">x</span></div>';
}
add_shortcode("warning", "WarningBox");

function ErrorBox($atts, $content = null ) {
	return '<div class="error-box">' .do_shortcode($content). '<span class="close">x</span></div>';
}
add_shortcode("error", "ErrorBox");

function SuccessBox($atts, $content = null ) {
	return '<div class="success-box">' .do_shortcode($content). '<span class="close">x</span></div>';
}
add_shortcode("success", "SuccessBox");

// Button, Highlights

function Button ($atts, $content = null ) {
    extract(shortcode_atts(array(
        'link'      => '',
    ), $atts));

	return '<p><a href="'.$link.'" class="more-link">' .do_shortcode($content). '</a></p>';
}
add_shortcode("button", "Button");

function Yellow($atts, $content = null ) {
	return '<span class="yellow">' .do_shortcode($content). '</span>';
}
add_shortcode("yellow", "Yellow");

function Green($atts, $content = null ) {
	return '<span class="green">' .do_shortcode($content). '</span>';
}
add_shortcode("green", "Green");

function Blue($atts, $content = null ) {
	return '<span class="blue">' .do_shortcode($content). '</span>';
}
add_shortcode("blue", "Blue");

function Red($atts, $content = null ) {
	return '<span class="red">' .do_shortcode($content). '</span>';
}
add_shortcode("red", "Red");

function Violet($atts, $content = null ) {
	return '<span class="violet">' .do_shortcode($content). '</span>';
}
add_shortcode("violet", "Violet");

// Dropcap, Quotes, Pullquotes, 

function DropCap($atts, $content = null ) {
	return '<span class="dropcap">' .do_shortcode($content). '</span>';
}
add_shortcode("dropcap", "DropCap");

function Blockquote($atts, $content = null ) {
		extract( shortcode_atts( array(
      'author' => '',
	  'website' => '',
	  'link' => '',
      ), $atts));
	return '<blockquote><p><span style="font-size:20px;">&rdquo;</span> ' .do_shortcode($content). ' <span style="font-size:20px;">&ldquo;</span></p><span class="author">' . $author . ', <a href="'.$link.'" target="_blank">'.$website.'</a></span></blockquote>';
}
add_shortcode("quote", "Blockquote");

function LeftPullQuote($atts, $content = null ) {
		extract( shortcode_atts( array(
      'author' => '',
	  'website' => '',
	  'link' => '',
      ), $atts));
	return '<blockquote class="left-pull-quote"><p><span style="font-size:20px;">&rdquo;</span> ' .do_shortcode($content). ' <span style="font-size:20px;">&ldquo;</span></p><span class="author">' . $author . ', <a href="'.$link.'" target="_blank">'.$website.'</a></span></blockquote>';
}
add_shortcode("left-quote", "LeftPullQuote");

function RightPullQuote($atts, $content = null ) {
		extract( shortcode_atts( array(
      'author' => '',
	  'website' => '',
	  'link' => '',
      ), $atts));
	return '<blockquote class="right-pull-quote"><p><span style="font-size:20px;">&rdquo;</span> ' .do_shortcode($content). ' <span style="font-size:20px;">&ldquo;</span></p><span class="author">' . $author . ', <a href="'.$link.'" target="_blank">'.$website.'</a></span></blockquote>';
}
add_shortcode("right-quote", "RightPullQuote");

// Icons

function ico_fax($atts, $content = null ) {
	return '<span class="ico-fax">' .do_shortcode($content). '</span>';
}
add_shortcode("ico_fax", "ico_fax");

function ico_home($atts, $content = null ) {
	return '<span class="ico-home">' .do_shortcode($content). '</span>';
}
add_shortcode("ico_home", "ico_home");

function ico_phone($atts, $content = null ) {
	return '<span class="ico-phone">' .do_shortcode($content). '</span>';
}
add_shortcode("ico_phone", "ico_phone");

function ico_male($atts, $content = null ) {
	return '<span class="ico-male">' .do_shortcode($content). '</span>';
}
add_shortcode("ico_male", "ico_male");

function ico_female($atts, $content = null ) {
	return '<span class="ico-female">' .do_shortcode($content). '</span>';
}
add_shortcode("ico_female", "ico_female");

function ico_mail($atts, $content = null ) {
				extract( shortcode_atts( array(
      'email' => '',
      ), $atts));

	return '<a href="mailto:'.$email.'" class="ico-mail">' .do_shortcode($content). '</a>';
}
add_shortcode("ico_mail", "ico_mail");

function ico_download($atts, $content = null ) {
				extract( shortcode_atts( array(
      'link' => '',
      ), $atts));

	return '<a href="'.$link.'" class="ico-download">' .do_shortcode($content). '</a>';
}
add_shortcode("ico_download", "ico_download");

function ico_money($atts, $content = null ) {
				extract( shortcode_atts( array(
      'link' => '',
      ), $atts));

	return '<a href="'.$link.'" class="ico-money">' .do_shortcode($content). '</a>';
}
add_shortcode("ico_money", "ico_money");

function ico_gift($atts, $content = null ) {
				extract( shortcode_atts( array(
      'link' => '',
      ), $atts));

	return '<a href="'.$link.'" class="ico-gift">' .do_shortcode($content). '</a>';
}
add_shortcode("ico_gift", "ico_gift");

function ico_star($atts, $content = null ) {
				extract( shortcode_atts( array(
      'link' => '',
      ), $atts));

	return '<a href="'.$link.'" class="ico-star">' .do_shortcode($content). '</a>';
}
add_shortcode("ico_star", "ico_star");

function ico_support($atts, $content = null ) {
				extract( shortcode_atts( array(
      'link' => '',
      ), $atts));

	return '<a href="'.$link.'" class="ico-support">' .do_shortcode($content). '</a>';
}
add_shortcode("ico_support", "ico_support");

function ico_pdf($atts, $content = null ) {
				extract( shortcode_atts( array(
      'link' => '',
      ), $atts));

	return '<a href="'.$link.'" class="ico-pdf">' .do_shortcode($content). '</a>';
}
add_shortcode("ico_pdf", "ico_pdf");

// Lists

function good_list( $atts, $content = null ) {
	return '<ul class="good-list">' .do_shortcode($content). '</ul>';
	}
add_shortcode('good_list', 'good_list');

function bad_list( $atts, $content = null ) {
	return '<ul class="bad-list">' .do_shortcode($content). '</ul>';
	}
add_shortcode('bad_list', 'bad_list');

// Layout

function FullWidth($atts, $content = null ) {
	return '<div class="full-width">' . do_shortcode($content) . '</div>';
}
add_shortcode("full_width", "FullWidth");

function OneHalf($atts, $content = null ) {
	return '<div class="one_half">' . do_shortcode($content) . '</div>';
}
add_shortcode("one_half", "OneHalf");

function OneHalfLast($atts, $content = null ) {
	return '<div class="one_half no-margin">' . do_shortcode($content) . '</div>';
}
add_shortcode("one_half_last", "OneHalfLast");

function OneThird($atts, $content = null ) {
	return '<div class="one_third">' . do_shortcode($content) . '</div>';
}
add_shortcode("one_third", "OneThird");

function OneThirdLast($atts, $content = null ) {
	return '<div class="one_third no-margin">' . do_shortcode($content) . '</p></div>';
}
add_shortcode("one_third_last", "OneThirdLast");

function TwoThird($atts, $content = null ) {
	return '<div class="two_third">' . do_shortcode($content) . '</div>';
}
add_shortcode("two_third", "TwoThird");

function TwoThirdLast($atts, $content = null ) {
	return '<div class="two_third no-margin">' . do_shortcode($content) . '</div>';
}
add_shortcode("two_third_last", "TwoThirdLast");

function OneForth($atts, $content = null ) {
	return '<div class="one_forth">' . do_shortcode($content) . '</div>';
}
add_shortcode("one_forth", "OneForth");

function OneForthLast($atts, $content = null ) {
	return '<div class="one_forth no-margin">' . do_shortcode($content) . '</div>';
}
add_shortcode("one_forth_last", "OneForthLast");

function ThreeForth($atts, $content = null ) {
	return '<div class="three_forth">' . do_shortcode($content) . '</div>';
}
add_shortcode("three_forth", "ThreeForth");

function ThreeForthLast($atts, $content = null ) {
	return '<div class="three_forth no-margin">' . do_shortcode($content) . '</div>';
}
add_shortcode("three_forth_last", "ThreeForthLast");

?>