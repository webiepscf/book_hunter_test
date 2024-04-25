<ul>
    <?php foreach ($authors as $author) : ?>
        <li>
            <a href="?authors=show&id=<?php echo $author['id']; ?>">
                <?php echo $author['lastname']; ?>
                <?php echo $author['firstname']; ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>