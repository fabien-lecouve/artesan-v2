<x-layouts.app>
    <x-slot:title>
        Créer une méthode de paiement
    </x-slot:title>

    <header class="main__header header">
        <h1 class="header__title">Créer une méthode de paiement</h1>
        <x-buttons.link type="back" :href="route('payment-methods.index')">
            Retour aux méthodes de paiement
        </x-buttons.link>
    </header>

    <div class="main__content">
        <form class="form" method="POST" action="{{ route('payment-methods.store') }}" enctype="multipart/form-data">
            @csrf

            <x-forms.input name="code" label="Code" required />

            <x-forms.input name="label" label="Libellé" required />

            <x-forms.submit label="Créer" />

        </form>
    </div>

</x-layouts.app>
