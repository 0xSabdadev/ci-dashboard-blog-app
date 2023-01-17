<?php 

    class Contoh extends CI_Controller{
        public function index () {
            $data['meta'] = [
                'title' => 'BeritaCoding',
            ];
            $this->load->model('m_mhs');
            $data['mahasiswa']= $this->m_mhs->get_data();
            $this->load->view('v_mhs',$data);
        }
        public function about(){
            $data['meta'] = [
                'title' => 'BeritaCoding',
            ];
            $this->load->view('about',$data);
        }
        public function contact(){
            $data['meta'] = [
                'title' => 'Contact',
            ];
            if($this->input->method()==='post'){
                $this->load->model('feedback_model');
                //data masukan masuk ke siini
                $feedback = [
                    'id'=> uniqid('',true),
                    'name'=>$this->input->post('name'),
                    'email'=>$this->input->post('email'),
                    'message'=>$this->input->post('message')
                ];
                //masukkan ke db pake model
                $feedback_saved = $this->feedback_model->insert($feedback);
                if($feedback_saved){
                    return $this->load->view('contact_thanks');
                }
            }
            $this->load->view('contact',$data);
        }
        private function _utility(){
            echo 'look';
        }
    }
?>