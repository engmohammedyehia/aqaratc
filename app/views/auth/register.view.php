<?php include VIEWS_PATH . DS . 'home_section.phtml'; ?>
<section class="consult_slide">
    <div class="consult_slide_content_wrapper clearfix">
        <h1>Create your account</h1>
        <p>Get the most out of Aqaratc by signing up Today</p>
        <div class="request_container">
            <div class="action request clearfix">
                <?php $messages = $this->messenger->getMessages(); if(!empty($messages)): foreach ($messages as $message): ?>
                    <p class="message t<?= $message[1] ?>"><?= $message[0] ?><a href="" class="closeBtn"><i class="fa fa-times"></i></a></p>
                <?php endforeach;endif; ?>
                <form autocomplete="off" method="post" enctype="application/x-www-form-urlencoded">

                    <div class="left">
                        <div class="label">
                            <label for="username">Username:</label>
                            <input required type="text" name="username" id="username">
                        </div>
                        <div class="label">
                            <label for="password">Password:</label>
                            <input required type="password" name="password" id="password">
                        </div>
                        <div class="label">
                            <label for="phone">Phone Number:</label>
                            <input required type="text" name="phone" id="phone" placeholder="Ex: +2010001010101">
                        </div>
                    </div>
                    <div class="right">
                        <div class="label">
                            <label for="email">Email:</label>
                            <input required type="email" name="email" id="email" placeholder="Ex: example@example.com">
                        </div>
                        <div class="label">
                            <label for="cpassword">Confirm Password:</label>
                            <input required type="password" name="cpassword" id="cpassword">
                        </div>
                        <input class="authentication" type="submit" name="submit" value="Register">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>