<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Delete user<?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1>Delete user</h1>

<p>Are you sure?</p>

<?= form_open("/admin/user/delete/" . $user->id) ?>

    <button>Yes</button>
    <a href="<?= site_url('/admin/user/show/' . $user->id) ?>">Cancel</a>
    
</form>

<?= $this->endSection() ?>