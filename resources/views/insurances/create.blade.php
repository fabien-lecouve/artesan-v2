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
        <form class="form" method="POST" action="{{ route('insurances.store') }}">
            @csrf

            <div class="form__group">
                <label class="form__label" for="name">Nom<span class="required_field">*</span></label>

                <input class="form__input" id="name" type="text" name="name" value="{{ old('name') }}">

                @error('name')
                    <div class="form__error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form__group">
                <label class="form__label" for="address">Adresse</label>

                <input class="form__input" id="address" type="text" name="address" value="{{ old('address') }}">

                @error('address')
                    <div class="form__error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form__row">

                <div class="form__group">
                    <label class="form__label" for="postal_code">Code postal</label>

                    <input class="form__input" id="postal_code" type="text" name="postal_code"
                        value="{{ old('postal_code') }}">

                    @error('postal_code')
                        <div class="form__error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form__group">
                    <label class="form__label" for="city">Ville</label>

                    <input class="form__input" id="city" type="text" name="city" value="{{ old('city') }}">

                    @error('city')
                        <div class="form__error">{{ $message }}</div>
                    @enderror
                </div>

            </div>

            <div class="form__actions">
                <div>
                    <span class="required_field">*</span>
                    <small>champs requis</small>
                </div>
                <button class="btn" type="submit">
                    Créer
                </button>
            </div>

        </form>
    </div>

</x-layouts.app>
