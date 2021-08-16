const path = require('path');
const minicss = require('mini-css-extract-plugin'); 

module.exports = {
	mode: 'production',
	entry: {
        app: './resources/js/app.js'
    },
	output: {
		path: path.resolve(__dirname, 'public'),
		filename: '[name]-bundle.js',
	},
    module: {
        rules: [
            {
                test:/\.(s*)css$/,
                use: [
                    minicss.loader,
                    { loader: 'css-loader', options: { url: false } },
                    { loader: 'sass-loader', options: { sourceMap: true } }
                ]
            }
        ]
    },
    plugins: [
        new minicss({
            filename: '[name]-bundle.css',
        }),
    ]
};