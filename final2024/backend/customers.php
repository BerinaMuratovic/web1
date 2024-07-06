
    <php>

    
    $conn = new PDO("mysql:host=$servername;dbname = $dbname",$username,$password);
     
    
  
    
    $sql = "SELECT * FROM `customers`";
    $all_categories = mysqli_query($con,$sql);
  
   
    if(isset($_POST['submit']))
    {
        
        $first_name = mysqli_real_escape_string($con,$_POST['first_name']);
        
       
        $id = mysqli_real_escape_string($con,$_POST['Category']); 
        
        
       
        $sql_insert = 
        "INSERT INTO `customers`(`first_name`, `id`)
            VALUES ('$first_name','$id')";
          
         
          if(mysqli_query($con,$sql_insert))
        {
            echo '<script>alert("customer added successfully")</script>';
        }
    }

</php>