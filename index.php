<?php
// ============================================================
//  CLOAKER — Códigos da Alma (Teste Numerológico)
//  Mesma regra da Desatadora dos Nós: só abre o quiz (black)
//  para quem chega com ID de clique de anúncio.
//  Bot, revisor, Biblioteca de Anúncios e curioso → clean.html
// ============================================================

define('SALES_PAGE',    'index.html');  // Quiz + VSL (Black) — app Vue
define('CLEAN_PAGE',    'clean.html');  // Página white
define('SECRET_BYPASS', 'gl2026');      // ?bypass=gl2026 libera sempre

// A resposta muda por visitante: nunca pode ficar em cache (CDN da Hostinger incluído)
header('Cache-Control: no-store, no-cache, must-revalidate, private, max-age=0');
header('Pragma: no-cache');
header('Vary: *');
header('Content-Type: text/html; charset=UTF-8');

// --- 1. BYPASS DA EQUIPE E TESTE DE EVENTOS DA META ---
$is_fb_test = isset($_GET['test_event_code']) || isset($_GET['fb_test_events']);
if ((isset($_GET['bypass']) && $_GET['bypass'] === SECRET_BYPASS) || $is_fb_test) {
    setcookie('_gl_ok', '1', time() + 86400 * 7, '/');
    serve_sales();
    exit;
}

// --- 2. BOTS / CRAWLERS / REVISORES ---
$ua = strtolower($_SERVER['HTTP_USER_AGENT'] ?? '');
$bot_agents = [
    'facebookexternalhit', 'facebot', 'facebookplatform', 'facebookcatalog', 'meta-externalagent',
    'meta-externalfetcher', 'googlebot', 'adsbot-google', 'mediapartners-google', 'apis-google',
    'feedfetcher', 'google-inspectiontool', 'storebot-google', 'google-adwords',
    'bingbot', 'bingpreview', 'msnbot', 'slurp', 'duckduckbot', 'baiduspider',
    'yandexbot', 'applebot', 'semrushbot', 'ahrefsbot', 'mj12bot', 'dotbot',
    'petalbot', 'screaming frog', 'rogerbot', 'exabot', 'ia_archiver',
    'archive.org_bot', 'wget', 'curl', 'python', 'requests', 'urllib',
    'go-http-client', 'java/', 'libwww', 'scrapy', 'httpclient', 'guzzle',
    'okhttp', 'apache', 'adbeat', 'brand-checker', 'pingdom', 'uptimerobot',
    'headlesschrome', 'phantomjs', 'selenium', 'webdriver', 'puppeteer',
    'playwright', 'lighthouse', 'crawler', 'spider'
];

foreach ($bot_agents as $b) {
    if (strpos($ua, $b) !== false) {
        serve_clean();
        exit;
    }
}

// UA vazio ou curto demais = automação
if (empty($ua) || strlen($ua) < 20) {
    serve_clean();
    exit;
}

// --- 3. COOKIE ATIVO (já entrou por anúncio nos últimos 7 dias) ---
if (!empty($_COOKIE['_gl_ok'])) {
    serve_sales();
    exit;
}

// --- 4. SÓ CLIQUE REAL DE ANÚNCIO ---
// O referer NÃO vale como prova de origem: a Biblioteca de Anúncios, os grupos e
// qualquer link partilhado no Facebook chegam com referer facebook.com e abririam
// o quiz para quem não clicou em anúncio nenhum. Só passa quem traz ID de clique.
$is_meta_click   = !empty($_GET['fbclid']) && strlen($_GET['fbclid']) > 15;
$is_tiktok_click = !empty($_GET['ttclid']) && $_GET['ttclid'] !== '__CLICKID__' && strlen($_GET['ttclid']) > 10;
$has_src = (isset($_GET['src']) && $_GET['src'] === 'fs2026');

if (!$is_meta_click && !$is_tiktok_click && !$has_src) {
    serve_clean();
    exit;
}

// Visitante legítimo: grava o cookie e serve o quiz
setcookie('_gl_ok', '1', time() + 86400 * 7, '/');
serve_sales();
exit;

// readfile e não include: o HTML não pode ser interpretado como PHP
function serve_sales() {
    $f = __DIR__ . '/' . SALES_PAGE;
    if (file_exists($f)) { readfile($f); } else { echo 'Sales page not found.'; }
}

function serve_clean() {
    $f = __DIR__ . '/' . CLEAN_PAGE;
    if (file_exists($f)) { readfile($f); } else { echo 'Clean page not found.'; }
}
