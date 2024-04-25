<ul class="row">
    <?php foreach ($books as $book) : ?>
        <li class="card col m5" style="margin: .5em;">
            <h5><a href="?bookID=<?php echo $book['id']; ?>">
                    <?php echo $book['title']; ?>...
                </a></h5>
            <div>
                <?php echo $book['resume']; ?>
            </div>

        </li>
    <?php endforeach; ?>
</ul>