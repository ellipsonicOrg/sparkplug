//Gruntfile

var defaultBowerDir = 'resources/assets/bower/';
var themeName = 'AdminLTE';
var completeThemeDir = defaultBowerDir + themeName;

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

                    // Includes files within path and flattens results to a single level
                    {expand: true, flatten:true, src: [''+completeThemeDir+'/dist/css/*.min.css'], dest: 'public/css/', filter: 'isFile'},

                    // Includes files within path and flattens results to a single level
                    {expand: true, flatten:true, src: [''+completeThemeDir+'/dist/css/skins/_all-skins.min.css'], dest: 'public/css/skins/', filter: 'isFile'},

                    // Includes files within path and flattens results to a single level
                    {expand: true, flatten:true, src: [''+completeThemeDir+'/dist/img/*'], dest: 'public/img/', filter: 'isFile'},

                    // Includes files within path and flattens results to a single level
                    {expand: true, flatten:true, src: [''+completeThemeDir+'/dist/js/*.min.js'], dest: 'public/js/', filter: 'isFile'},

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
            tasks: ["less","copy"]
        }
    });

    // Plugin loading
    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-copy');

    // Task definition
    grunt.registerTask('default', ["less","copy"]);
};