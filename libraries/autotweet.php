<?php

/**
 * A LaravelPHP Twitter bot to send automated tweets from your app.
 *
 * @package    Autotweet
 * @author     Scott Travis <pablo@thenextweb.com>
 * @link       http://github.com/pabloroman/laravel-autotweet
 * @license    MIT License
 */

use \Log;

class Autotweet
{
	// load api key

	public static function connect() {
		
		require_once( __DIR__.'/../vendor/twitteroauth/twitteroauth.php' );
		
		$consumer_key 			= Config::get( 'autotweet.consumer_key' );
		$consumer_secret 		= Config::get( 'autotweet.consumer_secret' );
		
		$oauth_token			= Config::get( 'autotweet.oauth_token' );
		$oauth_token_secret 	= Config::get( 'autotweet.oauth_token_secret' );
		
		$connection = new TwitterOAuth( $consumer_key, $consumer_secret, $oauth_token, $oauth_token_secret);
		return $connection;
	}
	
	
	public static function tweet( $text ) {
		
		$connection = self::connect();
		
		$parameters['status'] = $text;
		$status = $connection->post( 'statuses/update', $parameters );
		if( isset( $status->error ) ) {
			Log::info( $status->error );
			return false;
		}
		return true;
	}
}