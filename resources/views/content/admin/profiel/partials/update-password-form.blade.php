<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">Veranderen wachtwoord</h2>
        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">Gebruik een moeilijk wachtwoord zodat de site veilig blijft!</p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <label for="current_password" :value="__('Current Password')">Huidig wacthwoord</label>
            <input id="current_password" name="current_password" type="password" class="mt-1 block w-full" autocomplete="current-password" />
            {{-- <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" /> --}}
        </div>

        <div>
            <label for="password" :value="__('New Password')" />Nieuw Wachtwoord</label>
            <input id="password" name="password" type="password" class="mt-1 block w-full" autocomplete="new-password" />
            {{-- <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" /> --}}
        </div>

        <div>
            <label for="password_confirmation" :value="__('Confirm Password')">Bevestig wacthwoord</label>
            <input id="password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" autocomplete="new-password" />
            {{-- <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" /> --}}
        </div>

        <div class="flex items-center gap-4">
            <button>Opslaan</button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>