<html>
    <body>
        Welcome <?php echo $_POST["nama"];?><br>
        Your Email Addres is: <?php echo $_POST["email"];

    $servername="ec2-18-209-78-11.compute-1.amazonaws.com";
    $username="pmtturmacknyzs";
    $password="fe6183016e31edbc703a9a849f28049468a03b925aa7be5dbff6bc1e223f1fbd";
    $dbname="mydb";
    $nama=$_POST["nama"];
    $email=$_POST["email"];
    $kritik=$_POST["kritik"];
    
    //Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    //Check connection
    if ($conn->connect_error) {
        die("Connection failed:".$conn->connect_error);
    }
    
    $sql = "INSERT INTO myguests (nama, email, kritik)
    VALUES ('$nama', '$email', '$kritik');";
    
    if($conn->query($sql) === TRUE){
        echo "New records created succesfully";
    } else {
        echo "Error: ". $sql . "<br>" . $conn->error;
    }
    
    $conn = new mysqli ($servername, $username, $password, $dbname);
    $sql=  "SELECT nama, email, kritik FROM myguets";
   
    ?>
    </body>
</html>
