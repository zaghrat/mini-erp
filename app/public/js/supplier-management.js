$('#addNewItemBtn').on('click', function (e) {
    $.ajax({
        url: '/supplier-management/new',
        method: 'GET',
        success: function (data) {
            document.getElementById('dialog').innerHTML = data;
        },
        error: function (data) {
            console.log(data);
        }
    });
});


function saveNewItem(form, e)
{
    e.preventDefault();
    let $form = $(e.currentTarget);
    $.ajax({
        url: '/supplier-management/new',
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

function editItem(id)
{
    $.ajax({
        url: '/supplier-management/edit/' + id,
        method: 'GET',
        success: function (data) {
            document.getElementById('dialog').innerHTML = data;
        },
        error: function (data) {
            console.log(data);
        }
    });
}

function saveItemChanges(form, e)
{
    let id = document.getElementById("item_id").value;
    e.preventDefault();
    let $form = $(e.currentTarget);
    $.ajax({
        url: '/supplier-management/edit/' + id,
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

function deleteItemConfirmation(id)
{
    $.ajax({
        url: '/supplier-management/delete/' + id,
        method: 'GET',
        success: function (data) {
            document.getElementById('dialog').innerHTML = data;
        },
        error: function (data) {
            console.log(data);
        }
    });
}

function deleteItemRequest(id)
{
    $.ajax({
        url: '/supplier-management/delete/' + id,
        method: 'DELETE',
        success: function () {
            location.reload();
        },
        error: function (jqXHR) {
            document.getElementById('dialog').innerHTML = jqXHR.responseText;
        }
    });

    return false;
}