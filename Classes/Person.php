<?php
/**
 * Created by PhpStorm.
 * User: jhonatan
 * Date: 23/05/14
 * Time: 06:45 PM
 */

    namespace Classes;

    class Person
    {


        private $name;
        private $lastName;

        /**
         * @param mixed $lastName
         */
        public function setLastName($lastName)
        {
            $this->lastName = $lastName;
        }

        /**
         * @return mixed
         */
        public function getLastName()
        {
            return $this->lastName;
        }

        /**
         * @param mixed $name
         */
        public function setName($name)
        {
            $this->name = $name;
        }

        /**
         * @return mixed
         */
        public function getName()
        {
            return $this->name;
        }




    }