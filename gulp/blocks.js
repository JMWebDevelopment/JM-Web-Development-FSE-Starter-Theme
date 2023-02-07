/* eslint-env es6 */
'use strict';

/**
 * External dependencies
 */
import pump from 'pump';
import { src, dest } from 'gulp';
import { pipeline } from 'mississippi';

/**
 * Internal dependencies
 */
import { paths, PHPCSOptions, gulpPlugins, isProd } from './constants';
import { getStringReplacementTasks, getThemeConfig } from './utils';

/**
 * PHP via PHP Code Sniffer.
 * @param {function} done function to call when async processes finish
 * @return {Stream} single stream
 */
export default function blocks( done ) {
	if ( isProd ) {
		// Only do string replacements and save PHP files when building for production
		return pump( [
			src( paths.blocks.src ),
			getStringReplacementTasks(),
			dest( paths.blocks.dest ),
		], done );
	}

	// Only run code sniffing in dev, don't save PHP files
	return pump( [
		src( paths.blocks.src ),
	], done );
}
