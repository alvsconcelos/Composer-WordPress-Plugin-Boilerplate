const gulp = require('gulp')
const zip = require('gulp-zip')

function bundle() {
    return gulp.src([
        "**/*",
        "!node_modules/**",
        "!src/**",
        "!bundled/**",
        "!gulpfile.js",
        "!package.json",
        "!yarn.lock",
        "!webpack.config.js",
        "!.gitignore",
    ])
    .pipe(zip('plugin-name.zip'))
    .pipe(gulp.dest("bundled"))
}

exports.bundle = bundle