<div>
    <h2>Authors</h2>
    <ul>
        <?php foreach ($authors as $author) : ?>
            <li>
                <a href="?authorID=<?php echo $author['id']; ?>">
                    <?php echo $author['lastname']; ?>
                    <?php echo $author['firstname']; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>