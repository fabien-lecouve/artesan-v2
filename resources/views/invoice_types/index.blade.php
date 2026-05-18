<x-layouts.app>
    <x-slot:title>
        Types de facture
    </x-slot:title>

    <header class="main__header header">
        <h1 class="header__title">Types de facture</h1>
        <x-buttons.link type="add" :href="route('invoice-types.create')">
            Créer un type de facture
        </x-buttons.link>
    </header>

    <div class="main__content">
        <table class="table">
            <thead class="table__head">
                <tr class="table__row">
                    <th class="table__cell">Code</th>
                    <th class="table__cell">Label</th>
                    <th class="table__cell"></th>
                </tr>
            </thead>

            <tbody class="table__body">

                @foreach ($invoiceTypes as $invoiceType)
                    <tr class="table__row">
                        <td class="table__cell">{{ $invoiceType->code }}</td>
                        <td class="table__cell">{{ $invoiceType->label }}</td>
                        <td class="table__cell table__actions">
                            <a href="{{ route('invoice-types.show', $invoiceType) }}">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                            @can('update', $invoiceType)
                                <a href="{{ route('invoice-types.edit', $invoiceType) }}">
                                    <i class="fa-solid fa-pen"></i>
                                </a>
                            @endcan

                            @can('delete', $invoiceType)
                                <form method="POST" action="{{ route('invoice-types.destroy', $invoiceType) }}">
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

    <x-modals.confirm id="confirmDelete" title="Supprimer ce type de facture ?" />

</x-layouts.app>
