@extends('backend.templates.login')

@section('content')

    <div class="register-box">
        <div class="register-logo">
            <a href="/"><b>{{ $product_name }}</b></a>
        </div>

        <div class="register-box-body">
            <p class="login-box-msg">Register a new membership</p>

            <form action="/auth/register" method="post">

                {!! csrf_field() !!}

                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="Full name" name="name" value="{{ old('name') }}">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Password" name="password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Retype password" name="password_confirmation">
                    <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-8">
                        <?php if (env('HAS_REGISTER_TERMS')) { ?>
                        <div class="checkbox icheck">
                            <label>
                                <input type="checkbox"> I agree to the

                                    <a href="#" data-toggle="modal" data-target=".modal-large"  data-backdrop="false">Terms</a>

                            </label>
                        </div>
                        <?php } ?>
                    </div>
                    <!-- /.col -->
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <?php if (env('SOCIAL_REGISTER')) { ?>

            <div class="social-auth-links text-center">

                <p>- OR -</p>

                <?php if (env('REGISTER_FACEBOOK')) { ?>
                <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using Facebook</a>
                <?php } ?>

                <?php if (env('REGISTER_TWITTER')) { ?>
                <a href="#" class="btn btn-block btn-social btn-twitter btn-flat"><i class="fa fa-twitter"></i> Sign in using Twitter</a>
                <?php } ?>

                <?php if (env('REGISTER_LINKEDIN')) { ?>
                <a href="#" class="btn btn-block btn-social btn-linkedin btn-flat"><i class="fa fa-linkedin"></i> Sign in using Linkedin</a>
                <?php } ?>

                <?php if (env('REGISTER_GPLUS')) { ?>
                <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using Google+</a>
                <?php } ?>

                <?php if (env('REGISTER_GITHUB')) { ?>
                <a href="#" class="btn btn-block btn-social btn-github btn-flat"><i class="fa fa-github"></i> Sign in using Github</a>
                <?php } ?>

                <?php if (env('REGISTER_BITBUCKET')) { ?>
                <a href="#" class="btn btn-block btn-social btn-bitbucket btn-flat"><i class="fa fa-bitbucket"></i> Sign in using Bitbucket</a>
                <?php } ?>

            </div><!-- /.social-auth-links -->

            <?php } ?>

            <a href="/auth/login" class="text-center">I already have a membership</a>
        </div>
        <!-- /.form-box -->
    </div>
@stop

<?php if (env('HAS_REGISTER_TERMS')) { ?>

    @include('auth.terms')

<?php } ?>

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