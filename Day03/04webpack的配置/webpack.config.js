const path = require('path');

module.exports={
    entry:'./src/main.js',
    output:{
        // 动态绑定这个地址  拿到的是绝对路径
        path:path.resolve(__dirname,'dist'),
        filename:'bundle.js'
    },
    module:{
        rules: [
            {
              test: /\.css$/i,
              use: ["style-loader", "css-loader"],
            },
        ]
    }
}