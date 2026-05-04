<x-layouts.app>
    <x-slot:title>
        Assurances
    </x-slot:title>

    <header class="main__header header">
        <h1 class="header__title">Assurances</h1>
        <a href="{{ route('insurances.create') }}" class="link btn">
            <i class="link__icon fa-solid fa-plus"></i>
            <span class="link__text">Créer une assurance</span>
        </a>
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
                                        <button type="button" onclick="openModal(this.form)">
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

    <dialog class="modal" id="confirmDelete">
        <p>Supprimer cette assurance ?</p>
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
