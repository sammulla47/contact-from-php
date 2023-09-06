<?php include('header.php') ?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <!-- Portfolio Section Heading-->
                <div class="border-2 border px-3 py-3 shadow-sm my-5">
                    <form action="contact-form-back.php" method="post">
                        <h2 class="text-center text-capitalize my-3 fs-4 text-decoration-underline">Get in Touch</h2>
                        <div class="form-group my-2">
                            <input type="email" name="email" class="form-control" placeholder="Email Address" required>
                        </div>
                        <div class="form-group my-2">
                            <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                        </div>
                        <div class="form-group my-2">
                            <input type="number" name="phone" class="form-control" placeholder="98989 91919" required>
                        </div>
                        <div class="form-group my-2">
                            <input type="text" name="subject" class="form-control" placeholder="Subject" required>
                        </div>
                        <div class="form-group my-2">
                            <textarea class="form-control" name="body" rows="3" placeholder="Your Message" required></textarea>
                        </div>
                        <div class="form-group my-2 text-center">
                            <button class="btn btn-dark text-white" type="submit">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</section>
<?php include('footer.php') ?>