/* Language Switcher – Al-Noman Foundation
   Detects current language from URL and renders a globe dropdown. */
(function () {
    const LANGS = [
        { code: 'en', label: 'English', prefix: '' },
        { code: 'ar', label: 'العربية', prefix: '/ar' },
        { code: 'fr', label: 'Français', prefix: '/fr' }
    ];

    function detectLang() {
        var p = window.location.pathname;
        if (p.indexOf('/ar/') === 0 || p === '/ar') return 'ar';
        if (p.indexOf('/fr/') === 0 || p === '/fr') return 'fr';
        return 'en';
    }

    function getPageName() {
        var p = window.location.pathname;
        // Strip language prefix
        p = p.replace(/^\/(ar|fr)\//, '/').replace(/^\/(ar|fr)$/, '/');
        // Get filename
        var parts = p.split('/');
        var file = parts[parts.length - 1] || 'index.html';
        if (file === '' || file === '/') file = 'index.html';
        if (file.indexOf('.html') === -1) file = 'index.html';
        return file;
    }

    function buildUrl(langCode) {
        var page = getPageName();
        var lang = LANGS.find(function (l) { return l.code === langCode; });
        if (!lang) return '/' + page;
        if (lang.prefix) return lang.prefix + '/' + page;
        return '/' + page;
    }

    function render() {
        var current = detectLang();
        var currentLang = LANGS.find(function (l) { return l.code === current; });

        // Find the insertion point (after nav, inside header .container)
        var header = document.querySelector('.header .container');
        if (!header) return;

        var switcher = document.createElement('div');
        switcher.className = 'lang-switcher';
        switcher.innerHTML =
            '<button class="lang-btn" aria-label="Switch language" aria-expanded="false">' +
            '<i class="fas fa-globe"></i> ' + currentLang.label +
            '</button>' +
            '<div class="lang-dropdown">' +
            LANGS.map(function (l) {
                var cls = l.code === current ? 'lang-option active' : 'lang-option';
                return '<a href="' + buildUrl(l.code) + '" class="' + cls + '" lang="' + l.code + '">' + l.label + '</a>';
            }).join('') +
            '</div>';

        header.appendChild(switcher);

        // Toggle dropdown
        var btn = switcher.querySelector('.lang-btn');
        var dropdown = switcher.querySelector('.lang-dropdown');
        btn.addEventListener('click', function (e) {
            e.stopPropagation();
            var open = dropdown.classList.toggle('open');
            btn.setAttribute('aria-expanded', open);
        });
        document.addEventListener('click', function () {
            dropdown.classList.remove('open');
            btn.setAttribute('aria-expanded', 'false');
        });
    }

    // Save language preference
    var current = detectLang();
    try { localStorage.setItem('alnoman_lang', current); } catch (e) { /* ignore */ }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', render);
    } else {
        render();
    }
})();
