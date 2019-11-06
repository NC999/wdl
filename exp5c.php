  <?php
        $txt1 = $_POST['n1'];
        $txt2 = $_POST['n2'];
        $res = $_POST['res'];
        if(isset($_POST['n1'])) {
            if(isset($_POST['plus']))
            {
                $txt1=$_POST['n1'];
                $txt2=$_POST['n2'];
                $res=$txt1+$txt2;
                echo "Addition: $res";
            }

            if(isset($_POST['sub']))
            {
                $txt1=$_POST['n1'];
                $txt2=$_POST['n2'];
                $res=$txt1-$txt2;
                echo "Subtraction: $res";
            }
            
            if(isset($_POST['mul']))
            {
                $txt1=$_POST['n1'];
                $txt2=$_POST['n2'];
                $res=$txt1*$txt2;
                echo "Multiplication: $res";
            }
            
            if(isset($_POST['div']))
            {
                $txt1=$_POST['n1'];
                $txt2=$_POST['n2'];
                $res=$txt1/$txt2;
                echo "Division: $res";
            }
        }
    ?>