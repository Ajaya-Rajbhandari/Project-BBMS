<?php
    final class User extends Database{

        public function __construct()
        {
            parent::__construct();
            $this->table('users');
        }

        public function getAllUsers(){
            return $this->select();
        }

        public function getUserByEmail($email){
            // SELECT * FROM users WHERE email = $email
            
            // SELECT * FROM users WHERE id = $id
            // SELECT * FROM users WHERE remember_token = $token
            // SELECT * FROM users
            // SELECT * FROM users WHERE role = 'reporter'
            $args = array(
                // 'fields' => 'id, name, email, password, status'
                // 'fields' => array('id', 'name', 'email', 'password', 'status')
                // 'where' => " email = '".$email."' AND status = 'active'"
                'where' => array(
                    'email' => $email,
                    'status' => 'active'
                )
            );
            return $this->select($args);

        }


        public function getUserByToken($token){
            $args = array(
                // 'fields' => 'id, name, email, password, status'
                // 'fields' => array('id', 'name', 'email', 'password', 'status')
                // 'where' => " email = '".$email."' AND status = 'active'"
                'where' => array(
                    'remember_token' => $token,
                    'status' => 'active'
                )
            );
            return $this->select($args);
        }


        public function getUser($args){
            return $this->select($args);
        }


        public function updateUser($data, $user_id){
            // UPDATE users SET column_name = value WHERE id = $user_id
            $args = array(
                'where' => array(
                    'id' => $user_id
                )
            );
           $success =  $this->update($data, $args);
           if($success){
               return $user_id;
           } else {
               return false;
           }
        }
    }