<x-layouts.app>
    <x-slot:title>
        Statuts du devis
    </x-slot:title>

    <header class="main__header header">
        <h1 class="header__title">Statuts du devis</h1>
        <a href="{{ route('estimate-statuses.create') }}" class="link btn">
            <i class="link__icon fa-solid fa-plus"></i>
            <span class="link__text">Créer un statut du devis</span>
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
        <p>Supprimer ce statut du devis ?</p>
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
