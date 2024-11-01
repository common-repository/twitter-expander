<?php
/*
Plugin Name: Twitter Expander
Plugin URI: http://www.chefblogger.me
Description: Expand your Twitter-Name @something in your Posting with Twitterlink http://twitter.com/something
Author: Eric-Oliver M&auml;chler
Author URI: https://www.chefblogger.me/wer-ist-der-chefblogger/
Version: 3.3.2
Requires at least: 3.5
Tested up to: 5.7
*/

function twitter_name($content) {
        $text = preg_replace("/(?!\!)(\W)\@(\w+)/i",
                     "$1<a href=\"https://twitter.com/$2\" target=\"_blank\" >@$2</a>", $content);
        $text = preg_replace("/(\W)\!\@(\w+)/i",
                     "$1@$2", $text);
        return ($text);
}


add_filter('the_content', 'twitter_name');

?>