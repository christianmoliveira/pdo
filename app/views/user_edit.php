<h2>Atualizar Usuário</h2>

<form action="/user_update" method="POST">
  <input type="hidden" name="id" class="form-control" value="<?= $userEncontrado->id; ?>">

  <div class="form-group">
    <label for="">Nome</label>
    <input type="text" name="name" class="form-control" value="<?= $userEncontrado->name; ?>" aria-describedby="helpId">
    <small id="helpId" class="text-muted"></small>
  </div>

  <div class="form-group">
    <label for="">Email</label>
    <input type="email" name="email" class="form-control" value="<?= $userEncontrado->email; ?>" aria-describedby="helpId">
    <small id="helpId" class="text-muted"></small>
  </div>

  <div class="form-group">
    <label for="">Senha</label>
    <input type="password" name="password" class="form-control" value="<?= $userEncontrado->password; ?>" aria-describedby="helpId">
    <small id="helpId" class="text-muted"></small>
  </div>

  <button type="submit" class="btn btn-primary">Atualizar</button>
</form>