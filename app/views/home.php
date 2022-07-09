<table class="table table-striped table-inverse table-responsive">
  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($users as $user) : ?>
      <tr>
        <td><?= $user->id; ?></td>
        <td><?= $user->name; ?></td>
        <td>
          <a href="/user_edit?id=<?= $user->id; ?>" class="btn btn-warning btn-xs">Edit</a>
        </td>
        <td>
          <a href="/user_destroy?id=<?= $user->id; ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
      </tr>
    <?php endforeach ?>
  </tbody>
</table>