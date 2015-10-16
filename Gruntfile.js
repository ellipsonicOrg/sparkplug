//Gruntfile

var defaultBowerDir     = 'resources/assets/bower/';
var sparkPlugDir        = 'resources/assets/sparkplug/';
var themeName           = 'AdminLTE';
var completeThemeDir    = defaultBowerDir + themeName;

module.exports = function(grunt) {

    // Please execute sudo npm install --save-dev time-grunt
    // to use time-grunt before un-commenting the below line
    // require('time-grunt')(grunt);

    //Initializing the configuration object
    grunt.initConfig({

        // Task configuration
        copy: {
            main: {
                files: [

                    // CSS
                    {expand: true, flatten:true, src: [''+sparkPlugDir+'/css/*.css'], dest: 'public/backend/css/', filter: 'isFile'},

                    // JS
                    {expand: true, flatten:true, src: [''+sparkPlugDir+'/js/*.js'], dest: 'public/backend/js/', filter: 'isFile'},


                    // Copy the fonts
                    {expand: true, flatten:true, src: [''+completeThemeDir+'/bootstrap/fonts/*'], dest: 'public/backend/fonts/', filter: 'isFile'},

                    // Copy the images
                    {expand: true, flatten:true, src: [''+completeThemeDir+'/dist/img/*'], dest: 'public/backend/img/', filter: 'isFile'},

                    // Copy angular components
                    {expand: true, flatten:true, src: [''+defaultBowerDir+'/angular/*.min.js'], dest: 'public/backend/angular/', filter: 'isFile'},
                    {expand: true, flatten:true, src: [''+defaultBowerDir+'/angular-ui-grid/*.min.*'], dest: 'public/backend/angular/angular-ui-grid/', filter: 'isFile'},
                    {expand: true, flatten:true, src: [''+defaultBowerDir+'/angular-touch/*.min.*'], dest: 'public/backend/angular/angular-touch/', filter: 'isFile'},

                    // Extra plugins
                    {expand: true, flatten:true, src: [''+completeThemeDir+'/plugins/jQuery/*.min.js'], dest: 'public/backend/plugins/jQuery/', filter: 'isFile'},
                    {expand: true, flatten:true, src: [''+completeThemeDir+'/plugins/chartjs/*.min.js'], dest: 'public/backend/plugins/chartjs/', filter: 'isFile'},
                    {expand: true, flatten:true, src: [''+completeThemeDir+'/plugins/iCheck/*.min.js'], dest: 'public/backend/plugins/iCheck/', filter: 'isFile'},
                    {expand: true, flatten:true, src: [''+completeThemeDir+'/plugins/iCheck/square/blue*'], dest: 'public/backend/css/plugins/iCheck/square/', filter: 'isFile'},

                ],
            },
        },
        less: {
            // Development not compressed
            development: {

                options: {
                    // Whether to compress or not
                    compress: false
                },
                files: {

                    // compilation.css  :  source.less
                    "resources/assets/bower/AdminLTE/dist/css/AdminLTE.css": "resources/assets/bower/AdminLTE/build/less/AdminLTE.less",

                    //Non minified skin files
                    "resources/assets/bower/AdminLTE/dist/css/skins/skin-blue.css": "resources/assets/bower/AdminLTE/build/less/skins/skin-blue.less",
                    "resources/assets/bower/AdminLTE/dist/css/skins/skin-black.css": "resources/assets/bower/AdminLTE/build/less/skins/skin-black.less",
                    "resources/assets/bower/AdminLTE/dist/css/skins/skin-yellow.css": "resources/assets/bower/AdminLTE/build/less/skins/skin-yellow.less",
                    "resources/assets/bower/AdminLTE/dist/css/skins/skin-green.css": "resources/assets/bower/AdminLTE/build/less/skins/skin-green.less",
                    "resources/assets/bower/AdminLTE/dist/css/skins/skin-red.css": "resources/assets/bower/AdminLTE/build/less/skins/skin-red.less",
                    "resources/assets/bower/AdminLTE/dist/css/skins/skin-purple.css": "resources/assets/bower/AdminLTE/build/less/skins/skin-purple.less",
                    "resources/assets/bower/AdminLTE/dist/css/skins/skin-blue-light.css": "resources/assets/bower/AdminLTE/build/less/skins/skin-blue-light.less",
                    "resources/assets/bower/AdminLTE/dist/css/skins/skin-black-light.css": "resources/assets/bower/AdminLTE/build/less/skins/skin-black-light.less",
                    "resources/assets/bower/AdminLTE/dist/css/skins/skin-yellow-light.css": "resources/assets/bower/AdminLTE/build/less/skins/skin-yellow-light.less",
                    "resources/assets/bower/AdminLTE/dist/css/skins/skin-green-light.css": "resources/assets/bower/AdminLTE/build/less/skins/skin-green-light.less",
                    "resources/assets/bower/AdminLTE/dist/css/skins/skin-red-light.css": "resources/assets/bower/AdminLTE/build/less/skins/skin-red-light.less",
                    "resources/assets/bower/AdminLTE/dist/css/skins/skin-purple-light.css": "resources/assets/bower/AdminLTE/build/less/skins/skin-purple-light.less",
                    "resources/assets/bower/AdminLTE/dist/css/skins/_all-skins.css": "resources/assets/bower/AdminLTE/build/less/skins/_all-skins.less"
                }
            },
            // Production compresses version
            production: {
                options: {
                    // Whether to compress or not
                    compress: true
                },
                files: {

                    // compilation.css  :  source.less
                    "resources/assets/bower/AdminLTE/dist/css/AdminLTE.min.css": "resources/assets/bower/AdminLTE/build/less/AdminLTE.less",

                    // Skins minified
                    "resources/assets/bower/AdminLTE/dist/css/skins/skin-blue.min.css": "resources/assets/bower/AdminLTE/build/less/skins/skin-blue.less",
                    "resources/assets/bower/AdminLTE/dist/css/skins/skin-black.min.css": "resources/assets/bower/AdminLTE/build/less/skins/skin-black.less",
                    "resources/assets/bower/AdminLTE/dist/css/skins/skin-yellow.min.css": "resources/assets/bower/AdminLTE/build/less/skins/skin-yellow.less",
                    "resources/assets/bower/AdminLTE/dist/css/skins/skin-green.min.css": "resources/assets/bower/AdminLTE/build/less/skins/skin-green.less",
                    "resources/assets/bower/AdminLTE/dist/css/skins/skin-red.min.css": "resources/assets/bower/AdminLTE/build/less/skins/skin-red.less",
                    "resources/assets/bower/AdminLTE/dist/css/skins/skin-purple.min.css": "resources/assets/bower/AdminLTE/build/less/skins/skin-purple.less",
                    "resources/assets/bower/AdminLTE/dist/css/skins/skin-blue-light.min.css": "resources/assets/bower/AdminLTE/build/less/skins/skin-blue-light.less",
                    "resources/assets/bower/AdminLTE/dist/css/skins/skin-black-light.min.css": "resources/assets/bower/AdminLTE/build/less/skins/skin-black-light.less",
                    "resources/assets/bower/AdminLTE/dist/css/skins/skin-yellow-light.min.css": "resources/assets/bower/AdminLTE/build/less/skins/skin-yellow-light.less",
                    "resources/assets/bower/AdminLTE/dist/css/skins/skin-green-light.min.css": "resources/assets/bower/AdminLTE/build/less/skins/skin-green-light.less",
                    "resources/assets/bower/AdminLTE/dist/css/skins/skin-red-light.min.css": "resources/assets/bower/AdminLTE/build/less/skins/skin-red-light.less",
                    "resources/assets/bower/AdminLTE/dist/css/skins/skin-purple-light.min.css": "resources/assets/bower/AdminLTE/build/less/skins/skin-purple-light.less",
                    "resources/assets/bower/AdminLTE/dist/css/skins/_all-skins.min.css": "resources/assets/bower/AdminLTE/build/less/skins/_all-skins.less"
                }
            }
        },
        watch: {
            files: ["resources/assets/bower/AdminLTE/build/less/*.less", "resources/assets/bower/AdminLTE/build/less/skins/*.less", "resources/assets/bower/AdminLTE/dist/js/app.js"],
            tasks: ["less","concat","copy"]
        },
        concat: {
            css: {
                src: [
                    ''+completeThemeDir+'/bootstrap/css/*.min.css',
                    ''+completeThemeDir+'/dist/css/*.min.css',
                    ''+completeThemeDir+'/dist/css/skins/_all-skins.min.css'
                ],
                dest: sparkPlugDir+'css/production.css',
                nonull: true
            },
            js: {
                src: [
                    ''+completeThemeDir+'/dist/js/app.min.js',
                    ''+completeThemeDir+'/bootstrap/js/*.min.js'
                ],
                dest: sparkPlugDir+'js/production.js',
                nonull: true
            }
        }
    });

    // Plugin loading
    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-contrib-concat');

    // Task definition
    grunt.registerTask('default', ["less"]);
};