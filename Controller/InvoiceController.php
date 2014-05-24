<?php
/**
 * Created by PhpStorm.
 * User: jhonatan
 * Date: 23/05/14
 * Time: 07:22 PM
 */

    namespace Controller;

    use Classes\Invoice;

    class InvoiceController
    {


        function unitPricePerQuantity($unitprice, $quantity)
        {

            $invoice = new Invoice();
            $invoice->setUnitprice($unitprice);
            $invoice->setQuantity($quantity);

            return $invoice->getUnitprice() * $invoice->getQuantity();

        }

    }