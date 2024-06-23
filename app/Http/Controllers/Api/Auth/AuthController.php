<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Auth\SignInRequest;
use App\Http\Requests\Api\Auth\SignUpRequest;
use App\Http\Services\Api\Auth\AuthService;

class AuthController extends Controller
{
    private $auth;

    public function __construct(AuthService $auth)
    {
        $this->auth = $auth;
    }

    public function signUp(SignUpRequest $request) {
        return $this->auth->signUp($request);
    }

    public function signIn(SignInRequest $request) {
        return $this->auth->signIn($request);
    }

    public function signOut()
    {
        return $this->auth->signOut();
    }

    public function whatIsMyPlatform()
    {
        return $this->auth->whatIsMyPlatform();
    }
}
