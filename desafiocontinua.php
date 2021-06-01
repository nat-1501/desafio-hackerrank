for ($i = 1; $i < $n+1; $i ++) {
    
        $repeteEspaco = $n+1;
        $resultado = str_repeat('#', $i) . "\n" ;
        
        echo str_pad($resultado, $repeteEspaco, " ", STR_PAD_LEFT);
        
       // $resultado = $resultado . "#";
         
    }