<?php
/**
 * Created by PhpStorm.
 * User: jhonatan
 * Date: 23/05/14
 * Time: 07:03 PM
 */


    namespace Controller;

    use Classes\Person;


    class PersonController
    {

        function getPersonFullName($nane, $lastName)
        {

            $person = new Person();
            $person->setName($nane);
            $person->setLastName($lastName);

            return $person->getName().' '.$person->getLastName();

        }

    }