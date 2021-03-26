<?php

    class model_post_ad{
        private $conn;
        private $table = 'ad';
        private $id_table = 'user_info';


        public function __construct($db){
            $this->conn = $db;
        }

        //get post
        private function xcute($query){

            $stmt = $this->conn->prepare($query);
            $stmt->execute();
            return $stmt;
        }

        private function get_ad_id($email){
            $query = "SELECT total_given_ad FROM `user_info` WHERE email='$email'";
            $result = $this->xcute($query);

            $data = array();
            foreach($result as $rslt){
                $data['total_given_ad'] = $rslt['total_given_ad'];
            }

            $num = (int)$data['total_given_ad'] + 1;
            $q = "UPDATE `user_info` SET `total_given_ad` = '$num' WHERE `user_info`.`email` = '$email';";
            $this->xcute($q);

            return $email.$data['total_given_ad'];

        }
        

        public function post($owner_email, $product_name, $category, $city, $local_area, $description, $price, $phone_no, $image_path){

            $id = $this->get_ad_id($owner_email);
            $date = date('Y/m/d H:i:s');
            $query = "INSERT INTO ".$this->table." (`id`, `owners_email`, `category`, `city`, `local_area`, `description`, `price`, `product_name`, "
                    ."`phone_no`, `date_time`, `image_path`, `status`) VALUES ('$id', '$owner_email', '$category', '$city', '$local_area', '$description', "
                    ."'$price', '$product_name', '$phone_no', '$date', '$image_path', b'0');";

            $stmt = $this->conn->prepare($query);

            if( $stmt->execute() ){
                return true;
            }else{
                return false;
            }

        }



    }

    


?>
