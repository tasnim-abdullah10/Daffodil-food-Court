<?php include 'header.php'; ?>

<body>
    <?php include 'navbar.php'; ?>
    <?php include 'menu-tab.php'; ?>

    <div class="content">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="col-md-8 col-lg-8">
                <div class="widget">
                    <div class="widget-head">
                        Map Of Store Location
                    </div>
                    <div class="widget-content">
                        <!-- Map -->
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3648.354589340282!2d90.31919141435095!3d23.877041789844924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c3e3a079e7cf%3A0x756161091a272e3c!2sDIU%20Green%20garden-2!5e0!3m2!1sen!2sbd!4v1629480003447!5m2!1sen!2sbd"
                            width="900" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>
            <div class="col-md-4 col-lg-4">
                <div class="widget">
                    <div class="widget-head">
                        Message/Feedback
                    </div>
                    <div class="widget-content">
                        <div class="padd">
                            <form class="form-horizontal" action="add_message.php" method="post">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Fullname</label>
                                    <div class="col-lg-8">
                                        <input name="fullname" type="text" class="form-control"
                                            placeholder="Please type your name" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Email</label>
                                    <div class="col-lg-8">
                                        <input type="email" name="email" class="form-control"
                                            placeholder="Please type your email" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Subject</label>
                                    <div class="col-lg-8">
                                        <input type="text" name="subject" class="form-control" placeholder="Subject"
                                            required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Comments</label>
                                    <div class="col-lg-8">
                                        <textarea name="message" class="form-control" rows="5"
                                            placeholder="Comments here....." required></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-offset-3 col-lg-8">
                                        <button class="btn btn-sm btn-success btn-block">Send</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="content">
            <div class="col-lg-12 col-md-12  col-sm-12">
                <div class="col-lg-12 col-md-12 col-sm-12 ">
                    <div class="title-header">

                    </div>
                </div>
                <br />
                <br />
                <br />
                <div class="col-lg-3 col-md-3 col-sm-3">

                </div>

                <?php include 'footer.php'; ?>
                <?php include 'script.php'; ?>
</body>

</html>