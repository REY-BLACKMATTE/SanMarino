function fvalNumericInt(text) {
    for (i = 0; i < text.value.length; i++) {
        //intento convertir a entero.
        //si era un entero no le afecta, si no lo era lo intenta convertir
        valor = parseInt(text.value.charAt(i));
        //Compruebo si es un valor numúrico
        if (isNaN(valor)) { //entonces (no es numero)
            return false;
        }
    }
    //En caso contrario (Si era un número)
    return true;
}

function fvalNumericFloat(text) {

    //intento convertir a flotante.
    //si era un entero no le afecta, si no lo era lo intenta convertir
    valor = parseFloat(text.value);
    //Compruebo si es un valor numúrico
    if (isNaN(valor)) { //entonces (no es numero)
        return i;
    }

    //En caso contrario (Si era un número)
    else return true;
}
//FUNCION PARA NO ACEPTAR CARACTERES ESPECIALES
function fvalidarCaracter(text, tipo) {
    var cValido = true;
    var cad = "";
    var numpunto = 0;
    for (var i = 0; i < text.value.length; i++) { // El for recorre el contenido de la cadena caracter por caracter
        var band = false;
        var var1 = "(text.value.charAt(i)<'0' || text.value.charAt(i)>'9')";
        var var2 = "(text.value.charAt(i)<'a' || text.value.charAt(i)>'z') && (text.value.charAt(i)<'A' || text.value.charAt(i)>'Z') && (text.value.charAt(i)!='ñ' && (text.value.charAt(i)!='Ñ') && (text.value.charAt(i)!=' '))";
        var varpunto = "(text.value.charAt(i)!='.')";
        var varacento = "(text.value.charAt(i)!='á' && text.value.charAt(i)!='é' && text.value.charAt(i)!='í' && text.value.charAt(i)!='ó' && text.value.charAt(i)!='ú')";
        var var3 = "(text.value.charAt(i)!='.' && text.value.charAt(i)!='_' && text.value.charAt(i)!='-' && text.value.charAt(i)!='@')";
        var var4 = "(text.value.charAt(i)!='.' && text.value.charAt(i)!=',' && text.value.charAt(i)!='#' && text.value.charAt(i)!='-')";
        //Estos son los filtros
        if (tipo == 'numerico' && eval(var1))
            band = true;
        if (tipo == 'alfabetico' && eval(var2) && eval(varacento) && eval(varpunto))
            band = true;
        if (tipo == 'alfanumerico' && eval(var1) && eval(var2))
            band = true;
        if (tipo == 'email' && eval(var1) && eval(var2) && eval(var3))
            band = true;
        if (tipo == 'direccion' && eval(var1) && eval(var2) && eval(varacento) && eval(var4))
            band = true;
        if (tipo == 'especial' && eval(var1) && eval(var2) && eval(varacento) && eval(var3))
            band = true;
        if (tipo == 'flotante') {
            if (!eval(varpunto)) {
                numpunto++;
                if (numpunto > 1)
                    band = true;
            }
            if (eval(var1) && eval(varpunto))
                band = true
            if (i + 1 == text.value.length) {
                if (text.value.charAt(i) == '.')
                    band = true;
            }
        }
        //Aqui entra si el dato es invalido
        if (band) {
            cValido = false;
        }

    }
    //Aqui despliega los caracteres invalidos en el dato que se intento capturar
    if (!cValido) {
        //alert("Este campo no permite caracteres especiales\n\nPor Ejemplo: "+cad+"\n\nEn su dato : "+text.value);
        return false;
    }
    return true;
}

function fvalidarCorreo(texto) {
    emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
    //Se muestra un texto a modo de ejemplo, luego va a ser un icono
    if (emailRegex.test(texto)) {
        return true;
    } else {
        return false;
    }
}
