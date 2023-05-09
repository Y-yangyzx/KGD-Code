// 传统方式---格式化时间
function formatDate(dtStr){
    const date = new Date()
    const y = date.getFullYear()
    const m = padZero(date.getMonth()+1)
    const d = padZero(date.getDate())
    const h = padZero(date.getHours())
    const min = padZero(date.getMinutes())
    const s = padZero(date.getSeconds())

    return `${y}-${m}-${d} ${h}:${min}:${s}`
}
function padZero(n){
    return n>9?n:'0'+n
}

module.exports={
    formatDate
}