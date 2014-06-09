## Wordpress Buckley Theme

Simple starter Wordpress theme built on the latest version of [Twitter Bootstrap](http://www.github.com/twbs/bootstrap).

Twitter Bootstrap is an increadibly popular CSS framework. There are numerous
examples of using Bootstrap with a bare Wordpress theme as a getting started guide. All of these examples simply drop
in the complete compiled `bootstrap.css` file and then use the semantic grid and overrides to specify a design or theme.

This is how most users utilize Bootstrap, but it is most powerful when used as a CSS framework with a custom output.

This project utilizes Bootstrap as a framework where you start with nothing and then build up your design using the
Bootstrap mixins. It uses grunt to build and watch and a copy of bootstrap as well as some examples to make it
easy for you to build up your own Bootstrap based theme.

See help pages for:

 * [Grunt](http://gruntjs.com/getting-started)
 * [Twitter Bootstrap](http://getbootstrap.com/getting-started/)

### Installation

You will need `npm` and `grunt`. Unpack this project as a theme directory in wordpress:

Install grunt:

```shell
$ npm install -g grunt-cli
```

Unpack theme:

```shell
$ git clone --depth=0 http://www.github.com/nikcub/wordpress-boostrap <theme name>
```

Install required npm modules:

```shell
$ npm install
```

Build CSS and Javascript:

```shell
$ grunt dist
```

### Examples

The core file that is built from is located in `assets/style/style.less`. In the template the element names are
`#page` for the entire page, `#masthead` for the top nav, `#main` for the main content and `#sidebar` for the
sidebar, if you include it.

#### One Column Example

Add the following to style.less and build:

```less
#page {
   .container();
}

#masthead {
  .make-xs-column(12);
}

#main {
  .make-xs-column(12);
}
```

### Two Column Example

Bootstrap is 12 columns wide, so your column widths need to add up to 12

```less
#page {
   .container();
   border: 1px solid red;
}

#masthead {
  .make-xs-column(12);
}

#main {
  .make-xs-column(8);
}

#sidebar {
  .make-xs-column(4);
}
````

#### Other Features

You can include alerts and other features by uncommenting each line that includes those features
in `style.less` and then building.