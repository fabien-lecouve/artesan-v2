<x-layouts.app>
    <x-slot:title>
        Modifier une unité
    </x-slot:title>

    <header class="main__header header">
        <h1 class="header__title">Modifier une unité</h1>
        <x-buttons.link type="back" :href="route('units.index')">
            Retour aux unités
        </x-buttons.link>
    </header>

    <div class="main__content">
        <form class="form" method="POST" action="{{ route('units.update', ['unit => $unit']) }}"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <x-forms.input name="code" label="Code" :value="$unit->code" required />

            <x-forms.input name="label" label="Libellé" :value="$unit->label" required />

            <x-forms.submit label="Enregistrer" />

        </form>
    </div>

</x-layouts.app>
