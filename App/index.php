<?php
/**
 * Created by PhpStorm.
 * User: jhonatan
 * Date: 23/05/14
 * Time: 06:44 PM
 */

    require_once 'autoload.php';

    use Controller\PersonController;
    use Controller\InvoiceController;

    $personController = new PersonController();

    $fullName = $personController->getPersonFullName('Jhonatan', 'Sandoval');

    echo $fullName;

    echo "<br><br>";

    $invoiceController = new InvoiceController();

    $totalAmount = $invoiceController->unitPricePerQuantity(20.5, 3);

    echo $totalAmount;