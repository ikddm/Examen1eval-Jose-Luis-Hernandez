Formulario para agregar manzana

<form action="/agregarManzana" method="post">
    @csrf
    <label for="tipoManzana"> Escriba el tipo de manzana</label>
    <input type="text" name="tipoManzana" id=tipoManzana>
    </br>
    <label for="precioKilo"> Precio del kilo</label>
    <input type="number" name="precioKilo">
    <input type="submit" name="Enviar">
</form>
