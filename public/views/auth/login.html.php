<?php
$pageTitle = 'Zaloguj się | Biletowo';
$stylesheets = ['/css/auth.css'];
?>

<main class="auth">
    <section class="auth__panel">
        <header class="auth__header">
            <a class="auth__brand" href="/">
                <span>Biletowo</span>
            </a>
            <h1 class="auth__title" id="login-title">Zaloguj się</h1>
        </header>

        <form class="auth__form auth__form--login" action="/auth/login" method="post">
            <div>
                <label class="auth__label" for="login-email">Adres email</label>
                <div class="auth__control">
                    <span class="auth__icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" focusable="false">
                            <rect x="3" y="5.5" width="18" height="13" rx="1.5" />
                            <path d="m3.8 6.8 8.2 6 8.2-6" />
                        </svg>
                    </span>
                    <input class="auth__input" id="login-email" name="email" type="email" placeholder="twój@email.com" autocomplete="email" spellcheck="false" required />
                </div>
            </div>

            <div>
                <label class="auth__label" for="login-password">Hasło</label>
                <div class="auth__control">
                    <span class="auth__icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" focusable="false">
                            <rect x="4.5" y="10" width="15" height="10" rx="2" />
                            <path d="M8 10V7.5a4 4 0 0 1 8 0V10" />
                            <circle cx="12" cy="15" r="1.1" fill="currentColor" stroke="none" />
                        </svg>
                    </span>
                    <input class="auth__input" id="login-password" name="password" type="password" placeholder="••••••••••••" autocomplete="current-password" required />
                </div>
                <div class="auth__field-footer">
                    <a class="auth__forgot" href="#">Zapomniałeś hasła?</a>
                </div>
            </div>

            <button class="auth__submit" type="submit">
                <span>Zaloguj się</span>
            </button>
        </form>
    </section>
</main>
