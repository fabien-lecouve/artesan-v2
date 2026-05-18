<x-layouts.app>
    <x-slot:title>
        Certificats
    </x-slot:title>

    <header class="main__header header">
        <h1 class="header__title">Certificats</h1>
        <x-buttons.link type="add" :href="route('certificates.create')">
            Créer un certificat
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

    <x-modals.confirm id="confirmDelete" title="Supprimer ce certificat ?" />

</x-layouts.app>
