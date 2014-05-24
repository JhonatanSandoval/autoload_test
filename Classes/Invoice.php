<?php
/**
 * Created by PhpStorm.
 * User: jhonatan
 * Date: 23/05/14
 * Time: 06:51 PM
 */

    namespace Classes;

    class Invoice
    {

        private $unitprice;
        private $quantity;

        /**
         * @param mixed $quantity
         */
        public function setQuantity($quantity)
        {
            $this->quantity = $quantity;
        }

        /**
         * @return mixed
         */
        public function getQuantity()
        {
            return $this->quantity;
        }

        /**
         * @param mixed $unitprice
         */
        public function setUnitprice($unitprice)
        {
            $this->unitprice = $unitprice;
        }

        /**
         * @return mixed
         */
        public function getUnitprice()
        {
            return $this->unitprice;
        }



    }