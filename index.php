<?php
    class Users{
        public $name;
        public $surname;
        public $credit_card;
        function __construct($_name, $_surname, $_credid_card)
        {
            $this->name=$_name;
            $this->surname=$_surname;
            $this->credit_card=$_credid_card;
        }
        function setname($_name){
            $this->name=$_name;
        }
        function getname($_name){
            return $this->$_name;
        }
        function setsurname($_surname){
            $this->name=$_surname;
        }
        function getsurname($_surname){
        return $this->$_surname;
        }
        function set_credid_card($_credid_card){
            $this->name=$_credid_card;
        }
        function get_credid_card($_credid_card){
        return $this->$_credid_card;
        }
    };
    class Users_premium extends Users{
        public $year_subscribed;
        public $family_account;
         
        function __construct($_name, $_surname, $_credid_card, $_year_subscribed, $_family_account){
            
            $this->year_subscribed=$_year_subscribed;
            $this->family_account=$_family_account;
            $this->name=$_name;
            $this->surname=$_surname;
            $this->credit_card=$_credid_card;
        }
    };
    class Products{
        protected $name;
        public $price;
        function __construct($_name, $_price){
            $this->name=$_name;
            $this->price=$_price;
        }
    }
    class Magliette extends Products{
        public $taglia;
        function __construct($_name, $_price,$taglia){
            $this->name=$_name;
            $this->price=$_price;
            $this->taglia=$taglia;
        }
    }
    class Lavatrici extends Products{
        public $classe_energetica;
        function __construct($_name, $_price,$_classe_energetica){
            $this->name=$_name;
            $this->price=$_price;
            $this->classe_energetica=$_classe_energetica;
        }
        
    }

    $user_1 = new Users('pippo','Molll', 10001);
    $user_2 = new Users('Ale', 'Porto', 2222);
    $user_3 = new Users_premium('Oliver', 'Dell', 3000, date('10/9/1989' ), true);
    $lavatrice_1 = new Lavatrici('lavatrici 3000',500,'a');
    $maglietta_1 = new Magliette('La sexy', 30, 's');
    var_dump( $user_1);
    var_dump( $user_3);
    var_dump(  $maglietta_1 );
    var_dump( $lavatrice_1);
    



?>
 