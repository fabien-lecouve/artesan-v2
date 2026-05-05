<x-layouts.app>
    <x-slot:title>
        Certificats
    </x-slot:title>

    <header class="main__header header">
        <h1 class="header__title">Certificats</h1>
        <a href="{{ route('certificates.create') }}" class="link btn">
            <i class="link__icon fa-solid fa-plus"></i>
            <span class="link__text">Créer un certificat</span>
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

                @foreach ($certificates as $certificate)
                    <tr class="table__row">
                        <td class="table__cell">{{ $certificate->code }}</td>
                        <td class="table__cell">{{ $certificate->label }}</td>
                        <td class="table__cell table__actions">
                            <a href="{{ route('certificates.show', $certificate) }}">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                        @can('update', $certificate)
                            <a href="{{ route('certificates.edit', $certificate) }}">
                                <i class="fa-solid fa-pen"></i>
                            </a>
                        @endcan

                        @can('delete', $certificate)
                            <form method="POST" action="{{ route('certificates.destroy', $certificate) }}">
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
        <p>Supprimer ce certificat ?</p>
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
