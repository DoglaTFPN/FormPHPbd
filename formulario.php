<DOCTYPE!>
    <html>
        <head>
            <title>Cadastro</title>
            <meta charset="utf-8">
        </head>
        <body bgcolor="lightgreen">
           <h1>Cadastro</h1>
           <hr>
            <form action="recebendo_dados.php" method="post">
                <fieldset>
                    <legend>Dados Pessoais</legend>
                    <label><b>Codigo: </b></label> <input type="text" name="codigo" maxlength="9" required><br><br>
                    <label><b>Nome: </b></label> <input type="text" name="nome" maxlength="15" required><br><br>
                    <label><b>Sobrenome: </b></label> <input type="text" name="sobrenome" maxlength="15" required><br><br>
                    <label><b>Email: </b></label> <input type="text" name="email" maxlength="50" required><br><br>
                    <label><b>CPF: </b></label> <input type="text" name="cpf" maxlength="14" required><br><br>
                    <label><b>Usuário: </b></label> <input type="text" name="usuario" maxlength="16" required><br><br>
                    <label><b>Senha: </b></label> <input type="password" name="senha" maxlength="50" required><br><br>
                    <input type="radio" name="sexo" value= "M"checked> <label>Masculino</label><br>
                    <input type="radio" name="sexo" value= "F"> <label>Feminino</label><br>
                    <input type="radio" name="sexo" value="O"> <label>Outro</label>
                </fieldset>
                <br>
                
            <input type="reset" value="Apagar tudo">
            <input type="submit" value="Enviar formulário">
            </form>
            <p>Feito por: Douglas Saragoza da Silva e Douglas Ferreira da Silva</p>
        </body>
    </html>