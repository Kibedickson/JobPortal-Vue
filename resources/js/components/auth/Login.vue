<template>
    <div>
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="inner-header">
                            <h3>Login</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <section id="content" class="section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-6 col-xs-12">
                        <div class="page-login-form box">
                            <form class="login-form" method="POST">
                                <div class="form-group">
                                    <div class="input-icon">
                                        <i class="lni-user"></i>
                                        <input id="sender-email email" type="email" class="form-control" name="email" required autocomplete="email" placeholder="Username">
                                        <span class="invalid-feedback" role="alert">
                                            <strong></strong>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-icon">
                                        <i class="lni-lock"></i>
                                        <input id="password" type="password" class="form-control" name="password" required autocomplete="current-password" placeholder="Password">
                                        <span class="invalid-feedback" role="alert">
                                            <strong></strong>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember">

                                    <label class="form-check-label" for="remember">Remember Me</label>
                                </div>
                                <button type="submit" class="btn btn-common log-btn">
                                    Login
                                </button>
                            </form>
                            <p class="text-center"><a href=""> Forgot Your Password?</a></p>
                            <p class="text-center">Don't have an account? <a><router-link to="/register">Register</router-link></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
    export default {
        name: "Login",
    }
</script>
