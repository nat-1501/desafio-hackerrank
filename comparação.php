$pontosA = 0;
    $pontosB = 0;
    
    for($i= 0; $i<count($a); $i++) {
        
    if ($a[$i] > $b[$i] ){
        $pontosA = $pontosA+1;     
    
    }
        
    if ($a[$i] < $b[$i]){
        $pontosB = $pontosB+1; 
    
    }
    
     if($a[$i] == $b[$i]) {
        $pontosA = $pontosA;
        
    }

        
    }