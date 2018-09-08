 <?php
        if ($this->session->userdata('is_logged_in'))
                echo 'Logged as: , '.$this->session->userdata('name').'('. anchor(base_url()."users/logout/", "logout").') | ';
        elseif (!$this->session->userdata('is_logged_in') && ($this->uri->segment(2) == 'signin' || $this->uri->segment(2) == 'validate'))
                echo anchor(base_url().'users/signup/','Ingresar').' | ';
        else
                echo anchor(base_url().'users/signin/','Ingresar').' | ';
        
        echo '<hr />';
?>
