<x-layouts.app>
    <x-slot:title>
        Statuts de devis
    </x-slot:title>

    <header class="main__header header">
        <h1 class="header__title">Statuts de devis</h1>
        <x-buttons.link type="add" :href="route('estimate-statuses.create')">
            Créer un statut de devis
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

                @foreach ($estimateStatuses as $estimateStatus)
                    <tr class="table__row">
                        <td class="table__cell">{{ $estimateStatus->code }}</td>
                        <td class="table__cell">{{ $estimateStatus->label }}</td>
                        <td class="table__cell table__actions">
                            <a href="{{ route('estimate-statuses.show', $estimateStatus) }}">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                        @can('update', $estimateStatus)
                            <a href="{{ route('estimate-statuses.edit', $estimateStatus) }}">
                                <i class="fa-solid fa-pen"></i>
                            </a>
                        @endcan

                        @can('delete', $estimateStatus)
                            <form method="POST" action="{{ route('estimate-statuses.destroy', $estimateStatus) }}">
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

    <x-modals.confirm id="confirmDelete" title="Supprimer ce statut de devis ?" />

</x-layouts.app>
