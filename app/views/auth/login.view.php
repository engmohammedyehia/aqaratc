<?php include VIEWS_PATH . DS . 'home_section.phtml'; ?>
<section class="consult_slide">
    <div class="consult_slide_content_wrapper clearfix">
        <h1>Login to Aqaratc</h1>
        <p>If you don't have an account on Aqaratc <a href="/auth/register">click here</a></p>
        <div class="request_container">
            <div class="action small request clearfix">
                <?php $messages = $this->messenger->getMessages(); if(!empty($messages)): foreach ($messages as $message): ?>
                    <p class="message t<?= $message[1] ?>"><?= $message[0] ?><a href="" class="closeBtn"><i class="fa fa-times"></i></a></p>
                <?php endforeach;endif; ?>
                <form autocomplete="off" method="post" enctype="application/x-www-form-urlencoded">
                    <div class="label">
                        <label for="username">Username:</label>
                        <input required type="text" name="username" id="username">
                    </div>
                    <div class="label">
                        <label for="password">Password:</label>
                        <input required type="password" name="password" id="password">
                    </div>
                    <div class="label">
                        <a href="/auth/resetpassword">Forgot your password?</a>
                        <a href="/auth/register">Don't have an account?</a>
                    </div>
                    <input type="submit" name="submit" value="Login">
                </form>
            </div>
        </div>
    </div>
</section>