<div style="background-color: white; border-radius: 15px;" class="container navbar-wrapper">
    <form action="grava_inscricao.php" method="post" style="margin-left: 40px; margin-right: 40px; text-align: left"  onSubmit="return validadados();">
        <br>
        <br>
        
        <?php
        include './termo_responsabilidade.php';
        ?>
        
        <br>
        <br>
        <input type="checkbox" name="concordo" id="concordo" onclick="concordaTermo()" style="height: 30px">  <b>Ao efetuar a inscrição, concordo com todos os termos acima.</b>
        <br>
        <br>
        <br>
        Nome Completo *<br>
        <input type="text" name="nome" id="nome" style="width: 350px"><br>
        Categoria *<br>
        <select name="categoria" id="categoria" style="width: 205px">
            <option value="Selecione">Selecione</option>
            <option value="V">Volta - 30KM</option>
            <option value="S">Super Volta - 60KM</option>
        </select><br>
        Data de Nascimento *<br>
        <input type="text" name="data" id="data" onkeyup="mascaraData(this)" maxlength="10"><br>
        Sexo *<br>
        <select name="sexo" id="sexo" style="width: 205px">
            <option value="Selecione">Selecione</option>
            <option value="F">Feminino</option>
            <option value="M">Masculino</option>
        </select><br>
        Tipo Sanguíneo *<br>
        <select name="sangue" id="sangue" style="width: 205px">
            <option value="Selecione">Selecione</option>
            <option value="A -">A -</option>
            <option value="A +">A +</option>
            <option value="B -">B -</option>
            <option value="B +">B +</option>
            <option value="O -">O -</option>
            <option value="O +">O +</option>
            <option value="AB -">AB -</option>
            <option value="AB +">AB +</option>
        </select><br>
        Estado *<br>
        <select name="estado" id="estado" style="width: 350px">
            <option value="Selecione">Selecione</option>
            <option value="AC">Acre</option>
            <option value="AL">Alagoas</option>
            <option value="AP">Amapá</option>
            <option value="AM">Amazonas</option>
            <option value="BA">Bahia</option>
            <option value="CE">Ceará</option>
            <option value="DF">Distrito Federal</option>
            <option value="ES">Espirito Santo</option>
            <option value="GO">Goiás</option>
            <option value="MA">Maranhão</option>
            <option value="MS">Mato Grosso do Sul</option>
            <option value="MT">Mato Grosso</option>
            <option value="MG">Minas Gerais</option>
            <option value="PA">Pará</option>
            <option value="PB">Paraíba</option>
            <option value="PR">Paraná</option>
            <option value="PE">Pernambuco</option>
            <option value="PI">Piauí</option>
            <option value="RJ">Rio de Janeiro</option>
            <option value="RN">Rio Grande do Norte</option>
            <option value="RS">Rio Grande do Sul</option>
            <option value="RO">Rondônia</option>
            <option value="RR">Roraima</option>
            <option value="SC">Santa Catarina</option>
            <option value="SP">São Paulo</option>
            <option value="SE">Sergipe</option>
            <option value="TO">Tocantins</option>
        </select><br>
        Cidade *<br>
        <input type="text" name="cidade" id="cidade" style="width: 350px"><br>
        CPF *<br>
        <input type="text" name="cpf" id="cpf" onKeyPress="mascaraCPF(this)" maxlength="14"><br>
        Telefone *<br>
        <input type="text" name="telefone" id="telefone" onKeyPress="mascaraTelefone(this)" maxlength="14"><br>
        Telefone em caso de urgência *<br>
        <input type="text" name="urgencia" id="urgencia" onKeyPress="mascaraTelefone(this)" maxlength="14"><br>
        Camiseta *<br>
        <select name="camiseta" id="camiseta" style="width: 205px">
            <option value="Selecione">Selecione</option>
            <!--<option value="P">P</option>
            <option value="M">M</option>-->
            <option value="G">G</option>
            <option value="GG">GG</option>
            <option value="XGG">XGG</option>
        </select><br>
        E-mail *<br>
        <input type="text" name="email" id="email" style="width: 350px"><br><br>
        <input type="submit" class="btn btn-success" value="Cadastrar" id="botaoCadastrar" disabled> <font style="color: #00995D"> Botão será habilitado após aceitar o termo de responsabilidade. Para aceitar, clique na opção no final do termo.</font> <br><br>
    </form>
</div>    
