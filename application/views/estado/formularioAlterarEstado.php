<?php
echo $titulo;
echo form_open('estadocontroller/atualizarEstado');
?>

<input type='hidden' name='idestado' value="<?php echo $tabela->idestado ?>" />

<label>Nome</label>

<input type='text' name='nome' value="<?php echo $tabela->nome ?>" />


<label>Sigla</label>

<input type='text' name='sigla' value="<?php echo $tabela->sigla ?>" />

<br />
<br />

<input type='submit' value='Salvar' />

</form>