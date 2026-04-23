<x-layouts.app>
    <x-slot:title>
        Modifier une assurance
    </x-slot:title>

    <header>
        <h1>Créer une assurance</h1>
    </header>


    <form method="POST" action="{{ route('insurances.update', ['insurance' => $insurance]) }}">
        @csrf
        @method('PUT')

        <div>
            <label for="name">Nom</label>
            <input
                id="name"
                type="text"
                name="name"
                value="{{ old('name') }}"
               
            />
            @error('name')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="address">Adresse</label>
            <input
                id="address"
                type="text"
                name="address"
                value="{{ old('address') }}"
               
            />
            @error('address')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="postal_code">Code postal</label>
            <input
                id="postal_code"
                type="text"
                name="postal_code"
                value="{{ old('postal_code') }}"
               
            />
            @error('postal_code')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="city">Ville</label>
            <input
                id="city"
                type="text"
                name="city"
                value="{{ old('city') }}"
               
            />
            @error('city')
                <div>{{ $message }}</div>
            @enderror
        </div>
    
        <div>
            <button type="submit">
                Valider
            </button>
        </div>
    </form>
</x-layouts.app>
