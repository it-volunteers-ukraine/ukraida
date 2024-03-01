const { src, dest, watch, parallel, series } = require('gulp');
const scss = require('gulp-sass')(require('sass'));
const concat = require('gulp-concat');
const uglify = require('gulp-uglify-es').default;
const autoprefixer = require('gulp-autoprefixer');
const imagemin = require('gulp-imagemin');
const newer = require('gulp-newer');



function images() {
  return src('src/images/**/*.*')
    .pipe(newer('assets/images'))
    .pipe(imagemin())
    .pipe(dest('assets/images'))
}

function styles() {
  return src(
    'src/styles/**/*.scss',
    )
    .pipe(autoprefixer({ overrideBrowserslist: ['last 10 versions'] }))
    .pipe(scss({ outputStyle: 'compressed' }).on('error', scss.logError))
    .pipe(dest('assets/styles'));

  }

function scripts() {
  return src([
    'src/scripts/*.js'
  ])
    .pipe(concat('main.js'))
    .pipe(uglify())
    .pipe(dest('assets/scripts'))
}

function scriptsTemplates() {
  return src('src/scripts/*/*.js')
    .pipe(uglify())
    .pipe(dest('assets/scripts'))
}

function watching() {  
  watch('src/styles/**/*.scss', styles)
  watch('src/images/**/*', images)
  watch('src/scripts/*.js', scripts)
  watch('src/scripts/*/*.js', scriptsTemplates)
  // watch(['src/scripts/template-scripts/*js', 'src/scripts/vendors/*.js'], scriptsTemplates)
}


exports.styles = styles;
exports.images = images;
exports.scripts = scripts;
exports.scriptsTemplates = scriptsTemplates;
exports.watching = watching;
exports.default = parallel(styles, images, scripts, watching, scriptsTemplates);
exports.build = series(styles,  images, scripts, scriptsTemplates);
