class DigitoVerificador {
    calcularDigitoVerificador(data) {
        let impares = 0;
        let pares = 0;

        for (let i = 0; i < data.length; i++) {
            if (((i + 1) % 2) != 0) {
                impares += parseInt(data[i]);
            }
            else {
                pares += parseInt(data[i]);
            }
        }

        const suma = (impares * 3) + pares;

        const ultimo_digito = suma.toString().substring(suma.toString().length-1);

        let digito_verificador = 0;

        if (ultimo_digito != 0) {
            digito_verificador = 10 - ultimo_digito;
        }

        return digito_verificador;
    }
}

$('#btn-verificar').on('click', function() {
    let dv = new DigitoVerificador();

    $('#out').text('Digito verificador: ' + dv.calcularDigitoVerificador($('#fac-data').val()));
});