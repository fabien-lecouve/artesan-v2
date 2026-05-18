<x-layouts.app>
    <x-slot:title>
        Créer un type de projet
    </x-slot:title>

    <header class="main__header header">
        <h1 class="header__title">Créer un type de projet</h1>
        <x-buttons.link type="back" :href="route('project-types.index')">
            Retour aux types de projet
        </x-buttons.link>
    </header>

    <div class="main__content">
        <form class="form" method="POST" action="{{ route('project-types.store') }}" enctype="multipart/form-data">
            @csrf

            <x-forms.input name="code" label="Code" required />

            <x-forms.input name="label" label="Libellé" required />

            <x-forms.submit label="Créer" />

        </form>
    </div>

</x-layouts.app>
