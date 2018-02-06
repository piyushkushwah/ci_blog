<?php 
class Posts extends CI_Controller{
    public function index(){
        $data['title'] ='Latest Posts';
        $data['posts']= $this->post_model->get_posts();
        //print_r($data['posts']);
        //echo "HERE";

       $this->load->view('templates/header');
        $this->load->view('posts/index',$data);
        $this->load->view('templates/footer');
    }
        public function view($slug = NULL){
            $data['posts']=$this->post_model->get_posts($slug);
            if(empty($data['posts'])){
                show_404();
            }
            $data['title'] = $data['posts']['title'];

                $this->load->view('templates/header');
                $this->load->view('posts/index',$data);
                $this->load->view('templates/footer');
        }
}