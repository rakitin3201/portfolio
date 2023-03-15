<footer class="py-5 bg-dark text-white">
    <div class="container">
        <div class="row">
            <div class="col-6 col-md">
                <h4>{{ __('OSS') }}</h4>
                <ul class="list-unstyled text-small">
                    <li><a target="_blank" href="https://github.com/rakitin3201" class="link-secondary">{{ __('Contributte') }}</a></li> 
                    <li><a target="_blank" href="https://github.com/rakitin3201" class="link-secondary">{{ __('f00b4r') }}</a></li> 
                    <li><a target="_blank" href="https://github.com/rakitin3201" class="link-secondary">{{ __('Juicy(fx)') }}</a></li> 
                    <li><a target="_blank" href="https://github.com/rakitin3201" class="link-secondary">{{ __('Dockette') }}</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h4>{{ __('Nette') }}</h4>
                <ul class="list-unstyled text-small">
                    <li><a target="_blank" href="https://github.com/contributte" class="link-secondary">{{ __('Contributte') }}</a></li> 
                    <li><a target="_blank" href="https://github.com/f00b4r" class="link-secondary">{{ __('Componette') }}</a></li> 
                    <li><a target="_blank" href="https://github.com/juicyfx" class="link-secondary">{{ __('Nette Commits') }}</a></li> 
                    <li><a target="_blank" href="https://github.com/dockette" class="link-secondary">{{ __('Posobota') }}</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h4>{{ __('Resources') }}</h4>
                <ul class="list-unstyled text-small">
                    <li><a target="_blank" href="https://www.github.com/rakitin3201" class="link-secondary">{{ __('Github') }}</a></li> 
                    <li><a target="_blank" href="https://www.linkedin.com" class="link-secondary">{{ __('LinkedIn') }}</a></li> 
                    <li><a target="_blank" href="https://www.facebook.com/adama.niada.142" class="link-secondary">{{ __('Facebook') }}</a></li> 
                    <li><a target="_blank" href="https://www.revolut.com" class="link-secondary">{{ __('Revolut') }}</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>About</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="link-secondary" href="#">Team</a></li>
                    <li><a class="link-secondary" href="#">Locations</a></li>
                    <li><a class="link-secondary" href="#">Privacy</a></li>
                    <li><a class="link-secondary" href="#">Terms</a></li>
                </ul>
            </div>
            <div class="col-12 col-md">
                <h4>{{ __('Subscribe to my tech newsletter') }}</h4>
                <p class="mt-4 text-muted text-sm my-3">{{ __('Very occasionally receive my humble newsletter.') }}</p>
                <form action="{{ route('subscribe-newsletter') }}" method="POST" class="mt-4 sm:flex sm:max-w-md my-3">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Address Mail" name="email" required>
                        <button name="subscribe" type="submit" class="btn btn-primary">Subscribe</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</footer>


<footer class="footer mt-auto py-3 border-top" style="background-color:#e3f2fd;">
    <div class="container">
        <span class="text-muted">Website created by <strong>ADAMA NIADA</strong>, a great full stack web developer &middot; &copy; 2023</span>
        <span>Rewritten by rakitin3201 coding with laravel . Powered by vercel . Open source code .</span>
    </div>
</footer>