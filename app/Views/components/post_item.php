
<div class="container" >
        <h5 class=""><?= $post->creation_date; ?></h5>
        <p class="card-text"><?= $post->recommendation; ?></p>
        <a href="/DashboardController/detailsPrescription/<?= $post->prescription_id; ?>" class="btn">Details</a>
    <hr style="width:95%">
</div>
