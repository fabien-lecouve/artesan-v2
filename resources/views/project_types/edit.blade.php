<x-layouts.app>
    <x-slot:title>
        Modifier un type de projet
    </x-slot:title>

    <header class="main__header header">
        <h1 class="header__title">Modifier un type de projet</h1>
        <x-buttons.link type="back" :href="route('project-types.index')">
            Retour aux statuts de projet
        </x-buttons.link>
    </header>

    <div class="main__content">
        <form class="form" method="POST" action="{{ route('project-types.update', ['projectType => $projectType']) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <x-forms.input name="code" label="Code" :value="$projectType->code" required />

            <x-forms.input name="label" label="Libellé" :value="$projectType->label" required />

            <x-forms.submit label="Enregistrer" />

        </form>
    </div>

</x-layouts.app>
