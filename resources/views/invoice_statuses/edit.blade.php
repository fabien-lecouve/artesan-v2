<x-layouts.app>
    <x-slot:title>
        Modifier un statut de facture
    </x-slot:title>

    <header class="main__header header">
        <h1 class="header__title">Modifier un statut de facture</h1>
        <a href="{{ route('invoice-statuses.index') }}" class="link btn">
            <i class="link__icon fa-solid fa-arrow-left"></i>
            <span class="link__text">Retour aux statuts de facture</span>
        </a>
    </header>

    <div class="main__content">
        <form class="form" method="POST" action="{{ route('invoice-statuses.update', ['invoiceStatus => $invoiceStatus']) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form__group">
                <label class="form__label" for="code">Code<span class="required_field">*</span></label>

                <input class="form__input" id="code" type="text" name="code" value="{{ old('code', $invoiceStatus->code) }}">

                @error('code')
                    <div class="form__error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form__group">
                <label class="form__label" for="label">Libellé<span class="required_field">*</span></label>

                <input class="form__input" id="label" type="text" name="label" value="{{ old('label', $invoiceStatus->label) }}">

                @error('label')
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
