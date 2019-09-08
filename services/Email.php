<?php 
class Email {
    private $admin_email = "contacto@byefugas.cl";
    private $name;
    private $email;
    private $phone;
    private $message;
    public function __construct($name, $email, $phone, $message) {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->message = $message;
    }
    public function send_admin() {
        $email_subject = 'Tienes un nuevo correo desde ByeFugas.cl!';
        $from = "ByeFugas.cl <noreply@byfugas.cl>";
    
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
        
        $headers .= 'From: '.$from."\r\n".
                'Reply-To: '.$from."\r\n" .
                'X-Mailer: PHP/' . phpversion();
        
        $message = '<html><body>';
        $message .= '<h1>Alguien quiere contactarse contigo!</h1>';
        $message .= '<h4>De: '.$this->name.'</h4>';
        $message .= '<h4>Fono: '.$this->phone.'</h4>';
        $message .= '<h4>Email: '.$this->email.'</h4>';
        $message .= '<p>Mensaje:</p>';
        $message .= '<p>'.$this->message.'</p><hr>';
        $message .= '</body></html>';
        
        if(mail($this->admin_email, $email_subject, $message, $headers)){
            return true;
        } else{
            return false;
        }
    }
    public function send_customer() {
        $email_subject = 'Gracias por comunicarte con ByeFugas.cl!';
        $from = "ByeFugas.cl <noreply@byefugas.cl>";
    
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
        
        $headers .= 'From: '.$from."\r\n".
                'Reply-To: '.$from."\r\n" .
                'X-Mailer: PHP/' . phpversion();
        
        $message = '<html><body>';
        $message .= '<h1>Gracias por comunicarte con nosotros!</h1>';
        $message .= '<h4>De: '.$this->name.'</h4>';
        $message .= '<h4>Fono: '.$this->phone.'</h4>';
        $message .= '<h4>Email: '.$this->email.'</h4>';
        $message .= '<p>Mensaje:</p>';
        $message .= '<p>'.$this->message.'</p><hr>';
        $message .= '<p>Te contactaremos a la brevedad!</p>';
        $message .= '</body></html>';
        
        if(mail($this->email, $email_subject, $message, $headers)){
            return true;
        } else{
            return false;
        }
    }
}