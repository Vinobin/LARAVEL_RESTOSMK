<?php
namespace App\Http\Middleware;
use closure;
use Illuminate\http\request;
class checklogin{
    public function handle(request $request,closure $next, $roles){
        if (!Auth::check()) {
         return redirect('admin');
        }
        $user=Auth::user();
        if ($user->level==$roles) {
            return $next($request);
        }
       return redirect('admin');
    }
}