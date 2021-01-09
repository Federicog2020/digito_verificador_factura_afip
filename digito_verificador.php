<?php
class DigitoVerificador
{
    public function CalcularDigitoVerificador(String $fac_data = '')
    {
        $impares = 0;
        $pares = 0;

        for ($i=0; $i < strlen($fac_data); $i++) { 
            if ((($i + 1) % 2) != 0) { //Posición Impar
                $impares += $fac_data[$i];
            }
            else { //Posición Par
                $pares += $fac_data[$i];
            }
        }

        $suma = ($impares * 3) + $pares;

        $ultimo_digito = substr($suma, -1, 1);

        $digito_verificador = 0;

        if ($ultimo_digito != 0) {
            $digito_verificador = 10 - $ultimo_digito;
        }

        return $digito_verificador;
    }
}

$data = $_GET['data'];
echo 'Data: '.$data.'<br/>';

$dv = new DigitoVerificador();
echo 'Digito verificador: '.$dv->CalcularDigitoVerificador($data);
?>