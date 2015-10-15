@extends('backend.templates.login')

@section('content')

        <div class="login-box">
            <div class="login-logo">
                <a href="/">{{ $product_name }}</a>
            </div><!-- /.login-logo -->
            <div class="login-box-body">
                <p class="login-box-msg">Sign in to start your session</p>
                <form action="/auth/login" method="post">
                    {!! csrf_field() !!}
                    <div class="form-group has-feedback">
                        <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}">
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" class="form-control" placeholder="Password" name="password" id="password">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="row">
                        <div class="col-xs-8">
                            <div class="checkbox icheck">
                                <label>
                                    <input type="checkbox" name="remember"> Remember Me
                                </label>
                            </div>
                        </div><!-- /.col -->
                        <div class="col-xs-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                        </div><!-- /.col -->
                    </div>
                </form>

                <?php if (env('SOCIAL_LOGIN')) { ?>

                    <div class="social-auth-links text-center">

                        <p>- OR -</p>

                        <?php if (env('FACEBOOK_LOGIN')) { ?>
                            <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using Facebook</a>
                        <?php } ?>

                        <?php if (env('TWITTER_LOGIN')) { ?>
                            <a href="#" class="btn btn-block btn-social btn-twitter btn-flat"><i class="fa fa-twitter"></i> Sign in using Twitter</a>
                        <?php } ?>

                        <?php if (env('LINKEDIN_LOGIN')) { ?>
                            <a href="#" class="btn btn-block btn-social btn-linkedin btn-flat"><i class="fa fa-linkedin"></i> Sign in using Linkedin</a>
                        <?php } ?>

                        <?php if (env('GOOGLE_PLUS_LOGIN')) { ?>
                            <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using Google+</a>
                        <?php } ?>

                        <?php if (env('GITHUB_LOGIN')) { ?>
                            <a href="#" class="btn btn-block btn-social btn-github btn-flat"><i class="fa fa-github"></i> Sign in using Github</a>
                        <?php } ?>

                        <?php if (env('BITBUCKET_LOGIN')) { ?>
                            <a href="#" class="btn btn-block btn-social btn-bitbucket btn-flat"><i class="fa fa-bitbucket"></i> Sign in using Bitbucket</a>
                        <?php } ?>

                    </div><!-- /.social-auth-links -->

                <?php } ?>

                <a href="#">I forgot my password</a><br>
                <a href="/auth/register" class="text-center">Register a new membership</a>

            </div><!-- /.login-box-body -->
        </div><!-- /.login-box -->

@stop

@section('extra_scripts')
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
</script>
@stop