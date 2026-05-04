<x-layouts.app>
    <x-slot:title>
        Modifier assurance {{ $insurance->name }}
    </x-slot:title>

    <header class="main__header header">
        <h1 class="header__title">Modifier assurance {{ $insurance->name }}</h1>
        <a href="{{ route('insurances.index') }}" class="link btn">
            <i class="link__icon fa-solid fa-arrow-left"></i>
            <span class="link__text">Retour aux assurances</span>
        </a>
    </header>

    <div class="main__content">
        <form class="form" method="POST" action="{{ route('insurances.update', ['insurance' => $insurance]) }}">
            @csrf
            @method('PUT')

            <div class="form__group">
                <label class="form__label" for="name">Nom<span class="required_field">*</span></label>
                <input class="form__input" id="name" type="text" name="name" value="{{ old('name', $insurance->name) }}" />
                @error('name')
                    <div class="form__error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form__group">
                <label class="form__label" for="address">Adresse</label>
                <input class="form__input" id="address" type="text" name="address" value="{{ old('address', $insurance->address) }}" />
                @error('address')
                    <div class="form__error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form__row">
                <div class="form__group">
                    <label class="form__label" for="postal_code">Code postal</label>
                    <input class="form__input" id="postal_code" type="text" name="postal_code"
                        value="{{ old('postal_code', $insurance->postal_code) }}" />
                    @error('postal_code')
                        <div class="form__error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form__group">
                    <label class="form__label" for="city">Ville</label>
                    <input class="form__input" id="city" type="text" name="city" value="{{ old('city', $insurance->city) }}" />
                    @error('city')
                        <div class="form__error">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="form__actions">
                <p><span class="required_field">*</span>champs requis</p>
                <button type="submit" class="btn">
                    Enregistrer
                </button>
            </div>
        </form>
    </div>

</x-layouts.app>
