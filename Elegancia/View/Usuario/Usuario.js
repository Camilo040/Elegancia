$(document).ready(function () {
    listUsuario();
});
var listUsuario = function () {
    var table = $('#dt_usuario').DataTable({
        dom: "Bfrtip",
        buttons: [
            {
                extend: 'excel',
                footer: true,
                title: "Lista de Usuarios",
                filename: "listUsuarios",
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
            "url": "ajax.php?module=Usuario&controller=Usuario&function=data",
            "method": "post"
        },
        "deferRender": true,

        "columns": [
            {"data": "id"},
            {"data": "identificacion"},
            {"data": "pass"},
            {"data": "nombre"},
            {"data": "apellido"},
            {"data": "email"},
            {"data": "telefono"},
             {"data": "buttons"}
        ]
    });

}