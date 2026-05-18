<x-layouts.app>
    <x-slot:title>
        Créer un certificat
    </x-slot:title>

    <header class="main__header header">
        <h1 class="header__title">Créer un certificat</h1>
        <x-buttons.link type="back" :href="route('certificates.index')">
            Retour aux certificats
        </x-buttons.link>
    </header>

    <div class="main__content">
        <form class="form" method="POST" action="{{ route('certificates.store') }}" enctype="multipart/form-data">
            @csrf

            <x-forms.input name="code" label="Code" required />

            <x-forms.input name="label" label="Libellé" required />

            <div class="form__group">
                <label class="form__label" for="logo_path">Logo</label>
                
                <input class="form__input" id="logo_path" type="file" name="logo_path" value="{{ old('logo_path') }}">
                
                @error('logo_path')
                <div class="form__error">{{ $message }}</div>
                @enderror
            </div>
            
            <x-forms.submit label="Créer" />

        </form>
    </div>

</x-layouts.app>
