/* ---
 Docs: https://www.npmjs.com/package/mati-mix/
 --- */
const mix = require( 'mati-mix' );

mix.mix.babelConfig({
    "presets": [
        "@babel/preset-env",
        "@babel/preset-react"
    ],
});

mix.sass( 'assets-src/map-pickup-point-block/style.scss', 'assets/dist/css/map-pickup-point-block.css' );
mix.js( 'assets-src/index.js', 'assets/dist/js/index.js' );
