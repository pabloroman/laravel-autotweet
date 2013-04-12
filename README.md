# Autotweet: A LaravelPHP Twitter bot to send automated tweets from your app. #

## Usage ##

1. Start the bundle:

* Automatically:
	Add `'autotweet' => array('auto' => true),` to your `bundle.php`
	
* Manually:

	Add `'autotweet'` to your `bundle.php`
```php	
	if( !class_exists( 'Autotweet' ) ) {
		Bundle::start( 'autotweet' );
	}
```	