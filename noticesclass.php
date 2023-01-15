<?php
 include ("db connect.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<body>
    
<?php
class notices
{
    public $notice_id;
    public $category;
    public $title;
    public $issue_date;
    public $expiry_date;


    public function __construct(){
         $obj = new dbase;
        $this->conn = $obj->connect();  
    }


    public function getdata()
    {
$sql = "SELECT *  FROM notices";
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
function add_notices()
{

}

  
}
$notices= new notices;
$result = $notices->getdata();
?>
</body>
</html>