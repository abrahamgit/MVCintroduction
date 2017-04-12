// model.php
//this is added comment
function get_post_by_id($id)
{
  $link = open_database_connection();
  $query = 'SELECT created_at, title, body FROM post WHERE id=:id';
  $statement = $link->prepare($query);
  $statement->bindValue(':id', $id, PDO::PARAM_INT);
  $statement->execute();
  $row = $statement->fetch(PDO::FETCH_ASSOC);
  close_database_connection($link);
  return $row;
}
