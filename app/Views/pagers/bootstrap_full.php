<?php $pager->setSurroundCount(2); ?>

<nav>
    <ul class="pagination justify-content-center">
        <?php if ($pager->hasPrevious()): ?>
            <li class="page-item">
                <a class="page-link bg-dark text-light border-secondary" href="<?= $pager->getFirst() ?>">První</a>
            </li>
            <li class="page-item">
                <a class="page-link bg-dark text-light border-secondary" href="<?= $pager->getPrevious() ?>">Zpět</a>
            </li>
        <?php endif; ?>

        <?php foreach ($pager->links() as $link): ?>
            <li class="page-item <?= $link['active'] ? 'active' : '' ?>">
                <a class="page-link <?= $link['active'] ? 'bg-primary border-primary text-light' : 'bg-dark text-light border-secondary' ?>"
                   href="<?= $link['uri'] ?>">
                    <?= $link['title'] ?>
                </a>
            </li>
        <?php endforeach; ?>

        <?php if ($pager->hasNext()): ?>
            <li class="page-item">
                <a class="page-link bg-dark text-light border-secondary" href="<?= $pager->getNext() ?>">Další</a>
            </li>
            <li class="page-item">
                <a class="page-link bg-dark text-light border-secondary" href="<?= $pager->getLast() ?>">Poslední</a>
            </li>
        <?php endif; ?>
    </ul>
</nav>