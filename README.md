# Autotweet: A LaravelPHP Twitter bot to send automated tweets from your app. #

## Usage ##

0. Copy the file `config/autotweet-sample.php` to your application config file, renaming it to `autotweet.php`

1. Start the bundle:

* Automatically:
	Add `'autotweet' => array('auto' => true),` to your `bundle.php`
	
* Manually:

	Add `'autotweet'` to your `bundle.php` and start the bundle dynamically.
	
```php	
	if( !class_exists( 'Autotweet' ) ) {
		Bundle::start( 'autotweet' );
	}
```	

2. Send a tweet from your Laravel app:
```php	
	Autotweet::tweet("How are you doing today?");
```
