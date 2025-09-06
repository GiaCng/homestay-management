<?php

namespace App\Exceptions;

use GuzzleHttp\Psr7\Response;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    public function render($request, Throwable $exception): mixed
    {
        if ($this->isHttpException($exception)){
            if ($exception->getStatusCode() == 404){
                if ($request->is('admin/')) {
                    return response()->view('admin.errors.404', [],404);
                } else {
                    return response()->view('clients.errors.404', [], 404);
                }
            }
        }
        return parent::render($request, $exception);
    }
}
