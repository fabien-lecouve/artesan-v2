<x-layouts.app>
    <x-slot:title>
        Modifier assurance {{ $insurance->name }}
    </x-slot:title>

    <header class="main__header header">
        <h1 class="header__title">Modifier assurance {{ $insurance->name }}</h1>
        <x-buttons.link type="back" :href="route('insurances.index')">
            Retour aux assurances
        </x-buttons.link>
    </header>

    <div class="main__content">
        <form class="form" method="POST" action="{{ route('insurances.update', ['insurance' => $insurance]) }}">
            @csrf
            @method('PUT')

            <x-forms.input name="name" label="Nom" :value="$insurance->name" required />

            <x-forms.input name="address" label="Adresse" :value="$insurance->address" />

            <div class="form__row">
                
                <x-forms.input name="postal_code" label="Code postal" :value="$insurance->postal_code" />
                
                <x-forms.input name="city" label="Ville" :value="$insurance->city" />
                
            </div>

            <x-forms.submit label="Enregistrer" />
        </form>
    </div>

</x-layouts.app>
