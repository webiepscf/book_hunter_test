<div>
    <h2>Latest Books</h2>
    <ul>
        <?php foreach ($books as $book) : ?>
            <li>
                <a href="?bookID=<?php echo $book['id']; ?>">
                    <?php echo $book['title']; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>