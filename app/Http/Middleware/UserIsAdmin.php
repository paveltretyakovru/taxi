<?php namespace App\Http\Middleware;

use Closure;
use Auth;

class UserIsAdmin {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		if(Auth::check()){
			$user = Auth::user();
			if($user->admin){
				return $next($request);
			}else{
				return redirect()->back()->with('error' , 'У вас нет прав доступа');
			}
		}else{
			return redirect()->guest('auth/login');
		}		
	}

}
