<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        

        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
/*
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Support\Facades\Redirect;

class ProfileController extends Controller
{
    
    public function edit(Request $request)
    {
        // Kullanıcıyı doğrulama
        $user = Auth::user();

        // API'den kullanıcı profil bilgilerini al
        $response = Http::withToken($user->api_token) // API Token kullanımı
            ->get('http://host.docker.internal:82/api/profile/');

        // Yanıt başarılı mı kontrol et
        if ($response->successful()) {
            $profileData = $response->json()['user']; // API'den dönen kullanıcı verisi

            return view('profile.edit', compact('profileData'));
        } else {
            return back()->with('error', 'Profil bilgileri alınırken bir hata oluştu.');
        }
    }

  
    public function update(ProfileUpdateRequest $request)
    {
        // Kullanıcıyı doğrulama
        $user = Auth::user();

        dd($user->api_token);
        // API isteği ile profil güncelle
        $response = Http::withToken($user->api_token)
            ->put('http://host.docker.internal:82/api/profile', $request->validated());

        // Yanıt başarılı mı kontrol et
        if ($response->successful()) {
            return Redirect::route('profile.edit')->with('status', 'Profil başarıyla güncellendi.');
        } else {
            return back()->with('error', 'Profil güncellenirken bir hata oluştu.');
        }
    }


    public function destroy(Request $request)
    {
        // Kullanıcıyı doğrulama
        $user = Auth::user();

        // Kullanıcının parolasını doğrulama
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        // API isteği ile hesabı sil
        $response = Http::withToken($user->api_token)
            ->delete('http://host.docker.internal:82/api/profile', [
                'password' => $request->input('password'),
            ]);

        // Yanıt başarılı mı kontrol et
        if ($response->successful()) {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return Redirect::to('/')->with('status', 'Hesabınız başarıyla silindi.');
        } else {
            return back()->with('error', 'Hesap silinirken bir hata oluştu.');
        }
    }

}
*/