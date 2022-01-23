<?= $this->extend('template/admin') ?>


<?= $this->section('content') ?>


<div class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="text-center ">Tableau De Bord</h1>
</div>

<?php if (session()->get('msg')) : ?>
    <div class="alert alert-warning">
        <?= session()->get('msg')  ?>
    </div>
<?php endif; ?>

<span class="h4">
    <h2 class="mb-3">
        Welcome Back Home Dear <i class="text text-primary"><?= session()->get('name') ?></i>
    </h2>
    <p>Here is Your Administration Panel Where you can Manage your Article</p>
    <p class="p-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat iure laboriosam porro voluptatibus excepturi sit eveniet fugiat officiis natus dicta labore dignissimos explicabo, sed accusantium adipisci distinctio maiores incidunt quidem consequuntur soluta placeat, magnam dolor nihil. Sint maiores sapiente odio repellat libero veritatis autem illo? Aperiam exercitationem nulla, deserunt ipsum expedita asperiores beatae blanditiis quo esse ex doloribus ullam tempora sequi nisi culpa dignissimos possimus modi totam at iure earum dicta cumque. Ducimus, porro dicta voluptate tempora dolor, iure non et, ex provident delectus error possimus explicabo numquam minus soluta consequatur voluptates dolores! Recusandae ipsa fugiat quod inventore commodi blanditiis quibusdam soluta? Maxime impedit, iusto iure magni doloremque facere eos voluptas molestias, reprehenderit iste aliquam praesentium aliquid enim harum accusamus autem. Explicabo omnis quam unde, eos ex numquam natus fugit.</p>
</span>

<?= $this->endSection() ?>