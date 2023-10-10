function deleteItemConfirmation(id)
{
    $.ajax({
        url: '/article-management/delete/' + id,
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
        url: '/article-management/delete/' + id,
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