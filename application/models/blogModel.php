<?php
    class blogModel extends database{
        public function fetchBlog(){
            $qry = "select * from `blog` order by `dttm` desc";
            $params = [];
            $result = $this->Query($qry,$params);
            $row = $this->fetchData($result);
            if($row){
                return $row;
            }
            else{
                return false;
            }

            
        }

        public function fetchPost($id){
            $data = [$id[2]];
            $qry = "SELECT * FROM blog WHERE blog_id=?";  
            $result = $this->Query($qry,$data);
            $row = $this->fetchRecord($result);   
            if($row){
                return $row;
            }
            else{
                return false;
            }

            
        }

        public function searchPost($data){
            
            $qry = "SELECT * FROM blog WHERE `title` like ? or `description` like ?";  
            $result = $this->Query($qry,$data);
            $row = $this->fetchData($result); 
            if($row){
                return $row;
            }
            else{
                return false;
            }
        }
    }
?>