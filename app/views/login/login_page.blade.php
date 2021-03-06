@extends('layouts.master')
@section('content')
<div class="navbar navbar-fixed-top">

    <div class="navbar-inner">

        <div class="container">
            <div class="row">
                <a class="brand" href="./login.html">UDSM Integrated Hospital Information System</a>
            </div>


        </div> <!-- /container -->

    </div> <!-- /navbar-inner -->

</div> <!-- /navbar -->




<div id="login-container">

    <center>{{HTML::image('packages/bootstrap/img/login.png')}}</center>


   

    <div id="login-header">

        <h3>Signin</h3>

    </div> <!-- /login-header -->


    <div id="login-content" class="clearfix">




        {{Form::open(array('url'=>'/login'))}}


        <fieldset>
         @if($errors->any())
            {{ implode('', $errors->all('<div class="alert alert-warning alert-dismissable">:message</div>') ) }}
            @endif


            <div class="control-group">
                <label class="control-label" for="email">Email</label>
                <div class="controls">
                    <input type="text"  name="email" class="" id="email" placeholder="Email">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="password">Password</label>
                <div class="controls">
                    <input type="password"  name="password" class="" id="password" placeholder="Password">
                </div>
            </div>
        </fieldset>

        <div id="remember-me" class="pull-left">
            <input type="checkbox" name="remember" id="remember" />
            <label id="remember-label" for="remember">Remember Me</label>
        </div>

        <div class="pull-right">
            <button type="submit" name="login" class="btn btn-primary btn-large" style="padding:6px 18px; border-radius:0px;">
                Login
            </button>
        </div>
        </form>

    </div> <!-- /login-content -->


    <div id="login-extra">
        <p><a href="forgot_password.html">Forgot Password? </a></p>			
    </div> <!-- /login-extra -->
    <div id="rights" style="text-align:center;">
        ©13-14 UDIHIS
    </div>


</div> <!-- /login-wrapper -->
@stop

