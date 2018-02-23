<section id="testimonials">
    <div class="container">
        <div class="row">

            <div class="text-center">

                <!--Section heading-->
                <h2 class="h2">Testimonials</h2>
                <hr>

                <div class="row">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <?php
                            if ($testimonials) {
                                foreach ($testimonials as $i => $t) {
                                    $cl = $i == 0 ? 'active' : '';
                                    ?>
                                    <div class="item <?= $cl ?>">
                                        <div class="testimonial">
                                            <!--Avatar-->
                                            <?php
                                            if ($t->image) {
                                                ?>
                                                <div class="avatar mx-auto">
                                                    <img src="<?= Yii::app()->request->getBaseUrl(true) ?>/media/testimonials/small/<?= $t->image ?>" width="150" class="img-circle img-fluid">
                                                </div>
                                                <?php
                                            }
                                            ?>
                                            <!--Content-->
                                            <h4><?= $t->name ?></h4>
                                            <h6 class="blue-text font-weight-bold"><?= $t->title ?></h6>
                                            <p><i class="fa fa-quote-left"></i> <?= $t->content ?></p>

                                            <!--Review-->
                                            <?php
                                            if ($t->rating) {
                                                ?>
                                                <div class="grey-text">
                                                    <?php
                                                    for ($i = 0; $i < $t->rating; $i++) {
                                                        ?>
                                                        <i class="fa fa-star"> </i>
                                                        <?php
                                                    }
                                                    for ($i = 0; $i < 5 - $t->rating; $i++) {
                                                        ?>
                                                        <i class="fa fa-star-o"> </i>
                                                        <?php
                                                    }
                                                    ?>
                                                </div>
                                                <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <?php
                                }
                            } else {
                                ?>
                                <div class="item active">
                                    <div class="testimonial">
                                        <!--Avatar-->
                                        <div class="avatar mx-auto">
                                            <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(7).jpg" width="150" class="img-circle img-fluid">
                                        </div>
                                        <!--Content-->
                                        <h4>Cami Gosse</h4>
                                        <h6 class="blue-text font-weight-bold">Phtographer</h6>
                                        <p><i class="fa fa-quote-left"></i> At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium.</p>

                                        <!--Review-->
                                        <div class="grey-text">
                                            <i class="fa fa-star"> </i>
                                            <i class="fa fa-star"> </i>
                                            <i class="fa fa-star"> </i>
                                            <i class="fa fa-star"> </i>
                                            <i class="fa fa-star-o"> </i>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                        </div>

                        <div class="clear"><br></div>
                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                            <span class="fa fa-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                            <span class="fa fa-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>

            </div>
            <!--Section: Testimonials v.4-->
        </div>
    </div>
</section>
