

<?php
   
   $con = mysqli_connect('localhost','root','');
   
   if(!$con)
   {
    echo 'Невозможно подключиться к серверу';
   }
   
   if(!mysqli_select_db($con,'drivingschool'))
   {
    echo 'Ошибка базы данных';
   }
   
   $name = $_POST['name'];
$surname = $_POST['surname'];
$category = $_POST['category'];
$number = $_POST['number'];
$email = $_POST['email'];
   
   $sql ="INSERT INTO autotb (name, surname, category, number, email) VALUES ('$name', '$surname', '$category', '$number', '$email')";
   
   if(!mysqli_query($con,$sql))
   {
    echo 'Неизвестная ошибка';
   }
   
   else
   {
    echo 'Данные успешно внесены!';
   }
  
?>