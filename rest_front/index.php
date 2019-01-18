<?php
    require_once('./header.php');
?>
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>DATE</th>
      </tr>
    </thead>

    <tbody id="bookList"></tbody>

    <tfoot>
      <tr>
        <td colspan="3">Library - Joukove</td>
      </tr>
    </tfoot>
  </table>

  <script src="./dist/main.js"></script>
<?php
    require_once('./footer.php');
?>