<x-layouts.app>
    <x-slot:title>
        Taux de TVA
    </x-slot:title>

    <header class="main__header header">
        <h1 class="header__title">Taux de TVA</h1>
        <x-buttons.link type="add" :href="route('vat-rates.create')">
            Créer un taux de TVA
        </x-buttons.link>
    </header>

    <div class="main__content">
        <table class="table">
            <thead class="table__head">
                <tr class="table__row">
                    <th class="table__cell">Code</th>
                    <th class="table__cell">Label</th>
                    <th class="table__cell">Taux</th>
                    <th class="table__cell"></th>
                </tr>
            </thead>

            <tbody class="table__body">

                @foreach ($vatRates as $vatRate)
                    <tr class="table__row">
                        <td class="table__cell">{{ $vatRate->code }}</td>
                        <td class="table__cell">{{ $vatRate->label }}</td>
                        <td class="table__cell">{{ $vatRate->rate }}</td>
                        <td class="table__cell table__actions">
                            <a href="{{ route('vat-rates.show', $vatRate) }}">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                        @can('update', $vatRate)
                            <a href="{{ route('vat-rates.edit', $vatRate) }}">
                                <i class="fa-solid fa-pen"></i>
                            </a>
                        @endcan

                        @can('delete', $vatRate)
                            <form method="POST" action="{{ route('vat-rates.destroy', $vatRate) }}">
                                @csrf
                                @method('DELETE')
                                <button type="button" onclick="openModal('confirmDelete', () => this.form.submit())">
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>
                            </form>
                        @endcan
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>

    <x-modals.confirm id="confirmDelete" title="Supprimer ce taux de TVA ?" />

</x-layouts.app>
