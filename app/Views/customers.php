<a href="<?= site_url('/') ?>">Home</a>
<a href="<?= site_url('about') ?>">About</a>
<a href="<?= site_url('customers') ?>">Customers</a>
<a href="<?= site_url('users') ?>">Users</a>

<h1>Customers</h1>

<?php foreach ($customers as $customer): ?>

    <h3>
        <ul><li><?= $customer['name'] ?></li></ul>
    </h3>
    

<?php endforeach; ?>