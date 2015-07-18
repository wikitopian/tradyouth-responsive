<?php

$twitter = get_user_meta(
	get_the_author_meta( 'ID' ),
	'twitter',
	true
);

if( !empty( $twitter ) ) {

	$name = get_the_author();

	echo <<<TWITTER
<span id="tradyouth-meta">
	<a href="https://www.twitter.com/{$twitter}">Follow {$name} on Twitter!</a>
</span>
TWITTER;

}

?>
