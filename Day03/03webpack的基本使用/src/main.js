//这是js入口文件，可以导入其他文件的数据
const {Add} = require('./mathUtils.js');
console.log(Add(1,3));

//ES6的方式导入
import {name,age,gender } from './info.js';
console.log(name+age+gender);