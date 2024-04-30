
    $(document).ready(function() {
        $('#searchForm').submit(function(event) {
            event.preventDefault();

            var formData = $(this).serialize();

            $.ajax({
                type: 'POST',
                url: $(this).attr('action'),
                data: formData,
                success: function(response) {
                    $('#searchResults').html(response);
                    $('#announcementGrid').hide();
                    $('#title').hide();

                    $('#searchResults').html(response).show();
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });
    });