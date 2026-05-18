<x-layouts.app>
    <x-slot:title>
        Modifier une méthode de paiement
    </x-slot:title>

    <header class="main__header header">
        <h1 class="header__title">Modifier une méthode de paiement</h1>
        <x-buttons.link type="back" :href="route('payment-methods.index')">
            Retour aux méthodes de paiement
        </x-buttons.link>
    </header>

    <div class="main__content">
        <form class="form" method="POST" action="{{ route('payment-methods.update', ['paymentMethod => $paymentMethod']) }}"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <x-forms.input name="code" label="Code" :value="$paymentMethod->code" required />

            <x-forms.input name="label" label="Libellé" :value="$paymentMethod->label" required />

            <x-forms.submit label="Enregistrer" />

        </form>
    </div>

</x-layouts.app>
