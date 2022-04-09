<table>
  <tr>
    <th>ID</th>
    <th>Title</th>
    <th>Content</th>
    <th></th>
  </tr>

  <?php foreach ($posts as $post): ?>
    <tr>
      <td><?= $post["id"] ?></td>
      <td><?= anchor("/posts/show/{$post['id']}", $post["title"]) ?></td>
      <td><?= $post["content"] ?></td>
      <td>
        <?= anchor("/posts/edit/{$post['id']}", "Edit") ?>
        |
        <?= anchor("/posts/delete/{$post['id']}", "Delete") ?>
      </td>
    </tr>

  <?php endforeach ?>
</table>