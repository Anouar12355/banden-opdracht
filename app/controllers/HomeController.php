<?php
class HomeController extends Controller {
    public function index() {
        $data = [
            'title' => 'BWSN Bandenservice',
            'description' => 'Professioneel Bandenbeheer voor uw Wagenpark'
        ];
        
        $this->view('landing', $data);
    }
}