<?php 
require 'database.class.php'; 

class Subscriber extends Database{ 

    private $email;

    function __construct()
    { 
        parent::__construct();
    } 

    public function save_subscriber()
    {
        $query = "INSERT INTO `subscribers`( `email`) VALUES(?)";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("s",$this->email);
        $success = $stmt->execute();
        if($success) {
          echo "<script>alert('Thank you for submitting your information.');location.href = 'home.php'</script>";
            // $data['success'] = TRUE;
            // $data['message'] = "Hi ".$this->email."<br />Thank you for submitting your information.";
        } else if ($stmt->errno) {
          echo "<script>alert('Error occurred. Please try again');location.href = 'home.php'</script>";
            // $data['success'] = FALSE;
            // $data['message'] = $stmt->error;
        }
        return $data;
    }

    public function setEmail($email) {
        $this->email = $email;
    }
     

}