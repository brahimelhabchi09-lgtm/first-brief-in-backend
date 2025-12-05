<?php
require_once __DIR__ . '/../validation/contact_validation.php';
 require_once __DIR__ . '/../controllers/templates/header.php';
?>

<main class="max-w-3xl mx-auto py-10">

<h1 class="text-3xl font-bold mb-6">Contact</h1>

<?php if (!empty($success)): ?>
    <p class="bg-green-100 border border-green-400 text-green-800 p-3 rounded mb-4">
        <?= $success ?>
    </p>
<?php endif; ?>

<?php if (!empty($errors['form'])): ?>
    <p class="bg-red-100 border border-red-400 text-red-800 p-3 rounded mb-4">
        <?= $errors['form'] ?>
    </p>
<?php endif; ?>


<div class="bg-gray-100 p-6 rounded-lg shadow mb-8">
    <h2 class="text-2xl font-semibold mb-4">Mes informations</h2>

    <div class="space-y-2 text-gray-700">
        <p><strong>Nom :</strong> NovaCraft Studio</p>
        <p><strong>Email :</strong> contact@novacraft.com</p>
        <p><strong>Téléphone :</strong> +212 6 12 34 56 78</p>
    </div>
</div>


<form action="?page=contact" method="POST" class="flex flex-col gap-5 bg-white p-6 rounded shadow">

    <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token'] ?>">

    <div>
        <label class="font-medium">Nom *</label>
        <input type="text" name="name" value="<?= $old['name'] ?>" class="w-full border p-2 rounded">
        <?php if (!empty($errors['name'])): ?>
            <p class="text-red-600 text-sm"><?= $errors['name'] ?></p>
        <?php endif; ?>
    </div>

    <div>
        <label class="font-medium">Email *</label>
        <input type="email" name="email" value="<?= $old['email'] ?>" class="w-full border p-2 rounded">
        <?php if (!empty($errors['email'])): ?>
            <p class="text-red-600 text-sm"><?= $errors['email'] ?></p>
        <?php endif; ?>
    </div>

    <div>
        <label class="font-medium">Message *</label>
        <textarea name="message" class="w-full border p-2 rounded" rows="6"><?= $old['message'] ?></textarea>
        <?php if (!empty($errors['message'])): ?>
            <p class="text-red-600 text-sm"><?= $errors['message'] ?></p>
        <?php endif; ?>
    </div>

    <button class="bg-blue-600 text-white p-3 rounded hover:bg-blue-700">
        Envoyer
    </button>

</form>

</main>

  <?php require_once __DIR__ . '/../controllers/templates/footer.php'; ?>