<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="木製ジュエリーブランド Wooden Jewelry">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/favicon.ico">
    <link rel="stylesheet" href="{{ asset('css/top.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <title>Wooden Jewelry</title>
</head>

<body>
    <div class="main-visual">
        <img src="{{ asset('images/mainvisual.jpg') }}" alt="メインビジュアル">
    </div>
    <header>
        <h1><img src="{{ asset('images/logo.svg') }}" alt="Wooden Jewelry"></h1>
        <nav>
            <ol>
                <li>Concept</li>
                <li>Work</li>
                <li>Contact</li>
            </ol>
        </nav>
    </header>
    <main>
        <section class="concept">
            <div class="concept__image">
                <img src="{{ asset('images/concept.jpg') }}" alt="イメージ画像">
            </div>
            <div class="concept__text">
                <h2>私たちの考えるジュエリーとは</h2>
                <h3>Concept</h3>
                <p>テキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                <p>テキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
            </div>
        </section>
        <section class="work">
            <div class="work__text">
                <h2>ハンドメイドにこだわる理由</h2>
                <h3>Work</h3>
                <p>テキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                <p>テキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
            </div>
            <div class="work__image">
                <img src="{{ asset('images/work.jpg') }}" alt="イメージ画像">
            </div>
        </section>
    </main>
    <footer>
        <div class="footer__logo"><img src="{{ asset('images/logo.svg') }}" alt="Wooden Jewelry"></div>
        <div class="footer__copyright"> &copy; 2021 Wooden Jewelry</div>
    </footer>
</body>
</html>