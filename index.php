    <!DOCTYPE html>
    <html>
    <head>
        <title>Azure Input Form</title>
    </head>
    <body>
    <h1>INSERT</h1>
        <form method="get">
        Username:
            <input type="text" name="un" placeholder="user name" required><br><br>
        Contact: 
            <input type="tel" name="phone" placeholder="contact" required><br><br>
            <input type="submit" name="submit" value="Submit">
        </form>
    </body>
    </html>
    <?php
    #echo phpinfo();
    $conn = mysqli_connect('wordpress','root','password','wordpress'); 
    if(isset($_GET['submit']))
    {
            extract($_GET);
            $un = $un;
            $phone = $phone;
            $sql = "INSERT INTO data VALUES ('$un','$phone')";
            $query = mysqli_query($conn,$sql);
            if($query)
            {
                echo "data inserted";
            }
    }
    ?>