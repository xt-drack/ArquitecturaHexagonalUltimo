<?php
 namespace Src\Shared\Infrastructure\Middleware;

use Closure;
use Illuminate\Http\Request;
use Src\Shared\Infrastructure\Exceptions\ApiAuthException;
use Src\Shared\Infrastructure\Helper\HttpCodesHelper;
use Illuminate\Support\Facades\Config;

 final class ApiMiddleware {

    use HttpCodesHelper;

    public function handle(
        Request $request,
        Closure $next
    ):mixed {

        if (empty($request->header('authorization'))) {
            throw new ApiAuthException("Not auth authorization is empty", $this->badRequest());
        }
        //dd(env("API_KEY"));
        $apiKey = Config::get("app.API_KEY");
        if ($apiKey !== $request->header('authorization')) {
            throw new ApiAuthException("Not auth authorization is failed", $this->unAuthorized());
        }

        return $next($request);

    }
 }

?>
