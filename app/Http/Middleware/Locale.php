<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Session;

class Locale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Session::has('website_language')) {
            // dd(app()->getLocale());
            app()->setLocale(Session::get('website_language'));
        }
        // $language = \Session::get('website_language', config('app.locale'));
        // Lấy dữ liệu lưu trong Session, không có thì trả về default lấy trong config

        // config(['app.locale' => $language]);
        // Chuyển ứng dụng sang ngôn ngữ được chọn

        return $next($request);
    }
}
