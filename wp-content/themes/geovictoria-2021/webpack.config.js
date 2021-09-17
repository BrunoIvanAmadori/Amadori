// Generated using webpack-cli https://github.com/webpack/webpack-cli

const path = require("path");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const ExtractTextPlugin = require('extract-text-webpack-plugin');

const isProduction = process.env.NODE_ENV == "production";

const config = {
    entry: {
        asistencia: { import: "./src/js/pages/page-asistencia.js", filename: './js/pages/page-asistencia.js' },
        asistenciaMobile: { import: "./src/js/pages/page-asistencia-mobile.js", filename: './js/pages/page-asistencia-mobile.js' }
    },
  output: {
    path: path.resolve(__dirname, "dist"),
  },
  devServer: {
    historyApiFallback: true,
    static: {
        directory: path.join(__dirname, '/'),
      },
      proxy: {
        '/': 'http://geovictoria-new.local',
      },
  },
  plugins: [
    new MiniCssExtractPlugin({
        filename: "/css/[name].css"
    }),

    // Add your plugins here
    // Learn more about plugins from https://webpack.js.org/configuration/plugins/
  ],
  module: {
    rules: [
        { 
            test: /\.scss$/, 
            use: [
                MiniCssExtractPlugin.loader,
                "css-loader",
                "sass-loader"
            ]
        },
      {
        test: /\.(eot|svg|ttf|woff|woff2|png|jpg|gif)$/i,
        type: "asset",
      },

      // Add your rules for custom modules here
      // Learn more about loaders from https://webpack.js.org/loaders/
    ],
  },
};

module.exports = () => {
  if (isProduction) {
    config.mode = "production";
  } else {
    config.mode = "development";
  }
  return config;
};
