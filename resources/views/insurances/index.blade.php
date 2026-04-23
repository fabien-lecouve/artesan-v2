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
                </tr>
            </thead>

            <tbody class="table__body">

                @foreach ($insurances as $insurance)
                    <tr class="table__row">
                        <td class="table__cell">{{ $insurance->name }}</td>
                        <td class="table__cell">{{ $insurance->address ?? '-' }}</td>
                        <td class="table__cell">{{ $insurance->postal_code ?? '-' }}</td>
                        <td class="table__cell">{{ $insurance->city ?? '-' }}</td>

                        <td class="table__cell table__actions">
                            <a href="{{ route('insurances.show', $insurance) }}"><i class="fa-solid fa-eye"></i></a>
                            <a href="{{ route('insurances.edit', $insurance) }}"><i class="fa-solid fa-pen"></i></a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>

</x-layouts.app>
