
<?php $pager->setSurroundCount(2) ?>

<nav aria-label="Page navigation">
    <ul class="pagination">
    <?php if ($pager->hasPrevious()) : ?>
        <li>
            <a href="<?= $pager->getPrevious() ?>" aria-label="<?= lang('Pager.previous') ?>" class="button-html">
			<span aria-hidden="true"><?= lang('Pager.previous') ?></span>
            </a>
        </li>
	<?php else : ?>
		<li>
			<span class="button-html disabled" ><?= lang('Pager.previous') ?></span>
            </a>
        </li>
    <?php endif ?>

    <?php foreach ($pager->links() as $link) : ?>
        <li>
            <a href="<?= $link['uri'] ?>" class="page <?= $link['active'] ? 'active' : '' ?>">
                <?= $link['title'] ?>
            </a>
        </li>
    <?php endforeach ?>

    <?php if ($pager->hasNext()) : ?>
        <li>
            <a href="<?= $pager->getNext() ?>" aria-label="<?= lang('Pager.next') ?>" class="button-html">
			<span aria-hidden="true"><?= lang('Pager.next') ?></span>
            </a>
        </li>
	<?php else : ?>
		<li>
			<span class="button-html disabled" ><?= lang('Pager.next') ?></span>
            </a>
        </li>
    <?php endif ?>
    </ul>
</nav>