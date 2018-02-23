<section class="bg-dark" id="prices">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Prices</h2>
                <hr class="primary">
            </div>
        </div>
        <div class="row">
            <?php
            if ($prices) {
                $colors = [0 => 'info', 1 => 'danger', 2 => 'success', 3 => 'warning'];
                foreach ($prices as $i => $pr) {
                    $cl = $colors[$i % 4];
                    ?>
                    <div class="col-sm-6 col-md-3">
                        <div class="panel panel-<?= $cl ?>">
                            <div class="panel-heading">
                                <h4 class="h4 text-center"><?= $pr->name ?></h4>
                            </div>
                            <div class="panel-body">
                                <div class="text-price">
                                    <?= $pr->details ?>
                                </div>
                                <p class="span-price"><span class="btn btn-<?= $cl ?> price-size"><?= $pr->price ?></span></p>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            } else {
                ?>
                <div class="col-sm-6 col-md-3">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h4 class="h4 text-center">Large</h4>
                        </div>
                        <div class="panel-body">
                            <p class="text-price">
                                Max 200kg<br><br> Equivalent to a 4×4 full or around 20 bags
                            </p>
                            <p class="span-price"><span class="btn btn-info price-size">&pound;50</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h4 class="h4 text-center">Small</h4>
                        </div>
                        <div class="panel-body">
                            <p class="text-price">
                                Max 200kg<br><br> Equivalent to a 4×4 full or around 20 bags
                            </p>
                            <p class="span-price"><span class="btn btn-success price-size">&pound;50</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <h4 class="h4 text-center">Small</h4>
                        </div>
                        <div class="panel-body">
                            <p class="text-price">
                                Max 200kg<br><br> Equivalent to a 4×4 full or around 20 bags
                            </p>
                            <p class="span-price"><span class="btn btn-danger price-size">&pound;50</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <h4 class="h4 text-center">Small</h4>
                        </div>
                        <div class="panel-body">
                            <p class="text-price">
                                Max 200kg<br><br> Equivalent to a 4×4 full or around 20 bags
                            </p>
                            <p class="span-price"><span class="btn btn-warning price-size">&pound;50</span></p>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</section>