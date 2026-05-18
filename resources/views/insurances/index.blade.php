<x-layouts.app>
    <x-slot:title>
        Assurances
    </x-slot:title>

    <header class="main__header header">
        <h1 class="header__title">Assurances</h1>
        <x-buttons.link type="add" :href="route('insurances.create')">
            Créer une assurance
        </x-buttons.link>
    </header>

    <div class="main__content">
        <table class="table">
            <thead class="table__head">
                <tr class="table__row">
                    <th class="table__cell">Nom</th>
                    <th class="table__cell">Adresse</th>
                    <th class="table__cell">Code postal</th>
                    <th class="table__cell">Ville</th>
                    @can('viewAny', App\Models\Insurance::class)
                        <th class="table__cell"></th>
                    @endcan
                </tr>
            </thead>

            <tbody class="table__body">

                @foreach ($insurances as $insurance)
                    <tr class="table__row">
                        <td class="table__cell">{{ $insurance->name }}</td>
                        <td class="table__cell">{{ $insurance->address ?? '-' }}</td>
                        <td class="table__cell">{{ $insurance->postal_code ?? '-' }}</td>
                        <td class="table__cell">{{ $insurance->city ?? '-' }}</td>
                        @canany(['update', 'delete'], $insurance)
                            <td class="table__cell table__actions">
                                @can('update', $insurance)
                                    <a href="{{ route('insurances.edit', $insurance) }}">
                                        <i class="fa-solid fa-pen"></i>
                                    </a>
                                @endcan

                                @can('delete', $insurance)
                                    <form method="POST" action="{{ route('insurances.destroy', $insurance) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" onclick="openModal('confirmDelete', () => this.form.submit())">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </button>
                                    </form>
                                @endcan
                            </td>
                        @endcanany
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>

    <x-modals.confirm id="confirmDelete" title="Supprimer cette assurance ?" />

</x-layouts.app>
