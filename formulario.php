<DOCTYPE!>
    <html>
        <head>
            <title>Cadastro</title>
            <meta charset="utf-8">
        </head>
        <body bgcolor="lightgreen">
           <h1>Cadastro</h1>
           <hr>
            <form action="cadastrado.php" method="GET">
                <fieldset>
                    <legend>Dados Pessoais</legend>
                    <label><b>Codigo: </b></label> <input type="text" name="codigo" required><br><br>
                    <label><b>Nome: </b></label> <input type="text" name="nome" required><br><br>
                    <label><b>Sobrenome: </b></label> <input type="text" name="sobrenome" required><br><br>
                    <label><b>Email: </b></label> <input type="text" name="email" required><br><br>
                    <label><b>CPF: </b></label> <input type="text" name="cpf" required><br><br>
                    <label><b>Usuário: </b></label> <input type="text" name="usuario" required><br><br>
                    <label><b>Senha: </b></label> <input type="password" name="senha" required><br><br>
                    <input type="radio" name="sexo"checked> <label>Masculino</label><br>
                    <input type="radio" name="sexo"> <label>Feminino</label><br>
                    <input type="radio" name="sexo"> <label>Outro</label>
                </fieldset>
                <br>
                
            <input type="reset" value="Apagar tudo">
            <input type="submit" value="Enviar formulário">
            </form>
            <p>Feito por: Douglas Saragoza da Silva e Douglas Ferreira da Silva</p>
        </body>
    </html>