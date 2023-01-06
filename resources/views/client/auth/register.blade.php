<style>
    *,
    *::before,
    *::after {
    box-sizing: border-box;
    }
    html,
    body {
    height: 100%;
    font-family: Open Sans;
    }
    body {
    background: hsl(86, 85%, 95%);
    }


    /*--------------------
    Buttons
    --------------------*/
    .btn {
    display: block;
    background: hsl(86, 76%, 71%);
    color: hsl(0, 0, 100);
    text-decoration: none;
    margin: 20px 0;
    padding: 15px 15px;
    border-radius: 5px;
    position: relative;
    }
    .btn::after {
        content: '';
        position: absolute;
        z-index: 1;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        transition: all .2s ease-in-out;
        box-shadow: inset 0 3px 0 hsla(0, 0, 0, 0), 0 3px 3px hsla(0, 0, 0, .2);
        border-radius: 5px;
    }
    
    .btn:hover::after {
        background: hsla(0, 0, 0, 0.1);
        box-shadow: inset 0 3px 0 hsla(0, 0, 0, 0.2);
    }

    .btn-social {
    padding-left: 64px;
    position: relative;
    z-index: 1;
    }

    .fa {
        position: absolute;
        top: 0;
        left: 0;
        z-index: 1;
        width: 50px;
        height: 100%;
        text-align: center;
        background: hsla(0, 0, 0, 0.1);
        line-height: 3.2;
        border-radius: 5px 0 0 5px;
    }
    
    .btn-facebook {
    background-color: hsl(221, 44%, 41%);
    }
    .btn-twitter {
    background-color: hsl(206, 82%, 63%);
    }
    .btn-google {
    background-color: hsl(7, 71%, 55%); 
    }
    .btn-linkedin {
    background-color: hsl(196, 100%, 43%);
    }


    /*--------------------
    Form
    --------------------*/
    
    .form fieldset {
        border: none;
        padding: 0;
        margin: 20px 0;
        position: relative;
    }

    .form input {
        width: 100%;
        height: 48px;
        color: hsl(0, 0, 20);
        padding: 15px 40px 15px 15px;
        border-radius: 5px;
        font-size: 14px;
        outline: none!important;
        border: 1px solid hsla(0, 0, 0, 0.3);
        box-shadow: inset 0 1px 4px hsla(0, 0, 0, 0.2);
        vertical-align: top;
    }
    
    button {
        width: 100%;
        outline: none!important;
        background: linear-gradient(-5deg, hsl(86, 61%, 44%), hsl(86, 65%, 54%));
        border: none;
        text-transform: uppercase;
        font-weight: bold;
        box-shadow: 0 3px 0px hsla(86, 21%, 44%, 0.2);
        text-shadow: 0 2px 3px hsla(0, 0, 0, 0.2);
    }

    /*--------------------
    Signup
    --------------------*/
    .signup {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 1;
    width: 800px;
    background: hsl(0, 0, 100);
    border-radius: 10px;
    box-shadow: 0 3px 25px hsla(0, 0, 0, 0.2);
    overflow: hidden;
    display: flex;
    }

    .signup-connect,
    .signup-classic
    {
    width: 50%;
    padding: 30px 50px;
    }

    .signup-connect {
        background: linear-gradient(134deg, hsl(44, 96%, 65%), hsl(34, 95%, 45%));
        color: hsl(0, 0, 100);
    }
    .signup-connect h1 {
        font-size: 30px;
        margin-top: 10px;
        margin-bottom: 40px;
        text-shadow: 0 2px 3px hsla(0, 0, 0, 0.1);
    }
    
    .signup-classic h2 {
        font-size: 16px;
        font-weight: normal;
        margin-top: 23px;
        margin-bottom: 43px;
        text-shadow: 0 2px 3px hsla(0, 0, 0, 0.1);
    }
    fieldset::after {
        content: '\f007';
        font-family: FontAwesome;
        position: absolute;
        right: 15px;
        top: 17px;
        z-index: 2;
        width: 20px;
        color: hsla(0, 0, 0, .2);
        text-align: center;
    }
    
    fieldset.email::after {
        content: '\f0e0';
    }
    
    fieldset.password::after {
        content: '\f023';
    }
</style>
<div class="signup">
  <div class="signup-connect">
    <h1>Create your account</h1>
    <a href="#" class="btn btn-social btn-facebook"><i class="fa fa-facebook"></i> Sign in with Facebook</a>
    <a href="#" class="btn btn-social btn-twitter"><i class="fa fa-twitter"></i> Sign in with Twitter</a>
    <a href="#" class="btn btn-social btn-google"><i class="fa fa-google"></i> Sign in with Google</a>
    <a href="#" class="btn btn-social btn-linkedin"><i class="fa fa-linkedin"></i> Sign in with Linkedin</a>
  </div>
  <div class="signup-classic">
    <h1>Đăng ký thành viên</h1>
    <form class="form" method="POST" action="{{ route('register') }}">
    @csrf
        <fieldset class="username"><input name="name" type="text" placeholder="Tên tài khoản" value="{{ old('name') }}"/></fieldset>
            <span class="text-danger">@error('name') {{$message}} @enderror</span>
        <fieldset class="password"><input name="pass" type="password" placeholder="Mật khẩu" value="{{ old('pass') }}"/></fieldset>
            <span class="text-danger">@error('pass') {{$message}} @enderror</span>      
        <fieldset class="email"><input name="email" type="email" placeholder="Gmail" value="{{ old('email') }}"/></fieldset>
            <span class="text-danger">@error('email') {{$message}} @enderror</span>
        <fieldset class="username"><input name="tel" type="text" placeholder="Số điện thoại" value="{{ old('tel') }}"/></fieldset>
            <span class="text-danger">@error('tel') {{$message}} @enderror</span>
        <button type="submit" class="btn">sign up</button>
    </form>
  </div>
</div>