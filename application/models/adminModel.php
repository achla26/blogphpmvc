<?php
    class adminModel extends database{
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

        public function insertBlog($data){
            $qry = "insert into `blog`(`title`, `description`, `image`,`dttm`) values(?,?,?,?)";
            $params = $data;
            if($this->Query($qry,$params)){
                return true;
            }
            else{
                return false;
            }
        }

        public function deleteBlog($data){
            $data = [$data[2]];
            $qry = "delete from blog WHERE blog_id=?";  
            
            if($this->Query($qry,$data)){
                return true;
            }
            else{
                return false;
            }
        }

        public function updatePost($params){
            $qry = "update  `blog` set `title` = ? ,`description`=?,`dttm`=? where `blog_id`=?";
            if($this->Query($qry,$params)){
                return true;
            }
            else{
                return false;
            }
        }

        public function updatePost_image($params){
            $qry = "update  `blog` set `title` = ? ,`description`=?, `image`=?,`dttm`=? where `blog_id`=?";
            if($this->Query($qry,$params)){
                return true;
            }
            else{
                return false;
            }
        }

        public function login($data){
            $qry = "SELECT * FROM admin WHERE admin_username=? and admin_password = ?";  
            $result = $this->Query($qry,$data);
            $row = $this->fetchRecord($result);   
            if($row){
                return $row;
            }
            else{
                return false;
            }
        }
    }
?>