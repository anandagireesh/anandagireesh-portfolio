<div>
  <!-- Start Contact Seciton -->
  <section id="contact" class="st-dark-bg">
    <div class="st-height-b100 st-height-lg-b80"></div>
    <div class="container">
      <div class="st-section-heading st-style1">
        <h4 class="st-section-heading-title">CONTACT ME</h4>
        <h2 class="st-section-heading-subtitle">CONTACT ME</h2>
      </div>
      <div class="st-height-b25 st-height-lg-b25"></div>
    </div>

    <!-- Contact Container -->

    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h3 class="st-contact-title">Just say Hello</h3>
          <div id="st-alert"></div>
          <form wire:submit.prevent="sendEmail"   class="st-contact-form">
            <div class="st-form-field">
              <input type="text" wire:model="name" id="name" name="name" placeholder="Your Name" required>
              <div>
                @error('name')
                    <p class="text-danger">{{ $message }} </p>
                @enderror
            </div>
            </div>
            <div class="st-form-field">
              <input type="text" id="email" wire:model="email" name="email" placeholder="Your Email" required>
              <div>
                @error('email')
                    <p class="text-danger">{{ $message }} </p>
                @enderror
            </div>
            </div>
            <div class="st-form-field">
              <input type="text" id="subject" wire:model="subject" name="subject" placeholder="Your Subject" required>
              <div>
                @error('subject')
                    <p class="text-danger">{{ $message }} </p>
                @enderror
            </div>
            </div>
            <div class="st-form-field">
              <textarea cols="30" rows="10" wire:model="msg" id="msg" name="msg" placeholder="Your Message" required></textarea>
              <div>
                @error('msg')
                    <p class="text-danger">{{ $message }} </p>
                @enderror
            </div>
            </div>
            <button

                    wire:target="sendEmail" type="submit"
                        data-sitekey="6LesPIwpAAAAAAsN61bNsohjanOHsYg6kMSLXSIG"
                        data-callback='handle'
                        data-action='submit'
                        class="g-recaptcha button cta st-btn st-style1 st-color1">
                        Send Message
                    </button>
            {{-- <button class="g-recaptcha st-btn st-style1 st-color1" type="submit" wire:click.prevent="sendEmail" id="submit" name="submit">Send message</button> --}}
          </form>

          <script src="https://www.google.com/recaptcha/api.js?render=6LesPIwpAAAAAAsN61bNsohjanOHsYg6kMSLXSIG"></script>
          <script>
            function handle(e) {
                grecaptcha.ready(function () {
                    grecaptcha.execute('6LesPIwpAAAAAAsN61bNsohjanOHsYg6kMSLXSIG', {action: 'submit'})
                        .then(function (token) {
                            @this.set('captchaToken', token);
                            @this.sendEmail();
                        });
                })
            }
        </script>
        </div>
        <div class="st-height-b0 st-height-lg-b30"></div>

        <div class="col-lg-6">
          <div class="st-height-b0 st-height-lg-b40"></div>
          <h3 class="st-contact-title">Contact Info</h3>
          <div class="st-contact-text">
            Let's talk! Share your thoughts, get answers, or start a project.
          </div>
          <div class="st-contact-info-wrap">
            <div class="st-single-contact-info">
              <i class="fas fa-envelope"></i>
              <div class="st-single-info-details">
                <h4>Email</h4>
                <a href="#">anandagireesh@gmail.com</a>
                <a href="#">anandagireesh@proton.me</a>
              </div>
            </div>
            <div class="st-single-contact-info">
              <i class="fas fa-phone-alt"></i>
              <div class="st-single-info-details">
                <h4>Phone</h4>
                <span>+971- 55 996 8603</span>
                {{-- <span>+1 213-519-1786</span> --}}
              </div>
            </div>
            <div class="st-single-contact-info">
              <i class="fas fa-map-marker-alt"></i>
              <div class="st-single-info-details">
                <h4>Location</h4>
                <span>Dubai, UAE</span>
              </div>
            </div>
            <div class="st-social-info">
              <div class="st-social-text">Unveil the hidden corners of my online presence. Connect with me!</div>
              <div class="st-social-link">
                <a href="https://github.com/anandagireesh" class="st-social-btn active">
                  <span class="st-social-icon"><i class="fab fa-github"></i></span>
                  <span class="st-icon-name">Github</span>
                </a>
                <a href="https://gitlab.com/anandagireesh" class="st-social-btn">
                  <span class="st-social-icon"><i class="fab fa-gitlab"></i></span>
                  <span class="st-icon-name">GitLab</span>
                </a>
                <a href="https://www.linkedin.com/in/anandagireesh/" class="st-social-btn">
                  <span class="st-social-icon"><i class="fab fa-linkedin"></i></span>
                  <span class="st-icon-name">LinkedIn</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="st-height-b100 st-height-lg-b80"></div>
  </section>
  <!-- End Contact Seciton -->
</div>
