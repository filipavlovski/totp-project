<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Attributes\Get;
use App\Repositories\UserRepository;
use App\Services\AuthenticationServiceInterface;
use App\View;

class HomeController
{
    public function __construct(
        private AuthenticationServiceInterface $auth,
        private UserRepository $users,
        private View $view,
    ) {
    }

    #[Get('/')]
    public function index()
    {
        return $this->view->make('home/index');
    }
}
