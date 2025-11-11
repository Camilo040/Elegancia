<?php

include_once '../DAO/FacturaDAO.php';

class CtrlFactura extends FacturaDAO {

    public function read() {
        include_once '../Controller/Producto/CtrlProducto.php';
        include_once '../Controller/Cliente/CtrlCliente.php';
        include_once '../View/Factura/ViewFactura.php';
    }

    public function getNextFacturaId() {
        $lastId = FacturaDAO::getInstance()->getLastFacturaId();
        $nextId = $lastId + 1;
        echo json_encode(['next_id' => $nextId]);
    }

    public function postNew() {
        $numFact = $_POST['nofact'];
        $datefact = $_POST['datefact'];
        $cliente = $_POST['cliente'];
        $observaciones = $_POST['observaciones'];
        $producto = $_POST['producto'];
        $listPrecio = $_POST['listPrecio'];
        $listCantidad = $_POST['listCantidad'];
        $listSubtotal = $_POST['listSubtotal'];
        $total = array_sum($listSubtotal);

        $res = FacturaDAO::getInstance()->addCabecera($numFact, $datefact, $cliente, $observaciones, "123", $total);

        if ($res == 1) {
            for ($i = 0; $i < count($producto); $i++) {
                FacturaDAO::getInstance()->addDetalleFactura($numFact, $producto[$i], $listPrecio[$i], $listCantidad[$i], $listSubtotal[$i]);
                FacturaDAO::getInstance()->getUpdateFacturaId();
            }
            //Mensaje Exitoso
            messageSweetAlert("¡Éxito!", "Factura registrado correctamente.", "success", getUrl('Factura', 'Factura', 'read'));
        } else {
            //Mensaje con novedad
            messageSweetAlert("Novedad", "Factura novedad correctamente.", "success", getUrl('Factura', 'Factura', 'read'));
        }
    }
}
