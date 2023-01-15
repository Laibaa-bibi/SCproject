<?php
 include ("db connect.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<body>
    
<?php
class notification
{
    public $notification_id;
    public $title;
    public $issue_date;
    public $expiry_date;

    public function __construct(){
         $obj = new dbase;
        $this->conn = $obj->connect();
        
    }

    public function getdata()
    {
$sql = "SELECT *  FROM notification";
   // $result = $this->conn->query($sql);
    $result =mysqli_query($this->conn, $sql);
       
        if($result) {
        
            if ($result->num_rows > 0) {
                return $result;
            } 
            else 
            {
                 echo "0 results";
                //return false;
            }
        }
   }
    
   function view()
{

}
function add_notifications()
{

}
function delete_notification()
{
    
}
  
}
$notification= new notification;
$result = $notification->getdata();
?>
</body>
</html>