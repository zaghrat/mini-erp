function selectSupplier()
{
    $.ajax({
        url: '/supplier/order/supplier-list',
        method: 'GET',
        success: function (data) {
            document.getElementById('dialog').innerHTML = data;
        },
        error: function (data) {
            console.log(data);
        }
    });
}

function confirmSupplierSelection()
{
    let supplierId = document.getElementById('supplierList').value;


    $.ajax({
        url: '/supplier-management/' + supplierId,
        method: 'GET',
        success: function (response) {
            $('#dialog').modal('toggle');
            document.getElementById("supplier-name").innerHTML = response.data.name;
            document.getElementById("supplier-tax-number").innerHTML = response.data.taxIdNumber;
            document.getElementById("supplier-email").innerHTML = response.data.email;
            document.getElementById("supplier-phone").innerHTML = response.data.phone;
            document.getElementById("supplier-fax").innerHTML = response.data.fax;
            document.getElementById("supplier-address").innerHTML = response.data.address;
        },
        error: function (data) {
            console.log(data);
        }
    });
}