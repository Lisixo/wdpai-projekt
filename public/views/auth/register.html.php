<?php
$pageTitle = 'Stwórz konto | Biletowo';
$stylesheets = ['/css/auth.css'];
?>
<main class="auth">
    <section class="auth__panel" aria-labelledby="register-title">
        <header class="auth__header">
            <a class="auth__brand" href="/" aria-label="Biletowo – strona główna">
                <span>Biletowo</span>
            </a>
            <h1 class="auth__title" id="register-title">Stwórz konto</h1>
        </header>

        <form class="auth__form auth__form--register" action="/auth/register" method="post">
            <div class="auth__row">
                <div>
                    <label class="auth__label" for="register-first-name">Imię</label>
                    <div class="auth__control">
                        <input class="auth__input" id="register-first-name" name="firstName" type="text" placeholder="np. Jan" autocomplete="given-name" required />
                        <span class="auth__icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" focusable="false">
                                <circle cx="12" cy="8" r="3.6" />
                                <path d="M5.8 20a6.2 6.2 0 0 1 12.4 0" />
                            </svg>
                        </span>
                    </div>
                </div>

                <div>
                    <label class="auth__label" for="register-last-name">Nazwisko</label>
                    <div class="auth__control">
                        <input class="auth__input" id="register-last-name" name="lastName" type="text" placeholder="np. Kowalski" autocomplete="family-name" required />
                        <span class="auth__icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" focusable="false">
                                <rect x="5" y="5.5" width="14" height="16" rx="2" />
                                <circle cx="12" cy="4.5" r="1.5" />
                                <circle cx="12" cy="11" r="2" />
                                <path d="M8.5 17c0-1.9 1.6-3.2 3.5-3.2s3.5 1.3 3.5 3.2" />
                            </svg>
                        </span>
                    </div>
                </div>
            </div>

            <div>
                <label class="auth__label" for="register-email">Adres email</label>
                <div class="auth__control">
                    <input class="auth__input" id="register-email" name="email" type="email" placeholder="jan.kowalski@example.com" autocomplete="email" spellcheck="false" required />
                    <span class="auth__icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" focusable="false">
                            <rect x="3" y="5.5" width="18" height="13" rx="1.5" />
                            <path d="m3.8 6.8 8.2 6 8.2-6" />
                        </svg>
                    </span>
                </div>
            </div>

            <div>
                <label class="auth__label" for="register-password">Hasło</label>
                <div class="auth__control">
                    <input class="auth__input" id="register-password" name="password" type="password" placeholder="••••••••••••" autocomplete="new-password" required />
                    <span class="auth__icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" focusable="false">
                            <rect x="4.5" y="10" width="15" height="10" rx="2" />
                            <path d="M8 10V7.5a4 4 0 0 1 8 0V10" />
                            <circle cx="12" cy="15" r="1.1" fill="currentColor" stroke="none" />
                        </svg>
                    </span>
                </div>
                <p class="auth__hint">Minimum 8 znaków, w tym cyfra i znak specjalny.</p>
            </div>

            <label class="auth__consent">
                <input class="auth__checkbox" name="terms" type="checkbox" required />
                <span>
                    Akceptuję <a href="#">Regulamin serwisu</a> oraz
                    <a href="#">Politykę Prywatności</a> Biletowo.
                </span>
            </label>

            <button class="auth__submit" type="submit">
                <span>Zarejestruj się</span>
            </button>
        </form>

        <p class="auth__switch">Masz już konto? <a href="/auth/login">Zaloguj się</a></p>
    </section>
</main>
