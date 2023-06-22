$('#addNewItemBtn').on('click', function (e) {
    $.ajax({
        url: '/settings/vat/new',
        method: 'GET',
        success: function (data) {
            document.getElementById('dialog').innerHTML = data;
        },
        error: function (data) {
            console.log(data);
        }
    });
});

function saveNewItem(form, e) {
    e.preventDefault();
    let $form = $(e.currentTarget);
    $.ajax({
        url: '/settings/vat/new',
        method: 'POST',
        data: $form.serialize(),
        success: function (data) {
            location.reload();
        },
        error: function (jqXHR) {
            document.getElementById('dialog').innerHTML = jqXHR.responseText;
        }
    });
    return false;
}