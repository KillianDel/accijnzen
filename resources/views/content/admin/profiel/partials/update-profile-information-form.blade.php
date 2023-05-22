<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">Profiel informatie</h2>
        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">Hier kan je bepaalde informatie van je account veranderen:</p>
    </header>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <label for="name" :value="__('Name')" >Naam</label>
            <input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            {{-- <x-input-error class="mt-2" :messages="$errors->get('name')" /> --}}
        </div>

        <div>
            <label for="email" :value="__('Email')">Email</label>
            <input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
            {{-- <x-input-error class="mt-2" :messages="$errors->get('email')" /> --}}
        </div>

        <div class="flex items-center gap-4">
            <button>Opslaan</button>

            @if (session('status') === 'profile-updated')
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
