<x-layouts.app>
    <x-slot:title>
        Créer un taux de TVA
    </x-slot:title>

    <header class="main__header header">
        <h1 class="header__title">Créer un taux de TVA</h1>
        <x-buttons.link type="back" :href="route('vat-rates.index')">
            Retour aux taux de TVA
        </x-buttons.link>
    </header>

    <div class="main__content">
        <form class="form" method="POST" action="{{ route('vat-rates.store') }}" enctype="multipart/form-data">
            @csrf

            <x-forms.input name="code" label="Code" required />

            <x-forms.input name="label" label="Libellé" required />

            <x-forms.input name="rate" label="Taux" type="number" step="0.01" min="0" max="999.99"
                placeholder="20.00" required/>

            <x-forms.submit label="Créer" />

        </form>
    </div>

</x-layouts.app>
