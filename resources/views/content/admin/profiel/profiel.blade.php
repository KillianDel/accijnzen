@extends('layouts.admin')
@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
      <h1 class="h2">Profielinstellingen</h1>
      <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">
          <button type="button" class="btn btn-sm btn-dark" data-toggle="modal" data-target="#eventcreate" onclick="openForm()">Nieuwe cursus toevoegen</button>
        </div>
      </div>
    </div>

        <h4 class="text-lg font-medium text-gray-900 dark:text-gray-100">Profielinformatie</h4>
        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">Hier kan je eventueel je naam of email veranderen:</p>

        <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
            @csrf
            @method('patch')
            
            <div >
                <label for="name">Naam</label>
                <input id="name" name="name" type="text" class="mt-1 block w-full" value="{{$user->name}}" required autofocus autocomplete="name" />
            </div>

            <div>
                <label for="email" :value="__('Email')">Email</label>
                <input id="email" name="email" type="email" class="mt-1 block w-full" value="{{$user->email}}" required autocomplete="username" />
            </div>

            <div class="flex items-center gap-4">
                <button class="btn btn-success btn-sm">Opslaan</button>

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

            <hr>
            <h4 class="text-lg font-medium text-gray-900 dark:text-gray-100">Veranderen van wachtwoord</h4>
            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">Gebruik een moeilijk wachtwoord zodat de site veilig blijft!</p>
        
            <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
                @csrf
                @method('put')
        
                <div>
                    <label for="current_password" :value="__('Current Password')">Huidig wacthwoord</label>
                    <input id="current_password" name="current_password" type="password" class="mt-1 block w-full" autocomplete="current-password" />
                </div>
        
                <div>
                    <label for="password" :value="__('New Password')">Nieuw Wachtwoord</label>
                    <input id="password" name="password" type="password" class="mt-1 block w-full" autocomplete="new-password" />
                </div>
        
                <div>
                    <label for="password_confirmation" :value="__('Confirm Password')">Bevestig wacthwoord</label>
                    <input id="password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" autocomplete="new-password" />
                </div>
        
                <div class="flex items-center gap-4">
                    <button class="btn btn-success btn-sm">Opslaan</button>
        
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
</main>

@endsection