const brotli = require('brotli');
const fs = require('fs');

const brotliSettings = {
    extension: 'br',
    skipLarger: true,
    mode: 1, // 0 = generic, 1 = text, 2 = font (WOFF2)
    quality: 9, // 0 - 11,
    lgwin: 12, // default
};

fs.readdirSync('public/js/').forEach(file => {
    if (file.endsWith('.js') || file.endsWith('.css') || file.endsWith('.html')) {
        const result = brotli.compress(fs.readFileSync('public/js/' + file), brotliSettings);
        fs.writeFileSync('public/js/' + file + '.br', result);
    }
});
