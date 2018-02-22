<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <h2 class="section-heading">Let's Get In Touch!</h2>
                <hr class="primary">
                <p>Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
            </div>
            <div class="col-lg-4 text-center">
                <i class="fa fa-phone fa-3x sr-contact"></i>
                <p>Landline: <?= $settings->phone ?></p>
            </div>
            <div class="col-lg-4 text-center">
                <i class="fa fa-envelope-o fa-3x sr-contact"></i>
                <p><a href="mailto:<?= $settings->email ?>"><?= $settings->email ?></a></p>
            </div>
            <div class="col-lg-4 text-center">
                <i class="fa fa-mobile fa-3x sr-contact"></i>
                <p>Mobile: <?= $settings->address ?></p>
            </div>
        </div>
    </div>
</section>