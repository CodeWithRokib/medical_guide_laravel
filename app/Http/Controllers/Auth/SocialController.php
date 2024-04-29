<?php

namespace App\Http\Controllers\Auth;

use App\Enums\RoleType;
use Exception;
use App\Models\User;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    public $valid_provider = [
        'google',
        'facebook'
    ];

    public function socialRedirect($provider)
    {
        if (in_array($provider, $this->valid_provider)) {
            return Socialite::driver($provider)->redirect();
        }
    }
    public function loginWithSocial()
    {
        try {
                $user_social = Socialite::driver("google")->user();
                $isUser = User::where('email', '=', $user_social->getEmail())
                    ->orWhere('provider_id', $user_social->id)
                    ->first();
                if ($isUser) {
                    Auth::login($isUser);
                    return redirect()->route('/');
                } else {
                    $user     = User::create([
                        'name'              => $user_social->getName(),
                        'email'             => $user_social->getEmail(),
                        'email_verified_at' => now(),
                        'password'          => Hash::make('123456'),
                        'provider_id'       => $user_social->id,
                        'provider'          => "google",
                        'role_id'           => RoleType::USER
                    ]);
                    $user = User::with('roles')->find($user->id);
                    $user->roles()->attach(RoleType::USER);

                    Auth::login($user);
                    return redirect(route('/'));
                }
            return redirect()->route('login');
        } catch (Exception $exception) {
        }
    }

}
