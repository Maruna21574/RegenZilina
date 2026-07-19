if ('scrollRestoration' in history) history.scrollRestoration = 'manual';

// Fix iOS Safari carrying over the old scroll position when navigating to a new page
window.addEventListener('pagehide', () => window.scrollTo(0, 0));
window.scrollTo(0, 0);

document.addEventListener('DOMContentLoaded', () => {
    const CSRF = document.querySelector('meta[name="csrf-token"]')?.content;

    document.querySelectorAll('video[data-video-start]').forEach(video => {
        const startAt = Number(video.dataset.videoStart);
        if (!Number.isFinite(startAt) || startAt <= 0) return;

        const seekToStart = () => {
            if (video.duration > startAt) video.currentTime = startAt;
        };

        if (video.readyState >= 1) seekToStart();
        else video.addEventListener('loadedmetadata', seekToStart, { once: true });

        video.addEventListener('timeupdate', () => {
            if (video.currentTime < startAt - 0.25) seekToStart();
        });
    });

    // =============================================
    // COOKIE CONSENT
    // =============================================
    const consentKey = 'regen_cookie_consent_v1';
    const cookieBanner = document.getElementById('cookieBanner');

    function getCookieConsent() {
        try {
            const consent = JSON.parse(localStorage.getItem(consentKey));
            const savedAt = Date.parse(consent?.savedAt);
            const maxAge = 365 * 24 * 60 * 60 * 1000;
            return consent?.necessary && savedAt && (Date.now() - savedAt < maxAge) ? consent : null;
        } catch {
            return null;
        }
    }

    function loadConsentContent() {
        const consent = getCookieConsent();
        if (!consent?.external) return;

        document.querySelectorAll('[data-map-consent]').forEach(container => {
            if (container.querySelector('iframe')) return;

            const iframe = document.createElement('iframe');
            iframe.src = container.dataset.mapSrc;
            iframe.width = '100%';
            iframe.height = '450';
            iframe.style.cssText = 'border:0;display:block;';
            iframe.loading = 'lazy';
            iframe.referrerPolicy = 'strict-origin-when-cross-origin';
            iframe.allowFullscreen = true;
            iframe.title = 'Mapa prevádzky REGEN ŽILINA';
            container.replaceChildren(iframe);
        });
    }

    function saveCookieConsent(external) {
        const externalContentIsLoaded = Boolean(document.querySelector('[data-map-consent] iframe'));
        localStorage.setItem(consentKey, JSON.stringify({
            necessary: true,
            external,
            savedAt: new Date().toISOString(),
        }));
        cookieBanner.hidden = true;
        if (external) loadConsentContent();
        window.dispatchEvent(new CustomEvent('regen:consent-changed', { detail: { external } }));
        if (!external && externalContentIsLoaded) window.location.reload();
    }

    if (cookieBanner) {
        cookieBanner.hidden = Boolean(getCookieConsent());
        cookieBanner.querySelectorAll('[data-cookie-choice]').forEach(button => {
            button.addEventListener('click', () => saveCookieConsent(button.dataset.cookieChoice === 'all'));
        });

        document.querySelectorAll('[data-cookie-settings]').forEach(button => {
            button.addEventListener('click', () => {
                cookieBanner.hidden = false;
                cookieBanner.querySelector('[data-cookie-choice="necessary"]')?.focus();
            });
        });
    }

    document.querySelectorAll('[data-map-enable]').forEach(button => {
        button.addEventListener('click', () => saveCookieConsent(true));
    });

    loadConsentContent();

    // =============================================
    // NAVBAR
    // =============================================
    const nav = document.getElementById('nav');

    if (nav) {
        window.addEventListener('scroll', () => {
            nav.classList.toggle('nav--scrolled', window.scrollY > 40);
        }, { passive: true });

        if (window.scrollY > 40) nav.classList.add('nav--scrolled');
    }

    // =============================================
    // SCROLL TO TOP
    // =============================================
    const scrollBtn = document.getElementById('scrollTop');
    if (scrollBtn) {
        window.addEventListener('scroll', () => {
            scrollBtn.classList.toggle('scroll-top--visible', window.scrollY > 400);
        }, { passive: true });

        if (window.scrollY > 400) scrollBtn.classList.add('scroll-top--visible');

        scrollBtn.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    // =============================================
    // MOBILE MENU
    // =============================================
    const toggle = document.getElementById('navToggle');
    const menu = document.getElementById('navMenu');

    if (toggle && menu && nav) {
        toggle.addEventListener('click', () => {
            toggle.classList.toggle('nav__toggle--open');
            menu.classList.toggle('nav__menu--open');
            nav.classList.toggle('nav--menu-open');
            document.body.style.overflow = menu.classList.contains('nav__menu--open') ? 'hidden' : '';
        });

        menu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                toggle.classList.remove('nav__toggle--open');
                menu.classList.remove('nav__menu--open');
                nav.classList.remove('nav--menu-open');
                document.body.style.overflow = '';
            });
        });
    }

    // =============================================
    // SCROLL REVEAL
    // =============================================
    const reveals = document.querySelectorAll('.anim-reveal');
    if (reveals.length) {
        const obs = new IntersectionObserver((entries) => {
            entries.forEach(e => {
                if (e.isIntersecting) {
                    e.target.classList.add('anim-reveal--visible');
                    obs.unobserve(e.target);
                }
            });
        }, { threshold: 0.08, rootMargin: '0px 0px -30px 0px' });

        reveals.forEach(el => obs.observe(el));
    }

    // =============================================
    // MASSAGE VISUALIZATION
    // =============================================
    const mvizScene = document.querySelector('.mviz__scene');
    const mvizBtns = document.querySelectorAll('.mviz__btn');
    const mvizPhases = document.querySelectorAll('.mviz__phase');

    if (mvizScene && mvizBtns.length) {
        let currentPhase = 1;
        let autoInterval = null;

        function setPhase(phase) {
            currentPhase = phase;
            const svg = mvizScene.closest('.mviz');
            svg.className = 'mviz anim-reveal anim-reveal--visible mviz--phase-' + phase;

            mvizBtns.forEach(b => b.classList.toggle('mviz__btn--active', parseInt(b.dataset.phase) === phase));
            mvizPhases.forEach(p => {
                p.classList.remove('mviz__phase--active');
                if (parseInt(p.dataset.phase) === phase) p.classList.add('mviz__phase--active');
            });
        }

        mvizBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                setPhase(parseInt(btn.dataset.phase));
                clearInterval(autoInterval);
                autoInterval = setInterval(() => {
                    setPhase(currentPhase >= 3 ? 1 : currentPhase + 1);
                }, 8000);
            });
        });

        setPhase(1);
        autoInterval = setInterval(() => {
            setPhase(currentPhase >= 3 ? 1 : currentPhase + 1);
        }, 8000);
    }

    // =============================================
    // PROMO POPUP
    // =============================================
    const promo = document.getElementById('promo');

    if (promo) {
        const promoTimestamp = localStorage.getItem('regen_promo_timestamp');
        const thirtyDays = 30 * 24 * 60 * 60 * 1000;
        const promoExpired = promoTimestamp && (Date.now() - parseInt(promoTimestamp)) > thirtyDays;
        const alreadyUsed = localStorage.getItem('regen_promo_code') && !promoExpired;
        const dismissed = sessionStorage.getItem('regen_promo_dismissed');

        if (promoExpired) {
            localStorage.removeItem('regen_promo_code');
            localStorage.removeItem('regen_promo_percent');
            localStorage.removeItem('regen_promo_timestamp');
        }

        let promoScheduled = false;
        const schedulePromo = () => {
            if (promoScheduled || alreadyUsed || dismissed) return;
            promoScheduled = true;
            setTimeout(() => promo.classList.add('promo--visible'), 8000);
        };

        if (getCookieConsent()) schedulePromo();
        window.addEventListener('regen:consent-changed', schedulePromo, { once: true });

        document.getElementById('promoClose')?.addEventListener('click', () => {
            promo.classList.remove('promo--visible');
            sessionStorage.setItem('regen_promo_dismissed', '1');
        });

        document.getElementById('promoDismiss')?.addEventListener('click', () => {
            promo.classList.remove('promo--visible');
            sessionStorage.setItem('regen_promo_dismissed', '1');
        });

        document.getElementById('promoSpin')?.addEventListener('click', async () => {
            const btn = document.getElementById('promoSpin');
            btn.textContent = 'Generujem...';
            btn.classList.add('promo__spin-btn--loading');

            try {
                const res = await fetch('/api/spin', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': CSRF, 'Accept': 'application/json' },
                });
                const data = await res.json();

                if (!res.ok) {
                    promo.classList.remove('promo--visible');
                    return;
                }

                localStorage.setItem('regen_promo_code', data.code);
                localStorage.setItem('regen_promo_percent', data.percent);
                localStorage.setItem('regen_promo_timestamp', Date.now().toString());

                document.getElementById('promoOffer').style.display = 'none';
                document.getElementById('promoResult').style.display = 'block';
                document.getElementById('promoPercent').textContent = data.percent + '%';
                document.getElementById('promoCode').textContent = data.code;
            } catch {
                promo.classList.remove('promo--visible');
            }
        });

        document.getElementById('promoCopy')?.addEventListener('click', () => {
            const code = document.getElementById('promoCode').textContent;
            navigator.clipboard.writeText(code).catch(() => {});
            const btn = document.getElementById('promoCopy');
            btn.innerHTML = '<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>';
            setTimeout(() => {
                btn.innerHTML = '<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="9" y="9" width="13" height="13" rx="2"/><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"/></svg>';
            }, 2000);
        });
    }

    // =============================================
    // BOOKING FORM (only on /rezervacia)
    // =============================================
    const bookingForm = document.getElementById('bookingForm');
    if (!bookingForm) return initContactForm();

    let currentStep = 1;

    // Pre-select service from URL
    const urlParams = new URLSearchParams(window.location.search);
    const preselect = urlParams.get('service');
    if (preselect) {
        const radio = bookingForm.querySelector(`input[name="service_id"][value="${preselect}"]`);
        if (radio) {
            radio.checked = true;
            updateNextBtn(1);
        }
    }

    function showStep(step) {
        bookingForm.querySelectorAll('.booking__panel').forEach(p => p.classList.remove('booking__panel--active'));
        const target = bookingForm.querySelector(`[data-panel="${step}"]`);
        if (target) target.classList.add('booking__panel--active');

        document.querySelectorAll('.booking__step').forEach(s => {
            const n = parseInt(s.dataset.step);
            s.classList.remove('booking__step--active', 'booking__step--done');
            if (n === step) s.classList.add('booking__step--active');
            if (n < step) s.classList.add('booking__step--done');
        });

        currentStep = step;

        const box = bookingForm.closest('.booking') || bookingForm;
        const top = box.getBoundingClientRect().top + window.scrollY - 100;
        window.scrollTo({ top, behavior: 'smooth' });
    }

    function updateNextBtn(step) {
        const panel = bookingForm.querySelector(`[data-panel="${step}"]`);
        const btn = panel?.querySelector('.booking__next');
        if (!btn) return;

        if (step === 1) {
            btn.disabled = !bookingForm.querySelector('input[name="service_id"]:checked');
        } else if (step === 2) {
            btn.disabled = !(document.getElementById('bookingDate').value && document.getElementById('bookingTime').value);
        }
    }

    // Service selection
    bookingForm.querySelectorAll('input[name="service_id"]').forEach(r => {
        r.addEventListener('change', () => updateNextBtn(1));
    });

    // Next / Prev
    bookingForm.querySelectorAll('.booking__next').forEach(btn => {
        btn.addEventListener('click', () => {
            const next = parseInt(btn.dataset.next);

            if (next === 4) {
                const n = document.getElementById('bookingName').value.trim();
                const s = document.getElementById('bookingSurname').value.trim();
                const p = document.getElementById('bookingPhone').value.trim();
                const e = document.getElementById('bookingEmail').value.trim();

                if (!n || !s || !p || !e) {
                    alert('Prosím vyplňte všetky povinné údaje.');
                    return;
                }

                const svc = bookingForm.querySelector('input[name="service_id"]:checked');
                document.getElementById('sumService').textContent = svc?.dataset.name || '-';
                document.getElementById('sumDate').textContent = fmtDate(document.getElementById('bookingDate').value);
                document.getElementById('sumTime').textContent = document.getElementById('bookingTime').value;
                document.getElementById('sumName').textContent = n + ' ' + s;
                document.getElementById('sumPhone').textContent = p;
                document.getElementById('sumEmail').textContent = e;
                document.getElementById('sumPrice').textContent = svc?.dataset.price ? svc.dataset.price + '€' : '-';
            }

            showStep(next);
        });
    });

    bookingForm.querySelectorAll('.booking__prev').forEach(btn => {
        btn.addEventListener('click', () => showStep(parseInt(btn.dataset.prev)));
    });

    // Discount code validation
    let appliedDiscount = 0;
    const discountApply = document.getElementById('discountApply');
    const discountMsg = document.getElementById('discountMsg');

    if (discountApply) {
        discountApply.addEventListener('click', async () => {
            const code = document.getElementById('discountCode').value.trim().toUpperCase();
            if (!code) return;

            discountApply.disabled = true;
            discountApply.textContent = '...';

            try {
                const res = await fetch('/api/discount/validate', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': CSRF, 'Accept': 'application/json' },
                    body: JSON.stringify({ code }),
                });
                const data = await res.json();

                if (data.valid) {
                    appliedDiscount = data.percent;
                    discountMsg.textContent = data.message;
                    discountMsg.className = 'booking__discount-msg booking__discount-msg--ok';
                    document.getElementById('discountCode').readOnly = true;

                    const svc = bookingForm.querySelector('input[name="service_id"]:checked');
                    if (svc?.dataset.price) {
                        const orig = parseFloat(svc.dataset.price);
                        const final = orig - (orig * appliedDiscount / 100);
                        document.getElementById('sumPrice').innerHTML = '<s style="opacity:0.4;margin-right:8px;">' + orig + '€</s> ' + final.toFixed(0) + '€';
                    }
                } else {
                    discountMsg.textContent = data.message;
                    discountMsg.className = 'booking__discount-msg booking__discount-msg--err';
                }
            } catch {
                discountMsg.textContent = 'Chyba overenia kódu.';
                discountMsg.className = 'booking__discount-msg booking__discount-msg--err';
            }

            discountApply.disabled = false;
            discountApply.textContent = 'Použiť';
        });

        const savedCode = localStorage.getItem('regen_promo_code');
        if (savedCode) {
            document.getElementById('discountCode').value = savedCode;
            discountApply.click();
        }
    }

    // Date → time slots
    const dateInput = document.getElementById('bookingDate');
    const slotsContainer = document.getElementById('timeSlots');
    const timeInput = document.getElementById('bookingTime');

    if (dateInput) {
        dateInput.addEventListener('change', async () => {
            const date = dateInput.value;
            if (!date) return;

            slotsContainer.innerHTML = '<p class="booking__slots-msg">Načítavam...</p>';
            timeInput.value = '';
            updateNextBtn(2);

            try {
                const res = await fetch(`/api/available-slots?date=${date}`);
                const slots = await res.json();

                if (!slots.length) {
                    slotsContainer.innerHTML = '<p class="booking__slots-msg">Žiadne dostupné termíny</p>';
                    return;
                }

                slotsContainer.innerHTML = '';
                slots.forEach(time => {
                    const btn = document.createElement('button');
                    btn.type = 'button';
                    btn.className = 'booking__slot';
                    btn.textContent = time;
                    btn.addEventListener('click', () => {
                        slotsContainer.querySelectorAll('.booking__slot').forEach(b => b.classList.remove('booking__slot--active'));
                        btn.classList.add('booking__slot--active');
                        timeInput.value = time;
                        updateNextBtn(2);
                    });
                    slotsContainer.appendChild(btn);
                });
            } catch {
                slotsContainer.innerHTML = '<p class="booking__slots-msg">Chyba pri načítaní</p>';
            }
        });
    }

    // Submit
    bookingForm.addEventListener('submit', async (e) => {
        e.preventDefault();
        const btn = document.getElementById('bookingSubmit');
        const text = btn.querySelector('.btn__text');
        const loader = btn.querySelector('.btn__loader');

        btn.disabled = true;
        text.style.display = 'none';
        loader.style.display = 'inline';

        const data = Object.fromEntries(new FormData(bookingForm).entries());

        try {
            const res = await fetch('/api/reservation', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': CSRF, 'Accept': 'application/json' },
                body: JSON.stringify(data),
            });

            const result = await res.json();

            if (res.ok) {
                bookingForm.style.display = 'none';
                document.querySelector('.booking__progress').style.display = 'none';
                document.getElementById('bookingSuccess').style.display = 'block';
            } else {
                alert(result.message || 'Nastala chyba.');
                btn.disabled = false;
                text.style.display = 'inline';
                loader.style.display = 'none';
            }
        } catch {
            alert('Chyba siete. Skúste znova.');
            btn.disabled = false;
            text.style.display = 'inline';
            loader.style.display = 'none';
        }
    });

    function fmtDate(d) {
        if (!d) return '-';
        const [y, m, dd] = d.split('-');
        return `${dd}.${m}.${y}`;
    }

    // =============================================
    // CONTACT FORM
    // =============================================
    function initContactForm() {
        const form = document.getElementById('contactForm');
        if (!form) return;

        form.addEventListener('submit', async (e) => {
            e.preventDefault();
            const msg = document.getElementById('contactResult');
            const btn = form.querySelector('button[type="submit"]');
            const origText = btn.innerHTML;
            btn.disabled = true;
            btn.innerHTML = '<span>Odosielam...</span>';

            const data = Object.fromEntries(new FormData(form).entries());

            try {
                const res = await fetch('/api/contact', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': CSRF, 'Accept': 'application/json' },
                    body: JSON.stringify(data),
                });
                const result = await res.json();

                if (res.ok) {
                    msg.textContent = result.message;
                    msg.className = 'contact-form__msg contact-form__msg--ok';
                    form.reset();
                } else {
                    msg.textContent = result.message || 'Nastala chyba.';
                    msg.className = 'contact-form__msg contact-form__msg--err';
                }
            } catch {
                msg.textContent = 'Chyba siete.';
                msg.className = 'contact-form__msg contact-form__msg--err';
            }

            btn.disabled = false;
            btn.innerHTML = origText;
        });
    }

    initContactForm();
});
