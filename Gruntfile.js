module.exports = function(grunt) {
    //grunt wrapper function 
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        //grunt task configuration will go here  
        ngAnnotate: {
            options: {
                // singleQuotes: true
            },
            app: {
                files: {
                    // './dist/min-safe/headerController.js': ['./application/partials/header/controller.js'],

                    './dist/min-safe/home_ctrl.js': ['./application/pages/home/controller.js'],
                    './dist/min-safe/about_ctrl.js': ['./application/pages/about/controller.js'],
 
                    './dist/min-safe/app.js': ['./application/app.js']
                }
            }
        },
        concat: {
            js: { //target
                src: ['./dist/min-safe/app.js', './dist/min-safe/*.js'],
                dest: './dist/min/app.js'
            }
        },
        uglify: {
            js: { //target
                src: ['./dist/min/app.js'],
                dest: './dist/min/app.js'
            },
            options: {
                mangle: false,
            },
            
        }
    });

    //load grunt tasks
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-ng-annotate'); 

    //register grunt default task
    grunt.registerTask('default', ['ngAnnotate', 'concat', 'uglify']);

}