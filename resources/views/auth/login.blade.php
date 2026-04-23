<x-layout>
    <x-slot:title>
        Se connecter
    </x-slot:title>

    <div>
        <div>
            <div>
                <div>
                    <h1>Welcome Back</h1>

                    <form method="POST" action="/login">
                        @csrf

                        <!-- Email -->
                        <label>
                            <input type="email"
                                   name="email"
                                   placeholder="[mail@example.com](<mailto:mail@example.com>)"
                                   value="{{ old('email') }}"
                                  
                                   required
                                   autofocus>
                            <span>Email</span>
                        </label>
                        @error('email')
                            <div>
                                <span>{{ $message }}</span>
                            </div>
                        @enderror

                        <!-- Password -->
                        <label>
                            <input type="password"
                                   name="password"
                                   placeholder="••••••••"
                                  
                                   required>
                            <span>Mot de passe</span>
                        </label>
                        @error('password')
                            <div>
                                <span>{{ $message }}</span>
                            </div>
                        @enderror

                        <!-- Remember Me -->
                        <div>
                            <label>
                                <input type="checkbox"
                                       name="remember"
                                      >
                                <span>Remember me</span>
                            </label>
                        </div>

                        <!-- Submit Button -->
                        <div>
                            <button type="submit">
                                Se connecter
                            </button>
                        </div>
                    </form>

                    <div>OR</div>
                    <p>
                        Vous n'avez pas de compte ?
                        <a href="/register">Inscrivez-vous</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-layout>