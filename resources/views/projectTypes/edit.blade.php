<x-layouts.app>
    <x-slot:title>
        Modifier un type de projet
    </x-slot:title>

    <header class="main__header header">
        <h1 class="header__title">Modifier un type de projet</h1>
        <a href="{{ route('projectTypes.index') }}" class="link btn">
            <i class="link__icon fa-solid fa-arrow-left"></i>
            <span class="link__text">Retour aux types de projet</span>
        </a>
    </header>

    <div class="main__content">
        <form class="form" method="POST" action="{{ route('projectTypes.update', ['projectType => $projectType']) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form__group">
                <label class="form__label" for="code">Code<span class="required_field">*</span></label>

                <input class="form__input" id="code" type="text" name="code" value="{{ old('code', $projectType->code) }}">

                @error('code')
                    <div class="form__error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form__group">
                <label class="form__label" for="label">Libellé<span class="required_field">*</span></label>

                <input class="form__input" id="label" type="text" name="label" value="{{ old('label', $projectType->label) }}">

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
