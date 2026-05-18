<x-layouts.app>
    <x-slot:title>
        Modifier un taux de tva
    </x-slot:title>

    <header class="main__header header">
        <h1 class="header__title">Modifier un taux de tva</h1>
        <a href="{{ route('vat-rates.index') }}" class="link btn">
            <i class="link__icon fa-solid fa-arrow-left"></i>
            <span class="link__text">Retour aux taux de tva</span>
        </a>
    </header>

    <div class="main__content">
        <form class="form" method="POST" action="{{ route('vat-rates.update', ['vatRate => $vatRate']) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form__group">
                <label class="form__label" for="code">Code<span class="required_field">*</span></label>

                <input class="form__input" id="code" type="text" name="code" value="{{ old('code', $vatRate->code) }}">

                @error('code')
                    <div class="form__error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form__group">
                <label class="form__label" for="label">Libellé<span class="required_field">*</span></label>

                <input class="form__input" id="label" type="text" name="label" value="{{ old('label', $vatRate->label) }}">

                @error('label')
                    <div class="form__error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form__group">
                <label class="form__label" for="rate">Taux<span class="required_field">*</span></label>

                <input class="form__input" id="rate" type="number" name="rate" step="0.01" min="0" max="999.99" value="{{ old('rate', $vatRate->rate) }}">

                @error('rate')
                    <div class="form__error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form__actions">
                <div>
                    <span class="required_field">*</span>
                    <small>champs requis</small>
                </div>
                <button class="btn" type="submit">
                    Enregistrer
                </button>
            </div>

        </form>
    </div>

</x-layouts.app>
