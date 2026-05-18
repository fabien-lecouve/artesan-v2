window.openModal = function (id, callback) {
    const dialog = document.getElementById(id);

    dialog.showModal();

    dialog.querySelector('[data-action="confirm"]').onclick = () => {
        callback();
        dialog.close();
    };

    dialog.querySelector('[data-action="cancel"]').onclick = () => {
        dialog.close();
    };
};