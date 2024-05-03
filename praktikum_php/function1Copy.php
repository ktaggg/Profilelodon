<?php
function tampil_genap(){
for ($i =1; $i<=20; $i++){
if ($i % 2 == 0){
echo "$i ";
        }
    }
}
//pemanggil fungsi

echo "Bilanggan genap dari 1-20 :<br/>"; tampil_genap();
?>