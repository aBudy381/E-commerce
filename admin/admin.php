<?php
session_start();
//$_SESSION['username'] = "user";
?>
<h1>Bienvenue,<?php echo $_SESSION['username'];?></h1>
<br/>
<a href="?action=add">Add a product</a></br>
<a href="?action=modify_delete">Modify / Delete a product</a></br>
<?php 

/*-----------------------------------------------------------------------------*/
/* ************** DATABASE CONNECTION *********************** */
/*---------------------------------------------------------------------------*/
               /* try
                {
                 $pdo= new PDO('mysql:host=localhost;dbname=projet_php','root','');
                 $pdo->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER);//lowercase names
                 $pdo=setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);//errors launch exceptions
                }
                catch(Exception $e){
                    echo'an error has occured !';
                    die();
                }*/
$dsn = 'mysql:dbname=projet_php;host=127.0.0.1';
$user = 'root';
$password = '';

try {
$dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
echo 'Connexion has failed : ' . $e->getMessage();
}


if(isset($_SESSION['username'])){

    if(isset($_GET['action'])){

     /**-------------------- add action ---------------------- **/

    if($_GET['action']=='add'){

        if(isset($_POST['submit'])){

            $title=$_POST['title'];
            $description=$_POST['description'];
            $price=$_POST['price'];

            if($title&&$description&&$price){

                 /*----------------------------------------------------------------------------*/
                /* ************** INSERT INTO DATABASE *********************** */
                /*----------------------------------------------------------------------------*/

            /* ** edit by abdou   from line 56 to 67 add error*/
                echo "data recived";


                try {


                    $insertProd = $dbh->prepare("INSERT INTO products VALUES(NULL,'$title','$description',$price)");
                    $insertProd->execute();
                    echo "prod add !!";
                  } catch(PDOException $e) {
                    echo $e->getMessage();
                  }
                /*
                $insert = $dbh->prepare("INSERT INTO products VALUES($title,$description,$price)");
                $insert->execute();
               /* $sql = "INSERT INTO products (title, description, price) VALUES ($title,$description,$price)";
                $stmt= $pdo->prepare($sql);
                $stmt->execute([$title, $description, $price]);
                echo'<script>alert("Adding new products is successfuly done !")</script>';*/

            }else{
                echo'Please make sure that all the blanks are filled !';
            }
        }
        require_once('form_add.php');
        
 ?>

 <?php 
        
    /**-------------------- modify / delete action ---------------------- **/
    }else if($_GET['action']=='modify_delete'){
        ?>

 <div class="container">                                        
  <table border=1>
  <thead>
      <th>Title</th>
      <th>description</th>
      <th>price</th>
      <th>Action</th>
      </thead> 
      <tbody>                               
<?php

        /* affichage des produits */
      
        $select = $dbh->prepare("SELECT * FROM products");
        $select->execute();
        while($prod=$select->fetch(PDO::FETCH_OBJ)){
           // echo $prod->title;
            //echo 'test';
            ?>
                 
                       <tr>
                          <td></td>
                          <td><?php echo $prod->title;?></td>
                          <td><?php echo $prod->description;?></td>
                          <td><?php echo $prod->price;?></td>   
          
             
            <td><a class="btn btn-primary btn-circle" href="?action=modify&amp;id=<?php echo $prod->id; ?>">Modify</a>
             <a href="?action=delete&amp;id=<?php echo $prod->id; ?>">Delete</a></td></tr>
             
            
        
             
             <?php }?>
             </tbody>
            </table>
            </div>
             <?php
            
            
            /*modify*/
            /************** TO CORRECT  *****************/
     if($_GET['action']=='modify'){  
        if(isset($_GET['id'])){
            if(isset($_POST['title'])){
                $id=$_GET['id'];
                $title=$_POST['title'];
                $description=$_POST['description'];
                $price=$_POST['price'];

                try {
                  
                    $delProd = $dbh->prepare("update products set title='$title', desq = '$description', price = $price where id=$id");
                    $delProd->execute();
                    echo $delProd->rowCount() . " update !!!";
                  } catch(PDOException $e) {
                    echo $e->getMessage();
                  }

            }
            $id=$_GET['id'];
            $update = $dbh->prepare("SELECT * FROM products where id=$id");
            $update->execute(); 
            $data=$update->fetch(PDO::FETCH_OBJ);
            var_dump($data);
        }else{

            header('Location: index.php');
        
        
        }
require_once('form_modify.php');
 

    }else if($_GET['action']=='delete'){

        /* detele */
        $id=$_GET['id'];
        $delete = $dbh->prepare("DELETE FROM products where id=$id");
        $delete->execute();

    }else{

        die('An Error has occured, please try again later');
    }


    //else{
         

    }}}
else{
    header('Location: ../index.php');
}

?>