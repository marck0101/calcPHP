<?php include("cabecalho.php"); ?>
    
    <h1>Formulário de Cadastro</h1>
    <form action="conexao.php">
        <table class="table">
            <tr>
                <td>Nome</td>
                <td><input type="text" name="nome" /></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" /></td>
            </tr>
            <tr>
                <td><input type="submit" value="Cadastrar" /></td>
            </tr>
        </table>
    </form>

<?php include("rodape.php"); ?>