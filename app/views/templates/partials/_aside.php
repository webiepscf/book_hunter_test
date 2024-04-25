<aside class="col m4">
    <h2>Categories</h2>
    <?php
    include_once '../app/models/categoriesModel.php';
    $categories = Models\CategoriesModel\findAll($connexion);
    ?>
    <ul>
        <?php foreach ($categories as $category) : ?>
            <li>
                <a href="?categoryID=<?php echo $category['id']; ?>">
                    <?php echo $category['name']; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</aside>