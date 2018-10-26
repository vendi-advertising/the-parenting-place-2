const path = require("path");
const webpack = require("webpack");
const CleanWebpackPlugin = require('clean-webpack-plugin');
module.exports = {
  entry: ["./src/js/index.js", "./src/scss/style.scss"],
  output: {
    filename: "bundle.js",
    path: `${path.resolve(__dirname)}/assets`
  },
  module: {
    rules: [
      {
        test: /\.js$/,
        exclude: [/node_modules/, /vendor/],
        use: {
          loader: "babel-loader"
        },
      },
      {
        test: /\.scss$/,
        use: [{
            loader: "file-loader",
            options: {
              name: "[name].css"
            }
          },
          {
            loader: "extract-loader"
          },
          {
            loader: "css-loader"
          },
          {
            loader: "sass-loader"
          }
        ]
      }, 
       {
         test: /\.(png|jpg|jpeg|gif|svg|woff|woff2|ttf|eot)(\?.*$|$)/,
         loader: 'file-loader',
         options: {
           name: '[name].[ext]',
           useRelativePath: true,
         },
       }
    ]
  },
  plugins: [
    new webpack.ProvidePlugin({
      $: 'jquery',
      jQuery: 'jquery',
      'window.$': 'jquery',
      'window.jQuery': 'jquery',
      Waves: 'node-waves',
    }),
    new CleanWebpackPlugin(['dist']),
  ],
  devtool: 'source-map',
  target: 'web',
};