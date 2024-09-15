<?php

declare(strict_types=1);

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthRegistrationRequest;
use App\Models\Role;
use App\Repositories\RoleRepository;
use App\Services\UserServiceInterface;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class RegisterController extends Controller
{
    /**
     * Where to redirect users after registration.
     */
    protected string $redirectTo = '/';

    /**
     * Create a new controller instance.
     */
    public function __construct(
        public RoleRepository $roleRepository,
        public UserServiceInterface $userService
    ) {
    }

    public function create(): View
    {
        return view('pages.auth.register');
    }

    public function store(AuthRegistrationRequest $request): RedirectResponse
    {
        $user = $this->userService->create(dto: $request->getDTO());
        Auth::login($user);
        $request->session()
            ->regenerate();
        $request->session()
            ->put([
                'role_id' => Role::STATUS_USER_ID,
            ]);
        return redirect()->intended($this->redirectTo);
    }
}
