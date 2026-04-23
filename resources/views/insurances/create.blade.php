<x-layouts.app>
    <x-slot:title>
        Créer une assurance
    </x-slot:title>

    <header class="main__header header">
        <h1 class="header__title">Créer une assurance</h1>
        <a href="{{ route('insurances.index') }}" class="link btn">
            <i class="link__icon fa-solid fa-arrow-left"></i>
            <span class="link__text">Retour aux assurances</span>
        </a>
    </header>

    <div class="main__content">
        <form method="POST" action="{{ route('insurances.store') }}" class="form">
            @csrf

            <div class="form__group">
                <label for="name" class="form__label">Nom</label>

                <input id="name" type="text" name="name" value="{{ old('name') }}" class="form__input">

                @error('name')
                    <div class="form__error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form__group">
                <label for="address" class="form__label">Adresse</label>

                <input id="address" type="text" name="address" value="{{ old('address') }}" class="form__input">

                @error('address')
                    <div class="form__error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form__row">

                <div class="form__group">
                    <label for="postal_code" class="form__label">Code postal</label>

                    <input id="postal_code" type="text" name="postal_code" value="{{ old('postal_code') }}"
                        class="form__input">

                    @error('postal_code')
                        <div class="form__error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form__group">
                    <label for="city" class="form__label">Ville</label>

                    <input id="city" type="text" name="city" value="{{ old('city') }}" class="form__input">

                    @error('city')
                        <div class="form__error">{{ $message }}</div>
                    @enderror
                </div>

            </div>

            <div class="form__actions">
                <button type="submit" class="btn">
                    Valider
                </button>
            </div>

        </form>
    </div>

</x-layouts.app>
