<?= $this->extend('template/layout') ?>


<?= $this->section('content') ?>

<div class="container mt-5">
    <nav style="bs-breadcrumb-divider: '/';" aria-label="breadcrumb" class="text-light">
        <ol class="breadcrumb bg-primary p-1 ">
            <li class="breadcrumb-item"><a href="" class="link-secondary text-light">Home</a></li>
            <li class="breadcrumb-item active text-light" aria-current="page">
                <a class="link-secondary text-light" href="<?= '/post/' . $post->slug ?>">
                    <?= strtoupper($post->title) ?>
                </a>
            </li>
        </ol>
    </nav>
    <div class="container px-5 mx-auto my-5 border border-secondary ">
        <?php if (session()->get('msg')) : ?>
            <div class="alert alert-success">
                <?= session()->get('msg')  ?>
            </div>
        <?php endif; ?>
        <span class="h3 mb-2 d-block"><?= $post->title ?></span>
        <div class="d-flex row p-3">
            <div class="d-flex flex-column col-md-5">
                <img src="<?= '/' . $post->img_dir ?>" class="card img-fluid p-3 mt-2" alt="..." width="300px" height="300px">
                <small class="mt-3">
                    <span class="h6">Writen by <?= $writer ?> on <i><?= date("d-m-Y", strtotime($post->created_at)) ?></i> ,</span>
                </small>
                <i class="text-muted text-primary mt-2"> Tags:
                    <?php foreach ($tags as $item) : ?>
                        <i class="badge bg-success p-2"><?= $item->name ?></i>
                    <?php endforeach ?>
                </i>
                <small class="text-muted mt-3">
                    <span class="h6">Like: <?= $post->like ?> like | <?= $post->unlike ?> unlike ,</span>
                    <span id="like">

                    </span>
                </small>
            </div>
            <div class="col-md-5">

                <form action="" method="post" class="invisible bg-dark p-5 " id="commentForm">
                    <div class="mb-3">
                        <label for="email" class="form-label text-light">Email : </label>
                        <input type="email" name="email" id="email" class="form-control" aria-describedby="emailHelp">
                        <i id="emailHelp" class="form-text">surely your address will be confidential.</i>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label text-light">Pseudo :</label>
                        <input type="name" name="name" id="name" class="form-control">
                        <input type="hidden" name="post_id" value="<?= esc($post->id) ?>">
                    </div>
                    <div class="mb-3 ">
                        <label class="form-label text-light" for="description ">Comment :</label>
                        <textarea class="form-control" id="description" name="description" aria-label="With textarea"></textarea>
                    </div>
                    <button type="submit" id="submitCommentForm" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>

        <p class="my-5 bg-light rounded">
            <?= $post->description ?>
        </p>

        <button type="submit" class="btn btn-primary" id="btnLike">
            👍 Like
        </button>
        <button type="submit" class="btn btn-light border-dark" id="btnUnlike">
            ❌ Dislike
        </button>
        <div class="d-flex justify-content-center">
            <form action="<?= base_url('/like/' . $post->slug) ?>" method="post">
                <input type="hidden" name="id" value="<?= $post->id ?>">
                <input type="hidden" name="like" value="<?= $post->like ?>">
            </form>
            <form action="<?= base_url('/unlike/' . $post->slug) ?>" method="post">
                <input type="hidden" name="id" value="<?= $post->id ?>">
                <input type="hidden" name="unlike" value="<?= $post->unlike ?>">
            </form>
        </div>

        <hr class="bg-secondary">
        <h2 class="text text-primary">All Comments </h2>
        <div id="results">
        </div>
        <div class="w-100"></div>

        <button type="submit" id="commentBtn" class="btn btn-primary mb-3">Add a Comment</button>
    </div>

</div>


<?= $this->endSection() ?>

<?= $this->section('js') ?>
<script>
    $(function() {

        var btn = $('#btnLike')
        var like = $('#like')
        var unlike = $('#btnUnlike')
        var num = 0

        btn.on('click', function() {
            num += 1
            console.log(num)
            like.html(num)
        })

        unlike.on('click', function() {
            if (num % 3 == 0) {
                num -= 1
                like.html(num)
            }
        })

        var addBtn = $("#commentBtn");
        addBtn.on('click', () => {
            $("#commentForm").removeClass("invisible")
            $("#commentForm").toggleClass("visible")
        });

        reloadTable()

        function reloadTable() {
            $.ajax({
                url: "<?= base_url('/allComment/' . $post->id) ?>",
                type: "GET",
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                },
                beforeSend: function(res) {
                    $('#results').html('Fetching ...');
                },
                success: function(data) {
                    $('#results').html(data);
                }
            })
        }

        $('#submitCommentForm').on('click', function(e) {

            e.preventDefault();
            $.ajax({
                url: "<?= base_url('/countComment/' . $post->id) ?>",
                type: "GET",
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                },
                success: function(data) {
                    count = data.count
                    if (data.count < 3) {

                        $.ajax({
                            url: "<?php echo site_url('/comment') ?>",
                            type: "POST",
                            headers: {
                                'X-Requested-With': 'XMLHttpRequest'
                            },
                            data: $('#commentForm').serialize(),
                            processData: false,
                            contentType: false,
                            dataType: "JSON",
                            success: function(data) {
                                if (data.success == true) {
                                    toastr.success(data.msg, "success")
                                    setInterval(reloadTable(), 1000)
                                }
                            },
                            error: function(jqXHR, textStatus, errorThrown) {
                                alert('Error at add data');
                            }
                        });
                    } else {
                        toastr.warning('You Reach the Roof ', 'Sorry')
                    }
                }
            })



            $("#commentForm").removeClass("visible")
            $("#commentForm").toggleClass("invisible")
        });
    })
</script>

<?= $this->endSection() ?>