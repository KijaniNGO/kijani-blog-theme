# Kijani Blog Theme

## Description
This repository hosts the wordpress theme for the [Kijani Blog](http://blog.kijani.co).

## Usage

This directory includes no backend, it can be cloned into a wordpress theme folder on the server or locally. It also includes some examples, that require no backend.

#### Fonts:

The fonts are partially provided through Typekit, they should be accessible on localhost as well. If you encounter Problems, contact [Tobias](http://github.com/MrLoh).

#### Grunt:

The styles are written in Sass. Grunt is included for running Autoprefixer (enables cross-browser compatibility), Sass compiling, and CSS/JS minifying. To use it:

1. Run `npm install` once to install dependencies.
2. Use `grunt` to prefix, sass compile and minify, or `grunt watch` to automatically compile on save.

#### Releasing

To release a stable version just create a new release (GitHub Page > Releases > Draft a new Release > Publish release).
You have to fill a version number like `v1.1.2`. To choose the correct version number follow the basic rules: Given a version number MAJOR.MINOR.PATCH, increment the:

    MAJOR version when you make fundamental changes in website design and structure such that users who visited your site earlier will have to reorientate
    MINOR version when you add a functionality/feature which brings changes to the user experience of the website
    PATCH version when you make bug fixes without any new features (except the feature that the site is working again)

(You can find more details [here](http://semver.org/))
Once you created a release it will deployed to blog.kijani.co in seconds, so be careful when releasing to production.

## Todos
- [x] ~~Implement Basic Article Style~~
- [x] ~~Fix Heading and Hero Image~~
- [x] ~~Restructure Folders~~
- [x] ~~Finish Author Section~~
- [x] ~~Finish More Articles Section~~
- [x] ~~Add Scrolling over the Header~~
- [x] ~~Add Share and Subscribe Section~~
- [x] ~~Add Image Captionss~~
- [x] ~~Add Navigation~~
- [x] ~~Create Mobile Styles~~
- [x] ~~Make Crossbrowser Compatible~~
- [x] ~~Add List Styles~~
- [x] ~~Add Navbar on Scroll Up~~
- [x] ~~Add Citation Styles~~
- [x] ~~Add Archive Page~~
- [x] ~~Add Comments~~
- [ ] Add Footer
- [ ] Add Social Media to Archive Page

![Screenshot](screenshot.png)
