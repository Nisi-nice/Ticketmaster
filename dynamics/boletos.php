<?php
$nombre=(isset($_POST["nombre"]) && $_POST["nombre"] !="")? $_POST["nombre"] : "Sin llenar";
 $apellido=(isset($_POST["apellido"]) && $_POST["apellido"] !="")? $_POST["apellido"] : "Sin llenar";
 $fecha=(isset($_POST["fecha"]) && $_POST["fecha"] !="")? $_POST["fecha"] : "Sin llenar";
 $evento=(isset($_POST["evento"]) && $_POST["evento"] !="")? $_POST["evento"] : false;
 $unidades=(isset($_POST["unidades"]) && $_POST["unidades"] !="")? $_POST["unidades"] : 0;
 $zona=(isset($_POST["zona"]) && $_POST["zona"] !="")? $_POST["zona"] : false;
 $lugar=(isset($_POST["lug"]) && $_POST["lug"] !="")? $_POST["lug"] : "Sin llenar";
 $extras=(isset($_POST["extras"]) && $_POST["extras"] !="")? $_POST["extras"] : "Ninguno";
 $imagen;
if ($evento=="The Imagination Movers") {
    $imagen='..\statics\imovers.jpg';
} else {
    if ($evento=="Tributo a Encias sangrantes Murphy") {
        $imagen='..\statics\murphy.jpg';
    } else {
        if ($evento=="Ghost Cats") {
            $imagen='..\statics\GeisCalientes.png';
        } else {
            if ($evento=="Monologo Huggy wuggy por Alexander") {
                $imagen='..\statics\huggy.jpg';
            }
            
        }
        
    }
    
}
$ilugar;
if ($lugar=="Teatro metropolitan") {
    $ilugar='..\statics\imovers.jpg';
} else {
    if ($lugar=="auditorio telmex") {
        $ilugar='..\statics\telmex.jpg';
    } else {
        if ($lugar=="Palacio de los deportes") {
            $ilugar='..\statics\deportes.png';
        } else {
            if ($lugar=="Auditorio Nacional") {
                $ilugar='..\statics\audnac.jpg';
            }
            
        }
        
    }

}
$izona;
if ($zona=="Luneta A") {
    $izona='..\statics\lunetaa.jpg';
} else {
    if ($zona=="Luneta B") {
        $izona='..\statics\lunetab.jpg';
    } else {
        if ($zona=="Luneta C") {
            $izona='..\statics\lunetac.jpg';
        } else {
            if ($zona=="Palco izquierdo A") {
                $izona='..\statics\pia.png';
            } else {
                if ($zona=="Palco izquierdo B") {
                    $izona='..\statics\pib.jpg';
                } else {
                    if ($zona=="Palco derecho A") {
                        $izona='..\statics\pda.jpg';
                    } else {
                        if ($zona=="Palco derecho B") {
                            $izona='..\statics\pdb.jpg';
                        } else {
                            if ($zona=="Balcon A") {
                                $izona='..\statics\balconb.jpg';
                            } else {
                                if ($zona=="Balcon B") {
                                    $izona='..\statics\balcona.jpg';
                                }

                            }
                            
                        }
                        
                    }
                    
                }
                
            }

        }
          
    }
     
}
$i=0;
for ($i==1; $i==$unidades; $i++) { 
    echo "o";
}
        echo "
            <!DOCTYPE html>
            <html lang='en'>
            <head>
            <meta charset='UTF-8'>
            <meta http-equiv='X-UA-Compatible' content='IE=edge'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Document</title>
                <table border='2' style='border-collapse:collapse;' cellpadding='40px'>
                    <thead>
                        <td colspan='5'>
                             <strong>Boleto para $evento</strong>
                        </td>
                        
                    </thead>
                     <tbody>
                        <tr>
                            <td>  
                                $nombre
                            </td>
                            <td>  
                                $apellido
                            </td>
                            <td>  
                                $fecha
                            </td>
                            <td rowspan='3'>  
                                <img src= $imagen alt='imagen' width='250' height='200' >
                            </td>
                        </tr>
                        <tr>
                            <td>  
                                $lugar
                            </td>
                            <td>  
                                $zona
                            </td>
                            <td rowspan='2'>  
                                Extras:<br> $extras
                            </td>
                        </tr>
                        <tr>
                            <td>  
                                <img src= $ilugar alt='imagen' width='250' height='200' >
                            </td>
                            <td>  
                                <img src= $izona alt='imagen' width='250' height='200' >   
                            </td>
                        </tr>
                        <tr>
                            <td colspan='4'> eeee puto</td>
                        </tr>
                </table>  
            </body>
            </html>
        ";

?>
