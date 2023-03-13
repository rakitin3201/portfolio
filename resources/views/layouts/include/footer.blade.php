<footer class="container-fluid py-5 bg-dark text-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8 col-md">
                <div class="row">
                    <div class="col-6 col-md">
                        <h4>{{ __('OSS') }}</h4>
                        <ul class="list-unstyled text-small">
                            <li><a target="_blank" href="https://github.com/contributte" class="link-secondary">{{ __('Contributte') }}</a></li> 
                            <li><a target="_blank" href="https://github.com/f00b4r" class="link-secondary">{{ __('f00b4r') }}</a></li> 
                            <li><a target="_blank" href="https://github.com/juicyfx" class="link-secondary">{{ __('Juicy(fx)') }}</a></li> 
                            <li><a target="_blank" href="https://github.com/dockette" class="link-secondary">{{ __('Dockette') }}</a></li>
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
                            <li><a target="_blank" href="https://github.com/contributte" class="link-secondary">{{ __('Github') }}</a></li> 
                            <li><a target="_blank" href="https://github.com/f00b4r" class="link-secondary">{{ __('LinkedIn') }}</a></li> 
                            <li><a target="_blank" href="https://github.com/juicyfx" class="link-secondary">{{ __('Facebook') }}</a></li> 
                            <li><a target="_blank" href="https://github.com/dockette" class="link-secondary">{{ __('Revolut') }}</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-md">
                        <h4>{{ __('Subscribe to my tech newsletter') }}</h4>
                        <p class="mt-4 text-muted text-sm">{{ __('Very occasionally receive my humble newsletter.') }}</p>
                        <form action="{{ route('subscribe-newsletter') }}" method="POST" class="mt-4 sm:flex sm:max-w-md">
                            @csrf
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Address Mail" name="email" required>
                                <button name="subscribe" type="submit" class="btn btn-primary">Subscribe</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-12 border-top">
                        <div class="row">
                            <div class="col-sm-10">
                                {{(' Rewritten by ')}} <a href="https://f3l1x.io" class="font-bold hover:underline">{{ __('rakitin3201') }}</a>
                                {{(' coding with ')}} <a href="https://laravel.com" class="font-bold hover:underline">{{ __('laravel') }}</a>
                                {{('. Powered by ')}} <a href="https://laravel.com" class="font-bold hover:underline">{{ __('vercel') }}</a> {{('.')}}
                                <a href="https://github.com/f3l1x/f3l1x" class="font-bold hover:underline">{{ __('Open source code') }}</a> {{('.')}}
                            </div>
                            <div class="col-sm-2">
                                <div class="d-flex">
                                    <a target="_blank" href="https://twitter.com/xf3l1x" class="inline-flex px-4 py-2 opacity-50 hover:opacity-100">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                                        </svg>
                                    </a>
                                    <a target="_blank" href="https://twitter.com/xf3l1x" class="inline-flex px-4 py-2 opacity-50 hover:opacity-100">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-rss" viewBox="0 0 16 16">
                                            <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                            <path d="M5.5 12a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm-3-8.5a1 1 0 0 1 1-1c5.523 0 10 4.477 10 10a1 1 0 1 1-2 0 8 8 0 0 0-8-8 1 1 0 0 1-1-1zm0 4a1 1 0 0 1 1-1 6 6 0 0 1 6 6 1 1 0 1 1-2 0 4 4 0 0 0-4-4 1 1 0 0 1-1-1z"/>
                                        </svg>
                                    </a> 
                                    <a target="_blank" href="https://twitter.com/xf3l1x" class="inline-flex px-4 py-2 opacity-50 hover:opacity-100">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                                            <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                                        </svg>
                                    </a> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>