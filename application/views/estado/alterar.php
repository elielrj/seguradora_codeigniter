<?php
echo form_open('estadocontroller/salvaralteracao');
?>

<input type='hidden' name='idestado' value="<?php echo $estado[0]->idestado ?>"/>

<label>Nome</label>

<input type='text' name='nome' value="<?php echo $estado[0]->nome ?>" />


<label>Sigla</label>

<input type='text' name='sigla' value="<?php echo $estado[0]->sigla ?>"/>

<br />
<br />

<input type='submit' value='Salvar'/>

</form>