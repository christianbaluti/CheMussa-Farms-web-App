$(document).ready(function() {
            $('#profileFormOne').on('submit', function(e) {
                e.preventDefault();
                $.ajax({
                    type: 'POST',
                    url: 'update_profile.php',
                    data: $(this).serialize(),
                    success: function(response) {
                        swal("Success", "Profile updated successfully!", "success");
                    },
                    error: function() {
                        swal("Error", "There was an error updating the profile.", "error");
                    }
                });
            });
        });