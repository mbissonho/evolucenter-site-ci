module.exports = function(grunt) {

    grunt.initConfig({
        pkg: grunt.file.readJSON("package.json"),
        copy: {
            dist: {
                src: ['index.php', '.htaccess', 'apache_app.conf', 'Procfile', 'application/**/*', 'system/**/*', 'assets/**/*'],
                dest: 'dist/'
            }
        },
        clean: {
            css: {
                src: ['assets/src/css/*.css', 'assets/src/css/*.map']
            },
            js: {
                src: ['assets/src/js/scripts.main.js', 'assets/src/js/scripts.vendor.js']
            },
            dist: {
                src: 'dist'
            },
            assets_src: {
                src: 'dist/assets/src'
            }
        },
        cssmin: {
            target: {
                files: [{
                    expand: true,
                    cwd: 'assets/src/css',
                    src: ['*.css', '!*.min.css'],
                    dest: 'assets/src/css',
                    ext: '.pre.css'
                }]
            }
        },
        uglify: {
            target: {
                files: {
                    'assets/src/js/scripts.vendor.js': ['assets/src/js/vendor/*.js'],
                    'assets/src/js/scripts.main.js': ['assets/src/js/*.js', '!assets/src/js/*.vendor.js']
                }
            }
        },
        concat: {
            css: {
                src: ['assets/src/css/vendor/**/*.css', 'assets/src/css/*.pre.css'],
                dest: 'assets/css/style.min.css',
            },
            js: {
                src: ['assets/src/js/scripts.vendor.js', 'assets/src/js/scripts.main.js'],
                dest: 'assets/js/scripts.min.js',
            }
        },
        sass: {
            dist: {
                files: [{
                    expand: true,
                    cwd: 'assets/src/css/sass',
                    src: ['*.scss', '!vars.scss'],
                    dest: 'assets/src/css',
                    ext: '.css'
                }]
            }
        },
        imagemin: {
            dynamic: {
                options: {
                    optimizationLevel: 7,
                    svgoPlugins: [{ removeViewBox: false }]
                },
                files: [{
                    expand: true,
                    cwd: 'assets/src/images',
                    src: ['**/*.{png,jpg,gif,svg}'],
                    dest: 'assets/images'
                }]
            }
        },
        watch: {
            scripts: {
                files: ['assets/src/css/sass/*.scss'],
                tasks: ['css'],
                options: {
                    spawn: false,
                },
            },
        }
    });

    grunt.registerTask("css", [
        "sass",
        "cssmin",
        "concat:css",
        "clean:css"
    ]);

    grunt.registerTask("all", [
        "sass",
        "cssmin",
        "uglify",
        "concat",
        "clean"
    ]);

    grunt.registerTask("dist", [
        "clean:dist",
        "all",
        "copy",
        "clean:assets_src"
    ]);

    grunt.loadNpmTasks("grunt-contrib-imagemin");
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks("grunt-contrib-cssmin");
    grunt.loadNpmTasks("grunt-contrib-concat");
    grunt.loadNpmTasks("grunt-contrib-uglify");
    grunt.loadNpmTasks('grunt-contrib-htmlmin');
    grunt.loadNpmTasks("grunt-contrib-clean");
    grunt.loadNpmTasks("grunt-contrib-copy");
    grunt.loadNpmTasks("grunt-usemin");
    grunt.loadNpmTasks('grunt-string-replace');
    grunt.loadNpmTasks('grunt-contrib-sass');

};