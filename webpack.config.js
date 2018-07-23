const path = require("path");
const webpack = require("webpack");
module.exports = {
  entry: ["./src/js/index.js", "./src/scss/style.scss"],
  output: {
    filename: "bundle.js",
    path: `${path.resolve(__dirname)}/assets`
  },
  module: {
    rules: [{
      test: /\.js$/,
      exclude: /node_modules/,
      use: {
        loader: "babel-loader"
      },
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
    }]
  },
  plugins: [
    new webpack.ProvidePlugin({
      $: "jquery",
      jQuery: "jquery",
      "window.jQuery": "jquery"
    })
  ]
};