

function saveCompanySettingsChanges()
{
    var name = document.getElementById('companyName').value;
    var currency = document.getElementById('companyCurrency').value;

    $.ajax({
        url: '/general/settings/edit',
        method: 'POST',
        data: {
            name: name,
            currency: currency
        },
        success: function () {
            location.reload();
        }
    });
}