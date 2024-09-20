<?php

include "db_connection.php";
if(isset($_POST['add_product'])){
   $p_name = $_POST['p_name'];
   $p_price = $_POST['p_price'];
   $p_image = $_FILES['p_image']['name'];
   $p_image_tmp_name = $_FILES['p_image']['tmp_name'];
   $p_image_folder = 'image/'.$p_image;

   $sql = "INSERT INTO product(name, price, image) 
            VALUES('$p_name', '$p_price', '$p_image')";
$insert_query = $conn->query($sql);

   if($insert_query){
      move_uploaded_file($p_image_tmp_name, $p_image_folder);
      $message[] = 'product add succesfully';
   }else{
      $message[] = 'could not add the product';
   }
};

if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   $sql = "DELETE FROM product WHERE id = $delete_id ";
   $delete_query = $conn->query($sql);
   if($delete_query){
      header('location:admin.php');
      $message[] = 'product has been deleted';
   }else{
      header('location:admin.php');
      $message[] = 'product could not be deleted';
   };
};

if(isset($_POST['update_product'])){
   $update_p_id = $_POST['update_p_id'];
   $update_p_name = $_POST['update_p_name'];
   $update_p_price = $_POST['update_p_price'];
   $update_p_image = $_FILES['update_p_image']['name'];
   $update_p_image_tmp_name = $_FILES['update_p_image']['tmp_name'];
   $update_p_image_folder = 'image/'.$update_p_image;

   $sql=  "UPDATE product SET name = '$update_p_name', price = '$update_p_price', image = '$update_p_image' WHERE id = '$update_p_id'";
   $update_query = $conn->query($sql);

   if($update_query){
      move_uploaded_file($update_p_image_tmp_name, $update_p_image_folder);
      $message[] = 'product updated succesfully';
      header('location:admin.php');
   }else{
      $message[] = 'product could not be updated';
      header('location:admin.php');
   }

}

?>

<?php

   
   if(isset($_GET['edit'])){
      $edit_id = $_GET['edit'];
     $sql=  "SELECT * FROM product WHERE id = $edit_id";
     $edit_query =$conn->query($sql);
      if(mysqli_num_rows($edit_query) > 0){
         while($fetch_edit = mysqli_fetch_assoc($edit_query)){
   ?>
    <?php
            };
         };
         echo "<script>document.querySelector('.edit-form-container').style.display = 'flex';</script>";
      };
   ?>

//used to display the items from the product table
<?php
         
         $sql= "SELECT * FROM product";
         $select_products =$conn->query($sql);
         if(mysqli_num_rows($select_products) > 0){
            while($row = mysqli_fetch_assoc($select_products)){
      ?>
      <?php
            };    
            }else{
               echo "<div class='empty'>no product added</div>";
            };
         ?>