<?php 

class About extends Application {

	/**
	 * Index Page for this controller.
	 */
	public function index()
	{
            //$this->load->view('about');
            $this->data['pagebody'] = 'About'; 
            $this->render();
	}
}
