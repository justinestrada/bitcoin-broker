<style>
section.section-page {
    background: #f5f5f5;
    margin-top: 0;
}
.login-form-wrapper {
    padding: 50px 0;                
}
.dash-card {
    background: linear-gradient(60deg, #f7931a, #ff0000);
    position: absolute;
    min-height: 1px;
    padding: 5px;
    color: #fff;
    border-radius: 5px;
    text-align: center;
    top: 15px;
    width: 100%;
    box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.14);
    margin-top: 30px;
    max-width: 250px;
    margin: 0 auto;
    left: 0;
    right: 0;
}
form#rcp_login_form {
    padding: 15px;
    background: #fff;
    border-radius: 5px;
    box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.14);
    padding-top: 45px;
}
form#rcp_login_form input[type="password"], form#rcp_login_form input[type="text"] {
    border-radius: 5px;
}
form input[type="button"], form input[type="submit"] {
    max-width: initial;
}
form p.rcp_lost_password {
    display: block;
    clear: both;
}
p.rcp_error.empty_password {
    width: 100%;
    max-width: 450px;
    margin: 25px auto 0;
}
.footer-wrapper {
    margin-top: 0;
}
</style>
<div class="container">
    <div class="login-form-wrapper col-xs-12" >
        <div class="dash-card">
            <h3 style="color: #fff;">Login</h3>                    
        </div>
        <?php echo do_shortcode( '[login_form]' ); ?>
    </div>
</div>