<form
action="salvar_pedido.php"
method="POST"
class="form-card"
>

<input
type="text"
name="cliente"
placeholder="Cliente"
>

<input
type="number"
name="valor"
placeholder="Valor"
>

<select name="status">

<option>Pendente</option>

<option>Preparando</option>

<option>Entregue</option>

</select>

<button>

Salvar Pedido

</button>

</form>