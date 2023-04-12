<?php
    class employe{
        private int $idemploye ;
        private string $lastName;
        private string $firstName;
        private string $email;
        private string $gender;
        public function __construct (int $id = NULL,string $lastName,string $firstName,string $email , string $gender){
            $this->id=$id;
            $this->lastName = $lastName;
            $this->firstName = $firstName;
            $this->email = $email;
            $this->gender = $gender;
        }
        public function getId(){
            return $this->id;
        } 
        public function setId(int $id){
            $this->id=$id;
        }
        public function getLastName(){
            return $this->lastName;
        } 
        public function setLastName(string $lastName){
            $this->lastName=$lastName;
        }
        public function getFirstName(){
            return $this->firstName;
        } 
        public function setFirstName(string $firstName){
            $this->firstName=$firstName;
        }
        public function getemail(){
            return $this->email;
        } 
        public function setAddress(string $email){
            $this->email=$email;
        }
        public function getgender(){
            return $this->gender;
        } 
        public function setgender(string $gender){
            $this->gender=$gender;
        }
    }
?>