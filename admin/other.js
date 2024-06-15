$(document).ready(function() {
    // Image upload
    $('#insertImageBtn').click(function() {
        $('#imageInput').click();
    });

    $('#imageInput').change(function() {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#aboutImage').attr('src', e.target.result);
        }
        reader.readAsDataURL(this.files[0]);
    });

    // Generic form submission handler
    function handleFormSubmission(formSelector, url) {
        $(formSelector).on('submit', function(e) {
            e.preventDefault();
            var formData = new FormData(this);

            $.ajax({
                url: url,
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: 'Details posted successfully.',
                    }).then(function() {
                        location.reload(); // Reload the page
                    });
                    console.log(response);  // Debugging: log server response
                },
                error: function(xhr, status, error) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        text: 'There was an error saving your details.',
                    });
                    console.log(xhr.responseText);  // Debugging: log error response
                }
            });
        });
    }

    // Generic edit button handler
    function handleEditButtonClick(buttonSelector, formSelector, fieldMapping) {
        $(document).on('click', buttonSelector, function() {
            var row = $(this).closest('tr');

            for (const [fieldId, dataAttr] of Object.entries(fieldMapping)) {
                $(`#${fieldId}`).val(row.data(dataAttr));
            }

            $(formSelector).find('input, textarea, button').prop('disabled', false);
        });
    }

    // Form submissions
    handleFormSubmission('#aboutForm', 'about.post.php');
    handleFormSubmission('#aboutHomeForm', 'about.home.post.php');
    handleFormSubmission('#aboutStatementForm', 'about.statement.post.php');
    handleFormSubmission('#theParagraph', 'paragraph.php');
    handleFormSubmission('#service1', 'service1.php');
    handleFormSubmission('#service2', 'service2.php');
    handleFormSubmission('#service3', 'service3.php');
    handleFormSubmission('#service4', 'video.php');

    // Edit button clicks
    handleEditButtonClick('.edit-btn', '#aboutForm', {
        statement1: 'sentence1',
        title: 'title',
        subTitle: 'subtitle',
        details: 'maintext',
        aboutImage: 'mainimage'
    });

    handleEditButtonClick('.edit2-btn', '#aboutHomeForm', {
        name: 'name',
        id: 'id',
        second_text: 'second_text',
        paragraph: 'paragraph'
    });

    handleEditButtonClick('.edit3-btn', '#aboutStatementForm', {
        statement22: 'statement22',
        id22: 'id22',
        italized_text22: 'italized_text22',
        main_text22: 'main_text22'
    });

    handleEditButtonClick('.edit4-btn', '#theParagraph', {
        name222: 'name222',
        id222: 'id222',
        main_text222: 'main_text222'
    });

    handleEditButtonClick('.edit5-btn', '#service1', {
        name2222: 'name2222',
        id2222: 'id2222',
        main_text2222: 'main_text2222'
    });

    handleEditButtonClick('.edit6-btn', '#service2', {
        name22222: 'name22222',
        id22222: 'id22222',
        main_text22222: 'main_text22222'
    });

    handleEditButtonClick('.edit7-btn', '#service3', {
        name222222: 'name222222',
        id222222: 'id222222',
        main_text222222: 'main_text222222'
    });

    handleEditButtonClick('.edit8-btn', '#service4', {
        name2222222: 'name2222222',
        id2222222: 'id2222222',
        main_text2222222: 'main_text2222222',
        iframe2222222: 'iframe2222222',
        italized_text2222222: 'italized_text2222222'
    });
});
