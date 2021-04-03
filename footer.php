<div id="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <?php
        include "config.php";

        $sql = "SELECT * FROM settings";

        $result = mysqli_query($conn, $sql) or die("Query Failed.");
        if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <span><?php echo $row['footerdesc']; ?></span>
        <?php
          }
        }
        ?>
      </div>
    </div>
  </div>
</div>
<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>

</html>