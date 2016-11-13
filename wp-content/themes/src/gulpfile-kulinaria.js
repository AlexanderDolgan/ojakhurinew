'use strict';

var gulp = require('gulp'),
    watch = require('gulp-watch'),
    prefixer = require('gulp-autoprefixer'),
    uglify = require('gulp-uglify'),
    spritesmith = require('gulp.spritesmith'),
    sass = require('gulp-sass'),
    sourcemaps = require('gulp-sourcemaps'),
    rigger = require('gulp-rigger'), //сборка html
    cssmin = require('gulp-minify-css'),
    imagemin = require('gulp-imagemin'),
    pngquant = require('imagemin-pngquant'),
    rimraf = require('rimraf'),
    browserSync = require("browser-sync"),
    reload = browserSync.reload;

var path = {
    build: { //to
        html: 'build-kulinaria/',
        js: 'build-kulinaria/js/',
        css: 'build-kulinaria/css/',
        img: 'build-kulinaria/img/',
        svg: 'build-kulinaria/img/',
        fonts: 'build-kulinaria/fonts/'
    },
    src: { //from
        html: 'src-kulinaria/*.html',
        js: 'src-kulinaria/js/main.js',
        style: 'src-kulinaria/style/main.scss',
        img: 'src-kulinaria/img/**/*.*',
        svg: 'src-kulinaria/img/**/*.svg',
        fonts: 'src-kulinaria/fonts/**/*.*'
    },
    watch: {
        html: 'src-kulinaria/**/*.html',
        js: 'src-kulinaria/js/**/*.js',
        style: 'src-kulinaria/style/**/*.scss',
        img: 'src-kulinaria/img/**/*.*',
        svg: 'src-kulinaria/img/**/*.svg',
        fonts: 'src-kulinaria/img/**/*.*',
        sprite: 'src-kulinaria/sprites/*.png'
    },
    clean: './build-kulinaria'
};

var config = {
    server: {
        baseDir: "./build-kulinaria"
    },
    tunnel: true,
    host: 'localhost',
    port: 9000,
    logPrefix: "ojakhuri"
};

//таск для сборки html
gulp.task('html:build', function () {
    gulp.src(path.src.html) //Выберем файлы по нужному пути
        .pipe(rigger()) //Прогоним через rigger
        .pipe(gulp.dest(path.build.html)) //Выплюнем их в папку build
        .pipe(reload({stream: true})); //И перезагрузим наш сервер для обновлений
});

gulp.task('js:build', function () {
    gulp.src(path.src.js)
        .pipe(rigger())
        .pipe(sourcemaps.init())
        .pipe(uglify())
        .pipe(sourcemaps.write('../maps'))
        .pipe(gulp.dest(path.build.js))
        .pipe(reload({stream: true}));
});

gulp.task('style:build', function () {
    gulp.src(path.src.style) //Выберем наш main.scss
        .pipe(sourcemaps.init()) //То же самое что и с js
        .pipe(sass()) //Скомпилируем
        .pipe(prefixer()) //Добавим вендорные префиксы
        .pipe(cssmin()) //Сожмем
        .pipe(sourcemaps.write('../maps'))
        .pipe(gulp.dest(path.build.css)) //И в build
        .pipe(reload({stream: true}));
});

gulp.task('image:build', function () {
    gulp.src(path.src.img) //Выберем наши картинки
        .pipe(imagemin({ //Сожмем их
            progressive: true,
            svgoPlugins: [{removeViewBox: false}],
            use: [pngquant()],
            interlaced: true
        }))
        .pipe(gulp.dest(path.build.img)) //И бросим в build
        .pipe(reload({stream: true}));
});

gulp.task('svg:build', function() {
    gulp.src(path.src.svg)
        .pipe(gulp.dest(path.build.svg))
});

gulp.task('sprite:build', function () {
    var spriteData = gulp.src('src-kulinaria/sprites/*.png').pipe(spritesmith({
        imgName: 'sprite.png',
        imgPath: '../img/sprites/sprite.png',
        cssName: '../../style/partials/_sprite.scss',
        padding: 20
    }));
    return spriteData.pipe(gulp.dest('src-kulinaria/img/sprites'));
});

gulp.task('fonts:build', function() {
    gulp.src(path.src.fonts)
        .pipe(gulp.dest(path.build.fonts))
});


gulp.task('build', [
    'html:build',
    'js:build',
    'style:build',
    'fonts:build',
    'image:build',
    'svg:build',
    'sprite:build'
    ]);

gulp.task('watch', function(){
    watch([path.watch.html], function(event, cb) {
        gulp.start('html:build');
    });
    watch([path.watch.style], function(event, cb) {
        gulp.start('style:build');
    });
    watch([path.watch.js], function(event, cb) {
        gulp.start('js:build');
    });
    watch([path.watch.img], function(event, cb) {
        gulp.start('image:build');
    });
    watch([path.watch.svg], function(event, cb) {
        gulp.start('svg:build');
    });
    watch([path.watch.sprite], function(event, cb) {
        gulp.start('sprite:build');
    });
    watch([path.watch.fonts], function(event, cb) {
        gulp.start('fonts:build');
    });
});

gulp.task('webserver', function () {
    browserSync(config);
});

gulp.task('clean', function (cb) {
    rimraf(path.clean, cb);
})

gulp.task('default', ['build', 'webserver', 'watch']);











