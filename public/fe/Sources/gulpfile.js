/**
 * @typedef {Object} Yargs
 * @property {Object} argv
 */
/** @type {Yargs} */
const yargs = require('yargs');
const production = yargs.argv.production;

/**
 * Makes gulp tasks with specified config
 */
const tasks = require('./gulp/tasks').makeTasks({
    production: production === undefined ? false : production,
    pack: false, // used only to build the package for themeforest
    theme: 'default', // used only to build the package for themeforest
    distDir: 'dist',
    // twig
    twigData: {},
    twigDataDir: 'src/data',
    twigBasePath: 'src/twig/',
    twigSrc: ['src/twig/pages/**/*'],
    twigWatch: ['src/data/**/*', 'src/twig/**/*'],
    // sass
    sassSrc: ['src/scss/style.scss', 'src/scss/style.ltr.scss', 'src/scss/style.rtl.scss'],
    sassWatch: ['src/scss/**/*'],
    // vendor
    vendorSrc: ['src/vendor/**/*'],
    vendorWatch: ['src/vendor/**/*'],
    vendorModules: {
        'node_modules/@fortawesome/fontawesome-free/css/**/*':      'vendor/fontawesome/css',
        'node_modules/@fortawesome/fontawesome-free/webfonts/**/*': 'vendor/fontawesome/webfonts',
        'node_modules/@fortawesome/fontawesome-free/LICENSE.txt':   'vendor/fontawesome',
        'node_modules/jquery/dist/**/*':                            'vendor/jquery',
        'node_modules/nouislider/dist/**/*':                        'vendor/nouislider',
        'node_modules/owl.carousel/dist/**/*':                      'vendor/owl-carousel',
        'node_modules/photoswipe/dist/**/*':                        'vendor/photoswipe',
        'node_modules/select2/dist/**/*':                           'vendor/select2',
        'node_modules/svg4everybody/dist/**/*':                     'vendor/svg4everybody',
        'node_modules/bootstrap/dist/**/*':                         'vendor/bootstrap',
    },
    // svg
    svgSrc: ['src/svg/**/*.svg'],
    svgWatch: ['src/svg/**/*.svg'],
    svgFileName: 'sprite.svg',
    // images
    imagesSrc: ['src/images/**/*'],
    imagesWatch: ['src/images/**/*'],
    // js
    jsSrc: ['src/js/**/*'],
    jsWatch: ['src/js/**/*'],
    // fonts
    fontsSrc: ['src/fonts/**/*'],
    fontsWatch: ['src/fonts/**/*'],
    // browserSync
    browserSync: {
        server: {
            baseDir: './dist'
        }
    }
});


/**
 * Exports gulp tasks
 */
for (let taskName in tasks) {
    if (tasks.hasOwnProperty(taskName)) {
        exports[taskName] = tasks[taskName];
    }
}
