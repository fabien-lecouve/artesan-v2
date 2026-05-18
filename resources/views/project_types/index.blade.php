<x-layouts.app>
    <x-slot:title>
        Types de projet
    </x-slot:title>

    <header class="main__header header">
        <h1 class="header__title">Types de projet</h1>
        <x-buttons.link type="add" :href="route('project-types.create')">
            Créer un type de projet
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

                @foreach ($projectTypes as $projectType)
                    <tr class="table__row">
                        <td class="table__cell">{{ $projectType->code }}</td>
                        <td class="table__cell">{{ $projectType->label }}</td>
                        <td class="table__cell table__actions">
                            <a href="{{ route('project-types.show', $projectType) }}">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                            @can('update', $projectType)
                                <a href="{{ route('project-types.edit', $projectType) }}">
                                    <i class="fa-solid fa-pen"></i>
                                </a>
                            @endcan

                            @can('delete', $projectType)
                                <form method="POST" action="{{ route('project-types.destroy', $projectType) }}">
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

    <x-modals.confirm id="confirmDelete" title="Supprimer ce type de projet ?" />

</x-layouts.app>
