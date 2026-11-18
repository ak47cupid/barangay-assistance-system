<?php
require_once __DIR__ . '/includes/functions.php';

$user = current_user();
if ($user) {
    $home = [
        'Administrator' => '/admin/dashboard.php',
        'Barangay Staff' => '/staff/dashboard.php',
        'Barangay Officer' => '/officer/dashboard.php',
        'Senior Citizen' => '/senior/dashboard.php',
    ][$user['role_name']] ?? '/login.php';
    redirect($home);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senior Assist</title>
    <link rel="stylesheet" href="assets/css/landing.css?v=20261117f">
    <link rel="stylesheet" href="assets/css/landing-refresh.css?v=20261117f">
    <style>
        dialog.registration-dialog:modal {
            box-sizing: border-box;
            width: min(1120px, calc(100vw - 32px));
            height: min(920px, calc(100vh - 32px));
            max-width: calc(100vw - 32px);
            max-height: calc(100vh - 32px);
            margin: auto;
            padding: 0;
            border: 0;
        }
        dialog.registration-dialog:modal iframe {
            width: 100%;
            height: 100%;
            min-height: 0;
            border: 0;
        }
        dialog#signin-dialog:modal {
            width: min(1080px, calc(100vw - 32px));
            height: min(700px, calc(100vh - 32px));
            max-height: calc(100vh - 32px);
        }
        dialog#signin-dialog:modal iframe {
            height: 100%;
        }
        @media (max-width: 620px) {
            dialog.registration-dialog:modal,
            dialog#signin-dialog:modal {
                width: 100vw;
                height: 100vh;
                max-width: 100vw;
                max-height: 100vh;
                border-radius: 0;
            }
        }
    </style>
</head>
<body class="landing-page">
<header>
    <a class="logo" href="#home"><img class="logo-mark" src="assets/images/seniorlogo.png" alt=""><span>Senior Assist <small>Senior Citizen Assistance</small></span></a>
    <nav aria-label="Main navigation">
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#services">Services</a>
        <a href="login.php" class="login-btn" data-open-signin>Sign in <span>&rarr;</span></a>
    </nav>
</header>

<main>
    <section class="hero" id="home">
        <div class="hero-text">
            <p class="eyebrow"><span></span> Support for senior citizens</p>
            <h1>WELCOME TO <span>BARANGAY TUNGKIL</span></h1>
            <p class="hero-copy">Register online, wait for your account to be reviewed, then request assistance and follow its status. Approved seniors can also check announcements, activities, and their assistance history.</p>
            <div class="buttons">
                <a href="register.php" class="btn-primary" data-open-registration>Register as a Senior <span>&rarr;</span></a>
                <a href="#services" class="btn-secondary">Explore services</a>
            </div>
            <div class="trust-row" aria-label="System benefits">
                <span><b>&check;</b> Account approval required</span>
                <span><b>&check;</b> Track request updates</span>
                <span><b>&check;</b> View announcements</span>
            </div>
        </div>

        <div class="hero-image">
            <img class="landing-cover" src="assets/images/barangay-tungkil-building.png" alt="St. Cecilia's College building in Minglanilla" width="1086" height="1448" fetchpriority="high">
            <div class="floating-card card-assist"><span class="float-icon">&starf;</span><div><strong>Stay updated</strong><small>Follow your request status</small></div></div>
        </div>
    </section>

    <section id="about" class="section about-section">
        <div class="section-intro">
            <p class="eyebrow"><span></span> Built with care</p>
            <h2>Your barangay support,<br><span>all in one place.</span></h2>
        </div>
        <div>
            <p class="about-copy">Senior Assist lets senior citizens register, request available assistance, and check updates from home. You can also read barangay announcements and see upcoming community activities.</p>
            <p class="about-note">Important: submit a valid ID and the required details when you register. Your account must be reviewed and approved before you can send assistance requests. You can sign in to check your application status.</p>
            <ul class="about-points">
                <li><b>&check;</b> Submit medical or financial assistance requests with supporting documents</li>
                <li><b>&check;</b> Check application status, notifications, and assistance history</li>
                <li><b>&check;</b> View announcements, events, and scheduled appointments</li>
            </ul>
        </div>
        <ol class="about-steps">
            <li><span class="step-number" aria-hidden="true">01</span><strong>Register and submit your ID</strong><p>Fill in your personal details and upload a clear photo and valid ID. Keep your information accurate.</p></li>
            <li><span class="step-number" aria-hidden="true">02</span><strong>Wait for account approval</strong><p>Barangay staff will review your registration. Sign in to see if it is pending, approved, or needs more information.</p></li>
            <li><span class="step-number" aria-hidden="true">03</span><strong>Send a request and track it</strong><p>After approval, submit an assistance request with the required documents, then check notifications and status updates.</p></li>
        </ol>
    </section>

    <section id="services" class="section services-section">
        <div class="services-heading"><div><p class="eyebrow"><span></span> What we can help with</p><h2>Care, support, and <span>connection.</span></h2></div><a href="login.php" data-open-signin>Member sign in <span>&rarr;</span></a></div>
        <div class="cards">
            <article class="card"><span class="service-icon medical">+</span><h3>Medical &amp; Financial Assistance</h3><p>Request medical or financial support. Explain your need and upload the required supporting document.</p><a href="services.php#medical">Learn more <span>&rarr;</span></a></article>
            <article class="card"><span class="service-icon finance">PHP</span><h3>Other Assistance Requests</h3><p>The system also accepts death assistance, special or indigent assistance, and other requests. Some requests require documents or an appointment schedule.</p><a href="services.php#financial">Learn more <span>&rarr;</span></a></article>
            <article class="card"><span class="service-icon news">*</span><h3>Status, Notifications &amp; Updates</h3><p>Follow your registration and request status, review assistance history, and read announcements and activity details.</p><a href="services.php#updates">Learn more <span>&rarr;</span></a></article>
        </div>
    </section>
    <section class="section join-section" aria-labelledby="join-title">
        <div><p class="eyebrow">Here to help you get started</p><h2 id="join-title">Your next step to<br>staying connected.</h2><p>For residents aged 60 and above. Have your photo and valid ID ready.</p></div>
        <div class="join-actions"><a href="register.php" class="btn-primary" data-open-registration>Create your account <span aria-hidden="true">&rarr;</span></a><a href="login.php" data-open-signin>Already registered? Sign in</a></div>
    </section>
</main>

<footer>
    <span>&copy; <?= date('Y') ?> Senior Assist</span>
    <span>Serving seniors with dignity and care.</span>
</footer>
<dialog id="registration-dialog" class="registration-dialog" aria-label="Senior citizen registration">
    <button type="button" class="registration-close" data-close-dialog aria-label="Close registration">&times;</button>
    <iframe title="Senior citizen registration form"></iframe>
</dialog>
<dialog id="signin-dialog" class="registration-dialog" aria-label="Sign in">
    <button type="button" class="registration-close" data-close-dialog aria-label="Close sign in">&times;</button>
    <iframe title="Sign in form"></iframe>
</dialog>
<dialog id="registered-dialog" class="registered-dialog" aria-labelledby="registered-title">
    <button type="button" class="registration-close" data-close-registered aria-label="Close">&times;</button>
    <img src="assets/images/seniorlogo.png" alt="">
    <h2 id="registered-title">Successfully registered</h2>
    <p>Your senior account was submitted for barangay review. You can close this window and sign in from the home page when you want to check its status.</p>
    <button type="button" class="registered-done" data-close-registered>Done</button>
</dialog>
<script>
(() => {
    const bindDialog = (dialog, src, openSelector) => {
        const frame = dialog.querySelector('iframe');
        const open = () => {
            document.querySelectorAll('dialog[open]').forEach((other) => {
                if (other !== dialog) other.close();
            });
            const current = frame.getAttribute('src');
            if (!current || current === 'about:blank') frame.src = src;
            dialog.showModal();
        };
        document.querySelectorAll(openSelector).forEach((link) => {
            link.addEventListener('click', (event) => {
                event.preventDefault();
                open();
            });
        });
        dialog.querySelector('[data-close-dialog]')?.addEventListener('click', () => dialog.close());
        dialog.addEventListener('click', (event) => {
            const bounds = dialog.getBoundingClientRect();
            const inside = event.clientX >= bounds.left && event.clientX <= bounds.right && event.clientY >= bounds.top && event.clientY <= bounds.bottom;
            if (!inside) dialog.close();
        });
        return open;
    };
    const registrationDialog = document.getElementById('registration-dialog');
    const registeredDialog = document.getElementById('registered-dialog');
    const openRegistration = bindDialog(registrationDialog, 'register.php?embed=1', '[data-open-registration]');
    const openSignin = bindDialog(document.getElementById('signin-dialog'), 'login.php?embed=1', '[data-open-signin]');
    let registeredTimer;
    const openRegistered = () => {
        if (registrationDialog.open) registrationDialog.close();
        registrationDialog.querySelector('iframe').src = 'about:blank';
        registeredDialog.showModal();
        clearTimeout(registeredTimer);
        registeredTimer = setTimeout(() => {
            if (registeredDialog.open) registeredDialog.close();
        }, 4000);
    };
    registeredDialog.querySelectorAll('[data-close-registered]').forEach((button) => {
        button.addEventListener('click', () => registeredDialog.close());
    });
    registeredDialog.addEventListener('click', (event) => {
        const bounds = registeredDialog.getBoundingClientRect();
        const inside = event.clientX >= bounds.left && event.clientX <= bounds.right && event.clientY >= bounds.top && event.clientY <= bounds.bottom;
        if (!inside) registeredDialog.close();
    });
    if (location.hash === '#signin') openSignin();
    if (location.hash === '#register') openRegistration();
    if (new URLSearchParams(location.search).get('registered') === '1') openRegistered();
    window.addEventListener('message', (event) => {
        if (event.origin !== window.location.origin) return;
        if (event.data?.type === 'open-registration') openRegistration();
        if (event.data?.type === 'registration-success') openRegistered();
    });
})();
</script>
</body>
</html>
