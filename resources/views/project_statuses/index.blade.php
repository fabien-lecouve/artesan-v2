<x-layouts.app>
    <x-slot:title>
        Statuts de projet
    </x-slot:title>

    <header class="main__header header">
        <h1 class="header__title">Statuts de projet</h1>
        <x-buttons.link type="add" :href="route('project-statuses.create')">
            Créer un statut de projet
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

                @foreach ($projectStatuses as $projectStatus)
                    <tr class="table__row">
                        <td class="table__cell">{{ $projectStatus->code }}</td>
                        <td class="table__cell">{{ $projectStatus->label }}</td>
                        <td class="table__cell table__actions">
                            <a href="{{ route('project-statuses.show', $projectStatus) }}">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                            @can('update', $projectStatus)
                                <a href="{{ route('project-statuses.edit', $projectStatus) }}">
                                    <i class="fa-solid fa-pen"></i>
                                </a>
                            @endcan

                            @can('delete', $projectStatus)
                                <form method="POST" action="{{ route('project-statuses.destroy', $projectStatus) }}">
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

    <x-modals.confirm id="confirmDelete" title="Supprimer ce statut de projet ?" />

</x-layouts.app>
