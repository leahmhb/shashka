<?php 
namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel {

	/**
	 * The application's global HTTP middleware stack.
	 *
	 * @var array
	 */
	protected $middleware = [
	'Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode',
	'Illuminate\Cookie\Middleware\EncryptCookies',
	'Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse',
	'Illuminate\Session\Middleware\StartSession',
	'Illuminate\View\Middleware\ShareErrorsFromSession',
		//'App\Http\Middleware\VerifyCsrfToken',
	];

	/**
	 * The application's route middleware.
	 *
	 * @var array
	 */
	protected $routeMiddleware = [
	'auth.basic' => 'Illuminate\Auth\Middleware\AuthenticateWithBasicAuth',
	'csrf'  => 'Illuminate\Foundation\Http\Middleware\VerifyCsrfToken',

	'admin' => 'App\Http\Middleware\AdminMiddleware',
	'jockey_club' => 'App\Http\Middleware\JockeyClubMiddleware',
	'owner' => 'App\Http\Middleware\OwnerMiddleware',
	'user' => 'App\Http\Middleware\Authenticate',
	'guest' => 'App\Http\Middleware\RedirectIfAuthenticated',
	];

}
