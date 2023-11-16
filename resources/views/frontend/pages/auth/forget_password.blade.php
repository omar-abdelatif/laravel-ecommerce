@extends('frontend.layout.app')
@section('site')
    <div id="content" class="site-content pt-5 pb-5">
        <div class="container">
            <div class="no-row">
                <div id="primary" class="content-area  no_column">
                    <main id="main" class="site-main">
                        <div class="row">
                            <article id="post-26" class="clearfix post-26 page type-page status-publish hentry">
                                <div class="entry-content clearfix">
                                    <div class="woocommerce">
                                        <div class="woocommerce-notices-wrapper"></div>
                                        <form method="post" class="woocommerce-ResetPassword lost_reset_password">
                                            <p>
                                                Lost your password? Please enter your username or email address. You will
                                                receive a link to create a new password via email.
                                            </p>
                                            <p class="woocommerce-form-row woocommerce-form-row--first form-row form-row-first">
                                                <label for="user_login">Username or email</label>
                                                <input class="woocommerce-Input woocommerce-Input--text input-text" type="text" name="user_login" id="user_login" autocomplete="username">
                                            </p>
                                            <div class="clear"></div>
                                            <p class="woocommerce-form-row form-row">
                                                <input type="hidden" name="wc_reset_password" value="true">
                                                <button type="submit" class="woocommerce-Button button" value="Reset password">Reset password</button>
                                            </p>
                                            <input type="hidden" id="woocommerce-lost-password-nonce" name="woocommerce-lost-password-nonce" value="1fc4f065e8"><input type="hidden" name="_wp_http_referer" value="/wp/nest/d1/my-account/lost-password/">
                                        </form>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </article>
                            <div class="col-lg-12 padding_zero">
                            </div>
                        </div>
                    </main>
                </div>
            </div>
        </div>
    </div>
@endsection
