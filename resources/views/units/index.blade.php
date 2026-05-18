<x-layouts.app>
    <x-slot:title>
        Unités
    </x-slot:title>

    <header class="main__header header">
        <h1 class="header__title">Unités</h1>
        <x-buttons.link type="add" :href="route('units.create')">
            Créer une unité
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

                @foreach ($units as $unit)
                    <tr class="table__row">
                        <td class="table__cell">{{ $unit->code }}</td>
                        <td class="table__cell">{{ $unit->label }}</td>
                        <td class="table__cell table__actions">
                            <a href="{{ route('units.show', $unit) }}">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                            <a href="{{ route('units.edit', $unit) }}">
                                <i class="fa-solid fa-pen"></i>
                            </a>
                            <form method="POST" action="{{ route('units.destroy', $unit) }}">
                                @csrf
                                @method('DELETE')
                                <button type="button" onclick="openModal('confirmDelete', () => this.form.submit())">
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>

    <x-modals.confirm id="confirmDelete" title="Supprimer cette unité ?" />

</x-layouts.app>
