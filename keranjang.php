<!DOCTYPE html>
<html>
<body>

<h2> Cart </h2>

<?php 

class cart {
    public function index() {
        $data['title'] = 'Cart';

        $this->load->view('InfoAlbum', $data);
        $this->load->view('templates/footer');
    }
}

}