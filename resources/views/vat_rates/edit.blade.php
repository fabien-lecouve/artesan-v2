<x-layouts.app>
    <x-slot:title>
        Modifier un taux de TVA
    </x-slot:title>

    <header class="main__header header">
        <h1 class="header__title">Modifier un taux de TVA</h1>
        <x-buttons.link type="back" :href="route('vat-rates.index')">
            Retour aux taux de TVA
        </x-buttons.link>
    </header>

    <div class="main__content">
        <form class="form" method="POST" action="{{ route('vat-rates.update', ['vatRate => $vatRate']) }}"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <x-forms.input name="code" label="Code" :value="$vatRate->code" required />

            <x-forms.input name="label" label="Libellé" :value="$vatRate->label" required />

            <x-forms.input name="rate" label="Taux" type="number" step="0.01" min="0" max="999.99"
                placeholder="20.00" :value="$vatRate->rate" required />

            <x-forms.submit label="Enregistrer" />

        </form>
    </div>

</x-layouts.app>
