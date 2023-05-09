// 1.导入http模块
const http = require('http')
// 2.创建web服务器实例
const httpServer = http.createServer()
// 3.为服务器实例绑定request事件，监听客户端的请求
// req是请求对象 包含了与客户端相关的数据和属性

// P16看到 16分38秒了
httpServer.on('request',(req,res)=>{
    console.log('请求后触发');
})
// 4.启动服务器
httpServer.listen(3000,()=>{
    console.log('server running at http://127.0.0.1:3000');
})