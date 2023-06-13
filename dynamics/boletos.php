<?php
$nombre=(isset($_POST["nombre"]) && $_POST["nombre"] !="")? $_POST["nombre"] : "Sin llenar";
 $apellido=(isset($_POST["apellido"]) && $_POST["apellido"] !="")? $_POST["apellido"] : "Sin llenar";
 $fecha=(isset($_POST["fecha"]) && $_POST["fecha"] !="")? $_POST["fecha"] : "Sin llenar";
 $evento=(isset($_POST["evento"]) && $_POST["evento"] !="")? $_POST["evento"] : false;
 $unidades=(isset($_POST["unidades"]) && $_POST["unidades"] !="")? $_POST["unidades"] : 0;
 $zona=(isset($_POST["zona"]) && $_POST["zona"] !="")? $_POST["zona"] : false;
 $lugar=(isset($_POST["lug"]) && $_POST["lug"] !="")? $_POST["lug"] : false;
 $extras=(isset($_POST["extras"]) && $_POST["extras"] !="")? $_POST["extras"] : "Ninguno";
 $frase;
 if ($evento=="The Imagination Movers") {
     $frase='Vamos a gritar "Que estupenda idea"';
 } else {
     if ($evento=="Tributo a Encias sangrantes Murphy") {
         $frase='El blues no es para que me sienta mejor, es para hacer que otros se sientan peor';
     } else {
         if ($evento=="Ghost Cats") {
             $frase='Metro pantitlan, me van a asaltar';
         } else {
             if ($evento=="Monologo Huggy wuggy por Alexander") {
                 $frase='<a href="https://youtu.be/DJstkHek4BI"> el rap de huggy wuggy</a>';
             }
             
         }
         
     }
     
 }
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
    $ilugar='..\statics\metropolitan.jpg';
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
for ($i=0; $i<=$unidades-1; $i++) { 
        echo "
            <!DOCTYPE html>
            <html lang='en'>
            <head>
            <meta charset='UTF-8'>
            <meta http-equiv='X-UA-Compatible' content='IE=edge'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>ticketmasteruwu</title>
            <link rel='icon' href='http://1.bp.blogspot.com/-zbjF2mKA1zw/VWU0DJDe8rI/AAAAAAAABXY/j2c8P2FiCAM/s1600/_150526-imagenes-gatitos-fotografia-gato-minino-imajen-imajen-felino-foto-gata.jpg' type='image/jpg'
            <body>   
            <table border='3' style='border-collapse:collapse;' cellpadding='40px'>
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
                            <td colspan='4'> $frase</td>
                        </tr>
                </table> 
                <br> 
            </body>
            </html>
        ";
}
?>
