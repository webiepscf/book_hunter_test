<h2>Books de la catégorie : <?php echo $category['name']; ?></h2>


<!-- Liste des books de la catégorie -->
<ul>
    <?php foreach ($books as $book) : ?>
        <li><a href=""><?php echo $book['title']; ?></a></li>
    <?php endforeach; ?>
</ul>