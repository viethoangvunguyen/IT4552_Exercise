<html>
    <head><title>Conditional Test</title></head>
    <body>
        <?php
        
        $first = $_GET['first_name'];
        $middle = $_GET['middle_name'];
        $last = $_GET['last_name'];

        print ("Hi $first ! Your full name is $last $middle $first .");
        if($first == $last){
            print ("$first and $last are equal");
        }
        if($first < $last){
            print ("$first is less than $last");
        }
        if($first > $last){
            print ("$first is greater than $last");
        }
        print("<br></br>");

        $grade_1 = $_GET['grade_1'];
        $grade_2 = $_GET['grade_2'];
        $final = (2 * $grade_1 + 3 * $grade_2)/5 ;

        if($final > 89 ){
            print ("Your final grade is $final. You got an A. Congratulation! ");
        }elseif($final > 79 ){
            print ("Your final grade is $final. You got an B.");
        }elseif($final > 69 ){
            print ("Your final grade is $final. You got an C.");
        }elseif($final > 59 ){
            print ("Your final grade is $final. You got an D.");
        }
        elseif($final > 0 ){
            print ("Your final grade is $final. You got an F.");
        }else {
            print ("Illegal grade less than 0. Final grade = $final");
        }
        ?>
    </body>
</html>