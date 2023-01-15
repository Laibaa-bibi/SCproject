<!DOCTYPE html>
<html>
<head>
     <link rel="stylesheet" href="styling.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </style>
</head>
<body>


<?php
 require_once 'header.php';
 require_once 'faccade.php';

   class myprogram
   {
     public $prog_id;
     public $prog_name;
     public $prog_duration;
     public $prog_description;
     public $age_limit;
     public $program;


     function set_program($p) {
$this->program = $p;
}

function get_program() {
return $this->program ;
}


function dbFaccade($p)
{

    $objfaccade = new faccade();
    $result = $objfaccade->get_program_details($p);
    return $result;       
}

function view()
{

}
function add_program()
{

}
function update_program()
{
    
} 


}

    $p1=new myprogram();
    $p1->set_program($_POST['prog']);
   echo $p1->dbFaccade($_POST['prog']);

require_once 'footer.php';
?>

</body>
</html>