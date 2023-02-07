/* eslint-env es6 */
/* eslint no-undef: "off" */
'use strict';

// External dependencies
import {parallel, series} from 'gulp';

// Internal dependencies
import generateCert from './gulp/generateCert';
import images from './gulp/images';
import php from './gulp/php';
import html from './gulp/html';
import themeJSON from './gulp/themeJSON';
import {serve} from './gulp/browserSync';
import scripts from './gulp/scripts';
import styles from './gulp/styles';
import editorStyles from './gulp/editorStyles';
import translate from './gulp/translate';
import watch from './gulp/watch';
import prodPrep from './gulp/prodPrep';
import prodStringReplace from './gulp/prodStringReplace';
import prodCompress from './gulp/prodCompress';
import webfonts from './gulp/webfonts';
import blocks from './gulp/blocks';
import {cleanCSS, cleanJS} from './gulp/clean';

/**
 * Map out the sequence of events on first load and make it the default task
 */
export const firstRun = series(
    cleanCSS, cleanJS, parallel(php, html, themeJSON, images, series( styles, editorStyles ), scripts), blocks, webfonts, serve, watch
);

export default firstRun;

/**
 * Build theme for development without BrowserSync or watching
 */
export const buildDev = parallel(
    php, html, themeJSON, images, series( styles, editorStyles ), scripts, blocks, webfonts, translate
);

/**
 * Export theme for distribution.
 */
export const bundleTheme = series(
    prodPrep, parallel(php, html, themeJSON, scripts, series( styles, editorStyles ), images), blocks, webfonts, translate, prodStringReplace, prodCompress
);

/**
 * Export all imported functions as tasks
 */
export { generateCert, images, php, html, themeJSON, scripts, styles, editorStyles, blocks, webfonts, translate, watch, cleanCSS, cleanJS };
