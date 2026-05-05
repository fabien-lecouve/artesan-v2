<x-layouts.app>
    <x-slot:title>
        Modifier une catégorie
    </x-slot:title>

    <header class="main__header header">
        <h1 class="header__title">Modifier une catégorie</h1>
        <a href="{{ route('categories.index') }}" class="link btn">
            <i class="link__icon fa-solid fa-arrow-left"></i>
            <span class="link__text">Retour aux catégories</span>
        </a>
    </header>

    <div class="main__content">
        <form class="form" method="POST" action="{{ route('categories.update', ['category => $category']) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form__group">
                <label class="form__label" for="code">Code<span class="required_field">*</span></label>

                <input class="form__input" id="code" type="text" name="code" value="{{ old('code', $category->code) }}">

                @error('code')
                    <div class="form__error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form__group">
                <label class="form__label" for="label">Libellé<span class="required_field">*</span></label>

                <input class="form__input" id="label" type="text" name="label" value="{{ old('label', $category->label) }}">

                @error('label')
                    <div class="form__error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form__group">
                <label class="form__label" for="logo_path">Logo</label>

                <input class="form__input" id="logo_path" type="file" name="logo_path" value="{{ old('logo_path', $category->logo_path) }}">

                @error('logo_path')
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
