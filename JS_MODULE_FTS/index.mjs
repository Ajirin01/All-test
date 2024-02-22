// import {hello, name, users} from './module1.mjs'
import hello from './module1.mjs'


// const hello = require('./module1.mjs')
// console.log(hello, name)
// var _users = users
// var arr = _users.filter(user => {
//      user.id == 1 ? user.name = "Name Changed": ""
//      return user
// })

// console.log(arr)

// localStorage.setItem('user', arr)
class ExtendHello extends hello{
    constructor(){
        super()
    }
}

var he = new ExtendHello()

he.sayHello()