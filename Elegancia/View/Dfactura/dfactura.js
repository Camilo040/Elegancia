$(document).ready(function () {
    listDfactura();
});
var listDfactura = function () {
    var table = $('#dt_dfactura').DataTable({
        dom: "Bfrtip",
        buttons: [
            {
                extend: 'excel',
                footer: true,
                title: "Lista de Detalles de factura",
                filename: "listDfactura",
                text: '<button class="btn btn-success">Exportar a Excel</button>'
            },
        ],
        destroy: true,
        searching: true,
        orderable: false,
        lengthChange: false,
        pageLength: 15,
        autoWidth: true,
        "ajax": {
            "url": "ajax.php?module=Dfactura&controller=Dfactura&function=data",
            "method": "post"
        },
        "deferRender": true,

        "columns": [
            {"data": "dfact_id"},
            {"data": "fact_id"},
            {"data": "pro_id"},
            {"data": "pro_precio"},
            {"data": "drres_cantidad"},
            {"data": "drres_subtotal"},
            {"data": "buttons"}
        ]
    });

}