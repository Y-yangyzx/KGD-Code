var name = "小明";
var flag=true;
export const c = 18;
function Add(a,b){
    return a+b;
}
export class Person{
    run(){
        console.log("在努力奔跑！");
    }
}
export{
    name,
    flag
}
// const aaa = "北京市";
// export default aaa;

export default function(a){
    console.log(a);
}
