<x-layouts.app>
    <x-slot:title>
        Modifier un statut du devis
    </x-slot:title>

    <header class="main__header header">
        <h1 class="header__title">Modifier un statut du devis</h1>
        <a href="{{ route('estimateStatuses.index') }}" class="link btn">
            <i class="link__icon fa-solid fa-arrow-left"></i>
            <span class="link__text">Retour aux statuts du devis</span>
        </a>
    </header>

    <div class="main__content">
        <form class="form" method="POST" action="{{ route('estimateStatuses.update', ['estimateStatus => $estimateStatus']) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form__group">
                <label class="form__label" for="code">Code<span class="required_field">*</span></label>

                <input class="form__input" id="code" type="text" name="code" value="{{ old('code', $estimateStatus->code) }}">

                @error('code')
                    <div class="form__error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form__group">
                <label class="form__label" for="label">Libellé<span class="required_field">*</span></label>

                <input class="form__input" id="label" type="text" name="label" value="{{ old('label', $estimateStatus->label) }}">

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
