function paginacao(pag) {
    document.getElementById('pag' + pag).style.display = 'table';
    document.getElementById('botaopag' + pag).style.backgroundColor = '#B1D34B';
    document.getElementById('botaopag' + pag).style.color = 'white';
    if (pag != '1') {
        document.getElementById('pag1').style.display = 'none';
        document.getElementById('botaopag1').style.backgroundColor = 'white';
        document.getElementById('botaopag1').style.color = '#00995D';
    }
    if (pag != '2') {
        document.getElementById('pag2').style.display = 'none';
        document.getElementById('botaopag2').style.backgroundColor = 'white';
        document.getElementById('botaopag2').style.color = '#00995D';
    }
    if (pag != '3') {
        document.getElementById('pag3').style.display = 'none';
        document.getElementById('botaopag3').style.backgroundColor = 'white';
        document.getElementById('botaopag3').style.color = '#00995D';
    }
    if (pag != '4') {
        document.getElementById('pag4').style.display = 'none';
        document.getElementById('botaopag4').style.backgroundColor = 'white';
        document.getElementById('botaopag4').style.color = '#00995D';
    }
    if (pag != '5') {
        document.getElementById('pag5').style.display = 'none';
        document.getElementById('botaopag5').style.backgroundColor = 'white';
        document.getElementById('botaopag5').style.color = '#00995D';
    }
    if (pag != '6') {
        document.getElementById('pag6').style.display = 'none';
        document.getElementById('botaopag6').style.backgroundColor = 'white';
        document.getElementById('botaopag6').style.color = '#00995D';
    }
    if (pag != '7') {
        document.getElementById('pag7').style.display = 'none';
        document.getElementById('botaopag7').style.backgroundColor = 'white';
        document.getElementById('botaopag7').style.color = '#00995D';
    }
    if (pag != '8') {
        document.getElementById('pag8').style.display = 'none';
        document.getElementById('botaopag8').style.backgroundColor = 'white';
        document.getElementById('botaopag8').style.color = '#00995D';
    }
    if (pag != '9') {
        document.getElementById('pag9').style.display = 'none';
        document.getElementById('botaopag9').style.backgroundColor = 'white';
        document.getElementById('botaopag9').style.color = '#00995D';
    }
    if (pag != '10') {
        document.getElementById('pag10').style.display = 'none';
        document.getElementById('botaopag10').style.backgroundColor = 'white';
        document.getElementById('botaopag10').style.color = '#00995D';
    }
    if (pag != '11') {
        document.getElementById('pag11').style.display = 'none';
        document.getElementById('botaopag11').style.backgroundColor = 'white';
        document.getElementById('botaopag11').style.color = '#00995D';
    }
    if (pag != '12') {
        document.getElementById('pag12').style.display = 'none';
        document.getElementById('botaopag12').style.backgroundColor = 'white';
        document.getElementById('botaopag12').style.color = '#00995D';
    }
}

function validadados() {
    var nome = document.getElementById('nome').value;
    var categoria = document.getElementById('categoria').value;
    var data = document.getElementById('data').value;
    var sexo = document.getElementById('sexo').value;
    var sangue = document.getElementById('sangue').value;
    var estado = document.getElementById('estado').value;
    var cidade = document.getElementById('cidade').value;
    var cpf = document.getElementById('cpf').value;
    var telefone = document.getElementById('telefone').value;
    var urgencia = document.getElementById('urgencia').value;
    var camiseta = document.getElementById('camiseta').value;
    var email = document.getElementById('email').value;

    if (nome == '' || data == '' || cidade == '' || cpf == '' || telefone == '' || urgencia == '' || email == '' || categoria == 'Selecione' || sexo == 'Selecione' || sangue == 'Selecione' || estado == 'Selecione' || camiseta == 'Selecione') {
        alert('Você não preencheu todos os campos! Preencha todos os campos do formulário de inscrição.');
        return false;
    } else {
        return true;
    }
}

function mudamenu(id) {
    document.getElementById(id).className = 'active';
    if (id != "home") {
        document.getElementById("home").className = 'disable';
    }
    if (id != "programacao") {
        document.getElementById("programacao").className = 'disable';
    }
    if (id != "incricoes") {
        document.getElementById("incricoes").className = 'disable';
    }
    if (id != "trajeto") {
        document.getElementById("trajeto").className = 'disable';
    }
    if (id != "inscritos") {
        document.getElementById("inscritos").className = 'disable';
    }
    if (id != "regulamento") {
        document.getElementById("regulamento").className = 'disable';
    }
    if (id != "conteudo") {
        document.getElementById("conteudo").className = 'disable';
        document.getElementById('menuconteudo').style.display = 'none';
    }
    if (id != "fotos") {
        document.getElementById("fotos").className = 'disable';
        document.getElementById('menufotos').style.display = 'none';
    }

    //CONFIGURA TAMANHO DAS JANELAS
    if (id == "incricoes") {
    //    document.getElementById("item2").style.height = '1950px';
        alert('Inscrições encerradas pelo site! Você ainda pode efetuar sua inscrição no dia do evento, na sede da Unimed Erechim.');
    //} else {
    //    document.getElementById("item2").style.height = '100%';
    }

    if (id == "home") {
        document.getElementById("home").style.height = '1000px';
    } else {
        document.getElementById("home").style.height = '100%';
    }

    if (id == "trajeto") {
        document.getElementById("item3").style.height = '1530px';
    } else {
        document.getElementById("item3").style.height = '100%';
    }

    if (id == "regulamento") {
        document.getElementById("item5").style.height = '4310px';
    } else {
        document.getElementById("item5").style.height = '100%';
    }

    if (id == "programacao") {
        document.getElementById("item1").style.height = '1520px';
    } else {
        document.getElementById("item1").style.height = '100%';
    }

    if (id == "inscritos") {
        document.getElementById("item4").style.height = '1480px';
    } else {
        document.getElementById("item4").style.height = '100%';
    }

    if (id == "conteudo") {
        document.getElementById('menuconteudo').style.display = 'block';
    }else{
        document.getElementById('menuconteudo').style.display = 'none';
    }
    
    if (id == "fotos") {
        document.getElementById('menufotos').style.display = 'block';
    }else{
        document.getElementById('menufotos').style.display = 'none';
    }
    
    //VEJA POP UP VIDEO
    document.getElementById('videopopup').style.display = 'none';
    document.getElementById('video1').pause();

}

function habilitaBusca() {
    var nomebusca = document.getElementById('nomeinscrito').value;
    var cidadebusca = document.getElementById('cidadeinscrito').value;

    if (nomebusca == '' && cidadebusca == '') {
        alert('Preencha os campos para efetuar a busca!');
        return false;
    } else {
        return true;
    }
}

function mascaraData(data) {
    if (mascaraInteiro(data) == false) {
        event.returnValue = false;
    }
    return formataCampo(data, '00/00/0000', event);
}

function validaData(data) {
    exp = /\d{2}\/\d{2}\/\d{4}/
    if (!exp.test(data.value))
        alert('Data Invalida!');
}

function mascaraCPF(cpf) {
    if (mascaraInteiro(cpf) == false) {
        event.returnValue = false;
    }
    return formataCampo(cpf, '000.000.000-00', event);
}

function validarCPF(Objcpf) {
    var cpf = Objcpf.value;
    exp = /\.|\-/g
    cpf = cpf.toString().replace(exp, "");
    var digitoDigitado = eval(cpf.charAt(9) + cpf.charAt(10));
    var soma1 = 0, soma2 = 0;
    var vlr = 11;

    for (i = 0; i < 9; i++) {
        soma1 += eval(cpf.charAt(i) * (vlr - 1));
        soma2 += eval(cpf.charAt(i) * vlr);
        vlr--;
    }
    soma1 = (((soma1 * 10) % 11) == 10 ? 0 : ((soma1 * 10) % 11));
    soma2 = (((soma2 + (2 * soma1)) * 10) % 11);

    var digitoGerado = (soma1 * 10) + soma2;
    if (digitoGerado != digitoDigitado)
        alert('CPF Invalido!');
}

function mascaraTelefone(tel) {
    if (mascaraInteiro(tel) == false) {
        event.returnValue = false;
    }
    return formataCampo(tel, '(00) 0000-0000', event);
}

function validaTelefone(tel) {
    exp = /\(\d{2}\)\ \d{4}\-\d{4}/
    if (!exp.test(tel.value))
        alert('Numero de Telefone Invalido!');
}

function mascaraInteiro() {
    if (event.keyCode < 48 || event.keyCode > 57) {
        event.returnValue = false;
        return false;
    }
    return true;
}

function formataCampo(campo, Mascara, evento) {
    var boleanoMascara;

    var Digitato = evento.keyCode;
    exp = /\-|\.|\/|\(|\)| /g
    campoSoNumeros = campo.value.toString().replace(exp, "");

    var posicaoCampo = 0;
    var NovoValorCampo = "";
    var TamanhoMascara = campoSoNumeros.length;
    ;

    if (Digitato != 8) { // backspace 
        for (i = 0; i <= TamanhoMascara; i++) {
            boleanoMascara = ((Mascara.charAt(i) == "-") || (Mascara.charAt(i) == ".")
                    || (Mascara.charAt(i) == "/"))
            boleanoMascara = boleanoMascara || ((Mascara.charAt(i) == "(")
                    || (Mascara.charAt(i) == ")") || (Mascara.charAt(i) == " "))
            if (boleanoMascara) {
                NovoValorCampo += Mascara.charAt(i);
                TamanhoMascara++;
            } else {
                NovoValorCampo += campoSoNumeros.charAt(posicaoCampo);
                posicaoCampo++;
            }
        }
        campo.value = NovoValorCampo;
        return true;
    } else {
        return true;
    }
}

function concordaTermo() {
    if (document.getElementById('concordo').checked == true) {
        document.getElementById('botaoCadastrar').disabled = false;
    } else {
        document.getElementById('botaoCadastrar').disabled = true;
    }
}