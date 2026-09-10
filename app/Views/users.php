<a href="<?= site_url('/') ?>">Home</a>
<a href="<?= site_url('about') ?>">About</a>
<a href="<?= site_url('customers') ?>">Customers</a>
<a href="<?= site_url('users') ?>">Users</a>

<h1>Users</h1>

<?php foreach ($users as $user): ?>

    
    <h3>
        <ul><li><?= $user['name'] ?></li></ul>
    </h3>

<?php endforeach; ?>
