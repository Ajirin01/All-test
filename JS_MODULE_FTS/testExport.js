var users = [
    {
        id: 1,
        name: 'Ola'
    },
    {
        id: 2,
        name: 'Ade'
    }
]

var arr = users.filter(user => {
    user.id == 1 ? user.name = "Name Changed": ""
    return user
})

console.log(arr)

localStorage.setItem('users', JSON.stringify(arr))