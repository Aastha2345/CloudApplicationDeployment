<?php 
class Contact{
    private $host="localhost:3300";
    private $user="root";
    private $pass="";
    private $db="contact";
    public $mysqli;
    
    public function __construct() {
        return $this->mysqli=new mysqli($this->host, $this->user, $this->pass, $this->db);
    }
    
    public function doubts_data($data){
        $fname=$data['name'];
        $lname=$data['surname'];
        $email=$data['email'];
        $phone=$data['phone'];
        $message=$data['message'];
        $q="insert into doubts_data set first_name='$fname', last_name='$lname', email='$email', phone='$phone', message='$message'";
       $data= $this->mysqli->query($q);
//        if($data==true){
//            $body="One message received from UPES Sensei contact us. details are below..<br> first_name='$fname', last_name='$lname', email='$email', phone='$phone', message='$message'";
//            return $this->sent_mail("500082997@stu.upes.ac.in", "Message received from UPES Sensei", $body);
//        }
//     }
    
//     public function sent_mail($to,$subject,$body){
// $mailFromName="HubBunch";
// $mailFrom="aasthabisht2345@gmail.com";
// /////////////////////////////////////////////////////////////
// //Mail Header
// $mailHeader = 'MIME-Version: 1.0'."\r\n";
// $mailHeader .= "From: $mailFromName <$mailFrom>\r\n";
// $mailHeader .= "Reply-To: $mailFrom\r\n";
// $mailHeader .= "Return-Path: $mailFrom\r\n";
// //$mailHeader .= "CC: $mailCC\r\n";
// //$mailHeader .= "BCC: $mailBCC\r\n";
// $mailHeader .= 'X-Mailer: PHP'.phpversion()."\r\n";
// $mailHeader .= 'Content-Type: text/html; charset=utf-8'."\r\n";
// /////////////////////////////////////////////////////////////
// //Email to Admin
// if(mail($to, $subject, $body, $mailHeader)){
//  return true;
//  }else{
// return false;
//  }
    }
}
?>