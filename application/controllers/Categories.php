<?php
    class Categories extends CI_Controller{
       public function index(){
           $data['title']= 'Categories';
           $data['categories'] = $this->category_model->get_categories();
           $this->load->view('templates/header');
           $this->load->view('Categories/index',$data);
           $this->load->view('templates/footer');
       }
        public function create(){
            $data['title'] = 'Create Category';
            $this->form_validation->set_rules('name','Name','required');
            
            if($this->form_validation->run() === FALSE){
                $this->load->view('templates/header');
                $this->load->view('Categories/create',$data);
                $this->load->view('templates/footer');
                
            }else{
                $this->category_model->create_category();
                redirect('categories');
            }
        }
        public function posts($id){
            $data['title']= $this->category_model->get_category($id)->name;
            $data['posts'] = $this->post_model->get_posts_by_category($id);

            $this->load->view('templates/header');
                $this->load->view('posts/index',$data);
                $this->load->view('templates/footer');
        }
         public function delete($id){
            $this->category_model->delete_category($id);
            redirect('categories');
            
        }
        public function edit($id){
            
            $data['categories']= $this->post_model->get_categories($id);
            if(empty($data['categories'])){
                show_404();
            }
            $data['title'] = 'Edit Post';

                $this->load->view('templates/header');
                $this->load->view('Categories/edit',$data);
                $this->load->view('templates/footer');
        }
        public function update(){
            $this->category_model->update_category();
           //redirect('categories');
        }
    
    }
