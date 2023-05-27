<style>
    * {
        box-sizing: border-box;
    }
    *:focus {
        outline: 2px solid #2563eb;
    
    }

    body {
        font-family: 'Arial', sans-serif;
        background: rgb(243 244 246);
        margin: 0;
        /* margin: 0 auto; */
    }

    main {
        display: flex;
        width: 100%;
        height: 100%;
    }
    .col_left, .col_right {
        width: 50%;
        height: 100%;
    }

    .col_left {
        background-image: url('img/bici_login.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
    }

    .col_right {
        display: flex;
        justify-content: center;
        flex-direction: column;
        gap: 2rem;
        align-items: center;
        
        background-image: url('img/fondogris.png');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
    }

    form {
        min-width: 25rem;
        display: flex;
        flex-direction: column;
        gap: 1rem;
        font-size: 1.1rem;
        background: white;
        padding: 2rem;
        border-radius: 10px;
        box-shadow: 0px 0px 48px 7px rgba(0,0,0,0.23);
    }

    .input__field {
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
    }

    input[type="email"],
    input[type="password"] {
        padding: 0.7rem;
        border-radius: 0.5rem;
        border: 1px solid #bcbcbc;
    }

    .remember {
        font-size: 1rem;
    }
    
    .btn_primary {
        border: none;
        padding: 0.8rem;
        font-size: 1rem;
        background: black;
        color: white;
        border-radius: 10px;
        box-sizing: content-box;
        transition: 0.1s background ease-in;
        max-height: 30px;
        border: 2px solid black;
    }

    .btn_primary:hover {
       background: white;
       color: black;
    }

    .field_remember {
        display:flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-between;
    }

    .anchor {
        color: black;
    }



</style>

<title>Rider's Hub</title>

<main>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div class="col_left"></div>
    <div class="col_right">
        <img src="/img/logoRH.png" alt="Riders Hub" width="70px">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="input__field">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="input__field">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />

                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <div class="input_field remember">
                <!-- Remember Me -->
                <div class="field_remember">
                    <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>


                    <div>
                        @if (Route::has('password.request'))
                            <a class="anchor" href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                            </a>
                        @endif

                    </div>
                </div>
            </div>
            <button class="btn_primary">
                {{ __('Log in') }}
            </button>
        </form>
    </div>
</main>
