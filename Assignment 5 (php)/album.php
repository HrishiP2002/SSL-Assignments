
<?php

session_start();
if($_SESSION['loggedin']!=true)
{
echo 'You cannot access this page without logging into your account. <br> Please <a href="index.php">login</a>';
exit();
}

{



    // $currrentImage = 'Image/image1.jpg';

    $len = 10;
    $Image = [];
    $Image[0]="image1.jpg";
    $Image[1]="image2.jpg";
    $Image[2]="image3.jpg";
    $Image[3]="image4.jpg";
    $Image[4]="image5.jpg";
    $Image[5]="image6.jpg";
    $Image[6]="image7.jpg";
    $Image[7]="image8.jpg";
    $Image[8]="image9.jpg";
    $Image[9]="image10.jpg";

    $_SESSION['ImageArray'] = $Image;
    $_SESSION['length'] = &$len;

   
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Album Main Page</title>
        <style>
            .image {
                padding:90px;
                padding-left:450px;
                border: red;
            
            }
            .btn1 {
                padding-left:200px;

            }
            .button1 {
                font-size: 24px;

            }
            .btn2 {
                display:inline block;
                padding-left:700px;
            }
            .button2 {
                font-size: 24px;
            }

        </style>
    </head>

    <body>
        <h1>Gallery: Unraveling the Cosmos</h1>
        <div class="image" >
        <img src="Images/image1.jpg"  width="500px" height="400px" id="image">
        </div>
        <div>
            <button onclick= "first()">First</button>
            <span class="btn1"> <button class="button1" name="tap" id="tap" onclick="Previous()">Previous</button> </span>
           <span class="btn2"> <button class="button2" name="press" id="press" onclick="Next()">Next</button> </span>
           <button onclick="last()">Last</button>
        </div>
        

        <script type="text/javascript">
            var x = 1;

         function Previous()
         {
             if(x>1)
             {
                 x--;
                  var txt = "Images/image" + x + ".jpg";
                 document.getElementById("image").src = txt;
             }
         }

         function Next()
         {
             x++;
             var txt2 = "Images/image" + x + ".jpg";

             {
             document.getElementById("image").src = txt2;
             }
            //  else
            //  {
            //      document.getElementById("press").disabled = true;
            //  }
         }

         function first()
         {
             document.getElementById("image").src = "Images/image1.jpg";
             x = 1;
         }

         function last()
         {
             <?php
             $len = $_SESSION['length'];
             ?>
             var len = <?php echo $len ?>;

             document.getElementById("image").src = "Images/image"+len+".jpg";

         }

        </script>
    </body>
</html>
    <?php
    
        }
// else

// {
//     echo "Please login to continue!!";
// }

?>