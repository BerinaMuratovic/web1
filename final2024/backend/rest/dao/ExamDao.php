<?php

class ExamDao {

    private $conn;

    /**
     * constructor of dao class
     */
    public function __construct(){
        try {
          /** TODO
           * List parameters such as servername, username, password, schema. Make sure to use appropriate port
           */
          $servername = "db1.ibu.edu.ba ";
          $dbname = "webfinal";
          $username = "webfinal_24";
          $password = "web24finPWD";

          /** TODO
           * Create new connection
           */
          try{
            $conn = new PDO("mysql:host=$servername;dbname = $dbname",$username,$password);
            $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
        } catch(PDOException $e) {
          echo "Connection failed: " . $e->getMessage();
        }
          }
          
    }

    /** TODO
     * Implement DAO method used to get customer information
     */
    public function get_customers(){
      SELECT * 
      FROM customers;

      return $this->query($query);
      
      
    }

    }

    /** TODO
     * Implement DAO method used to get customer meals
     */
    public function get_customer_meals($customer_id) {
      return $this->query_unique("SELECT * FROM meals WHERE id = :id", ["id" => $customer_id]);

    }

    /** TODO
     * Implement DAO method used to save customer data
     */
    public function add_customer($data){
      return $this->insert('customers', $data);

    }

    /** TODO
     * Implement DAO method used to get foods report
     */
    public function get_foods_report(){
      SELECT * 
      FROM foods;

      return $this->query($query);

    }

?>
