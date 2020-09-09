<template>
    <div>
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="inner-header">
                            <h3>Create Your account</h3>
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
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input id="employer" type="radio" name="role_id" value="2" checked required > Employer
                                            </div>
                                            <div class="col-md-6">
                                                <input id="candidate" type="radio" name="role_id" value="3" required> Candidate
                                            </div>
                                        </div>
                                        <span class="invalid-feedback" role="alert">
                                            <strong></strong>
                                        </span>
                                    </div>
                                </div><div class="form-group">
                                    <div class="input-icon">
                                        <i class="lni-user"></i>
                                        <input id="name" type="text" class="form-control" name="name" required autocomplete="name" autofocus placeholder="Name">
                                        <span class="invalid-feedback" role="alert">
                                            <strong></strong>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-icon">
                                        <i class="lni-envelope"></i>
                                        <input id="email" type="email" class="form-control" name="email" required autocomplete="email" placeholder="Email Address">
                                        <span class="invalid-feedback" role="alert">
                                            <strong></strong>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-icon">
                                        <i class="lni-lock"></i>
                                        <input id="password" type="password" class="form-control" name="password" required autocomplete="new-password" placeholder="Password">
                                        <span class="invalid-feedback" role="alert">
                                            <strong></strong>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-icon">
                                        <i class="lni-unlock"></i>
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Retype Password">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-common log-btn mt-3">
                                    Register
                                </button>
                                <p class="text-center">Already have an account?<a><router-link to="/login">Login</router-link></a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
export default {
    name: "Register"
}
</script>
