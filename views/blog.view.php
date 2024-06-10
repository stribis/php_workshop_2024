<?php require('partials/head.php') ?>
<?php require('partials/nav.php') ?>
<?php require('partials/banner.php') ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <p class="mb-6">
            <a href="/blogs" class="text-blue-500 underline">go back...</a>
        </p>

        <p><?= htmlspecialchars($blog['body']) ?></p>
    </div>
</main>

<?php require('partials/footer.php') ?>
