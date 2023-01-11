<?php 
    include "inc/header.php";
?>
 

    <div class="para">
        <?php
            $dsn = "mysql:dbname=userdata; host=localhost;";
            $user = "root";
            $pass = "";
            
            try {
                $pdo=new PDO($dsn,$user,$pass);
           } catch (Exception $s) {
                echo "Connectin fail....";getMessage();
            }
            $id=4;
            $name="md.nishat";
            $mail="nishat@gmail.com";
            $skill="C#,java";
            $age=20;
            
//            $sql="insert into tbl_user(id,name,email,skill,age) values(?,?,?,?,?)";
//            $stmt=$pdo->prepare($sql);
//            $arr=array($id,$name,$mail,$skill,$age);
//            $stmt->execute($arr);
            
            $sql="insert into tbl_user(name,email,skill,age) values(:name, :email, :skill, :age)";
            $stmt=$pdo->prepare($sql);
            $stmt->bindParam(':name',$name);
            $stmt->bindparam(':email',$mail);
            $stmt->bindParam(':skill',$skill);
            $stmt->bindvalue(':age',20);
            $stmt->execute();
            
        ?>
       
    </div>
 
<?php include "inc/footer.php"; ?>