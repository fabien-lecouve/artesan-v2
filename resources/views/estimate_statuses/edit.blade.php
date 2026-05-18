<x-layouts.app>
    <x-slot:title>
        Modifier un statut du devis
    </x-slot:title>

    <header class="main__header header">
        <h1 class="header__title">Modifier un statut du devis</h1>
        <x-buttons.link type="back" :href="route('estimate-statuses.index')">
            Retour aux statuts de devis
        </x-buttons.link>
    </header>

    <div class="main__content">
        <form class="form" method="POST" action="{{ route('estimate-statuses.update', ['estimateStatus => $estimateStatus']) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <x-forms.input name="code" label="Code" :value="$estimateStatus->code" required />

            <x-forms.input name="label" label="Libellé" :value="$estimateStatus->label" required />

            <x-forms.submit label="Enregistrer" />

        </form>
    </div>

</x-layouts.app>
