<x-layouts.app>
    <x-slot:title>
        Modifier une pièce
    </x-slot:title>

    <header class="main__header header">
        <h1 class="header__title">Modifier une pièce</h1>
        <x-buttons.link type="back" :href="route('rooms.index')">
            Retour aux catégories
        </x-buttons.link>
    </header>

    <div class="main__content">
        <form class="form" method="POST" action="{{ route('rooms.update', ['room => $room']) }}"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <x-forms.input name="code" label="Code" :value="$room->code" required />

            <x-forms.input name="label" label="Libellé" :value="$room->label" required />

            <x-forms.submit label="Enregistrer" />

        </form>
    </div>

</x-layouts.app>
