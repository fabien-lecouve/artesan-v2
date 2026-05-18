<x-layouts.app>
    <x-slot:title>
        Créer une assurance
    </x-slot:title>

    <header class="main__header header">
        <h1 class="header__title">Créer une assurance</h1>
        <x-buttons.link type="back" :href="route('insurances.index')">
            Retour aux assurances
        </x-buttons.link>
    </header>

    <div class="main__content">
        <form class="form" method="POST" action="{{ route('insurances.store') }}">
            @csrf

            <x-forms.input name="name" label="Nom" required />

            <x-forms.input name="address" label="Adresse" />

            <div class="form__row">
                
                <x-forms.input name="postal_code" label="Code postal" />
                
                <x-forms.input name="city" label="Ville" />
                
            </div>
            
            <x-forms.submit label="Créer" />

        </form>
    </div>

</x-layouts.app>
