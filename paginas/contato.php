<br>
<br>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Endereço de Email</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nome@exemplo.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Deixe seu Comentario </label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="7" placeholder="Este site é top"></textarea>
</div>
<div class="botao-contato">
  <ul>
    <li>
      <a type="button" href="index.php?pagina=home">Voltar</a>
    </li>
    <li>
      <a type="button" onclick="Alert()">Enviar</a>
    </li>
  </ul>
</div>

<script>
  function Alert() {
    alert("Seu Comentario foi enviado com Sucesso!");
  }
</script>


<br>
<br>
<br>
<br>