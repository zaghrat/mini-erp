let orderItems = [];
let totalPreTax = 0;

function initialiseOrderArticles()
{
    orderItems.push({
        'name': '',
        'qty': 1,
        'price': '0.000',
        'vat': '',
        'preTaxTotal': 0
    });

    clearAndWriteOrderItems();
}


function newArticleItem()
{
    orderItems.push({
        'name': '',
        'qty': 1,
        'price': '0.000',
        'vat': '',
        'preTaxTotal': 0
    });

    clearAndWriteOrderItems();
}

function clearAndWriteOrderItems()
{
    document.getElementById('orderItems').innerHTML = '';

    for (let i = 0; i < orderItems.length; i++) {
        newArticle(i, orderItems[i]);
    }

    function newArticle(id, article)
    {
        let table = document.getElementById('orderItems');
        let tr = document.createElement("tr");

        let td_name = document.createElement("td");
        td_name.innerHTML = "<input type='text' value='"+article.name+"' class='form-control' id='name_item_"+id+"' onclick='selectProductItem("+id+")' data-toggle=\"modal\" data-target=\"#dialog\">";
        tr.appendChild(td_name);

        let td_qty = document.createElement("td");
        td_qty.innerHTML = "<input type='number' value='"+article.qty+"' min='0' class='form-control' id='qty_item_"+id+"' onchange='updatePreTaxTotal(" + id+ ")'>";
        tr.appendChild(td_qty);

        let td_price = document.createElement("td");
        td_price.innerHTML = "<input type='number' value='"+article.price+"' class='form-control' step='0.005' min='0' id='price_item_"+id+"' onchange='updatePreTaxTotal(" + id+ ")' >";
        tr.appendChild(td_price);

        let td_vat = document.createElement("td");
        td_vat.innerHTML = "<input>";
        tr.appendChild(td_vat);

        let preTaxTotal = new Intl.NumberFormat().format(article.price * article.qty);
        let td_preTaxTotal = document.createElement("td");
        td_preTaxTotal.innerHTML = "<label id='td_preTaxTotal_"+ id +"'>" + preTaxTotal + "</label>";
        tr.appendChild(td_preTaxTotal);

        table.appendChild(tr);


        updatePreTaxTotal(id);
    }
}


function updatePreTaxTotal(id)
{
    orderItems[id].qty = document.getElementById('qty_item_'+id).value;
    orderItems[id].price = document.getElementById('price_item_'+id).value;
    orderItems[id].preTaxTotal = new Intl.NumberFormat().format(orderItems[id].price * orderItems[id].qty);
    document.getElementById('td_preTaxTotal_'+id).innerText = orderItems[id].preTaxTotal;

    calculateTotal();

}

function calculateTotal()
{
    totalPreTax = 0;
    for (let i = 0; i < orderItems.length; i++) {
        totalPreTax = totalPreTax + parseFloat(orderItems[i].preTaxTotal);
    }

    document.getElementById('totalPreTax').innerText = totalPreTax;
}

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

            if (orderItems.length === 0) {
                initialiseOrderArticles();
            }
        },
        error: function (data) {
            console.log(data);
        }
        });
}

function selectProductItem(id)
{

    if (document.getElementById('name_item_'+id).value.length > 0) {
        return false;
    }


    $.ajax({
        url: '/supplier/order/article-list/'+id,
        method: 'GET',
        success: function (data) {
            document.getElementById('dialog').innerHTML = data;
        },
        error: function (data) {
            console.log(data);
        }
        });
}

function confirmArticleSelection(index)
{
    let articleId = document.getElementById('articlesList').value;

    $.ajax({
        url: '/article-management/' + articleId,
        method: 'GET',
        success: function (response) {
            orderItems[index].name = response.data.name;
            orderItems[index].price = response.data.preTaxPrice;

            $('#dialog').modal('toggle');
            clearAndWriteOrderItems();
        },
        error: function (data) {
            console.log(data);
        }
        });
}