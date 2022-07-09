<h2>Cadastrar Usuário</h2>

<form action="/user_store" method="POST">
  <div class="form-group">
    <label for="">Nome</label>
    <input type="text" name="name" class="form-control" aria-describedby="helpId">
    <small id="helpId" class="text-muted"></small>
  </div>

  <div class="form-group">
    <label for="">Email</label>
    <input type="email" name="email" class="form-control" aria-describedby="helpId">
    <small id="helpId" class="text-muted"></small>
  </div>

  <div class="form-group">
    <label for="">Senha</label>
    <input type="password" name="password" class="form-control" aria-describedby="helpId">
    <small id="helpId" class="text-muted"></small>
  </div>

  <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>