<x-layouts.guest>
    <x-slot:title>
        S'inscrire
    </x-slot:title>

    <div>
        <div>
            <div>
                <div>
                    <h1>Créer un compte</h1>

                    <form method="POST" action="/register">
                        @csrf

                        <!-- Company -->
                        <label>
                            <input type="text"
                                   name="name"
                                   placeholder="Coca Cola"
                                   value="{{ old('name') }}"
                                  
                                   required>
                            <span>Nom de la société</span>
                        </label>
                        @error('name')
                            <div>
                                <span>{{ $message }}</span>
                            </div>
                        @enderror

                        <!-- Firstname -->
                        <label>
                            <input type="text"
                                   name="firstname"
                                   placeholder="John"
                                   value="{{ old('firstname') }}"
                                  
                                   required>
                            <span>Prénom</span>
                        </label>
                        @error('firstname')
                            <div>
                                <span>{{ $message }}</span>
                            </div>
                        @enderror

                        <!-- Lastname -->
                        <label>
                            <input type="text"
                                   name="lastname"
                                   placeholder="Doe"
                                   value="{{ old('lastname') }}"
                                  
                                   required>
                            <span>Nom</span>
                        </label>
                        @error('lastname')
                            <div>
                                <span>{{ $message }}</span>
                            </div>
                        @enderror

                        <!-- Email -->
                        <label>
                            <input type="email"
                                   name="email"
                                   placeholder="[mail@example.com](<mailto:mail@example.com>)"
                                   value="{{ old('email') }}"
                                  
                                   required>
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

                        <!-- Password Confirmation -->
                        <label>
                            <input type="password"
                                   name="password_confirmation"
                                   placeholder="••••••••"
                                  
                                   required>
                            <span>Confirmer le mot de passe</span>
                        </label>

                        <!-- Submit Button -->
                        <div>
                            <button type="submit">
                                S'inscrire
                            </button>
                        </div>
                    </form>

                    <div>OU</div>
                    <p>
                        Vous avez déjà un compte ?
                        <a href="/login">Connectez-vous</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-layouts.guest>