
    $(document).ready(function () {
        $('#applyButton').click(function (event) {
            event.preventDefault(); // Empêche le comportement par défaut du bouton submit

            var form = $('#adoptionForm');
            var formData = form.serialize(); // Récupère les données du formulaire

            $.ajax({
                type: 'POST',
                url: form.attr('action'),
                data: formData,
                success: function (data) {
                    // Mettez à jour l'interface utilisateur pour refléter que la demande a été envoyée avec succès
                    $('#applyButton').html(`
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                            <path
                                d="M4 21h1V8H4a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2zM20 8h-7l1.122-3.368A2 2 0 0 0 12.225 2H12L7 7.438V21h11l3.912-8.596L22 12v-2a2 2 0 0 0-2-2z">
                            </path>
                        </svg>
                        <span>Applied</span>
                 `);
                },
                error: function (xhr, status, error) {
                    console.error(xhr.responseText);
                    // Gérer les erreurs ici
                }
            });
        });
    });