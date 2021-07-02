<?php
    class blog extends framework{
        public function index(){
            $result = $this->model("blogModel");
            $data = $result->fetchBlog();
            if($data){
                $this->view('blog',$data);
            }
            else{
                $this->view('blog',$data =[]);
            }
        }

        public function post($id){
            $data=[$id[2]];
            $result = $this->model("blogModel");
            $row = $result->fetchPost($id);
            if($row){
                $this->view('post',$row);
            }
        }

        public function search(){
            $keyword = $this->input('keyword');
            $data = ["%$keyword%","%$keyword%"];
            $result = $this->model("blogModel");
            $row = $result->searchPost($data);
            $this->view('search',$row);
        }
    }
?>