// Generated using webpack-cli https://github.com/webpack/webpack-cli

const path = require("path");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const ExtractTextPlugin = require('extract-text-webpack-plugin');
const fileLoader = require('file-loader');

const isProduction = process.env.NODE_ENV == "production";

const config = {
    entry: {
        frontpage: { import: "./src/js/pages/front-page.js", filename: './js/pages/front-page.js' },
        frontpageMobile: { import: "./src/js/pages/front-page-mobile.js", filename: './js/pages/front-page-mobile.js' },
        asistencia: { import: "./src/js/pages/page-asistencia.js", filename: './js/pages/page-asistencia.js' },
        asistenciaMobile: { import: "./src/js/pages/page-asistencia-mobile.js", filename: './js/pages/page-asistencia-mobile.js' },
        acceso: { import: "./src/js/pages/page-acceso.js", filename: './js/pages/page-acceso.js' },
        accesoMobile: { import: "./src/js/pages/page-acceso-mobile.js", filename: './js/pages/page-acceso-mobile.js' },
        comedor: { import: "./src/js/pages/page-comedor.js", filename: './js/pages/page-comedor.js' },
        comedorMobile: { import: "./src/js/pages/page-comedor-mobile.js", filename: './js/pages/page-comedor-mobile.js' },
        businessIntelligence: { import: "./src/js/pages/page-business-intelligence.js", filename: './js/pages/page-business-intelligence.js' },
        businessIntelligenceMobile: { import: "./src/js/pages/page-business-intelligence-mobile.js", filename: './js/pages/page-business-intelligence-mobile.js' },
        shared: { import: "./src/js/pages/_shared.js", filename: './js/pages/_shared.js' },
        sharedStyles: { import: "./src/shared-styles.js", filename: './_sharedStyles.js' },
        
    },
  output: {
    path: path.resolve(__dirname, "dist"),
  },
  plugins: [
    new MiniCssExtractPlugin({
        filename: "/css/[name].css" ,
        
    }),

    // Add your plugins here
    // Learn more about plugins from https://webpack.js.org/configuration/plugins/
  ],
  module: {
    rules: [
      {
        test: /\.css$/i,
        use: [MiniCssExtractPlugin.loader, "css-loader"]
      },
      { 
        test: /\.scss$/, 
        use: 
        [
          {
            loader: MiniCssExtractPlugin.loader,
            options: {
              publicPath: '/dist/',
            },
          },
          "css-loader",
          "sass-loader"
        ]
      },
      {
        test: /\.(woff|woff2)$/,
        use: {
          loader: 'url-loader',
          options: {
            limit: 10000,
            mimetype: "application/font-woff",
            name: "[name].[ext]",
            outputPath: "./fonts/",
            publicPath: "./fonts/",
            esModule: false
          },
        }
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
