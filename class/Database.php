<?php
    abstract class Database{
        protected $conn = null;
        protected $sql = null;
        protected $stmt = null;

        protected $table = null;

        public function __construct(){
            try{
                $this->conn = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';', DB_USER, DB_PASSWORD);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $this->sql = "SET NAMES utf8";
                $this->stmt = $this->conn->prepare($this->sql);
                $this->stmt->execute();
                
            } catch(PDOException $e){
                $msg = date('Y-m-d h:i A').": (Connection, PDO)".$e->getMessage()."\r\n";
                error_log($msg, 3, ERROR_LOG);
                return false;
            } catch(Exception $e){
                $msg = date('Y-m-d h:i A').": (Connection, General)".$e->getMessage()."\r\n";
                error_log($msg, 3, ERROR_LOG);
                return false;
            }
        }

        final protected function table($_table){
            $this->table = $_table;
        }

        final protected function select($args = array(), $is_debug= false){
            /***
             * SELECT fields FROM table
             *  LEFT/RIGHT join Conditions
             * WHERE condition
             * GROUP BY condition
             * ORDER BY column ASC/DESC
             * LIMIT start, count
             */
            try{
                
                $this->sql = "SELECT ";

                if(isset($args, $args['fields']) && !empty($args['fields'])){
                    // columns
                    if(is_string($args['fields'])){
                        $this->sql .= $args['fields'];
                    } else {
                        $this->sql .= implode(", ",$args['fields']);
                    }
                } else {
                    $this->sql .= " * ";
                }


                $this->sql .= " FROM ";


                if(!isset($this->table) || empty($this->table)){
                    throw new Exception('Table Not set');
                }

                $this->sql .= $this->table;

                /*** JOIN Statement */
                /*** JOIN Statement */


                /*** WHERE Statement */
                if(isset($args['where']) && !empty($args['where'])){
                    if(is_string($args['where'])){
                        $this->sql .= " WHERE ".$args['where'];
                    } else {
                        $temp = array();
                        // email = :email AND status = :status

                        foreach($args['where'] as $column_name => $value){
                            $str = $column_name." = :".$column_name;
                            $temp[] = $str;
                        }

                        $this->sql .= " WHERE ".implode(' AND ',$temp);
                    }
                }
                /*** WHERE Statement */

                /*** GROUP BY Statement */
                /*** GROUP BY Statement */

                /*** ORDER BY Statement */
                if(isset($args['order_by']) && !empty($args['order_by'])){
                    $this->sql .= " ORDER BY ".$args['order_by'];
                } else {
                    $this->sql .= " ORDER BY ".$this->table.".id DESC ";
                }
                /*** ORDER BY Statement */


                /*** LIMIT Statement */
                if(isset($args['limit']) && !empty($args['limit'])){
                    $this->sql .= " LIMIT ".$args['limit'];
                }
                /*** LIMIT Statement */

                if($is_debug){
                    debug($args);
                    echo $this->sql;
                    exit;
                }

                $this->stmt = $this->conn->prepare($this->sql);


                if(isset($args['where']) && !empty($args['where']) && is_array($args['where'])){
                    foreach($args['where'] as $column_name=>$value){
                        if(is_integer($value)){
                            $param = PDO::PARAM_INT;
                        } elseif(is_bool($value)){
                            $param = PDO::PARAM_BOOL;
                        } else {
                            $param = PDO::PARAM_STR;
                        }

                        if($param){
                            $this->stmt->bindValue(':'.$column_name, $value, $param);
                        }
                    }
                }


                $this->stmt->execute();
                return $this->stmt->fetchAll(PDO::FETCH_OBJ);

            } catch(PDOException $e){
                $msg = date('Y-m-d h:i A').": (SELECT, PDO ), ".$this->sql.", ".$e->getMessage()."\r\n";
                error_log($msg, 3, ERROR_LOG);
                return false;
            } catch(Exception $e){
                $msg = date('Y-m-d h:i A').": (SELECT, General ), ".$this->sql.", ".$e->getMessage()."\r\n";
                error_log($msg, 3, ERROR_LOG);
                return false;
            }

        }

        final protected function update($data, $args = array(), $is_debug = false){
            /**
             * 
             *  UPDATE TABLE table_name SET 
             *  email = :_email,
             * column_name = :key
             * 
             * WHERE email = :email
             * 
             */
            try{
                
                $this->sql = "UPDATE ";


                if(!isset($this->table) || empty($this->table)){
                    throw new Exception('Table Not set');
                }

                $this->sql .= $this->table." SET ";

                if(!empty($data)){
                    if(is_string($data)){
                        $this->sql .= $data;
                    } else {
                        $temp = array();
                        // email = :email AND status = :status

                        foreach($data as $column_name => $value){
                            $str = $column_name." = :_".$column_name;
                            $temp[] = $str;
                        }

                        $this->sql .= implode(', ', $temp);

                    }
                }

                /*** WHERE Statement */
                if(isset($args['where']) && !empty($args['where'])){
                    if(is_string($args['where'])){
                        $this->sql .= " WHERE ".$args['where'];
                    } else {
                        $temp = array();
                        // email = :email AND status = :status

                        foreach($args['where'] as $column_name => $value){
                            $str = $column_name." = :".$column_name;
                            $temp[] = $str;
                        }

                        $this->sql .= " WHERE ".implode(' AND ',$temp);
                    }
                }
                /*** WHERE Statement */


                if($is_debug){
                    debug($args);
                    debug($data);
                    echo $this->sql;
                    exit;
                }

                $this->stmt = $this->conn->prepare($this->sql);

                if(isset($data) && !empty($data) && is_array($data)){
                    foreach($data as $column_name=>$value){
                        if(is_integer($value)){
                            $param = PDO::PARAM_INT;
                        } elseif(is_bool($value)){
                            $param = PDO::PARAM_BOOL;
                        } else {
                            $param = PDO::PARAM_STR;
                        }

                        if($param){
                            $this->stmt->bindValue(':_'.$column_name, $value, $param);
                        }
                    }
                }


                if(isset($args['where']) && !empty($args['where']) && is_array($args['where'])){
                    foreach($args['where'] as $column_name=>$value){
                        if(is_integer($value)){
                            $param = PDO::PARAM_INT;
                        } elseif(is_bool($value)){
                            $param = PDO::PARAM_BOOL;
                        } else {
                            $param = PDO::PARAM_STR;
                        }

                        if($param){
                            $this->stmt->bindValue(':'.$column_name, $value, $param);
                        }
                    }
                }


                return $this->stmt->execute();

            } catch(PDOException $e){
                $msg = date('Y-m-d h:i A').": (UPDATE, PDO ), ".$this->sql.", ".$e->getMessage()."\r\n";
                error_log($msg, 3, ERROR_LOG);
                return false;
            } catch(Exception $e){
                $msg = date('Y-m-d h:i A').": (UPDATE, General ), ".$this->sql.", ".$e->getMessage()."\r\n";
                error_log($msg, 3, ERROR_LOG);
                return false;
            }
        }

        final protected function insert($data, $is_debug = false){
            /**
             * 
             *  INSERT INTO table_name SET 
             *  email = :_email,
             * column_name = :key
             * 
             */
            try{
                
                $this->sql = "INSERT INTO ";


                if(!isset($this->table) || empty($this->table)){
                    throw new Exception('Table Not set');
                }

                $this->sql .= $this->table." SET ";

                if(!empty($data)){
                    if(is_string($data)){
                        $this->sql .= $data;
                    } else {
                        $temp = array();
                        // email = :email AND status = :status

                        foreach($data as $column_name => $value){
                            $str = $column_name." = :_".$column_name;
                            $temp[] = $str;
                        }

                        $this->sql .= implode(', ', $temp);

                    }
                }

                if($is_debug){
                    debug($data);
                    echo $this->sql;
                    exit;
                }

                $this->stmt = $this->conn->prepare($this->sql);

                if(isset($data) && !empty($data) && is_array($data)){
                    foreach($data as $column_name=>$value){
                        if(is_integer($value)){
                            $param = PDO::PARAM_INT;
                        } elseif(is_bool($value)){
                            $param = PDO::PARAM_BOOL;
                        } else {
                            $param = PDO::PARAM_STR;
                        }

                        if($param){
                            $this->stmt->bindValue(':_'.$column_name, $value, $param);
                        }
                    }
                }

                $this->stmt->execute();
                return $this->conn->lastInsertId();

            } catch(PDOException $e){
                $msg = date('Y-m-d h:i A').": (Insert, PDO ), ".$this->sql.", ".$e->getMessage()."\r\n";
                error_log($msg, 3, ERROR_LOG);
                return false;
            } catch(Exception $e){
                $msg = date('Y-m-d h:i A').": (Insert, General ), ".$this->sql.", ".$e->getMessage()."\r\n";
                error_log($msg, 3, ERROR_LOG);
                return false;
            }
        }

        final protected function delete($args = array(), $is_debug= false){
            /***
             * DELETE FROM table 
             *  WHERE condition
             */
            try{
                
                $this->sql = "DELETE FROM ";


                if(!isset($this->table) || empty($this->table)){
                    throw new Exception('Table Not set');
                }

                $this->sql .= $this->table;


                /*** WHERE Statement */
                if(isset($args['where']) && !empty($args['where'])){
                    if(is_string($args['where'])){
                        $this->sql .= " WHERE ".$args['where'];
                    } else {
                        $temp = array();
                        // email = :email AND status = :status

                        foreach($args['where'] as $column_name => $value){
                            $str = $column_name." = :".$column_name;
                            $temp[] = $str;
                        }

                        $this->sql .= " WHERE ".implode(' AND ',$temp);
                    }
                }
                /*** WHERE Statement */

                if($is_debug){
                    debug($args);
                    echo $this->sql;
                    exit;
                }

                $this->stmt = $this->conn->prepare($this->sql);


                if(isset($args['where']) && !empty($args['where']) && is_array($args['where'])){
                    foreach($args['where'] as $column_name=>$value){
                        if(is_integer($value)){
                            $param = PDO::PARAM_INT;
                        } elseif(is_bool($value)){
                            $param = PDO::PARAM_BOOL;
                        } else {
                            $param = PDO::PARAM_STR;
                        }

                        if($param){
                            $this->stmt->bindValue(':'.$column_name, $value, $param);
                        }
                    }
                }


                return $this->stmt->execute();
           
            } catch(PDOException $e){
                $msg = date('Y-m-d h:i A').": (DELETE, PDO ), ".$this->sql.", ".$e->getMessage()."\r\n";
                error_log($msg, 3, ERROR_LOG);
                return false;
            } catch(Exception $e){
                $msg = date('Y-m-d h:i A').": (DELETE, General ), ".$this->sql.", ".$e->getMessage()."\r\n";
                error_log($msg, 3, ERROR_LOG);
                return false;
            }

        }
    }