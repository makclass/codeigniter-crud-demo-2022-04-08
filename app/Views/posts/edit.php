<form action="/posts/update/<?= $post['id']?>" method="post">
  <label>Title
    <input type="text" name="title" value="<?= $post['title']?>">
  </label>
  <label>Content
    <textarea name="content"><?= $post['content']?></textarea>
  </label>
  <input type="submit" value="Update Post">
</form>