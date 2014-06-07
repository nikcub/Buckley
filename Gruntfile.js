module.exports = function(grunt) {

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    uglify: {
      options: {
        banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */\n'
      },
      build: {
        src: 'src/<%= pkg.name %>.js',
        dest: 'build/<%= pkg.name %>.min.js'
      }
    },

    less: {
      options: {
        strictMath: true,
        // paths: ['']
      },
      src: {
        expand: true,
        cwd: "assets/style",
        src: "style.less",
        ext: ".css"
      },
      // files: {
        // 'dist/css/style.css': 'assets/style/style.less'
      // }
    },

    watch: {
      less: {
        files: 'assets/style/*.less',
        tasks: 'less'
      }
    }

  });

  require('load-grunt-tasks')(grunt, {scope: 'devDependencies'});

  // Default task(s).
  // grunt.registerTask('default', ['uglify']);
  grunt.registerTask('default', ['less']);

};