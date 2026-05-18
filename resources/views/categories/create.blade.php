<x-layouts.app>
    <x-slot:title>
        Créer une catégorie
    </x-slot:title>

    <header class="main__header header">
        <h1 class="header__title">Créer une catégorie</h1>
        <x-buttons.link type="back" :href="route('categories.index')">
            Retour aux catégories
        </x-buttons.link>
    </header>

    <div class="main__content">
        <form class="form" method="POST" action="{{ route('categories.store') }}" enctype="multipart/form-data">
            @csrf

            <x-forms.input name="code" label="Code" required />

            <x-forms.input name="label" label="Libellé" required />

            <x-forms.submit label="Créer" />

        </form>
    </div>

</x-layouts.app>
