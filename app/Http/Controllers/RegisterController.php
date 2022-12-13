<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Socialite\Facades\Socialite;
use App\Rules\CustomPasswordValidation;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

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
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $messages = [
            'regex' => ':attributeに「/」と半角スペースは使用できません。',
        ];

        return Validator::make(
            $data,
            [
            'name' => ['required', 'regex:/^(?!.*\s).+$/u', 'regex:/^(?!.*\/).*$/', 'max:15', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255',
                        Rule::unique('users', 'email')->whereNull('deleted_at'),],
            'password' => ['required', 'string', new CustomPasswordValidation, 'confirmed'],
            ],
            $messages
            );
    }

    public function showProviderUserRegistrationForm(Request $request, string $provider)
    {
        $token = $request->token;

        $providerUser = Socialite::driver($provider);

        // Google
        if ($provider === 'google') {
            $providerUser = $providerUser->userFromToken($token);

            $data = [
                'provider' => $provider,
                'email' => $providerUser->getEmail(),
                'token' => $providerUser->token,
            ];
            
            return view('auth.social_register', $data);
        }
    }

    public function registerProviderUser(Request $request, string $provider)
    {
        // Google
        if ($provider === 'google') {
            $request->validate([
                'name' => ['required', 'string', 'min:1', 'max:15', 'unique:users'],
                'token' => ['required', 'string'],
            ]);
        }

        $token = $request->token;

        $providerUser = Socialite::driver($provider);

        // Google
        if ($provider === 'google') {
            $providerUser = $providerUser->userFromToken($token);
        }

        // Google
        if ($provider === 'google') {
            $user = User::create([
                'name' => $request->name,
                'avatar' => asset(config('user.avatar_path.default')),
                'email' => $providerUser->getEmail(),
                'password' => null,
            ]);
        }

        $this->guard()->login($user, true);

        return $this->registered($request, $user)
        ?: redirect($this->redirectPath());
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'avatar' => asset(config('user.avatar_path.default')),
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
