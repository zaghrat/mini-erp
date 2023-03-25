$('#userProfileEditButton').on('click', function () {
    $.ajax({
        url: '/user/profile/edit',
        method: 'GET',
        success: function (data) {
            document.getElementById('userProfileEdit').innerHTML = data;
        },
        error: function (data) {
            console.log(data);
        }
    });
});


function sendPostRequest(form, e) {
    e.preventDefault();
    let $form = $(e.currentTarget);

    $.ajax({
        url: '/user/profile/edit',
        method: 'POST',
        data: $form.serialize(),
        success: function () {
            location.reload();
        },
        error: function (jqXHR) {
            document.getElementById('userProfileEdit').innerHTML = jqXHR.responseText;
        }
    });

    return false;
}
