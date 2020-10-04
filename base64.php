<?php
 
echo "(TOOL ENCODE DAN DECODE by BandungLautanApi🔥)\n1. Encode\n2. Decode\n>> ";
$inp = trim(fgets(STDIN)); 
 
if($inp == 1){   
    echo "MASUKAN KATA BRO: ";
    $enc = trim(fgets(STDIN));
    $encoded = base64_encode($enc); 
    echo "HASIL ENCODE ~> $encoded \n"; 
}
else if($inp == 2){
    echo "MASUKAN STRING BASE64 NYA OM: ";
    $dec = trim(fgets(STDIN));
    $decoded = base64_decode($dec);
    echo "HASIL DECODE ~> $decoded \n";
}
else {
    echo "Pilihan tidak tersedia !\n"; 
}
 
 
?>