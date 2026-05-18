<x-layouts.app>
    <x-slot:title>
        Modifier un type de facture
    </x-slot:title>

    <header class="main__header header">
        <h1 class="header__title">Modifier un type de facture</h1>
        <x-buttons.link type="back" :href="route('invoice-types.index')">
            Retour aux statuts de facture
        </x-buttons.link>
    </header>

    <div class="main__content">
        <form class="form" method="POST" action="{{ route('invoice-types.update', ['invoiceType => $invoiceType']) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <x-forms.input name="code" label="Code" :value="$invoiceType->code" required />

            <x-forms.input name="label" label="Libellé" :value="$invoiceType->label" required />

            <x-forms.submit label="Enregistrer" />

        </form>
    </div>

</x-layouts.app>
