let gulp = require('gulp'),
    stylus = require('gulp-stylus'),
    autoPrefixer = require('gulp-autoprefixer'),
    image = require('gulp-image'),
    rename = require('gulp-rename'),
    fileInclude = require('gulp-file-include');

gulp.task('pages', function(){
    return gulp.src('pages/**/*.styl')
        .pipe(stylus())
        .pipe(autoPrefixer(['last 15 versions', '> 1%', 'ie 8', 'ie 7'], { cascade: true }))
        .pipe(rename({dirname: ''}))
        .pipe(gulp.dest('assets/css/pages'))
});
gulp.task('partials', function(){
    return gulp.src('partials/**/*.styl')
        .pipe(stylus())
        .pipe(autoPrefixer(['last 15 versions', '> 1%', 'ie 8', 'ie 7'], { cascade: true }))
        .pipe(rename({dirname: ''}))
        .pipe(gulp.dest('assets/css/partials'))
});


gulp.task('stylus', function(){
    return gulp.src('build/stylus/*.styl')
        .pipe(stylus())
        .pipe(autoPrefixer(['last 15 versions', '> 1%', 'ie 8', 'ie 7'], { cascade: true }))
        .pipe(rename({dirname: ''}))
        .pipe(gulp.dest('assets/css'))
});

gulp.task('script', function(){
    return gulp.src('build/js/**/*.js')
        .pipe(rename({dirname: ''}))
        .pipe(gulp.dest('assets/js'))
});

gulp.task('pages-script', function(){
    return gulp.src('pages/**/*.js')
        .pipe(rename({dirname: ''}))
        .pipe(gulp.dest('assets/js/pages'))
});

gulp.task('partials-script', function(){
    return gulp.src('partials/**/*.js')
        .pipe(rename({dirname: ''}))
        .pipe(gulp.dest('assets/js/partials'))
});


gulp.task('fonts', function() {
    return gulp.src('build/fonts/**/*.+(eot|ttf|woff|woff2|css)')
        .pipe(gulp.dest('assets/fonts'))
})


gulp.task('img', function(){
    return gulp.src('build/img/**/*')
        .pipe(image())
        .pipe(gulp.dest('assets/img'))
});


gulp.task('watch', function(){
    gulp.watch('pages/**/*.styl', gulp.parallel('pages'))
    gulp.watch('partials/**/*.styl', gulp.parallel('partials'))
    gulp.watch('build/stylus/*.styl', gulp.parallel('stylus'))
    gulp.watch('build/js/**/*.js', gulp.parallel('script'))
    gulp.watch('pages/**/*.js', gulp.parallel('pages-script'))
    gulp.watch('partials/**/*.js', gulp.parallel('partials-script'))
    gulp.watch('build/img/**/*', gulp.parallel('img'))
});

gulp.task('dev', gulp.parallel('fonts', 'pages', 'partials', 'stylus', 'script', 'pages-script', 'partials-script', 'img', 'watch'))