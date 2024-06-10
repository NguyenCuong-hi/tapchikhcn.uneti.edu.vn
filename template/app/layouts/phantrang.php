

<div class="d-flex justify-content-center my-4">
    <ul class="pagination">
        <?php if ($current_page > 3): ?>
            <li class="page-item">
                <a class="page-link" href="?per_page=<?= $item_per_page ?>&page=1">
                    <span> Đầu</span>
                </a>
            </li>
        <?php endif; ?>
        
        <?php if ($current_page > 1): ?>
            <li class="page-item">
                <a class="page-link" href="?per_page=<?= $item_per_page ?>&page=<?= $current_page - 1 ?>">
                    <span> Trước</span>
                </a>
            </li>
        <?php endif; ?>
        
        <?php for ($num = 1; $num <= $totalPages; $num++): ?>
            <?php if ($num > $current_page - 3 && $num < $current_page + 3): ?>
                <li class="page-item <?= ($num == $current_page) ? 'active' : '' ?>">
                    <a class="page-link" href="?per_page=<?= $item_per_page ?>&page=<?= $num ?>">
                        <?= $num ?>
                    </a>
                </li>
            <?php endif; ?>
        <?php endfor; ?>
        
        <?php if ($current_page < $totalPages - 1): ?>
            <li class="page-item">
                <a class="page-link" href="?per_page=<?= $item_per_page ?>&page=<?= $current_page + 1 ?>">
                    <span>Tiếp </span>
                </a>
            </li>
        <?php endif; ?>
        
        <?php if ($current_page < $totalPages - 3): ?>
            <li class="page-item">
                <a class="page-link" href="?per_page=<?= $item_per_page ?>&page=<?= $totalPages ?>">
                    <span>Cuối </span>
                </a>
            </li>
        <?php endif; ?>
    </ul>
</div>
