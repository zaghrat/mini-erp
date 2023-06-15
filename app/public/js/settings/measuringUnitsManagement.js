$('#addNewItemBtn').on('click', function (e) {
    $.ajax({
        url: '/measuring-unit/new',
        method: 'GET',
        success: function (data) {
            document.getElementById('dialog').innerHTML = data;
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
        url: '/measuring-unit/new',
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



function deleteItemConfirmation(id) {
    $.ajax({
        url: '/measuring-unit/delete/' + id,
        method: 'GET',
        success: function (data) {
            document.getElementById('dialog').innerHTML = data;
        },
        error: function (data) {
            console.log(data);
        }
    });
}

function deleteItemRequest(id) {
    $.ajax({
        url: '/measuring-unit/delete/' + id,
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
