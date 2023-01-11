<?php

include_once './parts/head.php';
include_once './functions/Categories.php';

head("home");

$categoriesManager = new Categories();

$categories = $categoriesManager->getAllCategories();
?>

<body>
    <div class="mx-auto mt-2 md:max-w-7xl 2xl:max-w-8-xl border-cyan-700 border-2 p-4 grid md:grid-cols-3 gap-3">
        <?php
            foreach($categories as $categorie){
                ?>
                    <div class="grid border-2 border-red-400">
                        <div class="p-2">
                            <h3 class="text-2xl">
                                <span>
                                    <?php echo $categorie['Name']; ?>
                                </span>
                                <span>
                                    <a href="./delete.php?id=<?php echo $categorie['id']; ?>&type=category">
                                        <i class="fa-regular fa-trash-can"></i>
                                    </a>
                                </span>
                            </h3>
                        </div>
                        <div>

                        </div>
                    </div>
                <?php
            }
        ?>

    </div>
</body>