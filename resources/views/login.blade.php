<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<div id="app">
  <section class="section">
    <div class="container mt-5">
      <div class="row">
        <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
          <div class="card card-primary">
            <div class="card-header"><h4>Login</h4></div>
            <div class="card-body">
              <form method="POST" action="{{ url('aksi_login') }}" class="needs-validation" novalidate="">
                @csrf
                <div class="form-group">
                  <label for="username">Username</label>
                  <input id="username" type="text" class="form-control" name="username" tabindex="1" required autofocus>
                  <div class="invalid-feedback">Please fill in your username</div>
                </div>

                <div class="form-group">
                  <label for="password" class="control-label">Password</label>
                  <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                  <div class="invalid-feedback">Please fill in your password</div>
                </div>

                <!-- Online CAPTCHA -->
                <div class="form-group">
                  <div id="online-captcha" class="g-recaptcha" data-sitekey="6LdFhCAqAAAAALvjUzF22OEJLDFAIsg-k7e-aBeH"></div>
                </div>

                <!-- Offline CAPTCHA -->
                <div class="form-group" id="offline-captcha" style="display: none;">
                  <label for="offline-captcha-answer">What is <span id="captcha-question"></span>?</label>
                  <input type="text" name="captcha_answer" id="offline-captcha-answer" class="form-control">
                  <input type="hidden" name="correct_captcha_answer" id="correct-captcha-answer">
                </div>

                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">Login</button>
                </div>
              </form>
            </div>
          </div>

          <div class="mt-5 text-muted text-center">
            Don't have an account? <a href="{{ url('register') }}">Create One</a>
          </div>
          <!-- <p class="mt-5 mb-3 text-muted text-center">© 2024/@winn</p> -->
        </div>
      </div>
    </div>
  </section>
</div>

<script>
  function isOnline() {
    return window.navigator.onLine;
  }

  function generateOfflineCaptcha() {
    const num1 = Math.floor(Math.random() * 10) + 1;
    const num2 = Math.floor(Math.random() * 10) + 1;
    document.getElementById('captcha-question').innerText = `${num1} + ${num2}`;
    document.getElementById('correct-captcha-answer').value = num1 + num2;
  }

  function updateCaptchaDisplay() {
    if (isOnline()) {
      document.getElementById('offline-captcha').style.display = 'none';
      document.getElementById('online-captcha').style.display = 'block';
    } else {
      document.getElementById('offline-captcha').style.display = 'block';
      document.getElementById('online-captcha').style.display = 'none';
      generateOfflineCaptcha();
    }
  }

  window.addEventListener('load', updateCaptchaDisplay);
  window.addEventListener('online', updateCaptchaDisplay);
  window.addEventListener('offline', updateCaptchaDisplay);

  document.querySelector('form').addEventListener('submit', function (event) {
    if (isOnline()) {
      var recaptchaResponse = grecaptcha.getResponse();
      if (recaptchaResponse.length === 0) {
        event.preventDefault();
        alert('Please complete the online CAPTCHA.');
      }
    } else {
      const userAnswer = document.getElementById('offline-captcha-answer').value;
      const correctAnswer = document.getElementById('correct-captcha-answer').value;
      if (parseInt(userAnswer) !== parseInt(correctAnswer)) {
        event.preventDefault();
        alert('Incorrect CAPTCHA answer.');
      }
    }
  });
</script>

<style>
  .card-primary {
    border: 1px solid #ddd;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
  }

  .card-header h4 {
    font-size: 1.5rem;
    font-weight: bold;
    text-align: center;
    margin: 0;
  }

  .form-group label {
    font-weight: bold;
  }

  .btn-primary {
    background-color: #007bff;
    border: none;
  }
</style>
