<?php
/*
 * Sending email library.
 * 
 * @author howtomakeaturn
 */

class Mailer_wrapper {
    /**
    * CodeIgniter global
    */
    protected $ci;

    public function __construct(){
        $this->ci =& get_instance();
        require(APPPATH. 'libraries/PHPMailer-5.1.0/class.phpmailer.php');
    }
    
}

/* End of file Notification.php */
