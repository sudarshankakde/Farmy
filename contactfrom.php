<?php
$servername="localhost";
$username="root";
$password="";
$dbname="dbdemo";
$conn=mysqli_connect($servername,$username,$password,$dbname);

if(isset($_POST['submit']))
{
   
    if(!empty($_POST['name']) && !empty($_POST['mail'])&& !empty($_POST['message'])))
    {
       $name=$_POST['name'];
     $email=$_POST['mail'];
     $message=implode(',',$_POST['message']);
 $query="INSERT INTO basic (`name` , `mail`,`message`) VALUES ('$name','$mail','$message')";
  

   $run=mysqli_query($conn,$query)  or die (mysqli_error());

                   if($run)
                    { 
                     echo "Form submitted successfully";
                   }
                    else
                     { 
                        echo "form not submitted "; 
                    } 
         } 
            else
               { 
                  echo "all fileds required"; 
         }
 }
?>