<x-layouts.app>
    <x-slot:title>
        Types de projet
    </x-slot:title>

    <header class="main__header header">
        <h1 class="header__title">Types de projet</h1>
        <a href="{{ route('project-types.create') }}" class="link btn">
            <i class="link__icon fa-solid fa-plus"></i>
            <span class="link__text">Créer un type de projet</span>
        </a>
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
                                <button type="button" onclick="openModal(this.form)">
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

    <dialog class="modal" id="confirmDelete">
        <p>Supprimer ce type de projet ?</p>
        <div class="modal__buttons">
            <button class="btn" id="cancel">Annuler</button>
            <button class="btn" id="confirm">Supprimer</button>
        </div>
    </dialog>

    @push('scripts')
        <script>
            function openModal(form) {
                const dialog = document.getElementById('confirmDelete');

                dialog.showModal();

                dialog.querySelector('#confirm').onclick = () => form.submit();
                dialog.querySelector('#cancel').onclick = () => dialog.close();
            }
        </script>
    @endpush

</x-layouts.app>
