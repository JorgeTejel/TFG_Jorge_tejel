<style>
    .main {
        background-image: url(http://127.0.0.1:8000/img/fondogris.png);
        background-repeat: no-repeat;
        background-size: cover;
    }
    .shadow {
        box-shadow: 0px 0px 300px 0px rgba(0,0,0,1);
    }

    body > div > nav > div.max-w-7xl.mx-auto.px-4.sm\:px-6.lg\:px-8 > div > div:nth-child(1) > div.hidden.space-x-8.sm\:-my-px.sm\:ml-10.sm\:flex > a {
        display: none;
    }
</style>

<title>Rider's Hub</title>
<link rel="icon" type="image/pg" href="{{ asset('img/logoRH.png') }}">

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Perfil') }}
        </h2>
    </x-slot>

    <div class="py-12 main">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg shadow">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg v shadow">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg shadow">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
