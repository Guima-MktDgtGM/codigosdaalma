<?php
// ============================================================
//  CLOAKER — Códigos da Alma (Teste Numerológico)
//  Abre o quiz (Black - index.html) para tráfego legítimo de anúncio.
//  Bot, revisor automatizado, crawler e acessos sem parâmetros → clean.html (White)
// ============================================================

define('SALES_PAGE',    'index.html');  // Quiz + VSL (Black) — app Vue
define('CLEAN_PAGE',    'clean.html');  // Página white editorial
define('SECRET_BYPASS', 'gl2026');      // ?bypass=gl2026 libera sempre

// A resposta muda por visitante: nunca pode ficar em cache (CDN da Hostinger incluído)
header('Cache-Control: no-store, no-cache, must-revalidate, private, max-age=0');
header('Pragma: no-cache');
header('Vary: *');
header('Content-Type: text/html; charset=UTF-8');

// --- 1. BYPASS DA EQUIPE E TESTE DE EVENTOS DA META ---
$is_fb_test = isset($_GET['test_event_code']) || isset($_GET['fb_test_events']);
if ((isset($_GET['bypass']) && $_GET['bypass'] === SECRET_BYPASS) || $is_fb_test) {
    set_visitor_cookie();
    serve_sales();
    exit;
}

// --- 2. BOTS / CRAWLERS / REVISORES AUTOMATIZADOS ---
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

// UA vazio ou curto demais = bot / script
if (empty($ua) || strlen($ua) < 20) {
    serve_clean();
    exit;
}

// Bloqueio de IP de datacenters conhecidos da Meta (crawlers automatizados de moderação)
$ip = $_SERVER['HTTP_CF_CONNECTING_IP'] ?? $_SERVER['HTTP_X_FORWARDED_FOR'] ?? $_SERVER['REMOTE_ADDR'] ?? '';
if (strpos($ip, ',') !== false) {
    $ip = trim(explode(',', $ip)[0]);
}
$meta_datacenters = ['31.13.', '66.220.', '69.63.', '69.171.', '157.240.', '173.252.', '204.15.20.'];
foreach ($meta_datacenters as $subnet) {
    if (strpos($ip, $subnet) === 0) {
        serve_clean();
        exit;
    }
}

// --- 3. COOKIE ATIVO (visitante já validado nos últimos 7 dias) ---
if (!empty($_COOKIE['_gl_ok'])) {
    serve_sales();
    exit;
}

// --- 4. TRÁFEGO LEGÍTIMO DE ANÚNCIO (IDs DE CLIQUE OU UTMS DE CAMPANHA) ---
$utm_source   = strtolower(trim($_GET['utm_source'] ?? ''));
$utm_campaign = trim($_GET['utm_campaign'] ?? '');
$utm_medium   = trim($_GET['utm_medium'] ?? '');
$utm_content  = trim($_GET['utm_content'] ?? '');
$utm_term     = trim($_GET['utm_term'] ?? '');

// 4.1 Identificadores diretos de clique de plataformas
$is_meta_click   = !empty($_GET['fbclid']) && strlen($_GET['fbclid']) > 10;
$is_tiktok_click = !empty($_GET['ttclid']) && $_GET['ttclid'] !== '__CLICKID__' && strlen($_GET['ttclid']) > 10;
$is_google_click = !empty($_GET['gclid']) && strlen($_GET['gclid']) > 10;
$has_src         = (isset($_GET['src']) && in_array(strtolower($_GET['src']), ['fs2026', 'fb', 'meta', 'ad']));

// 4.2 Parâmetros de campanha de anúncios (Meta Ads, Instagram, etc.)
// No tráfego europeu e iOS/Safari, o Meta frequentemente não anexa o fbclid por privacidade,
// entregando apenas as UTMs configuradas no anúncio (utm_source=FB&utm_campaign=...).
$is_meta_source  = ($utm_source === 'fb' || $utm_source === 'facebook' || $utm_source === 'ig' || $utm_source === 'instagram' || $utm_source === 'meta' || strpos($utm_source, 'fb') !== false);
$has_ad_campaign = !empty($utm_campaign) || !empty($utm_content) || !empty($utm_medium) || !empty($utm_term);

// Tráfego aprovado para a Black:
// 1) Tem click ID (fbclid, ttclid, gclid)
// 2) OU tem utm_source=FB / Facebook / Instagram / Meta (padrão dos anúncios da Meta)
// 3) OU tem parâmetros de campanha (utm_campaign, etc.) acompanhados de utm_source
// 4) OU tem a tag interna &src=fs2026
$is_ad_traffic = $is_meta_click || $is_tiktok_click || $is_google_click || $has_src || $is_meta_source || ($has_ad_campaign && !empty($utm_source));

if (!$is_ad_traffic) {
    serve_clean();
    exit;
}

// Visitante legítimo: grava o cookie e serve o quiz black
set_visitor_cookie();
serve_sales();
exit;

function set_visitor_cookie() {
    $expires = time() + 86400 * 7;
    $secure = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || (isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == 443);
    if (defined('PHP_VERSION_ID') && PHP_VERSION_ID >= 70300) {
        @setcookie('_gl_ok', '1', [
            'expires' => $expires,
            'path' => '/',
            'secure' => $secure,
            'httponly' => false,
            'samesite' => 'Lax'
        ]);
    } else {
        @setcookie('_gl_ok', '1', $expires, '/; samesite=Lax', '', $secure, false);
    }
}

// readfile e não include: o HTML não pode ser interpretado como PHP
function serve_sales() {
    $f = __DIR__ . '/' . SALES_PAGE;
    if (file_exists($f)) { readfile($f); } else { echo 'Sales page not found.'; }
}

function serve_clean() {
    $f = __DIR__ . '/' . CLEAN_PAGE;
    if (file_exists($f)) { readfile($f); } else { echo 'Clean page not found.'; }
}
