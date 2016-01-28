<?php namespace App\Http\Controllers;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('welcome');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function arrived()
	{
		$mysql_version = -1;
		$mysql_running = false;
		$mysql_version_data = \DB::select('SHOW VARIABLES LIKE "%version%";');

		// Because Laravel doesn't have $mysql->server_info?
		if($mysql_version_data !== false) {
			$mysql_running = true;
			foreach($mysql_version_data as $key=>$var) {
				if($var->Variable_name == 'version') {
					$mysql_version = $var->Value;
					break;
				}
			}
		}

		$mysql_host = \Config::get('database')['connections']['mysql']['host'];
		$mysql_username = \Config::get('database')['connections']['mysql']['username'];
		$mysql_password = \Config::get('database')['connections']['mysql']['password'];

		// Memcached
		$m = new \Memcached();
		$memcached_running = false;
		if ($m->addServer('localhost', 11211)) {
		  $memcached_running = true;
		  $memcached_version = $m->getVersion();
		  $memcached_version = current($memcached_version);
		}

		// Load NPM Packages
		$npm_packages = \File::get('..//package.json');
		$npm_packages = json_decode($npm_packages, true);

		return view('arrived', [
			'phpversion' => phpversion(),
			'mysql_version' => $mysql_version,
			'mysql_running' => $mysql_running,
			'mysql_host' => $mysql_host,
			'mysql_username' => $mysql_username,
			'mysql_password' => $mysql_password,
			'memcached_running' => $memcached_running,
			'memcached_version' => $memcached_version,
			'npm_packages' => $npm_packages,
		]);
	}
}
