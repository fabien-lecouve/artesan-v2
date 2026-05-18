<x-layouts.app>
    <x-slot:title>
        Modifier un certificat
    </x-slot:title>

    <header class="main__header header">
        <h1 class="header__title">Modifier un certificat</h1>
        <x-buttons.link type="back" :href="route('certificates.index')">
            Retour aux certificats
        </x-buttons.link>
    </header>

    <div class="main__content">
        <form class="form" method="POST" action="{{ route('certificates.update', ['certificate => $certificate']) }}"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <x-forms.input name="code" label="Code" :value="$certificate->code" required />

            <x-forms.input name="label" label="Libellé" :value="$certificate->label" required />

            <div class="form__group">
                <label class="form__label" for="logo_path">Logo</label>

                <input class="form__input" id="logo_path" type="file" name="logo_path"
                    value="{{ old('logo_path', $certificate->logo_path) }}">

                @error('logo_path')
                    <div class="form__error">{{ $message }}</div>
                @enderror
            </div>

            <x-forms.submit label="Enregistrer" />

        </form>
    </div>

</x-layouts.app>
