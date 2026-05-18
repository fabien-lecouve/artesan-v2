@props([
    'id',
    'title',
])

<dialog class="modal" id="{{ $id }}">
    <p>{{ $title }}</p>

    <div class="modal__buttons">
        <button
            class="btn"
            type="button"
            data-action="cancel"
        >
            Annuler
        </button>

        <button
            class="btn"
            type="button"
            data-action="confirm"
        >
            Confirmer
        </button>
    </div>
</dialog>