<?php require('partials/head.php') ?>
<?php require('partials/nav.php') ?>
<?php require('partials/banner.php') ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <ul>
            <?php foreach ($blogs as $blog) : ?>
                <li>
                    <a href="/blog?id=<?= $blog['id'] ?>" class="text-blue-500 hover:underline">
                        <?= htmlspecialchars($blog['body']) ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>

        <p class="mt-6">
            <a href="/blogs/create" class="text-blue-500 hover:underline">Create Blog</a>
        </p>
    </div>
</main>

<?php require('partials/footer.php') ?>
