<?php
    require_once('./header.php');
?>
  <div class="form">
    <form action="http://localhost/rest_php/model/setData.php" method="post">
      <input type="text" required="required" name="name">
    
      <input type="date" required="required" name="date">
    
      <input type="submit">
    </form>
  </div>

  <script src="./dist/main.js"></script>
<?php
    require_once('./footer.php');
?>