<?php
$id = $_GET['idpengumuman'];
$sql = mysqli_query($con, "SELECT * FROM pengumuman WHERE id_pengumuman='$id'");
$data = mysqli_fetch_assoc($sql);
if (!empty($data)) {
?>
    <section id="blog" class="blog">
        <div class="container">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-8">
                        <article class="entry" data-aos="fade-up">
                            <div class="entry-img">
                                <img style="height: 600;" width="700" class="img-fluid" src="img/pengumuman/<?php echo $data['foto_pengumuman'] ?>" alt="No Image" />
                            </div>

                            <h2 class="entry-title">
                                <?= $data['judul_pengumuman'] ?>
                            </h2>
                            <div class="entry-meta">
                                <ul>
                                    <div class="meta">
                                        <h5><span class="author">Posted in : <a href="#"><?= tgl_indo($data['tgl_post']) ?></a></span></h5>
                                    </div>
                                </ul>
                            </div>
                            <br>
                            <div class="entry-content">
                                <p>
                                    <?= $data['isi_pengumuman'] ?>
                                </p>
                            </div>
                        </article><!-- End blog entry -->

                    </div>
                    <?php include "components/sidebar.php"; ?>
                </div>
            </div>
        </div>
    </section>
<?php
} else {
    echo "<script>
        window.location = 'page_404.php';
    </script>";
}
?>