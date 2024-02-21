<!-- PHP para enviar atualizações do registro estará aqui -->
 
<!— P3) De onde vem os valores das variáveis usadas nos echos
dentro da tabela html?
 
vem do banco de dados
-->
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"] .
"?id={$id}");?>" method="post">
<table class='table table-hover table-responsive tablebordered'>
<tr>
<td>Nome</td>
<td><input type='text' name='nome' value="<?php echo
htmlspecialchars($nome, ENT_QUOTES); ?>" class='form-control' /></td>
</tr>
<tr>
<td>Descrição</td>
<td><textarea name='descricao' class='formcontrol'><?php echo htmlspecialchars($descricao,
ENT_QUOTES); ?></textarea></td>
</tr>
<tr>
<td>Preço</td>
<td><input type='text' name='preco' value="<?php echo
htmlspecialchars($preco, ENT_QUOTES); ?>" class='form-control' /></td>
</tr>
<tr>
<td></td>
<td>
<input type='submit' value='Salvar Alterações'
class='btn btn-primary' />
<a href='index.php' class='btn btn-danger'>Voltar
para ler produtos</a>
</td>
</tr>
</table>
</form
tem menu de contexto