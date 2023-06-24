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

function editItem(id) {
    $.ajax({
        url: '/settings/vat/edit/' + id,
        method: 'GET',
        success: function (data) {
            document.getElementById('dialog').innerHTML = data;
        },
        error: function (data) {
            console.log(data);
        }
    });
}

function saveItemChanges(form, e) {
    let id = document.getElementById("item_id").value;
    e.preventDefault();
    let $form = $(e.currentTarget);
    $.ajax({
        url: '/settings/vat/edit/' + id,
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