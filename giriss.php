
<?php

if ($_POST['email'] == "b211210089@sakarya.edu.tr" && $_POST['password'] =="b211210089" ){
    echo "BAŞARIYLA GİRİŞ YAPİLMİŞTİR <br>";
    header ("Refresh: 2; URL=anasayfa.html");
    
  
    
    
}
else{
    echo "Giris Basarisiz";

}
echo "<br><br>";

?>