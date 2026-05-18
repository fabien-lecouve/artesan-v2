<x-layouts.app>
    <x-slot:title>
        Méthode de paiement
    </x-slot:title>

    <header class="main__header header">
        <h1 class="header__title">Méthode de paiement</h1>
        <x-buttons.link type="add" :href="route('payment-methods.create')">
            Créer une méthode de paiement
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

                @foreach ($paymentMethods as $paymentMethod)
                    <tr class="table__row">
                        <td class="table__cell">{{ $paymentMethod->code }}</td>
                        <td class="table__cell">{{ $paymentMethod->label }}</td>
                        <td class="table__cell table__actions">
                            <a href="{{ route('payment-methods.show', $paymentMethod) }}">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                            <a href="{{ route('payment-methods.edit', $paymentMethod) }}">
                                <i class="fa-solid fa-pen"></i>
                            </a>
                            <form method="POST" action="{{ route('payment-methods.destroy', $paymentMethod) }}">
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

    <x-modals.confirm id="confirmDelete" title="Supprimer cette méthode de paiement ?" />

</x-layouts.app>
