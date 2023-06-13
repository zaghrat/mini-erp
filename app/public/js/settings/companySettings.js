$('#companySettingsEditButton').on('click', function (e) {
    $.ajax({
        url: '/general/settings/edit',
        method: 'GET',
        success: function (data) {
            document.getElementById('companySettingsEdit').innerHTML = data;
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
        url: $form.attr('action'),
        method: 'POST',
        data: $form.serialize(),
        success: function () {
            location.reload();
        },
        error: function (jqXHR) {
            document.getElementById('companySettingsEdit').innerHTML = jqXHR.responseText;
        }
    });

    return false;
}
