<?php
require 'validaSessao.php';
?>
<br>
<form action="index.php" method="POST">
    <label>Nome: </label>
    <input type="text" name="nome" required="" >

    <label>Endereço: </label>
    <input type="text" name="endereco" required="" >

    <label>Numero: </label>
    <input type="number" name="numero" required="">

    <label>Observação: </label>
    <input type="text" name="observacao" required="">

    <br><br>

    <label>CEP: </label>
    <input type="number" name="cep" required="">

    <label>Bairro: </label>
    <input type="text" name="bairro" required="" >

    <label>Cidade: </label>
    <input type="text" name="cidade" required="" >

    <label>Estado: </label>
    <select name="estado">
        <option value="ZZ"> Selecione</option>
        <option value="AC">Acre</option>
        <option value="AL">Alagoas</option>
        <option value="AP">Amapá</option>
        <option value="AM">Amazonas</option>
        <option value="BA">Bahia</option>
        <option value="CE">Ceará</option>
        <option value="DF">Distrito Federal</option>
        <option value="ES">Espírito Santo</option>
        <option value="GO">Goiás</option>
        <option value="MA">Maranhão</option>
        <option value="MT">Mato Grosso</option>
        <option value="MS">Mato Grosso do Sul</option>
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
        <option value="ET">Estrangeiro</option>
    </select>
</label>
<!-- </select> type="text" name="estado" required="" > -->

<label>Telefone: </label>
<input type="number" name="telefone" required="" >

<br><br>

<label>Email: </label>
<input type="email" name="email" required="">

<br><br>

<input type="submit" name="btnCliente" value="Enviar">
</form>
