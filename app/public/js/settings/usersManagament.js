$('#addNewUserBtn').on('click', function (e) {
    $.ajax({
        url: '/users/add',
        method: 'GET',
        success: function (data) {
            document.getElementById('addNewUser').innerHTML = data;
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
        url: '/users/add',
        method: 'POST',
        data: $form.serialize(),
        success: function (data) {
           location.reload();
        },
        error: function (jqXHR) {
            document.getElementById('addNewUser').innerHTML = jqXHR.responseText;
        }
    });

    return false;
}


function fetchUserData(userId) {
    $.ajax({
        url: '/users/edit/' + userId,
        method: 'GET',
        success: function (data) {
            document.getElementById('addNewUser').innerHTML = data;
        },
        error: function (data) {
            console.log(data);
        }
    });
}


function sendPutRequest(form, e) {

    let userId = document.getElementById("user_Id").value;
    e.preventDefault();
    let $form = $(e.currentTarget);
    $.ajax({
        url: '/users/edit/' + userId,
        method: 'POST',
        data: $form.serialize(),
        success: function (data) {
            location.reload();
        },
        error: function (jqXHR) {
            document.getElementById('addNewUser').innerHTML = jqXHR.responseText;
        }
    });

    return false;
}