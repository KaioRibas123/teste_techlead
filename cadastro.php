
 <html>
    <head>
        <title>Cadastro</title>
    </head>
    <body>
        Preecha os campos abaixo:
       <form method="POST" action="cadastrar.php?acao=adicionar">
           <table>
               <tr>
                   <td>Nome</td>
                   <td>
                       <input name="nome" maxlength="64">
                   </td>
               </tr>

               <tr>
                   <td>usuario</td>
                   <td>
                       <input name="usuario" maxlength="32">
                   </td>
               </tr>

               <tr>
                   <td>senha</td>
                   <td>
                       <input name="senha" type="password" maxlength="16">
                   </td>
               </tr>
               <td colspan=2 align=right>
                   <input type="submit" name="btn-cadastrar" value="Cadastrar">
               </td>
           </table>
       </form>
    </body>
</html>