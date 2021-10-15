<html>
    <head><title> Receiving Input </title></head>
         <body>
             <h1 size=10>Thank you: Got Your Input.</h1><br>
             <?php
                $name = $_GET['name'];
                $id = $_GET['id'];
                $class = $_GET['class'];
                $uni = $_GET['uni'];
                $hobby1 = $_GET['hobby1'];
                $hobby2 = $_GET['hobby2'];
                $hobby3 = $_GET['hobby3'];
                $sex = $_GET['sex'];

                print ("Hello, $name <br>"); 
                echo ("ID: $id <br>");
                print ("You are studying at $class, $uni");
                print ("<br> Your hobby :");
                echo ("<ol>
                        <li> $hobby1 </li>
                        <li> $hobby2 </li>
                        <li> $hobby3 </li>
                     </ol>
                     ");
                echo ("Sex: $sex");
             ?>
         </body>
</html>