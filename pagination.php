<div class="pagination my-2">
  <a href="list.php?page=<?= $current_page - 1 ?>" class="prev<?= ($current_page > 1) ? '' : ' disabled' ?>">&laquo;</a>

  <?php for ($i = 1; $i <= min($x, $current_page - 1); $i++) : ?>
    <a href="list.php?page=<?= $i ?>"><?= $i ?></a>
  <?php endfor ?>

  <?php if ($current_page > $x + 1) : ?>
    <span>...</span>
  <?php endif; ?>

  <span class="current"><?= $current_page ?></span>

  <?php if ($current_page < $max_page - $x) : ?>
    <span>...</span>
  <?php endif; ?>

  <?php for ($i = max($current_page + 1, $max_page - $x + 1); $i < $max_page + 1; $i++) : ?>
    <a href="list.php?page=<?= $i ?>"><?= $i ?></a>
  <?php endfor; ?>

  <a href="list.php?page=<?= $current_page + 1 ?>" class="next<?= ($current_page < $total_barang / $records_per_page) ? '' : ' disabled' ?>">&raquo;</a>
</div>