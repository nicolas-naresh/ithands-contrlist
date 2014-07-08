<?php namespace Ithands\Controlist;

use Illuminate\Support\ServiceProvider;
use Ithands\Controlist\Models\Permission;
use Ithands\Controlist\Models\Role;

class ControlistServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('ithands/controlist');
		//$provider = $this->getProviderClass();
		$this->app->bind('Permission', function(){
			return new Permission();
		});
		// $this->app->bind('Controlist', function() use ($provider) {
	 //    return new Controlist(new $provider);
		// });
	}

	private function getProviderClass()
	{
		return 'Ithands\Controlist\ControlistProviders\\' . ucfirst("dB") . 'Provider';
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}
