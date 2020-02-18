<?php 
      include 'pagination.php';
?>

        <nav aria-label="Page navigation example" style=" margin-left:400px; margin-top:40px;">
        <ul class="pagination">
          <li class="page-item active">
            <a class="page-link" href="?id=<?= $previous; ?>" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
            </a>
          </li>
          
          <?php for($i = 1; $i <= $pages; $i++) :?>

          <li class="page-item"><a class="page-link " href="?id=<?= $i; ?>"><?= $i; ?></a></li>
          
          <?php endfor; ?>
          <li class="page-item active"><a class="page-link" href="?id=<?= $next; ?>" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
            </a>
          </li>
        </ul>
          </nav>
          </div>
      <!-- SCRIPTS -->
      <script src="assets/js/jquery.js"></script>
          <script src="assets/js/bootstrap.js"></script>
</body>
</html>