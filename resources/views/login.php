<div class="center-block w-xxl w-auto-xs p-v-md">
    <div class="navbar">
        <div class="navbar-brand m-t-lg text-center">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve" style="
                width: 24px; height: 24px;">
          <path d="M 50 0 L 100 14 L 92 80 Z" fill="rgba(139, 195, 74, 0.5)"></path>
                <path d="M 92 80 L 50 0 L 50 100 Z" fill="rgba(139, 195, 74, 0.8)"></path>
                <path d="M 8 80 L 50 0 L 50 100 Z" fill="#fff"></path>
                <path d="M 50 0 L 8 80 L 0 14 Z" fill="rgba(255, 255, 255, 0.6)"></path>
        </svg>
        </div>
    </div>

    <div class="p-lg panel md-whiteframe-z1 text-color m">
        <div class="m-b text-sm">
            <?php if (session()->has('auth_message')) { ?>
                <div class="alert alert-danger text-danger alert-dismissable wrapper text-center">
                    <h5><?php echo session()->get('auth_message') ?></h5>
                </div>
            <?php } ?>
        </div>
        <form method="post" accept-charset="UTF-8"
              action="api/post-login">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"/>

            <div class="md-form-group float-label">
                <input type="email" class="md-input" name="email" required>
                <label>Email</label>
            </div>
            <div class="md-form-group float-label">
                <input type="password" class="md-input" name="password" required>
                <label>Password</label>
            </div>
            <div class="m-b-md">
                <label class="md-check">
                    <input type="checkbox"><i class="indigo"></i> Keep me signed in
                </label>
            </div>
            <button md-ink-ripple type="submit" class="md-btn md-raised pink btn-block p-h-md">Sign in</button>
        </form>
    </div>

    <div class="p-v-lg text-center">
        <div class="m-b"><button ui-sref="access.forgot-password" class="md-btn">Forgot password?</button></div>
        <div>Do not have an account? <button ui-sref="access.signup" class="md-btn">Create an account</button></div>
    </div>
</div>
