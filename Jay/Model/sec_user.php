<?php
include_once __DIR__.'/../Configure/dbconnect.php';

class sec_user extends dbconnect
{
    public $UserID;
    public $UserName;
    public $Email;
    public $ImagePath;
    public $UserAccess;
    public $Password;
    public $MobileNumber;
    public $CreatedUserID;
    public $IsActive;
    public $LastloginTime;
    public $PasswordModified;
    public $IsFirstTime;
    public $Sequence;
    public $Created;
    public $Modified;
    public $Deleted;

    public function selectAllDataForClient()
    {
        $select = "SELECT 
            UserID,
            UserName,
            Email,
            ImagePath,
            UserAccess,
            Password,
            MobileNumber,
            CreatedUserID,
            IsActive,
            LastloginTime,
            PasswordModified,
            IsFirstTime,
            Sequence,
            Created,
            Modified,
            Deleted
        FROM  
            sec_user
        WHERE 
            IsActive = 1
        ORDER BY 
            Sequence ASC";

        $select1 = $this->connection->query($select);
        return $select1;
    }

    public function selectAllDataForAdmin()
    {
        $select = "SELECT 
            UserID,
            UserName,
            Email,
            ImagePath,
            UserAccess,
            Password,
            MobileNumber,
            CreatedUserID,
            IsActive,
            LastloginTime,
            PasswordModified,
            IsFirstTime,
            Sequence,
            Created,
            Modified,
            Deleted
        FROM  
            sec_user
        WHERE 
            IsActive IN (0, 1) 
        ORDER BY 
            IsActive ASC";

        $select1 = $this->connection->query($select);
        return $select1;
    }
    public function LastUser()
    {
        $select = "SELECT 
        UserID
    FROM  
        sec_user
    ORDER BY 
        UserID DESC
    LIMIT 1";

$result = $this->connection->query($select);

// Check if the query was successful
if ($result) {
// Fetch the row as an associative array
$row = $result->fetch_assoc();

// Free the result set
$result->free_result();

// Return the fetched data (the UserID or null if no records were found)
return $row;
} else {
// Handle the error (you might log it or show an error message)
// For simplicity, we return null here
return null;
}
        
    }
    public function selectByPK($pk)
    {
        $select = "SELECT 
            UserID,
            UserName,
            Email,
            ImagePath,
            UserAccess,
            Password,
            MobileNumber,
            CreatedUserID,
            IsActive,
            LastloginTime,
            PasswordModified,
            IsFirstTime,
            Sequence,
            Created,
            Modified,
            Deleted
        FROM  
            sec_user
        WHERE 
            UserID = $pk";

        $select1 = $this->connection->query($select);
        return $select1;
    }
    public function insertData()
    {
        $newPassword = bin2hex(random_bytes(4));
        $datetime = date('Y-m-d H:i:s');
        try {
            $select = "INSERT INTO `sec_user` 
            (
                UserName,
                Email,
                ImagePath,
                UserAccess,
                Password,
                MobileNumber,
                CreatedUserID,
                IsActive,
                IsFirstTime,
                Sequence,
                Created,
                Modified
            ) 
            VALUES 
            (
                '$this->UserName',
                '$this->Email',
                '$this->ImagePath',
                '$this->UserAccess',
                '$newPassword',
                '$this->MobileNumber',
                '$this->CreatedUserID',
                '$this->IsActive',
                '1',
                '$this->Sequence',
                '$datetime',
                '$datetime'
            )";
    
            $select1 = $this->connection->query($select);
    
            include_once __DIR__.'/../Configure/dbconfig.php';
    
            $mailObj = new sendmail(); // Initialize the $mailObj object
    
            $mailObj->ReciverEmail = $this->Email;
            $mailObj->Subject = "Sign Up";
            $mailObj->Body = " 
            <style>
            body {
                font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
                line-height: 1.6;
                color: #333333;
                background-color: #f5f5f5;
            }
            .container {
                max-width: 600px;
                margin: 0 auto;
                padding: 20px;
                background-color: #ffffff;
                border: 1px solid #dddddd;
                border-radius: 4px;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            }
            h1 {
                color: #0066cc;
                font-size: 24px;
                margin-top: 0;
            }
            p {
                margin-bottom: 20px;
                font-size: 16px;
            }
            strong {
                font-weight: bold;
            }
            
            
            .footer {
                text-align: center;
                color: #999999;
                font-size: 12px;
                margin-top: 40px;
            }
        </style> <div class='container'>
            
            <h2>Hello " . $this->UserName . "</h2>
            <p>Welcome to Kingdom Ceramic</p>
            <p>Your username is: <strong>" . $this->UserName . "</strong></p>
            <p>Your email is: <strong>" . $this->Email . "</strong></p>
            <p>Your password is: <strong>" . $newPassword . "</strong></p>
        </div>
        <div class='footer'>
        <br/>
        <br/>
        <br/>
            <strong>Powred By Unique IT Solution</strong>
        </div>";
    
            $mailObj->sendMail();
            return $select1;
        } catch (Exception $e) {
            echo "<script>alert('There Are Something Problem');</script>";
        }
    }

    public function updateData($pk)
    {
        $datetime = date('Y-m-d H:i:s');
        try {
            $select = "UPDATE sec_user
            SET 
                UserName = '$this->UserName',
                Email = '$this->Email',
                ImagePath = '$this->ImagePath',
                UserAccess = '$this->UserAccess',
                MobileNumber = '$this->MobileNumber',
                CreatedUserID = '$this->CreatedUserID',
                IsActive = '$this->IsActive',
                Sequence = '$this->Sequence',
                Modified = '$datetime'
            WHERE 
                UserID = $pk";

            $select1 = $this->connection->query($select);
            return $select1;
        } catch (Exception $e) {
            echo "<script>alert('There Are Something Problem');</script>";
        }
    }
    public function userEdit($pk)
    {
        $datetime = date('Y-m-d H:i:s');
        try {
            $select = "UPDATE sec_user
            SET 
                UserName = '$this->UserName',
                Email = '$this->Email',
                ImagePath = '$this->ImagePath',
                MobileNumber = '$this->MobileNumber',
                CreatedUserID = '$this->CreatedUserID',
                Modified = '$datetime'
            WHERE 
                UserID = $pk";

            $select1 = $this->connection->query($select);
            return $select1;
        } catch (Exception $e) {
            echo "<script>alert('There Are Something Problem');</script>";
        }
    }

    public function delete($pk)
    {
        
        $datetime = date('Y-m-d H:i:s');
        $select = "UPDATE sec_user 
        SET 
            IsActive = 2,
            Deleted = '$datetime'
        WHERE 
            UserID = $pk";

        $select1 = $this->connection->query($select);
        return $select1;
    }

     //login
     public function login()
     {
         $select = "SELECT 
          UserID,
          UserName,
          Password,
          Email,
          MobileNumber,
          ImagePath,
          isFirstTime,
          CreatedUserID,
          UserAccess,
          IsActive,
          Created,
          Modified
           FROM  
           sec_user
           Where  
           (UserName='$this->UserName' OR
           Email='$this->Email' OR
           MobileNumber='$this->MobileNumber') AND 
           Password='$this->Password' AND IsActive = 1
           ;";
 
         $select1 = $this->connection->query($select);
         return $select1;
     }

     public function updatepassword($pk)
     {
 
         $datetime = date('Y-m-d H:i:s');
         $select = "UPDATE sec_user 
      SET 
     
      Password='$this->Password',
      isFirstTime=0,
      PasswordModified='$datetime'
     
       WHERE 
       UserID=$pk";
 
         $select1 = $this->connection->query($select);
 
         return $select1;
     }
     public function selectbyemail($email)
    {
        $select = "SELECT 
     UserID
      FROM  
      sec_user
      Where  Email='$email' AND IsActive = 1;";

        $select1 = $this->connection->query($select);
        return $select1;
    }

    public function forgotpassword($pk)
    {
           
        //fetch username and email
        $userObj = new sec_user();
        $result = $userObj->selectbypk($pk);
        $row = mysqli_fetch_assoc($result);
        

        // generate new 4 charector password
        $newPassword = bin2hex(random_bytes(4));
        include_once __DIR__.'/../Configure/dbconfig.php';
    
            $mailObj = new sendmail();

$mailObj->ReciverEmail=$row['Email'];
$mailObj->Subject="Forgot Password";
$mailObj->Body = " 
<style>
body {
    font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
    line-height: 1.6;
    color: #333333;
    background-color: #f5f5f5;
}
.container {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    background-color: #ffffff;
    border: 1px solid #dddddd;
    border-radius: 4px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}
h1 {
    color: #0066cc;
    font-size: 24px;
    margin-top: 0;
}
p {
    margin-bottom: 20px;
    font-size: 16px;
}
strong {
    font-weight: bold;
}
.logo {
    text-align: center;
    margin-bottom: 20px;
}
.logo img {
    max-width: 150px;
}
.footer {
    text-align: center;
    color: #999999;
    font-size: 12px;
    margin-top: 40px;
}
</style> <div class='container'>

<h1>Hello " . $row['UserName'] . "</h1>
<p>Welcome to Kingdom Ceramic</p>
<p>Your New Password is: <strong>" . $newPassword . "</strong></p>

</div>
<div class='footer'>
<strong>Powered By Unique IT Solution</strong>
</div>";
$mailObj->sendMail();


        $datetime = date('Y-m-d H:i:s');
        $select = "UPDATE sec_user 
        SET 
        Password='$newPassword',
        PasswordModified='$datetime',
        isFirstTime=1
       
         WHERE 
         UserID=$pk";
     
        $select1 = $this->connection->query($select);

        return $select1;
    }
}
