/**
 * Webpack configuration.
 */

const path = require('path');

/* Require Plugins */
const MiniCssExtractPlugin = require( 'mini-css-extract-plugin' );
const OptimizeCssAssetsPlugin = require( 'optimize-css-assets-webpack-plugin' );
const cssnano = require( 'cssnano' ); 
const { CleanWebpackPlugin } = require( 'clean-webpack-plugin' );
const UglifyJsPlugin = require( 'uglifyjs-webpack-plugin' );
const CopyPlugin = require('copy-webpack-plugin'); 
const DependencyExtractionWebpackPlugin = require( '@wordpress/dependency-extraction-webpack-plugin' );

/* JS Directory path. */
const JS_DIR = path.resolve( __dirname, 'src/js' );
const IMG_DIR = path.resolve( __dirname, 'src/img' );
const BUILD_DIR = path.resolve( __dirname, 'build' );

/** Input Entry Files */
const Entry = {
	main: JS_DIR + '/main.js',
	single: JS_DIR + '/single.js',
	editor: JS_DIR + '/editor.js',
	blocks: JS_DIR + '/blocks.js',
};

/** Output Files */
const Output = {
	path: BUILD_DIR,
	filename: 'js/[name].js'
};

/** Set Loader Rules */
const Rules = [
	{
		test: /\.js$/,
		include: [ JS_DIR ],
		exclude: /node_modules/,
		use: 'babel-loader'
	},
	{
		test: /\.scss$/,
		exclude: /node_modules/,
		use: [
			MiniCssExtractPlugin.loader,
			'css-loader',
			'sass-loader',
		]
	},
	{
		test: /\.(png|jpg|svg|jpeg|gif|ico)$/,
		use: {
			loader: 'file-loader',
			options: {
				name: '[path][name].[ext]',
				publicPath: 'production' === process.env.NODE_ENV ? '../' : '../../'
			}
		}
	},
	{
		test: /\.(ttf|otf|eot|svg|woff(2)?)(\?[a-z0-9]+)?$/,
		exclude: [ IMG_DIR, /node_modules/ ],
		use: {
			loader: 'file-loader',
			options: {
				name: '[path][name].[ext]',
				publicPath: 'production' === process.env.NODE_ENV ? '../' : '../../'
			}
		}
	}
];

/**
 * Plugins
 * Note: argv.mode will return 'development' or 'production'.
 */
const plugins = (argv) => [
	new CleanWebpackPlugin({
		/**
		 * Automatically remove all unused webpack assets on rebuild, 
		 * when set to mode = production. 
		 */
		cleanStaleWebpackAssets: "production" === argv.mode,
	}),

	new MiniCssExtractPlugin({
		filename: "css/[name].css",
	}),

	new CopyPlugin({
		patterns: [{ from: LIB_DIR, to: BUILD_DIR + "/library" }],
	}),

	new DependencyExtractionWebpackPlugin({
		injectPolyfill: true,
		combineAssets: true,
	}),
];

/** Code Minimizer */
const Minimizer = [
	new OptimizeCssAssetsPlugin({
		cssProcessor: cssnano,
	}),

	new UglifyJsPlugin({
		cache: false,
		parallel: true,
		sourceMap: false,
	}),
];

/** Module Main Configuration */
module.exports = ( env, argv ) => ({
	entry: Entry,
	output: Output,

	/**
	 * A full SourceMap is emitted as a separate file ( e.g.  main.js.map )
	 * It adds a reference comment to the bundle so development tools know where to find it.
	 * set this to false if you don't need it
	 */
	devtool: 'source-map',
	module: {rules: Rules,},
	optimization: { minimizer: Minimizer,},
	plugins: plugins( argv ),
	externals: {jquery: 'jQuery'}
});
