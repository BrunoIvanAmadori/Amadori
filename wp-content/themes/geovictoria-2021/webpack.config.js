// Generated using webpack-cli https://github.com/webpack/webpack-cli

const path = require("path");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const ExtractTextPlugin = require("extract-text-webpack-plugin");
const fileLoader = require("file-loader");
const CopyPlugin = require("copy-webpack-plugin");
const ImageMinimizerPlugin = require("imagemin-webpack-plugin").default;
const { extendDefaultPlugins } = require("svgo");
const TerserPlugin = require("terser-webpack-plugin");

const isProduction = process.env.NODE_ENV == "production";

const config = {
  entry: {
    shared: {
      import: "./src/js/pages/_shared.js",
      filename: "./js/pages/_shared.js",
    },
    sharedmobile: {
      import: "./src/js/pages/_shared-mobile.js",
      filename: "./js/pages/_shared-mobile.js",
    },
    sharedStyles: {
      import: "./src/shared-styles.js",
      filename: "./_sharedStyles.js",
    },
    frontpage: {
      import: "./src/js/pages/front-page.js",
      filename: "./js/pages/front-page.js",
    },
    frontpageMobile: {
      import: "./src/js/pages/front-page-mobile.js",
      filename: "./js/pages/front-page-mobile.js",
    },
    asistencia: {
      import: "./src/js/pages/page-asistencia.js",
      filename: "./js/pages/page-asistencia.js",
    },
    asistenciaMobile: {
      import: "./src/js/pages/page-asistencia-mobile.js",
      filename: "./js/pages/page-asistencia-mobile.js",
    },
    acceso: {
      import: "./src/js/pages/page-acceso.js",
      filename: "./js/pages/page-acceso.js",
    },
    accesoMobile: {
      import: "./src/js/pages/page-acceso-mobile.js",
      filename: "./js/pages/page-acceso-mobile.js",
    },
    comedor: {
      import: "./src/js/pages/page-comedor.js",
      filename: "./js/pages/page-comedor.js",
    },
    comedorMobile: {
      import: "./src/js/pages/page-comedor-mobile.js",
      filename: "./js/pages/page-comedor-mobile.js",
    },
    businessIntelligence: {
      import: "./src/js/pages/page-business-intelligence.js",
      filename: "./js/pages/page-business-intelligence.js",
    },
    businessIntelligenceMobile: {
      import: "./src/js/pages/page-business-intelligence-mobile.js",
      filename: "./js/pages/page-business-intelligence-mobile.js",
    },
    quienesSomos: {
      import: "./src/js/pages/page-quienes-somos.js",
      filename: "./js/pages/page-quienes-somos.js",
    },
    quienesSomosMobile: {
      import: "./src/js/pages/page-quienes-somos-mobile.js",
      filename: "./js/pages/page-quienes-somos-mobile.js",
    },
    partners: {
      import: "./src/js/pages/page-partners.js",
      filename: "./js/pages/page-partners.js",
    },
    single: {
      import: "./src/js/pages/page-single.js",
      filename: "./js/pages/page-single.js",
    },
    singleMobile: {
      import: "./src/js/pages/page-single-mobile.js",
      filename: "./js/pages/page-single-mobile.js",
    },
  },

  module: {
    rules: [
      {
        test: /\.css$/i,
        use: [MiniCssExtractPlugin.loader, "css-loader"],
      },
      {
        test: /\.scss$/,
        use: [
          {
            loader: MiniCssExtractPlugin.loader,
            options: {
              publicPath: "/dist/",
            },
          },
          "css-loader",
          "sass-loader",
        ],
      },

      // Add your rules for custom modules here
      // Learn more about loaders from https://webpack.js.org/loaders/
    ],
  },
  output: {
    path: path.resolve(__dirname, "dist"),
  },
  plugins: [
    new MiniCssExtractPlugin({
      filename: "/css/[name].css",
    }),
    new CopyPlugin({
      patterns: [
        { from: "src/fonts/", to: "fonts/" },
        { from: "src/img/", to: "img/" },
        { from: "src/js/scripts/", to: "js/" },
      ],
    }),
    new ImageMinimizerPlugin([
      {
        pngquant: {
          quality: [0.7, 0.7],
        },
      },
    ]),
    // Add your plugins here
    // Learn more about plugins from https://webpack.js.org/configuration/plugins/
  ],
  optimization: {
    minimize: true,
    minimizer: [new TerserPlugin()],
  },
};

module.exports = () => {
  if (true) {
    config.mode = "production";
  } else {
    config.mode = "development";
  }
  return config;
};
