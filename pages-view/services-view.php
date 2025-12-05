        <?php require_once __DIR__ . '/../controllers/templates/header.php'; ?>

<main class="container mx-auto py-10">

<?php
$services = json_decode(file_get_contents(__DIR__ . '/../data/services.json'), true);
?>

<h1 class="text-3xl font-bold mb-5">Nos Services</h1>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <?php foreach ($services as $s): ?>
        <div class="p-5 border rounded shadow">
            <h2 class="text-xl font-bold"><?= $s['title'] ?></h2>
            <p><?= $s['desc'] ?></p>
        </div>
    <?php endforeach; ?>
</div>

</main>

  <?php require_once __DIR__ . '/../controllers/templates/footer.php'; ?>